<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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
    return view('web_pages.index');
});

Route::get('/about', function () {
    return view('web_pages.about');
});

Route::get('/contact', function () {
    return view('web_pages.contact');
});

// Route::get('/service', function () {
//     return view('web_pages.service');
// });
Route::get('/service', [IndexController::class, 'service_data']);
Route::post('/email_request', [IndexController::class, 'email_request_password']);

Route::get('/faq', function () {
    return view('web_pages.faq');
});
Route::get('/pass_reset', function () {
    return view('web_pages.pass_reset');
});

Route::get('/project-details/{id}', [IndexController::class, 'project_id']);
Route::get('/project-grid', [IndexController::class, 'project']);
Route::post('/contactfrom', [IndexController::class, 'store']);

// ADMIN routes
Route::group(['middleware' => 'auth'], function () {
    // contact
Route::get('/index1', [IndexController::class, 'index']);
Route::get('/Delate/{id}', [IndexController::class, 'destroy']);
// product
Route::get('/product_form', function () {
    return view('admin_pages.product_form');
});
Route::post('/product_form', [IndexController::class, 'store_product']);
Route::get('/product_data', [IndexController::class, 'show_product']);
Route::get('/delate/{id}', [IndexController::class, 'destroy2']);
// password
Route::get('/admin_password', function () {
    return view('admin_pages.admin_password');
});
Route::post('/change_password',[IndexController::class, 'password']);
// sevices
Route::post('/service_form', [IndexController::class, 'store_service']);
Route::get('/service_data', [IndexController::class,'show_service']);
Route::get('/delate3/{id}', [IndexController::class, 'destroy3']);

Route::get('/service_form', function () {
    return view('admin_pages.service_form');
});

});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
