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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'AdminController@index');
Route::get('/dashboard-schedule/{id}', 'AdminController@schedulerole');
Route::put('/dashboard-schedule/{id}', 'AdminController@scheduleNurse');
Route::get('/nurseTable', 'AdminController@nurseTable');
Route::get('/addNurse', 'AdminController@addNurse');
Route::post('/addNurse', 'AdminController@addNurseForm');
Route::get('/schedule', 'AdminController@schedule');
Route::get('/reschedule', 'AdminController@reschedule');
Route::get('/reschedule-delete/{id}', 'AdminController@deletereschedule');
Route::delete('/reschedule-delete/{id}', 'AdminController@deletedreschedule');

Route::get('/nurse', 'Nurse\NurseLoginController@showLoginForm')->name('nurse.login');
Route::post('/nurse', 'Nurse\NurseLoginController@Login');
Route::get('/nurse/home', 'NurseController@index')->name('home');
Route::get('/nurse/profile', 'NurseController@profile');
Route::get('/nurse/schedule', 'NurseController@schedule');
Route::post('/nurse/schedule/', 'RescheduleController@reschedule');

    

