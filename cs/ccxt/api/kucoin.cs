// -------------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -------------------------------------------------------------------------------

namespace ccxt;

public partial class kucoin : Exchange
{
    public kucoin (object args = null): base(args) {}

    public async Task<object> publicGetCurrencies (object parameters = null)
    {
        return await this.callAsync ("publicGetCurrencies",parameters);
    }

    public async Task<object> publicGetCurrenciesCurrency (object parameters = null)
    {
        return await this.callAsync ("publicGetCurrenciesCurrency",parameters);
    }

    public async Task<object> publicGetSymbols (object parameters = null)
    {
        return await this.callAsync ("publicGetSymbols",parameters);
    }

    public async Task<object> publicGetMarketOrderbookLevel1 (object parameters = null)
    {
        return await this.callAsync ("publicGetMarketOrderbookLevel1",parameters);
    }

    public async Task<object> publicGetMarketAllTickers (object parameters = null)
    {
        return await this.callAsync ("publicGetMarketAllTickers",parameters);
    }

    public async Task<object> publicGetMarketStats (object parameters = null)
    {
        return await this.callAsync ("publicGetMarketStats",parameters);
    }

    public async Task<object> publicGetMarkets (object parameters = null)
    {
        return await this.callAsync ("publicGetMarkets",parameters);
    }

    public async Task<object> publicGetMarketOrderbookLevelLevelLimit (object parameters = null)
    {
        return await this.callAsync ("publicGetMarketOrderbookLevelLevelLimit",parameters);
    }

    public async Task<object> publicGetMarketOrderbookLevel220 (object parameters = null)
    {
        return await this.callAsync ("publicGetMarketOrderbookLevel220",parameters);
    }

    public async Task<object> publicGetMarketOrderbookLevel2100 (object parameters = null)
    {
        return await this.callAsync ("publicGetMarketOrderbookLevel2100",parameters);
    }

    public async Task<object> publicGetMarketHistories (object parameters = null)
    {
        return await this.callAsync ("publicGetMarketHistories",parameters);
    }

    public async Task<object> publicGetMarketCandles (object parameters = null)
    {
        return await this.callAsync ("publicGetMarketCandles",parameters);
    }

    public async Task<object> publicGetPrices (object parameters = null)
    {
        return await this.callAsync ("publicGetPrices",parameters);
    }

    public async Task<object> publicGetTimestamp (object parameters = null)
    {
        return await this.callAsync ("publicGetTimestamp",parameters);
    }

    public async Task<object> publicGetStatus (object parameters = null)
    {
        return await this.callAsync ("publicGetStatus",parameters);
    }

    public async Task<object> publicGetMarkPriceSymbolCurrent (object parameters = null)
    {
        return await this.callAsync ("publicGetMarkPriceSymbolCurrent",parameters);
    }

    public async Task<object> publicGetMarginConfig (object parameters = null)
    {
        return await this.callAsync ("publicGetMarginConfig",parameters);
    }

    public async Task<object> publicPostBulletPublic (object parameters = null)
    {
        return await this.callAsync ("publicPostBulletPublic",parameters);
    }

    public async Task<object> privateGetUserInfo (object parameters = null)
    {
        return await this.callAsync ("privateGetUserInfo",parameters);
    }

    public async Task<object> privateGetAccounts (object parameters = null)
    {
        return await this.callAsync ("privateGetAccounts",parameters);
    }

    public async Task<object> privateGetAccountsAccountId (object parameters = null)
    {
        return await this.callAsync ("privateGetAccountsAccountId",parameters);
    }

    public async Task<object> privateGetAccountsLedgers (object parameters = null)
    {
        return await this.callAsync ("privateGetAccountsLedgers",parameters);
    }

    public async Task<object> privateGetHfAccountsLedgers (object parameters = null)
    {
        return await this.callAsync ("privateGetHfAccountsLedgers",parameters);
    }

    public async Task<object> privateGetHfMarginAccountLedgers (object parameters = null)
    {
        return await this.callAsync ("privateGetHfMarginAccountLedgers",parameters);
    }

    public async Task<object> privateGetTransactionHistory (object parameters = null)
    {
        return await this.callAsync ("privateGetTransactionHistory",parameters);
    }

