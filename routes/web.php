<?php

use Illuminate\Support\Facades\Route;
use App\Course;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('course', 'CourseController');
Route::resource('magazine', 'MagazineController');
Route::resource('subscritor', 'SubscritorController');



Route::resource('report', 'ReportController');

Route::get('/cursos', function () {

    return view('courses');
})->name('curses');
