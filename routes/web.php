<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\admincontroller;
use App\Http\Controllers\admin\usercontroller;
use App\Http\Controllers\admin\bannercontroller;
use App\Http\Controllers\website\websitecontroller;
//backend start 
use App\Http\Controllers\website\home\serviceController;
use App\Http\Controllers\website\home\newsController;
use App\Http\Controllers\website\home\whychooseController;
use App\Http\Controllers\website\home\homebannersliderController;
use App\Http\Controllers\website\home\homeaboutController;
use App\Http\Controllers\website\home\homeabouttwoController;
use App\Http\Controllers\website\home\quesionanandansController;
use App\Http\Controllers\website\home\companyfoundedController;
use App\Http\Controllers\website\home\singleteamController;

// our team controller link
use App\Http\Controllers\website\ourteam\ourallteamController;
use App\Http\Controllers\website\ourteam\ourteambannerController;
//blog page controller link 
use App\Http\Controllers\website\blog\blogbannerController;
use App\Http\Controllers\website\blog\blogaboutController;
use App\Http\Controllers\website\blog\updateblogController;
use App\Http\Controllers\website\blog\recentprojectblogController;
use App\Http\Controllers\website\blog\letestblogprojectController;
use App\Http\Controllers\website\blog\upcomingeventController;

//gellary  page controller link 
use App\Http\Controllers\website\gellary\gellarybannerController;
use App\Http\Controllers\website\gellary\gellaryimageController;







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
Route::get('/dashboard/website/homepageBanner', [homebannersliderController::class, 'index']);
Route::get('/dashboard/website/homepageBanner/add', [homebannersliderController::class, 'add']);
Route::get('/dashboard/website/homepageBanner/edit/{slug}', [homebannersliderController::class, 'edit']);
Route::get('/dashboard/website/homepageBanner/view/{slug}', [homebannersliderController::class, 'view']);
Route::post('/dashboard/website/homepageBanner/insert', [homebannersliderController::class, 'insert']);
Route::post('/dashboard/website/homepageBanner/update', [homebannersliderController::class, 'update']);
Route::post('/dashboard/website/homepageBanner/softdelete', [homebannersliderController::class, 'softdelete']);
Route::post('/dashboard/website/homepageBanner/restore', [homebannersliderController::class, 'restore']);
Route::post('/dashboard/website/homepageBanner/delete', [homebannersliderController::class, 'delete']);


Route::get('/dashboard/website/homepageabout', [homeaboutController::class, 'index']);
Route::get('/dashboard/website/homepageabout/add', [homeaboutController::class, 'add']);
Route::get('/dashboard/website/homepageabout/edit/{slug}', [homeaboutController::class, 'edit']);
Route::get('/dashboard/website/homepageabout/view/{slug}', [homeaboutController::class, 'view']);
Route::post('/dashboard/website/homepageabout/insert', [homeaboutController::class, 'insert']);
Route::post('/dashboard/website/homepageabout/update', [homeaboutController::class, 'update']);
Route::post('/dashboard/website/homepageabout/softdelete', [homeaboutController::class, 'softdelete']);
Route::post('/dashboard/website/homepageabout/restore', [homeaboutController::class, 'restore']);
Route::post('/dashboard/website/homepageabout/delete', [homeaboutController::class, 'delete']);


Route::get('/dashboard/website/homepageabout2', [homeabouttwoController::class, 'index']);
Route::get('/dashboard/website/homepageabout2/add', [homeabouttwoController::class, 'add']);
Route::get('/dashboard/website/homepageabout2/edit/{slug}', [homeabouttwoController::class, 'edit']);
Route::get('/dashboard/website/homepageabout2/view/{slug}', [homeabouttwoController::class, 'view']);
Route::post('/dashboard/website/homepageabout2/insert', [homeabouttwoController::class, 'insert']);
Route::post('/dashboard/website/homepageabout2/update', [homeabouttwoController::class, 'update']);
Route::post('/dashboard/website/homepageabout2/softdelete', [homeabouttwoController::class, 'softdelete']);
Route::post('/dashboard/website/homepageabout2/restore', [homeabouttwoController::class, 'restore']);
Route::post('/dashboard/website/homepageabout2/delete', [homeabouttwoController::class, 'delete']);


Route::get('/dashboard/website/homepage', [serviceController::class, 'index']);
Route::get('/dashboard/website/homepage/add', [serviceController::class, 'add']);
Route::get('/dashboard/website/homepage/edit/{slug}', [serviceController::class, 'edit']);
Route::get('/dashboard/website/homepage/view/{slug}', [serviceController::class, 'view']);
Route::post('/dashboard/website/homepage/insert', [serviceController::class, 'insert']);
Route::post('/dashboard/website/homepage/update', [serviceController::class, 'update']);
Route::post('/dashboard/website/homepage/softdelete', [serviceController::class, 'softdelete']);
Route::post('/dashboard/website/homepage/restore', [serviceController::class, 'restore']);
Route::post('/dashboard/website/homepage/delete', [serviceController::class, 'delete']);


