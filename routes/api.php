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

Route::group(['middleware' => 'auth:api'], function(){
    Route::resource('ibo', 'IboController');
    Route::resource('activationcode', 'ActivationCodeController');
    Route::resource('activationtype', 'ActivationTypeController');
    Route::resource('bank', 'BankController');
    Route::resource('city', 'CityController');
    Route::resource('commission', 'CommissionController');
    Route::resource('commissionrecord', 'CommissionRecordController');
    Route::resource('country', 'CountryController');
    Route::resource('gender', 'GenderController');
    Route::resource('maritalstatus', 'MaritalStatusController');
    Route::resource('matching', 'MatchingController');
    Route::resource('package', 'PackageController');
    Route::resource('packagetype', 'PackageTypeController');
    Route::resource('pickupcenter', 'PickupCenterController');
    Route::resource('productamount', 'ProductAmountController');
    Route::resource('productcode', 'ProductCodeController');
    Route::resource('product', 'ProductController');
    Route::resource('productpurchase', 'ProductPurchaseController');
    Route::resource('rebate', 'RebateController');
    Route::resource('waiting', 'WaitingCodeController');
});