<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KebutuhanController;
use App\Http\Controllers\KatalogController;

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

Auth::routes();

//middleware auth petugas
Route::group(['middleware' => ['web', 'auth']], function () {
    //nav
    Route::get('/nav', function(){
        return view('navigation.navigation');
    });

    //dashboard
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');   

    //edit-profile
    Route::get('/edit-profile', [UserController::class, 'editProfile'])->name('profile_user');
    Route::patch('/update-profile', [UserController::class, 'updateProfile'])->name('update_profile');

    //crud kegiatan
    Route::prefix('/rabkegiatan')->group(function(){
        Route::get('/', [KegiatanController::class, 'index'])->name('kegiatans.index');
        Route::get('/rabkegiatan/tambah', [KegiatanController::class, 'create'])->name('kegiatans.create');
        Route::post('/rabkegiatan/store', [KegiatanController::class, 'store'])->name('kegiatans.store');
        Route::get('/rabkegiatan/show/{id}', [KegiatanController::class, 'show'])->name('kegiatans.show');
        Route::get('/rabkegiatan/edit/{id}', [KegiatanController::class, 'edit'])->name('kegiatans.edit');
        Route::post('/rabkegiatan/update', [KegiatanController::class, 'update'])->name('kegiatans.update');
        Route::get('/rabkegiatan/destroy/{id}', [KegiatanController::class, 'destroy'])->name('kegiatans.destroy');
    });

    //kebutuhan
    Route::get('/kebutuhan', [KebutuhanController::class, 'index'])->name('kebutuhans.index');
    Route::post('/kebutuhan/store', [KebutuhanController::class, 'store'])->name('kebutuhans.store');
    Route::post('/kebutuhan/update', [KebutuhanController::class, 'update'])->name('kebutuhans.update');
    Route::get('/kebutuhan/destroy/{id}', [KebutuhanController::class, 'destroy'])->name('kebutuhans.destroy');
    Route::get('/kebutuhan/exportpdf', [KebutuhanController::class, 'exportpdf'])->name('kebutuhans.exportpdf');

    //katalog
    Route::get('/katalog', [KatalogController::class, 'index'])->name('katalogs.index');
    Route::get('/katalog/tambah', [KatalogController::class, 'create'])->name('katalogs.create');
    Route::post('/katalog/store', [KatalogController::class, 'store'])->name('katalogs.store');
    Route::get('/katalog/edit/{id}', [KatalogController::class, 'edit'])->name('katalogs.edit');
    Route::put('/katalog/update/{id}', [KatalogController::class, 'update'])->name('katalogs.update');
    Route::get('/katalog/show/{id}', [KatalogController::class, 'show'])->name('katalogs.show');
    Route::get('/katalog/destroy/{id}', [KatalogController::class, 'destroy'])->name('katalogs.destroy');

    //middleware auth admin
    Route::group(['middleware' => 'Admin'], function () {
        //crud user        
        Route::prefix('/user')->group(function(){
            Route::get('/', [UserController::class, 'user'])->name('user');
            Route::get('/create-user', [UserController::class, 'createUser'])->name('create_user');
            Route::post('/store-user', [UserController::class, 'storeUser'])->name('store_user');
            Route::get('/show-user/{id}', [UserController::class, 'showUser'])->name('show_user');
            Route::get('/edit-user/{id}', [UserController::class, 'editUser'])->name('edit_user');
            Route::patch('/update-user', [UserController::class, 'updateUser'])->name('update_user');
            Route::delete('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('delete_user');        
        });        
    });
});