Route::get('/dashboard/website/news', [newsController::class, 'index']);
Route::get('/dashboard/website/news/add', [newsController::class, 'add']);
Route::get('/dashboard/website/news/edit/{slug}', [newsController::class, 'edit']);
Route::get('/dashboard/website/news/view/{slug}', [newsController::class, 'view']);
Route::post('/dashboard/website/news/insert', [newsController::class, 'insert']);
Route::post('/dashboard/website/news/update', [newsController::class, 'update']);
Route::post('/dashboard/website/news/softdelete', [newsController::class, 'softdelete']);
Route::post('/dashboard/website/news/restore', [newsController::class, 'restore']);
Route::post('/dashboard/website/news/delete', [newsController::class, 'delete']);

Route::get('/dashboard/website/whychoose', [whychooseController::class, 'index']);
Route::get('/dashboard/website/whychoose/add', [whychooseController::class, 'add']);
Route::get('/dashboard/website/whychoose/edit/{slug}', [whychooseController::class, 'edit']);
Route::get('/dashboard/website/whychoose/view/{slug}', [whychooseController::class, 'view']);
Route::post('/dashboard/website/whychoose/insert', [whychooseController::class, 'insert']);
Route::post('/dashboard/website/whychoose/update', [whychooseController::class, 'update']);
Route::post('/dashboard/website/whychoose/softdelete', [whychooseController::class, 'softdelete']);
Route::post('/dashboard/website/whychoose/restore', [whychooseController::class, 'restore']);
Route::post('/dashboard/website/whychoose/delete', [whychooseController::class, 'delete']);

Route::get('/dashboard/website/companyhistory', [companyfoundedController::class, 'index']);
Route::get('/dashboard/website/companyhistory/add', [companyfoundedController::class, 'add']);
Route::get('/dashboard/website/companyhistory/edit/{slug}', [companyfoundedController::class, 'edit']);
Route::get('/dashboard/website/companyhistory/view/{slug}', [companyfoundedController::class, 'view']);
Route::post('/dashboard/website/companyhistory/insert', [companyfoundedController::class, 'insert']);
Route::post('/dashboard/website/companyhistory/update', [companyfoundedController::class, 'update']);
Route::post('/dashboard/website/companyhistory/softdelete', [companyfoundedController::class, 'softdelete']);
Route::post('/dashboard/website/companyhistory/restore', [companyfoundedController::class, 'restore']);
Route::post('/dashboard/website/companyhistory/delete', [companyfoundedController::class, 'delete']);

Route::get('/dashboard/website/teammembers', [singleteamController::class, 'index']);
Route::get('/dashboard/website/teammembers/add', [singleteamController::class, 'add']);
Route::get('/dashboard/website/teammembers/edit/{slug}', [singleteamController::class, 'edit']);
Route::get('/dashboard/website/teammembers/view/{slug}', [singleteamController::class, 'view']);
Route::post('/dashboard/website/teammembers/insert', [singleteamController::class, 'insert']);
Route::post('/dashboard/website/teammembers/update', [singleteamController::class, 'update']);
Route::post('/dashboard/website/teammembers/softdelete', [singleteamController::class, 'softdelete']);
Route::post('/dashboard/website/teammembers/restore', [singleteamController::class, 'restore']);
Route::post('/dashboard/website/teammembers/delete', [singleteamController::class, 'delete']);


Route::get('/dashboard/website/clientquesion', [quesionanandansController::class, 'index']);
Route::get('/dashboard/website/clientquesion/add', [quesionanandansController::class, 'add']);
Route::get('/dashboard/website/clientquesion/edit/{slug}', [quesionanandansController::class, 'edit']);
Route::get('/dashboard/website/clientquesion/view/{slug}', [quesionanandansController::class, 'view']);
Route::post('/dashboard/website/clientquesion/insert', [quesionanandansController::class, 'insert']);
Route::post('/dashboard/website/clientquesion/update', [quesionanandansController::class, 'update']);
Route::post('/dashboard/website/clientquesion/softdelete', [quesionanandansController::class, 'softdelete']);
Route::post('/dashboard/website/clientquesion/restore', [whychooseController::class, 'restore']);
Route::post('/dashboard/website/clientquesion/delete', [quesionanandansController::class, 'delete']);

