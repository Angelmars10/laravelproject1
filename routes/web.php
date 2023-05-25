<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;
use App\Http\Controllers\InputNameController;
use App\Http\Controllers\electionController;
use App\Http\Controllers\YearVerificationController;
use App\Http\Controllers\loginformController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\latePayorController;
use App\Http\Controllers\ontime_payor;
use App\Http\Controllers\HomeController;
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

Route::get('/ang', function () {
    return view('welcome');
})->name('welcome');

Route::get('test',[test::class, 'test']);

Route::get('/',[HomeController::class,'index']);



Auth::routes();

 
Route::post('/dashboard', function () {

    return view('dashboard');
});

Route::post('inputName',[InputNameController::class, 'showName']);
Route::get('name',[InputNameController::class, 'showView']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/gallery', function () {
    return view('gallery');
});

Route::post ('inputName',[InputNameController::class,'Name']);
Route::get ('inputName',[InputNameController::class,'Name']);

Route::post ('election',[electionController::class,'Election']);
Route::get ('election',[electionController::class,'Election']);



Route::get('/loginform',[loginformController::class,'verification1'])->name('loginform');
Route::post('/loginform',[loginformController::class,'verification2'])->middleware('check_login');

Route::get('/dashboard',function(){
    return view('students.index');
    })->name('dashboard');

Route::resource('employees',EmployeeController::class);

Route::resource('debtors',latePayorController::class);
Route::resource('debtors',ontime_payor::class);
Route::resource('students', StudentController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/',[HomeController::class,'index']);
