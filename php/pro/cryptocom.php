<?php

namespace ccxt\pro;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

use Exception; // a common import
use ccxt\AuthenticationError;
use ccxt\NotSupported;
use React\Async;

class cryptocom extends \ccxt\async\cryptocom {

    use ClientTrait;

    public function describe() {
        return $this->deep_extend(parent::describe(), array(
            'has' => array(
                'ws' => true,
                'watchBalance' => true,
                'watchTicker' => true,
                'watchTickers' => false, // for now
                'watchMyTrades' => true,
                'watchTrades' => true,
                'watchOrderBook' => true,
                'watchOrders' => true,
                'watchOHLCV' => true,
            ),
            'urls' => array(
                'api' => array(
                    'ws' => array(
                        'public' => 'wss://stream.crypto.com/v2/market',
                        'private' => 'wss://stream.crypto.com/v2/user',
                    ),
                ),
                'test' => array(
                    'public' => 'wss://uat-stream.3ona.co/v2/market',
                    'private' => 'wss://uat-stream.3ona.co/v2/user',
                ),
            ),
            'options' => array(
            ),
            'streaming' => array(
            ),
        ));
    }

    public function pong($client, $message) {
        return Async\async(function () use ($client, $message) {
            // {
            //     "id" => 1587523073344,
            //     "method" => "public/heartbeat",
            //     "code" => 0
            // }
            Async\await($client->send (array( 'id' => $this->safe_integer($message, 'id'), 'method' => 'public/respond-heartbeat' )));
        }) ();
    }

    public function watch_order_book($symbol, $limit = null, $params = array ()) {
        return Async\async(function () use ($symbol, $limit, $params) {
            /**
             * watches information on open orders with bid (buy) and ask (sell) prices, volumes and other data
             * @see https://exchange-docs.crypto.com/spot/index.html#book-instrument_name-depth
             * @param {string} $symbol unified $symbol of the $market to fetch the order book for
             * @param {int|null} $limit the maximum amount of order book entries to return
             * @param {array} $params extra parameters specific to the cryptocom api endpoint
             * @return {array} A dictionary of {@link https://docs.ccxt.com/en/latest/manual.html#order-book-structure order book structures} indexed by $market symbols
             */
            Async\await($this->load_markets());
            $market = $this->market($symbol);
            if (!$market['spot']) {
                throw new NotSupported($this->id . ' watchOrderBook() supports spot markets only');
            }
            $messageHash = 'book' . '.' . $market['id'];
            $orderbook = Async\await($this->watch_public($messageHash, $params));
            return $orderbook->limit ();
        }) ();
    }

    public function handle_order_book_snapshot($client, $message) {
        // full $snapshot
        //
        // {
        //     "instrument_name":"LTC_USDT",
        //     "subscription":"book.LTC_USDT.150",
        //     "channel":"book",
        //     "depth":150,
        //     "data" => [
        //          {
        //              'bids' => [
        //                  [122.21, 0.74041, 4]
        //              ],
        //              'asks' => [
        //                  [122.29, 0.00002, 1]
        //              ]
        //              't' => 1648123943803,
        //              's':754560122
        //          }
        //      ]
        // }
        //
        $messageHash = $this->safe_string($message, 'subscription');
        $marketId = $this->safe_string($message, 'instrument_name');
        $market = $this->safe_market($marketId);
        $symbol = $market['symbol'];
        $data = $this->safe_value($message, 'data');
        $data = $this->safe_value($data, 0);
        $timestamp = $this->safe_integer($data, 't');
        $snapshot = $this->parse_order_book($data, $symbol, $timestamp);
        $snapshot['nonce'] = $this->safe_integer($data, 's');
        $orderbook = $this->safe_value($this->orderbooks, $symbol);
        if ($orderbook === null) {
            $limit = $this->safe_integer($message, 'depth');
            $orderbook = $this->order_book(array(), $limit);
        }
        $orderbook->reset ($snapshot);
        $this->orderbooks[$symbol] = $orderbook;
        $client->resolve ($orderbook, $messageHash);
    }

