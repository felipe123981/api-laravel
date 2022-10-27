<?php

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

Route::get('/user/{user:id}', function(\App\Models\User $user) {
	return $user;
});

Route::prefix('usuarios')->group(function() {
	Route::get('', function() {
		return 'usuario';
	})->name('usuarios');

	Route::get('/{id}', function() {
		return 'Mostrar detalhes';
	})->name('usuarios.show');

	Route::get('/{id}/tags', function() {
		return 'Tags de usuario';
	})->name('usuarios.tags');
});

Route::get('/a-empresa/{string?}', function ($string = null) {
	return $string;
})->name('a-empresa');

Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
	return $paramA . ' - ' . $paramB;
	//    return view('welcome');
})->name('users');
