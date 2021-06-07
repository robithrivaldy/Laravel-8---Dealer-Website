<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\M_BodyController;
use App\Http\Controllers\M_BrandController;
use App\Http\Controllers\M_ColorController;
use App\Http\Controllers\M_FuelController;
use App\Http\Controllers\M_TransmissionController;
use App\Http\Controllers\M_ConditionController;
use App\Http\Controllers\M_DealerController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

// Home pages
Route::get('/', [HomeController::class,'index']);
Route::get('/home', [HomeController::class,'index']);
// Route::get('/email', [HomeController::class,'email']);
Route::get('/detail/{id}', [DetailController::class,'index']);
Route::get('/brands', [BrandController::class,'index']);
Route::get('/brands/show/{id}', [BrandController::class,'show']);
Route::get('/dealers', [DealerController::class,'index']);
Route::get('/contact', [ContactController::class,'index']);
Route::post('/contact/store', [ContactController::class,'store']);
Route::get('/contact/success', [ContactController::class,'success']);
Route::get('/search', [SearchController::class,'index']);

// Login admin
Route::get('/dashboard', [DashboardController::class,'index']);

//product
Route::get('/product', [ProductController::class,'index']);
Route::get('/product/create', [ProductController::class,'create']);
Route::post('/product/store', [ProductController::class,'store']);
Route::get('/product/edit/{id}', [ProductController::class,'edit']);
Route::post('/product/update/{id}', [ProductController::class,'update']);
Route::get('/product/destroy/{id}', [ProductController::class,'destroy']);

// Message
Route::get('/message', [MessageController::class,'index']);
Route::post('/message/update/{id}', [MessageController::class,'update']);
Route::get('/message/destroy/{id}', [MessageController::class,'destroy']);


// M_Dealer Master
Route::get('/m_dealer',[M_DealerController::class,'index']);
Route::post('/m_dealer/update/{id}',[M_DealerController::class,'update']);


//Master
Route::get('/master/{id}',[MasterController::class,'index']);

//Brand Master
Route::get('/brand/create',[M_BrandController::class,'create']);
Route::post('/brand/store',[M_BrandController::class,'store']);
Route::get('/brand/edit/{id}',[M_BrandController::class,'edit']);
Route::post('/brand/update/{id}',[M_BrandController::class,'update']);
Route::get('/brand/destroy/{id}',[M_BrandController::class,'destroy']);

//Body Master
Route::get('/body/create',[M_BodyController::class,'create']);
Route::post('/body/store',[M_BodyController::class,'store']);
Route::get('/body/edit/{id}',[M_BodyController::class,'edit']);
Route::post('/body/update/{id}',[M_BodyController::class,'update']);
Route::get('/body/destroy/{id}',[M_BodyController::class,'destroy']);

//Color Master
Route::get('/color/create',[M_ColorController::class,'create']);
Route::post('/color/store',[M_ColorController::class,'store']);
Route::get('/color/edit/{id}',[M_ColorController::class,'edit']);
Route::post('/color/update/{id}',[M_ColorController::class,'update']);
Route::get('/color/destroy/{id}',[M_ColorController::class,'destroy']);

// Fuel Master
Route::get('/fuel/create',[M_FuelController::class,'create']);
Route::post('/fuel/store',[M_FuelController::class,'store']);
Route::get('/fuel/edit/{id}',[M_FuelController::class,'edit']);
Route::post('/fuel/update/{id}',[M_FuelController::class,'update']);
Route::get('/fuel/destroy/{id}',[M_FuelController::class,'destroy']);

// Transmission Master
Route::get('/transmission/create',[M_TransmissionController::class,'create']);
Route::post('/transmission/store',[M_TransmissionController::class,'store']);
Route::get('/transmission/edit/{id}',[M_TransmissionController::class,'edit']);
Route::post('/transmission/update/{id}',[M_TransmissionController::class,'update']);
Route::get('/transmission/destroy/{id}',[M_TransmissionController::class,'destroy']);

// Condition Master
Route::get('/condition/create',[M_ConditionController::class,'create']);
Route::post('/condition/store',[M_ConditionController::class,'store']);
Route::get('/condition/edit/{id}',[M_ConditionController::class,'edit']);
Route::post('/condition/update/{id}',[M_ConditionController::class,'update']);
Route::get('/condition/destroy/{id}',[M_ConditionController::class,'destroy']);




//Logout
Route::get('/logout', function () {
    \Auth::logout();
    return redirect('/login');
});
 
 