<?php

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;


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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('react', function () {
       return view('welcome'); 
});
// authentication
Route::get('/', [UserController::class, 'userLoginForm'])->name('userlogin');
Route::post('/', [UserController::class, 'userLoginCheck'])->name('userlogin');
Route::get('logout', [UserController::class, 'logOut'])->name('logout');

Route::get('register', [UserController::class, 'signUpForm'])->name('userstore');
Route::post('register', [UserController::class, 'userRegistrationStore'])->name('userstore');



Route::group(['middleware' => AdminMiddleware::class], function () {
    Route::prefix('admin')->group(function () {

        Route::resource('dashboard', DashboardController::class);
        Route::get('dashboard',[DashboardController::class,'index'])->name('admin.dashboard');

    });
});