    public async Task<object> privateGetSubUser (object parameters = null)
    {
        return await this.callAsync ("privateGetSubUser",parameters);
    }

    public async Task<object> privateGetSubAccountsSubUserId (object parameters = null)
    {
        return await this.callAsync ("privateGetSubAccountsSubUserId",parameters);
    }

    public async Task<object> privateGetSubAccounts (object parameters = null)
    {
        return await this.callAsync ("privateGetSubAccounts",parameters);
    }

    public async Task<object> privateGetSubApiKey (object parameters = null)
    {
        return await this.callAsync ("privateGetSubApiKey",parameters);
    }

    public async Task<object> privateGetMarginAccount (object parameters = null)
    {
        return await this.callAsync ("privateGetMarginAccount",parameters);
    }

    public async Task<object> privateGetMarginAccounts (object parameters = null)
    {
        return await this.callAsync ("privateGetMarginAccounts",parameters);
    }

    public async Task<object> privateGetIsolatedAccounts (object parameters = null)
    {
        return await this.callAsync ("privateGetIsolatedAccounts",parameters);
    }

    public async Task<object> privateGetDepositAddresses (object parameters = null)
    {
        return await this.callAsync ("privateGetDepositAddresses",parameters);
    }

    public async Task<object> privateGetDeposits (object parameters = null)
    {
        return await this.callAsync ("privateGetDeposits",parameters);
    }

    public async Task<object> privateGetHistDeposits (object parameters = null)
    {
        return await this.callAsync ("privateGetHistDeposits",parameters);
    }

    public async Task<object> privateGetWithdrawals (object parameters = null)
    {
        return await this.callAsync ("privateGetWithdrawals",parameters);
    }

    public async Task<object> privateGetHistWithdrawals (object parameters = null)
    {
        return await this.callAsync ("privateGetHistWithdrawals",parameters);
    }

    public async Task<object> privateGetWithdrawalsQuotas (object parameters = null)
    {
        return await this.callAsync ("privateGetWithdrawalsQuotas",parameters);
    }

    public async Task<object> privateGetAccountsTransferable (object parameters = null)
    {
        return await this.callAsync ("privateGetAccountsTransferable",parameters);
    }

    public async Task<object> privateGetTransferList (object parameters = null)
    {
        return await this.callAsync ("privateGetTransferList",parameters);
    }

    public async Task<object> privateGetBaseFee (object parameters = null)
    {
        return await this.callAsync ("privateGetBaseFee",parameters);
    }

    public async Task<object> privateGetTradeFees (object parameters = null)
    {
        return await this.callAsync ("privateGetTradeFees",parameters);
    }

    public async Task<object> privateGetMarketOrderbookLevelLevel (object parameters = null)
    {
        return await this.callAsync ("privateGetMarketOrderbookLevelLevel",parameters);
    }

    public async Task<object> privateGetMarketOrderbookLevel2 (object parameters = null)
    {
        return await this.callAsync ("privateGetMarketOrderbookLevel2",parameters);
    }

    public async Task<object> privateGetMarketOrderbookLevel3 (object parameters = null)
    {
        return await this.callAsync ("privateGetMarketOrderbookLevel3",parameters);
    }

    public async Task<object> privateGetHfOrdersActive (object parameters = null)
    {
        return await this.callAsync ("privateGetHfOrdersActive",parameters);
    }

    public async Task<object> privateGetHfOrdersActiveSymbols (object parameters = null)
    {
        return await this.callAsync ("privateGetHfOrdersActiveSymbols",parameters);
    }

    public async Task<object> privateGetHfOrdersDone (object parameters = null)
    {
        return await this.callAsync ("privateGetHfOrdersDone",parameters);
    }

    public async Task<object> privateGetHfOrdersOrderId (object parameters = null)
    {
        return await this.callAsync ("privateGetHfOrdersOrderId",parameters);
    }

    public async Task<object> privateGetHfOrdersClientOrderClientOid (object parameters = null)
    {
        return await this.callAsync ("privateGetHfOrdersClientOrderClientOid",parameters);
    }

