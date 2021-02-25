<?php

use Illuminate\Support\Facades\Auth;
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





// *** A U T H *** \\
Auth::routes();






// *** G E T *** \\


// H O M E   C O N T R O L L E R
Route::get('/', 'HomeController@redirect');

Route::get('/home', 'HomeController@home');

Route::get('/logout', 'HomeController@logout');


// T E S T S   C O N T R O L L E R
Route::get('/tests', 'TestsController@view');






// *** P O S T *** \\


// T E S T S   C O N T R O L L E R
Route::post('/tests', 'TestsController@add');


