<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ListBarangController;

// Route::get('/', function () {
//  return view('welcome');
// });


Route::get('/', [Homecontroller::class, 'index']);
route::get('/contact',[Homecontroller::class, 'contact']);
route::get('/welcome', [Homecontroller::class, 'welcome']);
route::get('/user/{id}', function ($id) {
    return 'User dengan ID' . $id;
});
route::prefix('admin')->group(function () {
    route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    route::get('/users', function () {
        return 'Admin Users';
    });
});

//route::get('/listbarang/{id}/{nama}', function($id, $nama){
//    return view('list_barang', compact('id', 'nama'));
//});

route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);