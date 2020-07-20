<?php

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




// data-penjualanAdmin
Route::get('/admin/data-penjualan', 'dataPenjualanAdminController@index')->middleware(['auth','admin']);
Route::post('/admin/data-penjualan/update/{id}', 'dataPenjualanAdminController@update')->middleware(['auth','admin']);


// data-customerAdmin
Route::get('/admin/data-customer', 'dataCustomerAdminController@index')->middleware(['auth','admin']);
Route::post('/admin/data-customer/update/{id}', 'dataCustomerAdminController@update')->middleware(['auth','admin']);
Route::get('/admin/data-customer/hapus/{id}', 'dataCustomerAdminController@destroy')->middleware(['auth','admin']);

// data-menuAdmin
Route::get('/admin/data-menu', 'dataMenuAdminController@index')->middleware(['auth','admin']);
Route::get('/admin/data-menu/hapus/{id}', 'dataMenuAdminController@destroy')->middleware(['auth','admin']);
Route::post('/admin/data-menu/update/{id}', 'dataMenuAdminController@update')->middleware(['auth','admin']);
Route::post('/admin/data-menu/tambah', 'dataMenuAdminController@store')->middleware(['auth','admin']);

// dashboardAdmin
Route::get('/admin/', 'dashboardAdminController@index')->middleware(['auth','admin']);



// dashboardCustomer
Route::get('/customer/', 'dashboardCustomerController@index')->middleware(['auth','customer']);

//daftar-MenuCustomer
Route::get('/customer/daftar-menu', 'daftarMenuCustomerController@index')->middleware(['auth','customer']);
Route::post('/customer/daftar-menu/pesan', 'daftarMenuCustomerController@pesan')->middleware([['auth','customer']]);

// pesananCustomer
Route::get('/customer/pesanan', 'pesananCustomerController@index')->middleware(['auth','customer']);

// dataProfilCustomer
Route::get('/customer/data-profil/biodata', 'biodataCustomerController@index')->middleware(['auth','customer']);
Route::post('/customer/data-profil/biodata/update', 'biodataCustomerController@update')->middleware(['auth','customer']);
Route::post('/customer/data-profil/biodata/profil/update', 'biodataCustomerController@profilUpdate')->middleware(['auth','customer']);
Route::get('/customer/data-profil/ubah-password', 'ubahPasswordCustomerController@index')->middleware(['auth','customer']);
Route::post('/customer/data-profil/ubah-password/update', 'ubahPasswordCustomerController@update')->middleware(['auth','customer']);

// logout
Route::get('/logout', 'userController@logout');


// register
Route::get('/register', function () {
    return view('register');
});
Route::get('/register/store', 'userController@register');
Route::post('/register/store', 'userController@register');


// login
Route::get('/login', function () {
    return view('login');
});
Route::get('/', 'userController@indexLogin')->name('login');
Route::post('/login/check', 'userController@login');