    public async Task<object> privateGetHfOrdersDeadCancelAllQuery (object parameters = null)
    {
        return await this.callAsync ("privateGetHfOrdersDeadCancelAllQuery",parameters);
    }

    public async Task<object> privateGetHfFills (object parameters = null)
    {
        return await this.callAsync ("privateGetHfFills",parameters);
    }

    public async Task<object> privateGetOrders (object parameters = null)
    {
        return await this.callAsync ("privateGetOrders",parameters);
    }

    public async Task<object> privateGetLimitOrders (object parameters = null)
    {
        return await this.callAsync ("privateGetLimitOrders",parameters);
    }

    public async Task<object> privateGetOrdersOrderId (object parameters = null)
    {
        return await this.callAsync ("privateGetOrdersOrderId",parameters);
    }

    public async Task<object> privateGetOrderClientOrderClientOid (object parameters = null)
    {
        return await this.callAsync ("privateGetOrderClientOrderClientOid",parameters);
    }

    public async Task<object> privateGetFills (object parameters = null)
    {
        return await this.callAsync ("privateGetFills",parameters);
    }

    public async Task<object> privateGetLimitFills (object parameters = null)
    {
        return await this.callAsync ("privateGetLimitFills",parameters);
    }

    public async Task<object> privateGetStopOrder (object parameters = null)
    {
        return await this.callAsync ("privateGetStopOrder",parameters);
    }

    public async Task<object> privateGetStopOrderOrderId (object parameters = null)
    {
        return await this.callAsync ("privateGetStopOrderOrderId",parameters);
    }

    public async Task<object> privateGetStopOrderQueryOrderByClientOid (object parameters = null)
    {
        return await this.callAsync ("privateGetStopOrderQueryOrderByClientOid",parameters);
    }

    public async Task<object> privateGetOcoOrderOrderId (object parameters = null)
    {
        return await this.callAsync ("privateGetOcoOrderOrderId",parameters);
    }

    public async Task<object> privateGetOcoOrderDetailsOrderId (object parameters = null)
    {
        return await this.callAsync ("privateGetOcoOrderDetailsOrderId",parameters);
    }

    public async Task<object> privateGetOcoClientOrderClientOid (object parameters = null)
    {
        return await this.callAsync ("privateGetOcoClientOrderClientOid",parameters);
    }

    public async Task<object> privateGetOcoOrders (object parameters = null)
    {
        return await this.callAsync ("privateGetOcoOrders",parameters);
    }

    public async Task<object> privateGetHfMarginOrdersActive (object parameters = null)
    {
        return await this.callAsync ("privateGetHfMarginOrdersActive",parameters);
    }

    public async Task<object> privateGetHfMarginOrdersDone (object parameters = null)
    {
        return await this.callAsync ("privateGetHfMarginOrdersDone",parameters);
    }

    public async Task<object> privateGetHfMarginOrdersOrderId (object parameters = null)
    {
        return await this.callAsync ("privateGetHfMarginOrdersOrderId",parameters);
    }

    public async Task<object> privateGetHfMarginOrdersClientOrderClientOid (object parameters = null)
    {
        return await this.callAsync ("privateGetHfMarginOrdersClientOrderClientOid",parameters);
    }

    public async Task<object> privateGetHfMarginFills (object parameters = null)
    {
        return await this.callAsync ("privateGetHfMarginFills",parameters);
    }

    public async Task<object> privateGetEtfInfo (object parameters = null)
    {
        return await this.callAsync ("privateGetEtfInfo",parameters);
    }

    public async Task<object> privateGetMarginCurrencies (object parameters = null)
    {
        return await this.callAsync ("privateGetMarginCurrencies",parameters);
    }

    public async Task<object> privateGetRiskLimitStrategy (object parameters = null)
    {
        return await this.callAsync ("privateGetRiskLimitStrategy",parameters);
    }

    public async Task<object> privateGetIsolatedSymbols (object parameters = null)
    {
        return await this.callAsync ("privateGetIsolatedSymbols",parameters);
    }

    public async Task<object> privateGetIsolatedAccountSymbol (object parameters = null)
    {
        return await this.callAsync ("privateGetIsolatedAccountSymbol",parameters);
    }

    public async Task<object> privateGetMarginBorrow (object parameters = null)
    {
        return await this.callAsync ("privateGetMarginBorrow",parameters);
    }