    public function watch_trades($symbol, $since = null, $limit = null, $params = array ()) {
        return Async\async(function () use ($symbol, $since, $limit, $params) {
            /**
             * get the list of most recent $trades for a particular $symbol
             * @param {string} $symbol unified $symbol of the $market to fetch $trades for
             * @param {int|null} $since timestamp in ms of the earliest trade to fetch
             * @param {int|null} $limit the maximum amount of $trades to fetch
             * @param {array} $params extra parameters specific to the cryptocom api endpoint
             * @return {[array]} a list of ~@link https://docs.ccxt.com/en/latest/manual.html?#public-$trades trade structures~
             */
            Async\await($this->load_markets());
            $market = $this->market($symbol);
            $symbol = $market['symbol'];
            if (!$market['spot']) {
                throw new NotSupported($this->id . ' watchTrades() supports spot markets only');
            }
            $messageHash = 'trade' . '.' . $market['id'];
            $trades = Async\await($this->watch_public($messageHash, $params));
            if ($this->newUpdates) {
                $limit = $trades->getLimit ($symbol, $limit);
            }
            return $this->filter_by_since_limit($trades, $since, $limit, 'timestamp', true);
        }) ();
    }

    public function handle_trades($client, $message) {
        //
        // {
        //     code => 0,
        //     method => 'subscribe',
        //     result => {
        //       instrument_name => 'BTC_USDT',
        //       subscription => 'trade.BTC_USDT',
        //       $channel => 'trade',
        //       $data => array(
        //             {
        //                 "dataTime":1648122434405,
        //                 "d":"2358394540212355488",
        //                 "s":"SELL",
        //                 "p":42980.85,
        //                 "q":0.002325,
        //                 "t":1648122434404,
        //                 "i":"BTC_USDT"
        //              }
        //              (...)
        //       )
        // }
        //
        $channel = $this->safe_string($message, 'channel');
        $marketId = $this->safe_string($message, 'instrument_name');
        $symbolSpecificMessageHash = $this->safe_string($message, 'subscription');
        $market = $this->safe_market($marketId);
        $symbol = $market['symbol'];
        $stored = $this->safe_value($this->trades, $symbol);
        if ($stored === null) {
            $limit = $this->safe_integer($this->options, 'tradesLimit', 1000);
            $stored = new ArrayCache ($limit);
            $this->trades[$symbol] = $stored;
        }
        $data = $this->safe_value($message, 'data', array());
        $parsedTrades = $this->parse_trades($data, $market);
        for ($j = 0; $j < count($parsedTrades); $j++) {
            $stored->append ($parsedTrades[$j]);
        }
        $client->resolve ($stored, $symbolSpecificMessageHash);
        $client->resolve ($stored, $channel);
    }

    public function watch_my_trades($symbol = null, $since = null, $limit = null, $params = array ()) {
        return Async\async(function () use ($symbol, $since, $limit, $params) {
            /**
             * watches information on multiple $trades made by the user
             * @param {string} $symbol unified $market $symbol of the $market orders were made in
             * @param {int|null} $since the earliest time in ms to fetch orders for
             * @param {int|null} $limit the maximum number of  orde structures to retrieve
             * @param {array} $params extra parameters specific to the cryptocom api endpoint
             * @return {[array]} a list of [order structures]{@link https://docs.ccxt.com/en/latest/manual.html#order-structure
             */
            Async\await($this->load_markets());
            $market = null;
            if ($symbol !== null) {
                $market = $this->market($symbol);
                $symbol = $market['symbol'];
            }
            $defaultType = $this->safe_string($this->options, 'defaultType', 'spot');
            $messageHash = ($defaultType === 'margin') ? 'user.margin.trade' : 'user.trade';
            $messageHash = ($market !== null) ? ($messageHash . '.' . $market['id']) : $messageHash;
            $trades = Async\await($this->watch_private($messageHash, $params));
            if ($this->newUpdates) {
                $limit = $trades->getLimit ($symbol, $limit);
            }
            return $this->filter_by_symbol_since_limit($trades, $symbol, $since, $limit, true);
        }) ();
    }

    public function watch_ticker($symbol, $params = array ()) {
        return Async\async(function () use ($symbol, $params) {
            /**
             * watches a price ticker, a statistical calculation with the information calculated over the past 24 hours for a specific $market
             * @param {string} $symbol unified $symbol of the $market to fetch the ticker for
             * @param {array} $params extra parameters specific to the cryptocom api endpoint
             * @return {array} a {@link https://docs.ccxt.com/en/latest/manual.html#ticker-structure ticker structure}
             */
            Async\await($this->load_markets());
            $market = $this->market($symbol);
            if (!$market['spot']) {
                throw new NotSupported($this->id . ' watchTicker() supports spot markets only');
            }
            $messageHash = 'ticker' . '.' . $market['id'];
            return Async\await($this->watch_public($messageHash, $params));
        }) ();
    }

