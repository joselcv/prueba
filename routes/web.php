<?php
use Symfony\Component\HttpFoundation\Request;
use App\cuentas;

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
//     return view('index');
// })->name('/');



Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('logout', function(){
    Auth::logout();
    return redirect('/');
});

Route::middleware('check')->group(function(){

    Route::get('tdousuario.index','UsuariosController@index')->name('tdousuario.check');
    Route::resource('tdocumento','TiposDocumentosController');
    Route::resource('tdocliente','ClientesController');
    Route::resource('tdocuenta','CuentasController');
    Route::resource('tdousuario','UsuariosController');
    Route::resource('tdoretiros','RetirosController');
    Route::resource('tdoconsignaciones','ConsignacionesController');

});

// Route::get('tdousuario/check','UsuariosController@index')->name('tdousuario.check');
// Route::resource('tdocumento','TiposDocumentosController');
// Route::resource('tdocliente','ClientesController');
// Route::resource('tdocuenta','CuentasController');
// Route::resource('tdousuario','UsuariosController');
// Route::resource('tdoretiros','RetirosController');
// Route::resource('tdoconsignaciones','ConsignacionesController');