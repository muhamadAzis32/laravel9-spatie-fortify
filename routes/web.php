<?php

use App\Http\Controllers\RoleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//prefix "admin"
Route::prefix('admin')->group(function () {

    // hanya bisa di akses oleh role admin
    Route::group(['middleware' => ['auth', 'role:admin']], function () {

        Route::get('/dashboard', function () {
            return view('pages.admin.dashboard.index');
        });

        Route::resource('users', UserController::class, ['as' => 'admin']);
        Route::resource('roles', RoleController::class, ['as' => 'admin']);

    });
});