    public async Task<object> privateGetMarginRepay (object parameters = null)
    {
        return await this.callAsync ("privateGetMarginRepay",parameters);
    }

    public async Task<object> privateGetMarginInterest (object parameters = null)
    {
        return await this.callAsync ("privateGetMarginInterest",parameters);
    }

    public async Task<object> privateGetProjectList (object parameters = null)
    {
        return await this.callAsync ("privateGetProjectList",parameters);
    }

    public async Task<object> privateGetProjectMarketInterestRate (object parameters = null)
    {
        return await this.callAsync ("privateGetProjectMarketInterestRate",parameters);
    }

    public async Task<object> privateGetRedeemOrders (object parameters = null)
    {
        return await this.callAsync ("privateGetRedeemOrders",parameters);
    }

    public async Task<object> privateGetPurchaseOrders (object parameters = null)
    {
        return await this.callAsync ("privateGetPurchaseOrders",parameters);
    }

    public async Task<object> privateGetBrokerApiRebaseDownload (object parameters = null)
    {
        return await this.callAsync ("privateGetBrokerApiRebaseDownload",parameters);
    }

    public async Task<object> privatePostSubUserCreated (object parameters = null)
    {
        return await this.callAsync ("privatePostSubUserCreated",parameters);
    }

    public async Task<object> privatePostSubApiKey (object parameters = null)
    {
        return await this.callAsync ("privatePostSubApiKey",parameters);
    }

    public async Task<object> privatePostSubApiKeyUpdate (object parameters = null)
    {
        return await this.callAsync ("privatePostSubApiKeyUpdate",parameters);
    }

    public async Task<object> privatePostDepositAddresses (object parameters = null)
    {
        return await this.callAsync ("privatePostDepositAddresses",parameters);
    }

    public async Task<object> privatePostWithdrawals (object parameters = null)
    {
        return await this.callAsync ("privatePostWithdrawals",parameters);
    }

    public async Task<object> privatePostAccountsUniversalTransfer (object parameters = null)
    {
        return await this.callAsync ("privatePostAccountsUniversalTransfer",parameters);
    }

    public async Task<object> privatePostAccountsSubTransfer (object parameters = null)
    {
        return await this.callAsync ("privatePostAccountsSubTransfer",parameters);
    }

    public async Task<object> privatePostAccountsInnerTransfer (object parameters = null)
    {
        return await this.callAsync ("privatePostAccountsInnerTransfer",parameters);
    }

    public async Task<object> privatePostTransferOut (object parameters = null)
    {
        return await this.callAsync ("privatePostTransferOut",parameters);
    }

    public async Task<object> privatePostTransferIn (object parameters = null)
    {
        return await this.callAsync ("privatePostTransferIn",parameters);
    }

    public async Task<object> privatePostHfOrders (object parameters = null)
    {
        return await this.callAsync ("privatePostHfOrders",parameters);
    }

    public async Task<object> privatePostHfOrdersTest (object parameters = null)
    {
        return await this.callAsync ("privatePostHfOrdersTest",parameters);
    }

    public async Task<object> privatePostHfOrdersSync (object parameters = null)
    {
        return await this.callAsync ("privatePostHfOrdersSync",parameters);
    }

    public async Task<object> privatePostHfOrdersMulti (object parameters = null)
    {
        return await this.callAsync ("privatePostHfOrdersMulti",parameters);
    }

    public async Task<object> privatePostHfOrdersMultiSync (object parameters = null)
    {
        return await this.callAsync ("privatePostHfOrdersMultiSync",parameters);
    }

    public async Task<object> privatePostHfOrdersAlter (object parameters = null)
    {
        return await this.callAsync ("privatePostHfOrdersAlter",parameters);
    }

    public async Task<object> privatePostHfOrdersDeadCancelAll (object parameters = null)
    {
        return await this.callAsync ("privatePostHfOrdersDeadCancelAll",parameters);
    }

    public async Task<object> privatePostOrders (object parameters = null)
    {
        return await this.callAsync ("privatePostOrders",parameters);
    }

    public async Task<object> privatePostOrdersTest (object parameters = null)
    {
        return await this.callAsync ("privatePostOrdersTest",parameters);
    }

