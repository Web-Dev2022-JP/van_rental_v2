<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['middleware' => 'guest'], function () {
    // client
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    // driver
    Route::get('/register-driver', [AuthController::class, 'registerDriver'])->name('register.driver');
    Route::post('/register-driver', [AuthController::class, 'registerDriverPost'])->name('register.driver');

    // verify email
    Route::post('/verify-email',[AuthController::class, 'verifyEmail'])->name('register-email.driver');
    Route::post('/verify-email-post',[AuthController::class, 'verifyEmailPost'])->name('verify.post');

    // email verified
    Route::get('/email-verified/{email}',[AuthController::class, 'emailVerified'])->name("email.verified");

    // temp uploads
    Route::post('/tmp-upload',[AuthController::class, 'tmpUpload']);
    Route::delete('/tmp-delete',[AuthController::class, 'tmpDelete']);

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/home', [HomeController::class, 'index']);
    Route::get('/client-dashboard', [HomeController::class, 'client'])->name('client-dash');
    Route::get('/about',[HomeController::class, 'about'])->name('about');
    Route::get('/inquiry',[HomeController::class, 'inquiry'])->name('inquiry');



    Route::get('/driver-dashboard', [HomeController::class, 'driver'])->name('driver.home');
    Route::get('/admin-dashboard', [HomeController::class, 'admin']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    // register vehicle
    Route::get('/register-vehicle',[HomeController::class,'registerVehicle'])->name("register.vehicle");
    Route::post('/register-vehicle',[HomeController::class,'registerVehiclePost'])->name("register.vehicle");

    // edit vehicle registration
    Route::post('/register-edit',[RequestController::class, 'editRegistration'])->name('register.edit');

    // temp uploads
    Route::post('/tmp-UploadLicensed',[HomeController::class, 'tmpUploadLicensed']);
    Route::delete('/tmp-deleteLicensed',[HomeController::class, 'tmpDeleteLicensed']);

    Route::post('/tmp-UploadVehicleProfile',[RequestController::class, 'tmpUploadVehicleProfile']);
    Route::delete('/tmp-deleteVehicleProfile',[RequestController::class, 'tmpDeleteVehicleProfile']);

    // admin request
    Route::get('/accounts/approval',[RequestController::class,'fetchAccountApproval']);
    Route::get('/accounts/approval/{id}', [RequestController::class,'approve'])->name('accounts.approval');
    Route::get('/accounts/view/{id}', [RequestController::class,'getById'])->name('accounts.view');

    // about driver
    Route::get('/about-driver', [HomeController::class, 'aboutDriver'])->name('about.driver');

    // message driver
    Route::get('/client-dashboard/message', [HomeController::class, 'messageDriver'])->name('message.driver');

    // complain driver
    Route::get('/complain', [HomeController::class, 'complainDriver'])->name('complain.driver');

    // customer info page
    Route::get('/customers-info', [HomeController::class, 'customersInfo'])->name('customers.info');

    // drivers account
    Route::get('/drivers-account', [HomeController::class, 'driversAccount'])->name('drivers.account');

    // message customer
    Route::get('/message-customer', [HomeController::class, 'messageCustomer'])->name('message.customer');

    // add services
    Route::get('/add-services', [HomeController::class, 'addServices'])->name('add.services');

    // view more info about specific customer
    Route::get('/customer-info', [HomeController::class, 'customerInfo'])->name('customer.info');

});