    public function handle_ticker($client, $message) {
        //
        // {
        //     "info":{
        //        "instrument_name":"BTC_USDT",
        //        "subscription":"ticker.BTC_USDT",
        //        "channel":"ticker",
        //        "data":array(
        //           {
        //              "i":"BTC_USDT",
        //              "b":43063.19,
        //              "k":43063.2,
        //              "a":43063.19,
        //              "t":1648121165658,
        //              "v":43573.912409,
        //              "h":43498.51,
        //              "l":41876.58,
        //              "c":1087.43
        //           }
        //        )
        //     }
        //  }
        //
        $messageHash = $this->safe_string($message, 'subscription');
        $marketId = $this->safe_string($message, 'instrument_name');
        $market = $this->safe_market($marketId);
        $data = $this->safe_value($message, 'data', array());
        for ($i = 0; $i < count($data); $i++) {
            $ticker = $data[$i];
            $parsed = $this->parse_ticker($ticker, $market);
            $symbol = $parsed['symbol'];
            $this->tickers[$symbol] = $parsed;
            $client->resolve ($parsed, $messageHash);
        }
    }

    public function watch_ohlcv($symbol, $timeframe = '1m', $since = null, $limit = null, $params = array ()) {
        return Async\async(function () use ($symbol, $timeframe, $since, $limit, $params) {
            /**
             * watches historical candlestick data containing the open, high, low, and close price, and the volume of a $market
             * @param {string} $symbol unified $symbol of the $market to fetch OHLCV data for
             * @param {string} $timeframe the length of time each candle represents
             * @param {int|null} $since timestamp in ms of the earliest candle to fetch
             * @param {int|null} $limit the maximum amount of candles to fetch
             * @param {array} $params extra parameters specific to the cryptocom api endpoint
             * @return {[[int]]} A list of candles ordered as timestamp, open, high, low, close, volume
             */
            Async\await($this->load_markets());
            $market = $this->market($symbol);
            $symbol = $market['symbol'];
            if (!$market['spot']) {
                throw new NotSupported($this->id . ' watchOHLCV() supports spot markets only');
            }
            $interval = $this->timeframes[$timeframe];
            $messageHash = 'candlestick' . '.' . $interval . '.' . $market['id'];
            $ohlcv = Async\await($this->watch_public($messageHash, $params));
            if ($this->newUpdates) {
                $limit = $ohlcv->getLimit ($symbol, $limit);
            }
            return $this->filter_by_since_limit($ohlcv, $since, $limit, 0, true);
        }) ();
    }

    public function handle_ohlcv($client, $message) {
        //
        //  {
        //       instrument_name => 'BTC_USDT',
        //       subscription => 'candlestick.1m.BTC_USDT',
        //       channel => 'candlestick',
        //       depth => 300,
        //       $interval => '1m',
        //       $data => [ [Object] ]
        //   }
        //
        $messageHash = $this->safe_string($message, 'subscription');
        $marketId = $this->safe_string($message, 'instrument_name');
        $market = $this->safe_market($marketId);
        $symbol = $market['symbol'];
        $interval = $this->safe_string($message, 'interval');
        $timeframe = $this->find_timeframe($interval);
        $this->ohlcvs[$symbol] = $this->safe_value($this->ohlcvs, $symbol, array());
        $stored = $this->safe_value($this->ohlcvs[$symbol], $timeframe);
        if ($stored === null) {
            $limit = $this->safe_integer($this->options, 'OHLCVLimit', 1000);
            $stored = new ArrayCacheByTimestamp ($limit);
            $this->ohlcvs[$symbol][$timeframe] = $stored;
        }
        $data = $this->safe_value($message, 'data');
        for ($i = 0; $i < count($data); $i++) {
            $tick = $data[$i];
            $parsed = $this->parse_ohlcv($tick, $market);
            $stored->append ($parsed);
        }
        $client->resolve ($stored, $messageHash);
    }

    public function watch_orders($symbol = null, $since = null, $limit = null, $params = array ()) {
        return Async\async(function () use ($symbol, $since, $limit, $params) {
            /**
             * watches information on multiple $orders made by the user
             * @param {string|null} $symbol unified $market $symbol of the $market $orders were made in
             * @param {int|null} $since the earliest time in ms to fetch $orders for
             * @param {int|null} $limit the maximum number of  orde structures to retrieve
             * @param {array} $params extra parameters specific to the cryptocom api endpoint
             * @return {[array]} a list of {@link https://docs.ccxt.com/en/latest/manual.html#order-structure order structures}
             */
            Async\await($this->load_markets());
            $market = null;
            if ($symbol !== null) {
                $market = $this->market($symbol);
                $symbol = $market['symbol'];
            }
            $defaultType = $this->safe_string($this->options, 'defaultType', 'spot');
            $messageHash = ($defaultType === 'margin') ? 'user.margin.order' : 'user.order';
            $messageHash = ($market !== null) ? ($messageHash . '.' . $market['id']) : $messageHash;
            $orders = Async\await($this->watch_private($messageHash, $params));
            if ($this->newUpdates) {
                $limit = $orders->getLimit ($symbol, $limit);
            }
            return $this->filter_by_symbol_since_limit($orders, $symbol, $since, $limit, true);
        }) ();
    }

