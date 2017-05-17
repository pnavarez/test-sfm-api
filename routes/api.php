<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->resource('ibo', 'IboController');
Route::middleware('auth:api')->resource('activationcode', 'ActivationCodeController');
Route::middleware('auth:api')->resource('activationtype', 'ActivationTypeController');
Route::middleware('auth:api')->resource('bank', 'BankController');
Route::middleware('auth:api')->resource('city', 'CityController');
Route::middleware('auth:api')->resource('commission', 'CommissionController');
Route::middleware('auth:api')->resource('commissionrecord', 'CommissionRecordController');
Route::middleware('auth:api')->resource('country', 'CountryController');
Route::middleware('auth:api')->resource('gender', 'GenderController');
Route::middleware('auth:api')->resource('maritalstatus', 'MaritalStatusController');
Route::middleware('auth:api')->resource('matching', 'MatchingController');
Route::middleware('auth:api')->resource('package', 'PackageController');
Route::middleware('auth:api')->resource('packagetype', 'PackageTypeController');
Route::middleware('auth:api')->resource('pickupcenter', 'PickupCenterController');
Route::middleware('auth:api')->resource('productamount', 'ProductAmountController');
Route::middleware('auth:api')->resource('productcode', 'ProductCodeController');
Route::middleware('auth:api')->resource('product', 'ProductController');
Route::middleware('auth:api')->resource('productpurchase', 'ProductPurchaseController');
Route::middleware('auth:api')->resource('rebate', 'RebateController');
Route::middleware('auth:api')->resource('waiting', 'WaitingCodeController');