// our team page route deafult 
Route::get('/dashboard/website/ourallteam', [ourallteamController::class, 'index']);
Route::get('/dashboard/website/ourallteam/add', [ourallteamController::class, 'add']);
Route::get('/dashboard/website/ourallteam/edit/{slug}', [ourallteamController::class, 'edit']);
Route::get('/dashboard/website/ourallteam/view/{slug}', [ourallteamController::class, 'view']);
Route::post('/dashboard/website/ourallteam/insert', [ourallteamController::class, 'insert']);
Route::post('/dashboard/website/ourallteam/update', [ourallteamController::class, 'update']);
Route::post('/dashboard/website/ourallteam/softdelete', [ourallteamController::class, 'softdelete']);
Route::post('/dashboard/website/ourallteam/restore', [ourallteamController::class, 'restore']);
Route::post('/dashboard/website/ourallteam/delete', [ourallteamController::class, 'delete']);

Route::get('/dashboard/website/ourteambanner', [ourteambannerController::class, 'index']);
Route::get('/dashboard/website/ourteambanner/add', [ourteambannerController::class, 'add']);
Route::get('/dashboard/website/ourteambanner/edit/{slug}', [ourteambannerController::class, 'edit']);
Route::get('/dashboard/website/ourteambanner/view/{slug}', [ourteambannerController::class, 'view']);
Route::post('/dashboard/website/ourteambanner/insert', [ourteambannerController::class, 'insert']);
Route::post('/dashboard/website/ourteambanner/update', [ourteambannerController::class, 'update']);
Route::post('/dashboard/website/ourteambanner/softdelete', [ourteambannerController::class, 'softdelete']);
Route::post('/dashboard/website/ourteambanner/restore', [ourteambannerController::class, 'restore']);
Route::post('/dashboard/website/ourteambanner/delete', [ourteambannerController::class, 'delete']);

// our blog page route deafult
Route::get('/dashboard/website/blogbanner', [blogbannerController::class, 'index']);
Route::get('/dashboard/website/blogbanner/add', [blogbannerController::class, 'add']);
Route::get('/dashboard/website/blogbanner/edit/{slug}', [blogbannerController::class, 'edit']);
Route::get('/dashboard/website/blogbanner/view/{slug}', [blogbannerController::class, 'view']);
Route::post('/dashboard/website/blogbanner/insert', [blogbannerController::class, 'insert']);
Route::post('/dashboard/website/blogbanner/update', [blogbannerController::class, 'update']);
Route::post('/dashboard/website/blogbanner/softdelete', [blogbannerController::class, 'softdelete']);
Route::post('/dashboard/website/blogbanner/restore', [blogbannerController::class, 'restore']);
Route::post('/dashboard/website/blogbanner/delete', [blogbannerController::class, 'delete']);

Route::get('/dashboard/website/blogabout', [blogaboutController::class, 'index']);
Route::get('/dashboard/website/blogabout/add', [blogaboutController::class, 'add']);
Route::get('/dashboard/website/blogabout/edit/{slug}', [blogaboutController::class, 'edit']);
Route::get('/dashboard/website/blogabout/view/{slug}', [blogaboutController::class, 'view']);
Route::post('/dashboard/website/blogabout/insert', [blogaboutController::class, 'insert']);
Route::post('/dashboard/website/blogabout/update', [blogaboutController::class, 'update']);
Route::post('/dashboard/website/blogabout/softdelete', [blogaboutController::class, 'softdelete']);
Route::post('/dashboard/website/blogabout/restore', [blogaboutController::class, 'restore']);
Route::post('/dashboard/website/blogabout/delete', [blogaboutController::class, 'delete']);

Route::get('/dashboard/website/updateblog', [updateblogController::class, 'index']);
Route::get('/dashboard/website/updateblog/add', [updateblogController::class, 'add']);
Route::get('/dashboard/website/updateblog/edit/{slug}', [updateblogController::class, 'edit']);
Route::get('/dashboard/website/updateblog/view/{slug}', [updateblogController::class, 'view']);
Route::post('/dashboard/website/updateblog/insert', [updateblogController::class, 'insert']);
Route::post('/dashboard/website/updateblog/update', [updateblogController::class, 'update']);
Route::post('/dashboard/website/updateblog/softdelete', [updateblogController::class, 'softdelete']);
Route::post('/dashboard/website/updateblog/restore', [updateblogController::class, 'restore']);
Route::post('/dashboard/website/updateblog/delete', [updateblogController::class, 'delete']);


