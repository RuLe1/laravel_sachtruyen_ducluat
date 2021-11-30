<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TheLoaiController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Auth;



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

Route::get('/',[IndexController::class,'home']);

Route::get('/danh-muc/{slug}',[IndexController::class,'danhmuc']);
Route::get('/xem-truyen/{slug}',[IndexController::class,'xemtruyen']);
Route::get('/xem-chapter/{slug}',[IndexController::class,'xemchapter']);
Route::get('/the-loai/{slug}',[IndexController::class,'theloai']);
Route::post('/tim-kiem',[IndexController::class,'timkiem']);
Route::post('/timkiem-ajax',[IndexController::class,'timkiem_ajax']);
Route::get('/tag/{tag}',[IndexController::class,'tag']);
Route::get('/doc-sach',[IndexController::class,'docsach']);
Route::post('/xemsachnhanh',[IndexController::class,'xemsachnhanh']);

Route::post('/truyennoibat',[TruyenController::class,'truyennoibat']);
Route::post('/tabs-danhmuc',[IndexController::class,'tabs_danhmuc']);

Auth::routes();

// Auth::routes([
//   'register' => false, // Registration Routes...
//   'reset' => false, // Password Reset Routes...
//   'verify' => false, // Email Verification Routes...
  
// ]);

// Routes dành cho trang admin, middle mặc định đã có chỉ cần khai báo dòng phía dưới là xài dc
Route::group(['middleware' => ['auth']], function() {

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/theloai', TheLoaiController::class);
Route::resource('/danhmuc', DanhmucController::class);
Route::resource('/truyen', TruyenController::class);
Route::resource('/sach', SachController::class);
Route::resource('/chapter', ChapterController::class);
Route::resource('/info', InformationController::class);

});

Route::group(['middleware' => ['role:admin']], function () {
Route::resource('/user', UserController::class);
Route::get('/phan-vaitro/{id}', [UserController::class,'phanvaitro']);
Route::get('/phan-quyen/{id}', [UserController::class,'phanquyen']);

Route::post('/insert_roles/{id}', [UserController::class,'insert_roles']);
Route::post('/insert_permission/{id}', [UserController::class,'insert_permission']);
Route::post('/insert-permission', [UserController::class,'insert_bot_permission']);

Route::get('/impersonate/user/{id}', [UserController::class,'impersonate']);

});

