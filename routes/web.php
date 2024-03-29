<?php
use App\Http\Controllers\UserController;

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

Auth::routes(['verify' => true]);


// Gestion de Rutas desde BackOffice
Route::group(['middleware' => ['auth'], 'as' => 'backoffice.'], function() {
    Route::resource('user', 'UserController');
    Route::get('user/{user}/assign_role', 'UserController@assign_role')->name('user.assign_role');
    Route::post('user/{user}/role_assign', 'UserController@role_assign')->name('user.role_assign');
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');
});





// Gestion de Rutas desde FrontOffice
