<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
//FrontendController
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('welcome');
Route::get('c/search',[App\Http\Controllers\FrontendController:: class, 'search'])->name('student.search');

//Start All HomeController
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/StaffHome', [App\Http\Controllers\StaffHomeController::class, 'index']);
Route::get('/TeacherHome', [App\Http\Controllers\TeacherHomeController::class, 'index']);
Route::get('/passwordchange', [App\Http\Controllers\UserProfileController::class, 'passwordchange']);
Route::post('/newpassword', [App\Http\Controllers\UserProfileController::class, 'newpasswordpost']);
Route::get('/profile', [App\Http\Controllers\UserProfileController::class, 'profile']);
Route::post('profileupdate', [App\Http\Controllers\UserProfileController::class, 'profileupdate']);

//End All HomeController
Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('department', 'App\Http\Controllers\DepartmentController');
Route::resource('programe', 'App\Http\Controllers\ProgrameController');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});


//Import/Export Student data
Route::resource('student', 'App\Http\Controllers\StudentController');
Route::post('/import',[App\Http\Controllers\StudentController::class,'import'])->name('import');
Route::get('/export-users',[App\Http\Controllers\StudentController::class,'exportUsers'])->name('export-users');

Route::get('/issue', [App\Http\Controllers\StudentController::class, 'issue']);
Route::post('issued', [App\Http\Controllers\StudentController::class, 'issued']);
