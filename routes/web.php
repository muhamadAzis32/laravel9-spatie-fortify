<?php

use App\Http\Controllers\UserController;
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

//prefix "admin"
Route::prefix('admin')->group(function () {

    Route::group(['middleware' => ['auth']], function () {

        Route::get('/dashboard', function () {
            return view('pages.admin.dashboard.index');
        });

        Route::resource('users', UserController::class, ['as' => 'admin']);

    });
});