    public function handle_orders($client, $message, $subscription = null) {
        //
        // {
        //     "method" => "subscribe",
        //     "result" => {
        //       "instrument_name" => "ETH_CRO",
        //       "subscription" => "user.order.ETH_CRO",
        //       "channel" => "user.order",
        //       "data" => array(
        //         {
        //           "status" => "ACTIVE",
        //           "side" => "BUY",
        //           "price" => 1,
        //           "quantity" => 1,
        //           "order_id" => "366455245775097673",
        //           "client_oid" => "my_order_0002",
        //           "create_time" => 1588758017375,
        //           "update_time" => 1588758017411,
        //           "type" => "LIMIT",
        //           "instrument_name" => "ETH_CRO",
        //           "cumulative_quantity" => 0,
        //           "cumulative_value" => 0,
        //           "avg_price" => 0,
        //           "fee_currency" => "CRO",
        //           "time_in_force":"GOOD_TILL_CANCEL"
        //         }
        //       ),
        //       "channel" => "user.order.ETH_CRO"
        //     }
        //
        $channel = $this->safe_string($message, 'channel');
        $symbolSpecificMessageHash = $this->safe_string($message, 'subscription');
        $orders = $this->safe_value($message, 'data', array());
        $ordersLength = count($orders);
        if ($ordersLength > 0) {
            if ($this->orders === null) {
                $limit = $this->safe_integer($this->options, 'ordersLimit', 1000);
                $this->orders = new ArrayCacheBySymbolById ($limit);
            }
            $stored = $this->orders;
            $parsed = $this->parse_orders($orders);
            for ($i = 0; $i < count($parsed); $i++) {
                $stored->append ($parsed[$i]);
            }
            $client->resolve ($stored, $symbolSpecificMessageHash);
            // non-symbol specific
            $client->resolve ($stored, $channel);
        }
    }

    public function watch_balance($params = array ()) {
        return Async\async(function () use ($params) {
            /**
             * query for balance and get the amount of funds available for trading or funds locked in orders
             * @param {array} $params extra parameters specific to the cryptocom api endpoint
             * @return {array} a ~@link https://docs.ccxt.com/en/latest/manual.html?#balance-structure balance structure~
             */
            $defaultType = $this->safe_string($this->options, 'defaultType', 'spot');
            $messageHash = ($defaultType === 'margin') ? 'user.margin.balance' : 'user.balance';
            return Async\await($this->watch_private($messageHash, $params));
        }) ();
    }

    public function handle_balance($client, $message) {
        //
        // {
        //     "method" => "subscribe",
        //     "result" => {
        //       "subscription" => "user.balance",
        //       "channel" => "user.balance",
        //       "data" => array(
        //         {
        //           "currency" => "CRO",
        //           "balance" => 99999999947.99626,
        //           "available" => 99999988201.50826,
        //           "order" => 11746.488,
        //           "stake" => 0
        //         }
        //       ),
        //       "channel" => "user.balance"
        //     }
        // }
        //
        $messageHash = $this->safe_string($message, 'subscription');
        $data = $this->safe_value($message, 'data');
        for ($i = 0; $i < count($data); $i++) {
            $balance = $data[$i];
            $currencyId = $this->safe_string($balance, 'currency');
            $code = $this->safe_currency_code($currencyId);
            $account = $this->account();
            $account['free'] = $this->safe_string($balance, 'available');
            $account['total'] = $this->safe_string($balance, 'balance');
            $this->balance[$code] = $account;
            $this->balance = $this->safe_balance($this->balance);
        }
        $client->resolve ($this->balance, $messageHash);
    }

    public function watch_public($messageHash, $params = array ()) {
        return Async\async(function () use ($messageHash, $params) {
            $url = $this->urls['api']['ws']['public'];
            $id = $this->nonce();
            $request = array(
                'method' => 'subscribe',
                'params' => array(
                    'channels' => array( $messageHash ),
                ),
                'nonce' => $id,
            );
            $message = array_merge($request, $params);
            return Async\await($this->watch($url, $messageHash, $message, $messageHash));
        }) ();
    }