    public async Task<object> privatePostOrdersMulti (object parameters = null)
    {
        return await this.callAsync ("privatePostOrdersMulti",parameters);
    }

    public async Task<object> privatePostStopOrder (object parameters = null)
    {
        return await this.callAsync ("privatePostStopOrder",parameters);
    }

    public async Task<object> privatePostOcoOrder (object parameters = null)
    {
        return await this.callAsync ("privatePostOcoOrder",parameters);
    }

    public async Task<object> privatePostHfMarginOrder (object parameters = null)
    {
        return await this.callAsync ("privatePostHfMarginOrder",parameters);
    }

    public async Task<object> privatePostHfMarginOrderTest (object parameters = null)
    {
        return await this.callAsync ("privatePostHfMarginOrderTest",parameters);
    }

    public async Task<object> privatePostMarginOrder (object parameters = null)
    {
        return await this.callAsync ("privatePostMarginOrder",parameters);
    }

    public async Task<object> privatePostMarginOrderTest (object parameters = null)
    {
        return await this.callAsync ("privatePostMarginOrderTest",parameters);
    }

    public async Task<object> privatePostMarginBorrow (object parameters = null)
    {
        return await this.callAsync ("privatePostMarginBorrow",parameters);
    }

    public async Task<object> privatePostMarginRepay (object parameters = null)
    {
        return await this.callAsync ("privatePostMarginRepay",parameters);
    }

    public async Task<object> privatePostPurchase (object parameters = null)
    {
        return await this.callAsync ("privatePostPurchase",parameters);
    }

    public async Task<object> privatePostRedeem (object parameters = null)
    {
        return await this.callAsync ("privatePostRedeem",parameters);
    }

    public async Task<object> privatePostLendPurchaseUpdate (object parameters = null)
    {
        return await this.callAsync ("privatePostLendPurchaseUpdate",parameters);
    }

    public async Task<object> privatePostBulletPrivate (object parameters = null)
    {
        return await this.callAsync ("privatePostBulletPrivate",parameters);
    }

    public async Task<object> privateDeleteSubApiKey (object parameters = null)
    {
        return await this.callAsync ("privateDeleteSubApiKey",parameters);
    }

    public async Task<object> privateDeleteWithdrawalsWithdrawalId (object parameters = null)
    {
        return await this.callAsync ("privateDeleteWithdrawalsWithdrawalId",parameters);
    }

    public async Task<object> privateDeleteHfOrdersOrderId (object parameters = null)
    {
        return await this.callAsync ("privateDeleteHfOrdersOrderId",parameters);
    }

    public async Task<object> privateDeleteHfOrdersSyncOrderId (object parameters = null)
    {
        return await this.callAsync ("privateDeleteHfOrdersSyncOrderId",parameters);
    }

    public async Task<object> privateDeleteHfOrdersClientOrderClientOid (object parameters = null)
    {
        return await this.callAsync ("privateDeleteHfOrdersClientOrderClientOid",parameters);
    }

    public async Task<object> privateDeleteHfOrdersSyncClientOrderClientOid (object parameters = null)
    {
        return await this.callAsync ("privateDeleteHfOrdersSyncClientOrderClientOid",parameters);
    }

    public async Task<object> privateDeleteHfOrdersCancelOrderId (object parameters = null)
    {
        return await this.callAsync ("privateDeleteHfOrdersCancelOrderId",parameters);
    }

    public async Task<object> privateDeleteHfOrders (object parameters = null)
    {
        return await this.callAsync ("privateDeleteHfOrders",parameters);
    }

    public async Task<object> privateDeleteHfOrdersCancelAll (object parameters = null)
    {
        return await this.callAsync ("privateDeleteHfOrdersCancelAll",parameters);
    }

    public async Task<object> privateDeleteOrdersOrderId (object parameters = null)
    {
        return await this.callAsync ("privateDeleteOrdersOrderId",parameters);
    }

    public async Task<object> privateDeleteOrderClientOrderClientOid (object parameters = null)
    {
        return await this.callAsync ("privateDeleteOrderClientOrderClientOid",parameters);
    }

