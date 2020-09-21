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

Route::get('/', function () {
    return view('index');
});

Route::post('/','Usercontroller@login')->name('user.login');

Route::resource('categoria', 'CategoriaController');
Route::get('cancelarcategoria', function () { 
    return redirect()->route('categoria.index')->with('datos','Registro Cancelado....!');
 })->name('cancelarcategoria');
Route::get('categoria/{id}/confirmar','CategoriaController@confirmar')->name('categoria.confirmar');

Route::resource('proveedor', 'ProveedorController');
Route::get('cancelarproveedor', function () { 
    return redirect()->route('proveedor.index')->with('datos','Registro Cancelado....!');
 })->name('cancelarproveedor');
Route::get('proveedor/{id}/confirmar','ProveedorController@confirmar')->name('proveedor.confirmar');

Route::resource('empleado', 'EmpleadoController');
Route::get('cancelarempleado', function () { 
     return redirect()->route('empleado.index')->with('datos','Registro Cancelado....!');
  })->name('cancelarempleado');
Route::get('empleado/{id}/confirmar','EmpleadoController@confirmar')->name('empleado.confirmar');
 
Route::resource('empresa', 'EmpresaController');
Route::get('cancelarempresa', function () { 
      return redirect()->route('empresa.index')->with('datos','Registro Cancelado....!');
   })->name('cancelarempresa');
Route::get('empresa/{id}/confirmar','EmpresaController@confirmar')->name('empresa.confirmar');

Route::resource('metodopago', 'MetodoPagoController');
Route::get('cancelarmetodopago', function () { 
      return redirect()->route('metodopago.index')->with('datos','Registro Cancelado....!');
   })->name('cancelarmetodopago');
Route::get('metodopago/{id}/confirmar','MetodoPagoController@confirmar')->name('metodopago.confirmar');

Route::resource('linea', 'LineaController');
Route::get('cancelarlinea', function () { 
      return redirect()->route('linea.index')->with('datos','Registro Cancelado....!');
   })->name('cancelarlinea');
Route::get('linea/{id}/confirmar','LineaController@confirmar')->name('linea.confirmar');

Route::resource('almacen', 'AlmacenController');
Route::get('cancelaralmacen', function () { 
      return redirect()->route('almacen.index')->with('datos','Registro Cancelado....!');
   })->name('cancelaralmacen');
Route::get('almacen/{id}/confirmar','AlmacenController@confirmar')->name('almacen.confirmar');
  
Route::resource('presentacion', 'PresentacionController');
Route::get('cancelarpresentacion', function () { 
      return redirect()->route('presentacion.index')->with('datos','Registro Cancelado....!');
   })->name('cancelarpresentacion');
Route::get('presentacion/{id}/confirmar','PresentacionController@confirmar')->name('presentacion.confirmar');

Route::resource('origen', 'OrigenDocumentoController');
Route::get('cancelarorigen', function () { 
      return redirect()->route('origen.index')->with('datos','Registro Cancelado....!');
   })->name('cancelarorigen');
Route::get('origen/{id}/confirmar','OrigenDocumentoController@confirmar')->name('origen.confirmar');
 