    public function watch_private($messageHash, $params = array ()) {
        return Async\async(function () use ($messageHash, $params) {
            Async\await($this->authenticate());
            $url = $this->urls['api']['ws']['private'];
            $id = $this->nonce();
            $request = array(
                'method' => 'subscribe',
                'params' => array(
                    'channels' => array( $messageHash ),
                ),
                'nonce' => $id,
            );
            $message = array_merge($request, $params);
            return Async\await($this->watch($url, $messageHash, $message, $messageHash));
        }) ();
    }

    public function handle_error_message($client, $message) {
        // {
        //     id => 0,
        //     code => 10004,
        //     method => 'subscribe',
        //     $message => 'invalid channel array("channels":["trade.BTCUSD-PERP"])'
        // }
        $errorCode = $this->safe_integer($message, 'code');
        try {
            if ($errorCode) {
                $feedback = $this->id . ' ' . $this->json($message);
                $this->throw_exactly_matched_exception($this->exceptions['exact'], $errorCode, $feedback);
                $messageString = $this->safe_value($message, 'message');
                if ($messageString !== null) {
                    $this->throw_broadly_matched_exception($this->exceptions['broad'], $messageString, $feedback);
                }
            }
            return false;
        } catch (Exception $e) {
            if ($e instanceof AuthenticationError) {
                $messageHash = 'authenticated';
                $client->reject ($e, $messageHash);
                if (is_array($client->subscriptions) && array_key_exists($messageHash, $client->subscriptions)) {
                    unset($client->subscriptions[$messageHash]);
                }
            } else {
                $client->reject ($e);
            }
            return true;
        }
    }

    public function handle_message($client, $message) {
        // ping
        // {
        //     "id" => 1587523073344,
        //     "method" => "public/heartbeat",
        //     "code" => 0
        // }
        // auth
        //  array( id => 1648132625434, $method => 'public/auth', code => 0 )
        // ohlcv
        // {
        //     code => 0,
        //     $method => 'subscribe',
        //     $result => {
        //       instrument_name => 'BTC_USDT',
        //       subscription => 'candlestick.1m.BTC_USDT',
        //       $channel => 'candlestick',
        //       depth => 300,
        //       interval => '1m',
        //       data => [ [Object] ]
        //     }
        //   }
        // ticker
        // {
        //     "info":{
        //        "instrument_name":"BTC_USDT",
        //        "subscription":"ticker.BTC_USDT",
        //        "channel":"ticker",
        //        "data":array( array( ) )
        //
        if ($this->handle_error_message($client, $message)) {
            return;
        }
        $subject = $this->safe_string($message, 'method');
        if ($subject === 'public/heartbeat') {
            $this->handle_ping($client, $message);
            return;
        }
        if ($subject === 'public/auth') {
            $this->handle_authenticate($client, $message);
            return;
        }
        $methods = array(
            'candlestick' => array($this, 'handle_ohlcv'),
            'ticker' => array($this, 'handle_ticker'),
            'trade' => array($this, 'handle_trades'),
            'book' => array($this, 'handle_order_book_snapshot'),
            'user.order' => array($this, 'handle_orders'),
            'user.margin.order' => array($this, 'handle_orders'),
            'user.trade' => array($this, 'handle_trades'),
            'user.margin.trade' => array($this, 'handle_trades'),
            'user.balance' => array($this, 'handle_balance'),
            'user.margin.balance' => array($this, 'handle_balance'),
        );
        $result = $this->safe_value_2($message, 'result', 'info');
        $channel = $this->safe_string($result, 'channel');
        $method = $this->safe_value($methods, $channel);
        if ($method !== null) {
            $method($client, $result);
        }
    }

    public function authenticate($params = array ()) {
        $this->check_required_credentials();
        $url = $this->urls['api']['ws']['private'];
        $client = $this->client($url);
        $messageHash = 'authenticated';
        $future = $this->safe_value($client->subscriptions, $messageHash);
        if ($future === null) {
            $method = 'public/auth';
            $nonce = (string) $this->nonce();
            $auth = $method . $nonce . $this->apiKey . $nonce;
            $signature = $this->hmac($this->encode($auth), $this->encode($this->secret), 'sha256');
            $request = array(
                'id' => $nonce,
                'nonce' => $nonce,
                'method' => $method,
                'api_key' => $this->apiKey,
                'sig' => $signature,
            );
            $message = array_merge($request, $params);
            $future = $this->watch($url, $messageHash, $message);
            $client->subscriptions[$messageHash] = $future;
        }
        return $future;
    }

    public function handle_ping($client, $message) {
        $this->spawn(array($this, 'pong'), $client, $message);
    }

    public function handle_authenticate($client, $message) {
        //
        //  array( id => 1648132625434, method => 'public/auth', code => 0 )
        //
        $client->resolve ($message, 'authenticated');
    }
}
