<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\admincontroller;
use App\Http\Controllers\admin\usercontroller;
use App\Http\Controllers\admin\bannercontroller;



use App\Http\Controllers\website\websitecontroller;
//backend start 
use App\Http\Controllers\website\home\serviceController;




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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//website rout deafult 
Route::get('/', [websitecontroller::class, 'index']);
Route::get('/about', [websitecontroller::class, 'about']);
Route::get('/service', [websitecontroller::class, 'service']);
Route::get('/ourteam', [websitecontroller::class, 'ourteam']);
Route::get('/stydyAbroad', [websitecontroller::class, 'stydyAbroad']);
Route::get('/immigration', [websitecontroller::class, 'immigration']);
Route::get('/gellary', [websitecontroller::class, 'gellary']);
Route::get('/blog', [websitecontroller::class, 'blog']);
Route::get('/contact', [websitecontroller::class, 'contact']);
Route::get('/legal', [websitecontroller::class, 'legal']);
Route::get('/freeConsutation', [websitecontroller::class, 'freeConsutation']);
Route::get('/agent', [websitecontroller::class, 'agent']);
Route::get('/career', [websitecontroller::class, 'career']);
Route::get('/internship', [websitecontroller::class, 'internship']);
Route::get('/privecy', [websitecontroller::class, 'privecy']);
Route::get('/condition', [websitecontroller::class, 'condition']);
Route::get('/faq', [websitecontroller::class, 'faq']);
Route::get('/asinglepagebout', [websitecontroller::class, 'singlepage']);





// website backend home page route  deafult 
Route::get('/dashboard/website/homepage', [serviceController::class, 'index']);
Route::get('/dashboard/website/homepage/add', [serviceController::class, 'add']);
Route::get('/dashboard/website/homepage/edit/{slug}', [serviceController::class, 'edit']);
Route::get('/dashboard/website/homepage/view/{slug}', [serviceController::class, 'view']);
Route::post('/dashboard/website/homepage/insert', [serviceController::class, 'insert']);
Route::post('/dashboard/website/homepage/update', [serviceController::class, 'update']);
Route::post('/dashboard/website/homepage/softdelete', [serviceController::class, 'softdelete']);
Route::post('/dashboard/website/homepage/restore', [serviceController::class, 'restore']);
Route::post('/dashboard/website/homepage/delete', [serviceController::class, 'delete']);












// admin rout deafult 
Route::get('/dashboard', [admincontroller::class, 'index']);



Route::get('/dashboard/user', [usercontroller::class, 'index']);
Route::get('/dashboard/user/add', [usercontroller::class, 'add']);
Route::get('/dashboard/user/edit', [usercontroller::class, 'edit']);
Route::get('/dashboard/user/view', [usercontroller::class, 'view']);
Route::post('/dashboard/user/insert', [usercontroller::class, 'insert']);
Route::post('/dashboard/user/update', [usercontroller::class, 'update']);
Route::post('/dashboard/user/softdelete', [usercontroller::class, 'softdelete']);
Route::post('/dashboard/user/restore', [usercontroller::class, 'restore']);
Route::post('/dashboard/user/delete', [usercontroller::class, 'delete']);


Route::get('/dashboard/banner', [bannercontroller::class, 'index']);
Route::get('/dashboard/banner/add', [bannercontroller::class, 'add']);
Route::get('/dashboard/banner/edit/{slug}', [bannercontroller::class, 'edit']);
Route::get('/dashboard/banner/view/{slug}', [bannercontroller::class, 'view']);
Route::post('/dashboard/banner/insert', [bannercontroller::class, 'insert']);
Route::post('/dashboard/banner/update', [bannercontroller::class, 'update']);
Route::post('/dashboard/banner/softdelete', [bannercontroller::class, 'softdelete']);
Route::post('/dashboard/banner/restore', [bannercontroller::class, 'restore']);
Route::post('/dashboard/banner/delete', [bannercontroller::class, 'delete']);


//laravel deafult 
require __DIR__.'/auth.php';