    public async Task<object> privateDeleteOrders (object parameters = null)
    {
        return await this.callAsync ("privateDeleteOrders",parameters);
    }

    public async Task<object> privateDeleteStopOrderOrderId (object parameters = null)
    {
        return await this.callAsync ("privateDeleteStopOrderOrderId",parameters);
    }

    public async Task<object> privateDeleteStopOrderCancelOrderByClientOid (object parameters = null)
    {
        return await this.callAsync ("privateDeleteStopOrderCancelOrderByClientOid",parameters);
    }

    public async Task<object> privateDeleteStopOrderCancel (object parameters = null)
    {
        return await this.callAsync ("privateDeleteStopOrderCancel",parameters);
    }

    public async Task<object> privateDeleteOcoOrderOrderId (object parameters = null)
    {
        return await this.callAsync ("privateDeleteOcoOrderOrderId",parameters);
    }

    public async Task<object> privateDeleteOcoClientOrderClientOid (object parameters = null)
    {
        return await this.callAsync ("privateDeleteOcoClientOrderClientOid",parameters);
    }

    public async Task<object> privateDeleteOcoOrders (object parameters = null)
    {
        return await this.callAsync ("privateDeleteOcoOrders",parameters);
    }

    public async Task<object> privateDeleteHfMarginOrdersOrderId (object parameters = null)
    {
        return await this.callAsync ("privateDeleteHfMarginOrdersOrderId",parameters);
    }

    public async Task<object> privateDeleteHfMarginOrdersClientOrderClientOid (object parameters = null)
    {
        return await this.callAsync ("privateDeleteHfMarginOrdersClientOrderClientOid",parameters);
    }

    public async Task<object> privateDeleteHfMarginOrders (object parameters = null)
    {
        return await this.callAsync ("privateDeleteHfMarginOrders",parameters);
    }

    public async Task<object> futuresPublicGetContractsActive (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetContractsActive",parameters);
    }

    public async Task<object> futuresPublicGetContractsSymbol (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetContractsSymbol",parameters);
    }

    public async Task<object> futuresPublicGetTicker (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetTicker",parameters);
    }

    public async Task<object> futuresPublicGetLevel2Snapshot (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetLevel2Snapshot",parameters);
    }

    public async Task<object> futuresPublicGetLevel2Depth20 (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetLevel2Depth20",parameters);
    }

    public async Task<object> futuresPublicGetLevel2Depth100 (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetLevel2Depth100",parameters);
    }

    public async Task<object> futuresPublicGetTradeHistory (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetTradeHistory",parameters);
    }

    public async Task<object> futuresPublicGetKlineQuery (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetKlineQuery",parameters);
    }

    public async Task<object> futuresPublicGetInterestQuery (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetInterestQuery",parameters);
    }

    public async Task<object> futuresPublicGetIndexQuery (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetIndexQuery",parameters);
    }

    public async Task<object> futuresPublicGetMarkPriceSymbolCurrent (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetMarkPriceSymbolCurrent",parameters);
    }

    public async Task<object> futuresPublicGetPremiumQuery (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetPremiumQuery",parameters);
    }

    public async Task<object> futuresPublicGetTradeStatistics (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetTradeStatistics",parameters);
    }

    public async Task<object> futuresPublicGetFundingRateSymbolCurrent (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetFundingRateSymbolCurrent",parameters);
    }

    public async Task<object> futuresPublicGetContractFundingRates (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetContractFundingRates",parameters);
    }

    public async Task<object> futuresPublicGetTimestamp (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetTimestamp",parameters);
    }

    public async Task<object> futuresPublicGetStatus (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetStatus",parameters);
    }

    public async Task<object> futuresPublicGetLevel2MessageQuery (object parameters = null)
    {
        return await this.callAsync ("futuresPublicGetLevel2MessageQuery",parameters);
    }

    public async Task<object> futuresPublicPostBulletPublic (object parameters = null)
    {
        return await this.callAsync ("futuresPublicPostBulletPublic",parameters);
    }

    public async Task<object> futuresPrivateGetTransactionHistory (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetTransactionHistory",parameters);
    }

    public async Task<object> futuresPrivateGetAccountOverview (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetAccountOverview",parameters);
    }

