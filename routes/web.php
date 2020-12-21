<?php

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

/* Route::get('/', function () {
    return view('welcome');
}); */

//Auth::routes();

/* 
|        | GET|HEAD | login                        | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest    |
|        | POST     | login                        |                  | App\Http\Controllers\Auth\LoginController@login                        | web,guest    |
|        | POST     | logout                       | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web          |
|        | POST     | password/confirm             |                  | App\Http\Controllers\Auth\ConfirmPasswordController@confirm            | web,auth     |
|        | GET|HEAD | password/confirm             | password.confirm | App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    | web,auth     |
|        | POST     | password/email               | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web          |
|        | POST     | password/reset               | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset 
               | web          |
|        | GET|HEAD | password/reset               | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web          |
|        | GET|HEAD | password/reset/{token}       | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm
        | web          |
|        | POST     | register                     |                  | App\Http\Controllers\Auth\RegisterController@register                  | web,guest    |
|        | GET|HEAD | register                     | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest    |
 */
Route::get('/login', 'Landing\LandingController@login')->name('login');

Route::post('/login', 'Auth\LoginController@login')->name('login.post');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/password/confirm', 'Auth\ConfirmPasswordController@confirm')->name('password.confirm.post');
Route::get('/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');

Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::get('/password/reset/{token}', 'Auth\RegisterController@showResetForm')->name('password.reset');

Route::post('/register', 'Auth\RegisterController@register')->name('register.post');
Route::get('/register', 'Landing\LandingController@register')->name('register');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/process_login', 'HomeController@ProcessLogin')->name('process_login');


Route::group(['namespace' => 'Landing'], function () {
    Route::get('/', 'LandingController@index')->name('Landing.index');

    Route::get('/Landing/layanan', 'LandingController@layanan_kursus');

    Route::get('/Landing/webdevelop', 'LandingController@webdev');

    Route::get('/Landing/mobiledevelop', 'LandingController@mobileapp');

    Route::get('/Landing/tutor', 'LandingController@profiletutor');

    Route::get('/Landing/digital_marketing', 'LandingController@digitalmarketing');

    Route::get('/Landing/java_dekstop', 'LandingController@javadekstop');

    Route::get('/Landing/cms_master', 'LandingController@cms');

    Route::get('/Landing/seo_engineering', 'LandingController@seo');

    Route::get('/Landing/aboutus', 'LandingController@about');

    Route::get('/Landing/syarat_dan_ketentuan', 'LandingController@tof');
	
	Route::get('/Landing/FAQ', 'LandingController@tanyajawab');

    Route::get('/Landing/dokumentasi', 'LandingController@dokumen');
	
	Route::get('/Landing/contactus', 'LandingController@kontak');
	
	Route::get('/Landing/formulir', 'LandingController@daftar');

    Route::get('/Landing/login', 'LandingController@login');

    Route::get('/Landing/register', 'LandingController@register');

});

Route::group(['namespace' => 'Admin'], function () {
    Route::get('/Admin', 'AdminController@index')->name('Admin.index');

    Route::get('/Admin/master_menu', 'AdminController@mastermenu');

    Route::get('/Admin/master_site', 'AdminController@mastersite');

    Route::get('/Admin/add_content', 'AdminController@tambahcontent');

    Route::get('/Admin/table_content', 'AdminController@tablecontent');

    Route::get('/Admin/master_news', 'AdminController@masternews');

    Route::get('/Admin/tambah_category', 'AdminController@addcategory');

    Route::get('/Admin/kursus_list', 'AdminController@listkursus');

    Route::get('/Admin/table_tutor', 'AdminController@tabletutor');

    Route::get('/Admin/tambah_tutor', 'AdminController@tambahtutor');

    Route::get('/Admin/table_pendaftaran', 'AdminController@tabledaftar');

    Route::get('/Admin/edit_pendaftaran', 'AdminController@editpendaftaran');

    Route::get('/Admin/invoice_peserta', 'AdminController@reportinvoice');

    Route::get('/Admin/fee_tutor', 'AdminController@reportfee');

});

Route::group(['namespace' => 'Peserta'], function () {
    Route::get('/Peserta', 'PesertaConroller@index')->name('Peserta.index');

});