<?php

use Illuminate\Support\Facades\Route;


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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('signup', 'ViewsController@signup');
Route::get('login', 'ViewsController@login');
Route::get('dashboard', 'ViewsController@dashboard')->name('dashboard');
Route::get('employees', 'ViewsController@employees')->name('employees');
Route::get('settings', 'ViewsController@settings')->name('settings');
Route::get('payments', 'ViewsController@payments')->name('payments');

Route::post('login', 'EmployerController@login');
Route::post('signup', 'EmployerController@register');
Route::post('add-staff', 'EmployerController@inviteStaff');