    public async Task<object> futuresPrivateGetAccountOverviewAll (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetAccountOverviewAll",parameters);
    }

    public async Task<object> futuresPrivateGetTransferList (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetTransferList",parameters);
    }

    public async Task<object> futuresPrivateGetOrders (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetOrders",parameters);
    }

    public async Task<object> futuresPrivateGetStopOrders (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetStopOrders",parameters);
    }

    public async Task<object> futuresPrivateGetRecentDoneOrders (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetRecentDoneOrders",parameters);
    }

    public async Task<object> futuresPrivateGetOrdersOrderId (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetOrdersOrderId",parameters);
    }

    public async Task<object> futuresPrivateGetOrdersByClientOid (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetOrdersByClientOid",parameters);
    }

    public async Task<object> futuresPrivateGetFills (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetFills",parameters);
    }

    public async Task<object> futuresPrivateGetRecentFills (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetRecentFills",parameters);
    }

    public async Task<object> futuresPrivateGetOpenOrderStatistics (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetOpenOrderStatistics",parameters);
    }

    public async Task<object> futuresPrivateGetPosition (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetPosition",parameters);
    }

    public async Task<object> futuresPrivateGetPositions (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetPositions",parameters);
    }

    public async Task<object> futuresPrivateGetMarginMaxWithdrawMargin (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetMarginMaxWithdrawMargin",parameters);
    }

    public async Task<object> futuresPrivateGetContractsRiskLimitSymbol (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetContractsRiskLimitSymbol",parameters);
    }

    public async Task<object> futuresPrivateGetFundingHistory (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateGetFundingHistory",parameters);
    }

    public async Task<object> futuresPrivatePostTransferOut (object parameters = null)
    {
        return await this.callAsync ("futuresPrivatePostTransferOut",parameters);
    }

    public async Task<object> futuresPrivatePostTransferIn (object parameters = null)
    {
        return await this.callAsync ("futuresPrivatePostTransferIn",parameters);
    }

    public async Task<object> futuresPrivatePostOrders (object parameters = null)
    {
        return await this.callAsync ("futuresPrivatePostOrders",parameters);
    }

    public async Task<object> futuresPrivatePostOrdersTest (object parameters = null)
    {
        return await this.callAsync ("futuresPrivatePostOrdersTest",parameters);
    }

    public async Task<object> futuresPrivatePostOrdersMulti (object parameters = null)
    {
        return await this.callAsync ("futuresPrivatePostOrdersMulti",parameters);
    }

    public async Task<object> futuresPrivatePostPositionMarginAutoDepositStatus (object parameters = null)
    {
        return await this.callAsync ("futuresPrivatePostPositionMarginAutoDepositStatus",parameters);
    }

    public async Task<object> futuresPrivatePostMarginWithdrawMargin (object parameters = null)
    {
        return await this.callAsync ("futuresPrivatePostMarginWithdrawMargin",parameters);
    }

    public async Task<object> futuresPrivatePostPositionMarginDepositMargin (object parameters = null)
    {
        return await this.callAsync ("futuresPrivatePostPositionMarginDepositMargin",parameters);
    }

    public async Task<object> futuresPrivatePostPositionRiskLimitLevelChange (object parameters = null)
    {
        return await this.callAsync ("futuresPrivatePostPositionRiskLimitLevelChange",parameters);
    }

    public async Task<object> futuresPrivatePostBulletPrivate (object parameters = null)
    {
        return await this.callAsync ("futuresPrivatePostBulletPrivate",parameters);
    }

    public async Task<object> futuresPrivateDeleteOrdersOrderId (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateDeleteOrdersOrderId",parameters);
    }

    public async Task<object> futuresPrivateDeleteOrdersClientOrderClientOid (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateDeleteOrdersClientOrderClientOid",parameters);
    }

    public async Task<object> futuresPrivateDeleteOrders (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateDeleteOrders",parameters);
    }

    public async Task<object> futuresPrivateDeleteStopOrders (object parameters = null)
    {
        return await this.callAsync ("futuresPrivateDeleteStopOrders",parameters);
    }

