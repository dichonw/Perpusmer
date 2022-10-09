<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OuterController;

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

// Route::get('/', function () {return view('welcome');});
Route::controller(AdminController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
    Route::get('/user', 'user')->name('user');
    Route::get('/member', 'member')->name('member');
    Route::get('/buku', 'buku')->name('buku');
    Route::get('/tambahuser', 'tambahuser')->name('tambahuser');
    Route::get('/tambahmember', 'tambahmember')->name('tambahmember');
    Route::get('/tambahbuku', 'tambahbuku')->name('tambahbuku');
    Route::get('/detailmember/{id}', 'detailmember')->name('detailmember');
    Route::get('/detailbuku/{id}', 'detailbuku')->name('detailbuku');
    Route::post('/addmember', 'addmember')->name('addmember');
    Route::post('/addbuku', 'addbuku')->name('addbuku');
    Route::get('/editmember/{id}', 'editmember')->name('editmember');
    Route::post('/updatemember', 'updatemember')->name('updatemember');
    Route::post('/deletemember', 'deletemember')->name('deletemember');
    Route::post('/deletebuku', 'deletebuku')->name('deletebuku');
    Route::post('/deleteuser', 'deleteuser')->name('deleteuser');
    Route::get('/edituser/{id}', 'edituser')->name('edituser');
    Route::post('/updateuser', 'updateuser')->name('updateuser');
    Route::post('/adduser', 'adduser')->name('adduser');
    Route::get('/editbuku/{id}', 'editbuku')->name('editbuku');
    Route::post('/updatebuku', 'updatebuku')->name('updatebuku');
  });

  Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/registeraction', 'registeraction')->name('registeraction');
    Route::post('/loginaction', 'loginaction')->name('loginaction');
    Route::post('/logoutaction', 'logoutaction')->name('logoutaction');
  });

  Route::controller(OuterController::class)->group(function () {
    Route::get('/homeuser', 'homeuser')->name('homeuser');
    Route::get('/detailbukuuser/{id}', 'detailbukuuser')->name('detailbukuuser');
  });


  
