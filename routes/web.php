<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\paradasController;
use App\Http\Controllers\busesController;
use App\Http\Controllers\rutasController;
use App\Http\Controllers\notificationsController;
use App\Http\Controllers\UserQueryesController;

Route::middleware("guest")->group(function () {

    Route::get('/', [usersController::class, 'index'])->name('Users.index');
    Route::post('/', [UsersController::class, 'validateUser'])->name('Users.validate');
    Route::get('/register', [UsersController::class, 'register'])->name('Users.create');
    Route::post('/register', [UsersController::class, 'storesUser'])->name('Users.stored');

});


Route::middleware("auth")->group(function () {
    Route::get('/home', [UsersController::class, 'home'])->name('Users.home');
    Route::get('/logout', [UsersController::class, 'logout'])->name('Users.logout');
    Route::post('/profile', [UsersController::class, 'get_profile'])->name('Users.profile');
    Route::post('/profile/update', [UsersController::class, 'update_profile'])->name('User.update');
    /**
     * Modulo de paradas
     */
    Route::get('/paradas', [paradasController::class, 'index'])->name('Paradas.listado');
    Route::get('/paradas/create', [paradasController::class, 'create'])->name('Paradas.create');
    Route::post('/paradas', [paradasController::class, 'stored'])->name('Paradas.stored');
    Route::delete('/paradas/{parada}', [paradasController::class, 'delete_parada'])->name('Parada.delete');
    Route::get('/paradas/edit/{parada}', [paradasController::class, 'update_parada'])->name('Paradas.update');
    Route::put('/paradas/edit/', [paradasController::class, 'edit_parada'])->name('Paradas.edit');
    /**
     * Modulo de Buses
     */
    Route::get('/buses', [busesController::class, 'index'])->name('buses.index');
    Route::get('/buses/create', [busesController::class, 'create'])->name('buses.create');
    Route::post('/buses', [busesController::class, 'stored'])->name('buses.stored');
    Route::get('/buses/update/{bus}', [busesController::class, 'update_bus'])->name('buses.update');
    Route::put('/buses', [busesController::class, 'edit_bus'])->name('buses.edit');
    Route::delete('/buses/{bus}', [busesController::class, 'delete_bus'])->name('buses.delete');
    /**
     * Modulo de Rutas
     */
    Route::get('/rutas', [rutasController::class, 'index'])->name('rutas.home');
    Route::get('/rutas/create', [rutasController::class, 'create'])->name('rutas.create');
    Route::post('/rutas', [rutasController::class, 'stored'])->name('rutas.stored');
    Route::delete('/rutas/{ruta}', [rutasController::class, 'drop_ruta'])->name('rutas.delete');
    /**
     * notificaciones de usuario
     */
    Route::get('/notification/{notification}', [notificationsController::class, 'detail'])->name('notification.detail');
    /**
     * Mmenu de usuario normal
     */
    Route::get('/search', [UserQueryesController::class, 'paradaFormQuery'])->name('parada.search');
    Route::post('/search', [UserQueryesController::class, 'paradasTableResult'])->name('parada.result');
    Route::get('/searchRuta', [UserQueryesController::class, 'rutasViewQuery'])->name('rutas.search');
    //Route::post()->name();
});



