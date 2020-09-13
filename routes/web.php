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
    $courses = Course::where('state','active')->get();
    return view('welcome', compact(['courses']));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('course', 'CourseController');
Route::resource('magazine', 'MagazineController');
Route::resource('subscritor', 'SubscritorController');



Route::resource('report', 'ReportController');

Route::get('/cursos', function () {
    $courses = Course::where('state','active')->get();
    return view('courses', compact(['courses']));
})->name('curses');
