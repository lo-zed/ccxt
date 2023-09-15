<?php

namespace ccxt\async\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class bitmart extends \ccxt\async\Exchange {
    public function public_get_system_time($params = array()) {
        return $this->request('system/time', 'public', 'GET', $params, null, null, array("cost" => 3));
    }
    public function public_get_system_service($params = array()) {
        return $this->request('system/service', 'public', 'GET', $params, null, null, array("cost" => 3));
    }
    public function public_get_spot_v1_currencies($params = array()) {
        return $this->request('spot/v1/currencies', 'public', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function public_get_spot_v1_symbols($params = array()) {
        return $this->request('spot/v1/symbols', 'public', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function public_get_spot_v1_symbols_details($params = array()) {
        return $this->request('spot/v1/symbols/details', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_spot_quotation_v3_tickers($params = array()) {
        return $this->request('spot/quotation/v3/tickers', 'public', 'GET', $params, null, null, array("cost" => 6));
    }
    public function public_get_spot_quotation_v3_ticker($params = array()) {
        return $this->request('spot/quotation/v3/ticker', 'public', 'GET', $params, null, null, array("cost" => 4));
    }
    public function public_get_spot_quotation_v3_lite_klines($params = array()) {
        return $this->request('spot/quotation/v3/lite-klines', 'public', 'GET', $params, null, null, array("cost" => 4));
    }
    public function public_get_spot_quotation_v3_klines($params = array()) {
        return $this->request('spot/quotation/v3/klines', 'public', 'GET', $params, null, null, array("cost" => 6));
    }
    public function public_get_spot_quotation_v3_books($params = array()) {
        return $this->request('spot/quotation/v3/books', 'public', 'GET', $params, null, null, array("cost" => 4));
    }
    public function public_get_spot_quotation_v3_trades($params = array()) {
        return $this->request('spot/quotation/v3/trades', 'public', 'GET', $params, null, null, array("cost" => 4));
    }
    public function public_get_spot_v1_ticker($params = array()) {
        return $this->request('spot/v1/ticker', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_spot_v2_ticker($params = array()) {
        return $this->request('spot/v2/ticker', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_spot_v1_ticker_detail($params = array()) {
        return $this->request('spot/v1/ticker_detail', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_spot_v1_steps($params = array()) {
        return $this->request('spot/v1/steps', 'public', 'GET', $params, null, null, array("cost" => 30));
    }
    public function public_get_spot_v1_symbols_kline($params = array()) {
        return $this->request('spot/v1/symbols/kline', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_spot_v1_symbols_book($params = array()) {
        return $this->request('spot/v1/symbols/book', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_spot_v1_symbols_trades($params = array()) {
        return $this->request('spot/v1/symbols/trades', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_contract_v1_tickers($params = array()) {
        return $this->request('contract/v1/tickers', 'public', 'GET', $params, null, null, array("cost" => 15));
    }
    public function public_get_contract_public_details($params = array()) {
        return $this->request('contract/public/details', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_contract_public_depth($params = array()) {
        return $this->request('contract/public/depth', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_contract_public_open_interest($params = array()) {
        return $this->request('contract/public/open-interest', 'public', 'GET', $params, null, null, array("cost" => 30));
    }
    public function public_get_contract_public_funding_rate($params = array()) {
        return $this->request('contract/public/funding-rate', 'public', 'GET', $params, null, null, array("cost" => 30));
    }
    public function public_get_contract_public_kline($params = array()) {
        return $this->request('contract/public/kline', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_account_v1_currencies($params = array()) {
        return $this->request('account/v1/currencies', 'public', 'GET', $params, null, null, array("cost" => 30));
    }
    public function private_get_account_sub_account_v1_transfer_list($params = array()) {
        return $this->request('account/sub-account/v1/transfer-list', 'private', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function private_get_account_sub_account_v1_transfer_history($params = array()) {
        return $this->request('account/sub-account/v1/transfer-history', 'private', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function private_get_account_sub_account_main_v1_wallet($params = array()) {
        return $this->request('account/sub-account/main/v1/wallet', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_account_sub_account_main_v1_subaccount_list($params = array()) {
        return $this->request('account/sub-account/main/v1/subaccount-list', 'private', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function private_get_account_v1_wallet($params = array()) {
        return $this->request('account/v1/wallet', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_account_v1_currencies($params = array()) {
        return $this->request('account/v1/currencies', 'private', 'GET', $params, null, null, array("cost" => 30));
    }
    public function private_get_spot_v1_wallet($params = array()) {
        return $this->request('spot/v1/wallet', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_account_v1_deposit_address($params = array()) {
        return $this->request('account/v1/deposit/address', 'private', 'GET', $params, null, null, array("cost" => 30));
    }
    public function private_get_account_v1_withdraw_charge($params = array()) {
        return $this->request('account/v1/withdraw/charge', 'private', 'GET', $params, null, null, array("cost" => 32));
    }
    public function private_get_account_v2_deposit_withdraw_history($params = array()) {
        return $this->request('account/v2/deposit-withdraw/history', 'private', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function private_get_account_v1_deposit_withdraw_detail($params = array()) {
        return $this->request('account/v1/deposit-withdraw/detail', 'private', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function private_get_spot_v1_order_detail($params = array()) {
        return $this->request('spot/v1/order_detail', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_spot_v2_orders($params = array()) {
        return $this->request('spot/v2/orders', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_spot_v1_trades($params = array()) {
        return $this->request('spot/v1/trades', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_spot_v2_trades($params = array()) {
        return $this->request('spot/v2/trades', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_spot_v3_orders($params = array()) {
        return $this->request('spot/v3/orders', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_spot_v2_order_detail($params = array()) {
        return $this->request('spot/v2/order_detail', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_spot_v1_margin_isolated_borrow_record($params = array()) {
        return $this->request('spot/v1/margin/isolated/borrow_record', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_spot_v1_margin_isolated_repay_record($params = array()) {
        return $this->request('spot/v1/margin/isolated/repay_record', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_spot_v1_margin_isolated_pairs($params = array()) {
        return $this->request('spot/v1/margin/isolated/pairs', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_spot_v1_margin_isolated_account($params = array()) {
        return $this->request('spot/v1/margin/isolated/account', 'private', 'GET', $params, null, null, array("cost" => 6));
    }
    public function private_get_spot_v1_trade_fee($params = array()) {
        return $this->request('spot/v1/trade_fee', 'private', 'GET', $params, null, null, array("cost" => 6));
    }
    public function private_get_spot_v1_user_fee($params = array()) {
        return $this->request('spot/v1/user_fee', 'private', 'GET', $params, null, null, array("cost" => 6));
    }
    public function private_get_contract_private_assets_detail($params = array()) {
        return $this->request('contract/private/assets-detail', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_contract_private_order($params = array()) {
        return $this->request('contract/private/order', 'private', 'GET', $params, null, null, array("cost" => 2));
    }
    public function private_get_contract_private_order_history($params = array()) {
        return $this->request('contract/private/order-history', 'private', 'GET', $params, null, null, array("cost" => 10));
    }
    public function private_get_contract_private_position($params = array()) {
        return $this->request('contract/private/position', 'private', 'GET', $params, null, null, array("cost" => 10));
    }
    public function private_post_account_sub_account_main_v1_sub_to_main($params = array()) {
        return $this->request('account/sub-account/main/v1/sub-to-main', 'private', 'POST', $params, null, null, array("cost" => 30));
    }
    public function private_post_account_sub_account_sub_v1_sub_to_main($params = array()) {
        return $this->request('account/sub-account/sub/v1/sub-to-main', 'private', 'POST', $params, null, null, array("cost" => 30));
    }
    public function private_post_account_sub_account_main_v1_main_to_sub($params = array()) {
        return $this->request('account/sub-account/main/v1/main-to-sub', 'private', 'POST', $params, null, null, array("cost" => 30));
    }
    public function private_post_account_sub_account_sub_v1_sub_to_sub($params = array()) {
        return $this->request('account/sub-account/sub/v1/sub-to-sub', 'private', 'POST', $params, null, null, array("cost" => 30));
    }
    public function private_post_account_sub_account_main_v1_sub_to_sub($params = array()) {
        return $this->request('account/sub-account/main/v1/sub-to-sub', 'private', 'POST', $params, null, null, array("cost" => 30));
    }
    public function private_post_account_v1_withdraw_apply($params = array()) {
        return $this->request('account/v1/withdraw/apply', 'private', 'POST', $params, null, null, array("cost" => 7.5));
    }
    public function private_post_spot_v1_submit_order($params = array()) {
        return $this->request('spot/v1/submit_order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_spot_v1_batch_orders($params = array()) {
        return $this->request('spot/v1/batch_orders', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_spot_v2_cancel_order($params = array()) {
        return $this->request('spot/v2/cancel_order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_spot_v1_cancel_orders($params = array()) {
        return $this->request('spot/v1/cancel_orders', 'private', 'POST', $params, null, null, array("cost" => 15));
    }
    public function private_post_spot_v4_query_order($params = array()) {
        return $this->request('spot/v4/query/order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_spot_v4_query_client_order($params = array()) {
        return $this->request('spot/v4/query/client-order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_spot_v4_query_open_orders($params = array()) {
        return $this->request('spot/v4/query/open-orders', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_spot_v4_query_history_orders($params = array()) {
        return $this->request('spot/v4/query/history-orders', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_spot_v4_query_trades($params = array()) {
        return $this->request('spot/v4/query/trades', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_spot_v4_query_order_trades($params = array()) {
        return $this->request('spot/v4/query/order-trades', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_spot_v3_cancel_order($params = array()) {
        return $this->request('spot/v3/cancel_order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_spot_v2_batch_orders($params = array()) {
        return $this->request('spot/v2/batch_orders', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_spot_v2_submit_order($params = array()) {
        return $this->request('spot/v2/submit_order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_spot_v1_margin_submit_order($params = array()) {
        return $this->request('spot/v1/margin/submit_order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_spot_v1_margin_isolated_borrow($params = array()) {
        return $this->request('spot/v1/margin/isolated/borrow', 'private', 'POST', $params, null, null, array("cost" => 6));
    }
    public function private_post_spot_v1_margin_isolated_repay($params = array()) {
        return $this->request('spot/v1/margin/isolated/repay', 'private', 'POST', $params, null, null, array("cost" => 6));
    }
    public function private_post_spot_v1_margin_isolated_transfer($params = array()) {
        return $this->request('spot/v1/margin/isolated/transfer', 'private', 'POST', $params, null, null, array("cost" => 6));
    }
    public function private_post_contract_private_trades($params = array()) {
        return $this->request('contract/private/trades', 'private', 'POST', $params, null, null, array("cost" => 10));
    }
    public function private_post_contract_private_submit_leverage($params = array()) {
        return $this->request('contract/private/submit-leverage', 'private', 'POST', $params, null, null, array("cost" => 2.5));
    }
    public function publicGetSystemTime($params = array()) {
        return $this->request('system/time', 'public', 'GET', $params, null, null, array("cost" => 3));
    }
    public function publicGetSystemService($params = array()) {
        return $this->request('system/service', 'public', 'GET', $params, null, null, array("cost" => 3));
    }
    public function publicGetSpotV1Currencies($params = array()) {
        return $this->request('spot/v1/currencies', 'public', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function publicGetSpotV1Symbols($params = array()) {
        return $this->request('spot/v1/symbols', 'public', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function publicGetSpotV1SymbolsDetails($params = array()) {
        return $this->request('spot/v1/symbols/details', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetSpotQuotationV3Tickers($params = array()) {
        return $this->request('spot/quotation/v3/tickers', 'public', 'GET', $params, null, null, array("cost" => 6));
    }
    public function publicGetSpotQuotationV3Ticker($params = array()) {
        return $this->request('spot/quotation/v3/ticker', 'public', 'GET', $params, null, null, array("cost" => 4));
    }
    public function publicGetSpotQuotationV3LiteKlines($params = array()) {
        return $this->request('spot/quotation/v3/lite-klines', 'public', 'GET', $params, null, null, array("cost" => 4));
    }
    public function publicGetSpotQuotationV3Klines($params = array()) {
        return $this->request('spot/quotation/v3/klines', 'public', 'GET', $params, null, null, array("cost" => 6));
    }
    public function publicGetSpotQuotationV3Books($params = array()) {
        return $this->request('spot/quotation/v3/books', 'public', 'GET', $params, null, null, array("cost" => 4));
    }
    public function publicGetSpotQuotationV3Trades($params = array()) {
        return $this->request('spot/quotation/v3/trades', 'public', 'GET', $params, null, null, array("cost" => 4));
    }
    public function publicGetSpotV1Ticker($params = array()) {
        return $this->request('spot/v1/ticker', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetSpotV2Ticker($params = array()) {
        return $this->request('spot/v2/ticker', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetSpotV1TickerDetail($params = array()) {
        return $this->request('spot/v1/ticker_detail', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetSpotV1Steps($params = array()) {
        return $this->request('spot/v1/steps', 'public', 'GET', $params, null, null, array("cost" => 30));
    }
    public function publicGetSpotV1SymbolsKline($params = array()) {
        return $this->request('spot/v1/symbols/kline', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetSpotV1SymbolsBook($params = array()) {
        return $this->request('spot/v1/symbols/book', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetSpotV1SymbolsTrades($params = array()) {
        return $this->request('spot/v1/symbols/trades', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetContractV1Tickers($params = array()) {
        return $this->request('contract/v1/tickers', 'public', 'GET', $params, null, null, array("cost" => 15));
    }
    public function publicGetContractPublicDetails($params = array()) {
        return $this->request('contract/public/details', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetContractPublicDepth($params = array()) {
        return $this->request('contract/public/depth', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetContractPublicOpenInterest($params = array()) {
        return $this->request('contract/public/open-interest', 'public', 'GET', $params, null, null, array("cost" => 30));
    }
    public function publicGetContractPublicFundingRate($params = array()) {
        return $this->request('contract/public/funding-rate', 'public', 'GET', $params, null, null, array("cost" => 30));
    }
    public function publicGetContractPublicKline($params = array()) {
        return $this->request('contract/public/kline', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetAccountV1Currencies($params = array()) {
        return $this->request('account/v1/currencies', 'public', 'GET', $params, null, null, array("cost" => 30));
    }
    public function privateGetAccountSubAccountV1TransferList($params = array()) {
        return $this->request('account/sub-account/v1/transfer-list', 'private', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function privateGetAccountSubAccountV1TransferHistory($params = array()) {
        return $this->request('account/sub-account/v1/transfer-history', 'private', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function privateGetAccountSubAccountMainV1Wallet($params = array()) {
        return $this->request('account/sub-account/main/v1/wallet', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetAccountSubAccountMainV1SubaccountList($params = array()) {
        return $this->request('account/sub-account/main/v1/subaccount-list', 'private', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function privateGetAccountV1Wallet($params = array()) {
        return $this->request('account/v1/wallet', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetAccountV1Currencies($params = array()) {
        return $this->request('account/v1/currencies', 'private', 'GET', $params, null, null, array("cost" => 30));
    }
    public function privateGetSpotV1Wallet($params = array()) {
        return $this->request('spot/v1/wallet', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetAccountV1DepositAddress($params = array()) {
        return $this->request('account/v1/deposit/address', 'private', 'GET', $params, null, null, array("cost" => 30));
    }
    public function privateGetAccountV1WithdrawCharge($params = array()) {
        return $this->request('account/v1/withdraw/charge', 'private', 'GET', $params, null, null, array("cost" => 32));
    }
    public function privateGetAccountV2DepositWithdrawHistory($params = array()) {
        return $this->request('account/v2/deposit-withdraw/history', 'private', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function privateGetAccountV1DepositWithdrawDetail($params = array()) {
        return $this->request('account/v1/deposit-withdraw/detail', 'private', 'GET', $params, null, null, array("cost" => 7.5));
    }
    public function privateGetSpotV1OrderDetail($params = array()) {
        return $this->request('spot/v1/order_detail', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetSpotV2Orders($params = array()) {
        return $this->request('spot/v2/orders', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetSpotV1Trades($params = array()) {
        return $this->request('spot/v1/trades', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetSpotV2Trades($params = array()) {
        return $this->request('spot/v2/trades', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetSpotV3Orders($params = array()) {
        return $this->request('spot/v3/orders', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetSpotV2OrderDetail($params = array()) {
        return $this->request('spot/v2/order_detail', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetSpotV1MarginIsolatedBorrowRecord($params = array()) {
        return $this->request('spot/v1/margin/isolated/borrow_record', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetSpotV1MarginIsolatedRepayRecord($params = array()) {
        return $this->request('spot/v1/margin/isolated/repay_record', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetSpotV1MarginIsolatedPairs($params = array()) {
        return $this->request('spot/v1/margin/isolated/pairs', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetSpotV1MarginIsolatedAccount($params = array()) {
        return $this->request('spot/v1/margin/isolated/account', 'private', 'GET', $params, null, null, array("cost" => 6));
    }
    public function privateGetSpotV1TradeFee($params = array()) {
        return $this->request('spot/v1/trade_fee', 'private', 'GET', $params, null, null, array("cost" => 6));
    }
    public function privateGetSpotV1UserFee($params = array()) {
        return $this->request('spot/v1/user_fee', 'private', 'GET', $params, null, null, array("cost" => 6));
    }
    public function privateGetContractPrivateAssetsDetail($params = array()) {
        return $this->request('contract/private/assets-detail', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetContractPrivateOrder($params = array()) {
        return $this->request('contract/private/order', 'private', 'GET', $params, null, null, array("cost" => 2));
    }
    public function privateGetContractPrivateOrderHistory($params = array()) {
        return $this->request('contract/private/order-history', 'private', 'GET', $params, null, null, array("cost" => 10));
    }
    public function privateGetContractPrivatePosition($params = array()) {
        return $this->request('contract/private/position', 'private', 'GET', $params, null, null, array("cost" => 10));
    }
    public function privatePostAccountSubAccountMainV1SubToMain($params = array()) {
        return $this->request('account/sub-account/main/v1/sub-to-main', 'private', 'POST', $params, null, null, array("cost" => 30));
    }
    public function privatePostAccountSubAccountSubV1SubToMain($params = array()) {
        return $this->request('account/sub-account/sub/v1/sub-to-main', 'private', 'POST', $params, null, null, array("cost" => 30));
    }
    public function privatePostAccountSubAccountMainV1MainToSub($params = array()) {
        return $this->request('account/sub-account/main/v1/main-to-sub', 'private', 'POST', $params, null, null, array("cost" => 30));
    }
    public function privatePostAccountSubAccountSubV1SubToSub($params = array()) {
        return $this->request('account/sub-account/sub/v1/sub-to-sub', 'private', 'POST', $params, null, null, array("cost" => 30));
    }
    public function privatePostAccountSubAccountMainV1SubToSub($params = array()) {
        return $this->request('account/sub-account/main/v1/sub-to-sub', 'private', 'POST', $params, null, null, array("cost" => 30));
    }
    public function privatePostAccountV1WithdrawApply($params = array()) {
        return $this->request('account/v1/withdraw/apply', 'private', 'POST', $params, null, null, array("cost" => 7.5));
    }
    public function privatePostSpotV1SubmitOrder($params = array()) {
        return $this->request('spot/v1/submit_order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostSpotV1BatchOrders($params = array()) {
        return $this->request('spot/v1/batch_orders', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostSpotV2CancelOrder($params = array()) {
        return $this->request('spot/v2/cancel_order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostSpotV1CancelOrders($params = array()) {
        return $this->request('spot/v1/cancel_orders', 'private', 'POST', $params, null, null, array("cost" => 15));
    }
    public function privatePostSpotV4QueryOrder($params = array()) {
        return $this->request('spot/v4/query/order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostSpotV4QueryClientOrder($params = array()) {
        return $this->request('spot/v4/query/client-order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostSpotV4QueryOpenOrders($params = array()) {
        return $this->request('spot/v4/query/open-orders', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostSpotV4QueryHistoryOrders($params = array()) {
        return $this->request('spot/v4/query/history-orders', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostSpotV4QueryTrades($params = array()) {
        return $this->request('spot/v4/query/trades', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostSpotV4QueryOrderTrades($params = array()) {
        return $this->request('spot/v4/query/order-trades', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostSpotV3CancelOrder($params = array()) {
        return $this->request('spot/v3/cancel_order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostSpotV2BatchOrders($params = array()) {
        return $this->request('spot/v2/batch_orders', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostSpotV2SubmitOrder($params = array()) {
        return $this->request('spot/v2/submit_order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostSpotV1MarginSubmitOrder($params = array()) {
        return $this->request('spot/v1/margin/submit_order', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostSpotV1MarginIsolatedBorrow($params = array()) {
        return $this->request('spot/v1/margin/isolated/borrow', 'private', 'POST', $params, null, null, array("cost" => 6));
    }
    public function privatePostSpotV1MarginIsolatedRepay($params = array()) {
        return $this->request('spot/v1/margin/isolated/repay', 'private', 'POST', $params, null, null, array("cost" => 6));
    }
    public function privatePostSpotV1MarginIsolatedTransfer($params = array()) {
        return $this->request('spot/v1/margin/isolated/transfer', 'private', 'POST', $params, null, null, array("cost" => 6));
    }
    public function privatePostContractPrivateTrades($params = array()) {
        return $this->request('contract/private/trades', 'private', 'POST', $params, null, null, array("cost" => 10));
    }
    public function privatePostContractPrivateSubmitLeverage($params = array()) {
        return $this->request('contract/private/submit-leverage', 'private', 'POST', $params, null, null, array("cost" => 2.5));
    }
}