    public async Task<object> webExchangeGetCurrencyCurrencyChainInfo (object parameters = null)
    {
        return await this.callAsync ("webExchangeGetCurrencyCurrencyChainInfo",parameters);
    }

    public async Task<object> brokerGetBrokerNdInfo (object parameters = null)
    {
        return await this.callAsync ("brokerGetBrokerNdInfo",parameters);
    }

    public async Task<object> brokerGetBrokerNdAccount (object parameters = null)
    {
        return await this.callAsync ("brokerGetBrokerNdAccount",parameters);
    }

    public async Task<object> brokerGetBrokerNdAccountApikey (object parameters = null)
    {
        return await this.callAsync ("brokerGetBrokerNdAccountApikey",parameters);
    }

    public async Task<object> brokerGetBrokerNdRebaseDownload (object parameters = null)
    {
        return await this.callAsync ("brokerGetBrokerNdRebaseDownload",parameters);
    }

    public async Task<object> brokerGetBrokerNdTransferDetail (object parameters = null)
    {
        return await this.callAsync ("brokerGetBrokerNdTransferDetail",parameters);
    }

    public async Task<object> brokerGetBrokerNdDepositDetail (object parameters = null)
    {
        return await this.callAsync ("brokerGetBrokerNdDepositDetail",parameters);
    }

    public async Task<object> brokerGetBrokerNdWithdrawDetail (object parameters = null)
    {
        return await this.callAsync ("brokerGetBrokerNdWithdrawDetail",parameters);
    }

    public async Task<object> brokerPostBrokerNdTransfer (object parameters = null)
    {
        return await this.callAsync ("brokerPostBrokerNdTransfer",parameters);
    }

    public async Task<object> brokerPostBrokerNdAccount (object parameters = null)
    {
        return await this.callAsync ("brokerPostBrokerNdAccount",parameters);
    }

    public async Task<object> brokerPostBrokerNdAccountApikey (object parameters = null)
    {
        return await this.callAsync ("brokerPostBrokerNdAccountApikey",parameters);
    }

    public async Task<object> brokerPostBrokerNdAccountUpdateApikey (object parameters = null)
    {
        return await this.callAsync ("brokerPostBrokerNdAccountUpdateApikey",parameters);
    }

    public async Task<object> brokerDeleteBrokerNdAccountApikey (object parameters = null)
    {
        return await this.callAsync ("brokerDeleteBrokerNdAccountApikey",parameters);
    }

    public async Task<object> earnGetOtcLoanLoan (object parameters = null)
    {
        return await this.callAsync ("earnGetOtcLoanLoan",parameters);
    }

    public async Task<object> earnGetOtcLoanAccounts (object parameters = null)
    {
        return await this.callAsync ("earnGetOtcLoanAccounts",parameters);
    }

    public async Task<object> earnGetEarnRedeemPreview (object parameters = null)
    {
        return await this.callAsync ("earnGetEarnRedeemPreview",parameters);
    }

    public async Task<object> earnGetEarnSavingProducts (object parameters = null)
    {
        return await this.callAsync ("earnGetEarnSavingProducts",parameters);
    }

    public async Task<object> earnGetEarnHoldAssets (object parameters = null)
    {
        return await this.callAsync ("earnGetEarnHoldAssets",parameters);
    }

    public async Task<object> earnGetEarnPromotionProducts (object parameters = null)
    {
        return await this.callAsync ("earnGetEarnPromotionProducts",parameters);
    }

    public async Task<object> earnGetEarnKcsStakingProducts (object parameters = null)
    {
        return await this.callAsync ("earnGetEarnKcsStakingProducts",parameters);
    }

    public async Task<object> earnGetEarnStakingProducts (object parameters = null)
    {
        return await this.callAsync ("earnGetEarnStakingProducts",parameters);
    }

    public async Task<object> earnGetEarnEthStakingProducts (object parameters = null)
    {
        return await this.callAsync ("earnGetEarnEthStakingProducts",parameters);
    }

    public async Task<object> earnPostEarnOrders (object parameters = null)
    {
        return await this.callAsync ("earnPostEarnOrders",parameters);
    }

    public async Task<object> earnDeleteEarnOrders (object parameters = null)
    {
        return await this.callAsync ("earnDeleteEarnOrders",parameters);
    }

}