Route::get('/dashboard/website/blogrecentproject', [recentprojectblogController::class, 'index']);
Route::get('/dashboard/website/blogrecentproject/add', [recentprojectblogController::class, 'add']);
Route::get('/dashboard/website/blogrecentproject/edit/{slug}', [recentprojectblogController::class, 'edit']);
Route::get('/dashboard/website/blogrecentproject/view/{slug}', [recentprojectblogController::class, 'view']);
Route::post('/dashboard/website/blogrecentproject/insert', [recentprojectblogController::class, 'insert']);
Route::post('/dashboard/website/blogrecentproject/update', [recentprojectblogController::class, 'update']);
Route::post('/dashboard/website/blogrecentproject/softdelete', [recentprojectblogController::class, 'softdelete']);
Route::post('/dashboard/website/blogrecentproject/restore', [recentprojectblogController::class, 'restore']);
Route::post('/dashboard/website/blogrecentproject/delete', [recentprojectblogController::class, 'delete']);


Route::get('/dashboard/website/letestblogproject', [letestblogprojectController::class, 'index']);
Route::get('/dashboard/website/letestblogproject/add', [letestblogprojectController::class, 'add']);
Route::get('/dashboard/website/letestblogproject/edit/{slug}', [letestblogprojectController::class, 'edit']);
Route::get('/dashboard/website/letestblogproject/view/{slug}', [letestblogprojectController::class, 'view']);
Route::post('/dashboard/website/letestblogproject/insert', [letestblogprojectController::class, 'insert']);
Route::post('/dashboard/website/letestblogproject/update', [letestblogprojectController::class, 'update']);
Route::post('/dashboard/website/letestblogproject/softdelete', [letestblogprojectController::class, 'softdelete']);
Route::post('/dashboard/website/letestblogproject/restore', [letestblogprojectController::class, 'restore']);
Route::post('/dashboard/website/letestblogproject/delete', [letestblogprojectController::class, 'delete']);

Route::get('/dashboard/website/upcomingeventblog', [upcomingeventController::class, 'index']);
Route::get('/dashboard/website/upcomingeventblog/add', [upcomingeventController::class, 'add']);
Route::get('/dashboard/website/upcomingeventblog/edit/{slug}', [upcomingeventController::class, 'edit']);
Route::get('/dashboard/website/upcomingeventblog/view/{slug}', [upcomingeventController::class, 'view']);
Route::post('/dashboard/website/upcomingeventblog/insert', [upcomingeventController::class, 'insert']);
Route::post('/dashboard/website/upcomingeventblog/update', [upcomingeventController::class, 'update']);
Route::post('/dashboard/website/upcomingeventblog/softdelete', [upcomingeventController::class, 'softdelete']);
Route::post('/dashboard/website/upcomingeventblog/restore', [upcomingeventController::class, 'restore']);
Route::post('/dashboard/website/upcomingeventblog/delete', [upcomingeventController::class, 'delete']);





// gellary page route deafult
Route::get('/dashboard/website/gellarybanner', [gellarybannerController::class, 'index']);
Route::get('/dashboard/website/gellarybanner/add', [gellarybannerController::class, 'add']);
Route::get('/dashboard/website/gellarybanner/edit/{slug}', [gellarybannerController::class, 'edit']);
Route::get('/dashboard/website/gellarybanner/view/{slug}', [gellarybannerController::class, 'view']);
Route::post('/dashboard/website/gellarybanner/insert', [gellarybannerController::class, 'insert']);
Route::post('/dashboard/website/gellarybanner/update', [gellarybannerController::class, 'update']);
Route::post('/dashboard/website/gellarybanner/softdelete', [gellarybannerController::class, 'softdelete']);
Route::post('/dashboard/website/gellarybanner/restore', [gellarybannerController::class, 'restore']);
Route::post('/dashboard/website/gellarybanner/delete', [gellarybannerController::class, 'delete']);

Route::get('/dashboard/website/gellaryimage', [gellaryimageController::class, 'index']);
Route::get('/dashboard/website/gellaryimage/add', [gellaryimageController::class, 'add']);
Route::get('/dashboard/website/gellaryimage/edit/{slug}', [gellaryimageController::class, 'edit']);
Route::get('/dashboard/website/gellaryimage/view/{slug}', [gellaryimageController::class, 'view']);
Route::post('/dashboard/website/gellaryimage/insert', [gellaryimageController::class, 'insert']);
Route::post('/dashboard/website/gellaryimage/update', [gellaryimageController::class, 'update']);
Route::post('/dashboard/website/gellaryimage/softdelete', [gellaryimageController::class, 'softdelete']);
Route::post('/dashboard/website/gellaryimage/restore', [gellaryimageController::class, 'restore']);
Route::post('/dashboard/website/gellaryimage/delete', [gellaryimageController::class, 'delete']);














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
