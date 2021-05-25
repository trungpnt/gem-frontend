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
    return view('class_management');
});
Route::get('/class', function () {
    return view('class_management');
});
Route::get('/teachers', function () {
    return view('teacher_list');
});
Route::get('/teacher-assistants', function () {
    return view('teacher_assistant_list');
});
Route::get('/official-students', function () {
    return view('student_management');
});
Route::get('/potential-customers', function () {
    return view('potential_customers');
});
Route::get('/level0-customers', function () {
    return view('level0-customers');
});
Route::get('/account-management', function () {
    return view('account_management');
});
Route::get('/check-in', function () {
    return view('check_in');
});
Route::get('/calendar-management', function () {
    return view('calendar-management');
});