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


// middleware('check') Con este middleware protejo las rutas, el problema es que una vez logeado
//y estando en la pagina que sigue ej: usuarios en esta pagina los botones de crear y actualizar dejan de funcionar
//esto sucede por que las rutas estan dentro de Route::middleware('check')->group(function()) y cada vez
//que se preciona crear o actualizar el va a ese middlewar y vuelve a realizar todas las instrucciones
//configuradas en el.

//la unica y posible solucion efectiva entre muchas opcciones que trate de implementar seria crear nuevamente la db
//y a las tablas colocarles un id que funcione como primary key por un lado, y por el otro
//modificar la tabla usuarios id->primary key, name, email, password, remember_token con el fin de darle uso
//al login que trae laravel por defecto y poder acceder a todas sus funcionalidades.

//de este prblema se desprenden otros como por ejemplo que las rutas no estan protegidas,
//es imposible saber quien se logea y cual es su rol para asi mismo programar que puede y no puede hacer dentro de
//la aplicacion segun el rol

//por otra parte el tema de las validaciones(mensajes de error)y el tipo de campo password en la vista de crear usuarios ya quedo
//solucionado

// Route::middleware('check')->group(function(){

//     Route::get('tdousuario.index','UsuariosController@index')->name('tdousuario.check');
//     Route::resource('tdocumento','TiposDocumentosController');
//     Route::resource('tdocliente','ClientesController');
//     Route::resource('tdocuenta','CuentasController');
//     Route::resource('tdousuario','UsuariosController');
//     Route::resource('tdoretiros','RetirosController');
//     Route::resource('tdoconsignaciones','ConsignacionesController');

// });

Route::get('tdousuario.index','UsuariosController@index')->name('tdousuario.check');
Route::resource('tdocumento','TiposDocumentosController');
Route::resource('tdocliente','ClientesController');
Route::resource('tdocuenta','CuentasController');
Route::resource('tdousuario','UsuariosController');
Route::resource('tdoretiros','RetirosController');
Route::resource('tdoconsignaciones','ConsignacionesController');