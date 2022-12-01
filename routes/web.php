<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorBD;

//rutas individuales del controladorVistas

Route::get('/', [controladorVistas::class,'showWelcome']);
Route::get('Home', [controladorVistas::class,'showHome'])->name('apodoHome');
// Route::get('Registrar', [controladorVistas::class,'showIngresar'])->name('apodoReg');
Route::get('Recuerdo', [controladorVistas::class,'showRecuerdos'])->name('apodoRec');
//ruta para envio post
Route::post('GuardarRecuerdo',[controladorVistas::class,'procesarRecuerdo']);
//Route::get('delete', [controladorVistas::class,'showEliminar'])->name('apodoDel');



//   RUTAS PARA EL CONTROLADOR RESOURCE

//create
Route::get('recuerdo/create', [controladorBD::class,'create'])->name('recuerdo.create');
// Store
Route::post('recuerdo',[controladorBD::class,'store'])->name('recuerdo.store');
//Index
Route::get('recuerdo', [controladorBD::class,'index'])->name('recuerdo.index');
//Edit - dentro de las llaves indicamos que parametro se va a llevar
Route::get('recuerdo/{id}/edit', [controladorBD::class,'edit'])->name('recuerdo.edit');
//Update - ruta para actualización
Route::put('recuerdo/{id}', [controladorBD::class,'update'])->name('recuerdo.update');
//Show - confirmar elim 
Route::get('recuerdo/{id}/show', [controladorBD::class,'show'])->name('recuerdo.show');
//Destroy
Route::delete('recuerdo/{id}', [controladorBD::class,'destroy'])->name('recuerdo.destroy');

/*
//rutas individuales del controlador

Route::get('/', [controladorVistas::class,'showWelcome']);
Route::get('Home', [controladorVistas::class,'showHome'])->name('apodoHome');
Route::get('Registrar', [controladorVistas::class,'showIngresar']);
Route::get('Recuerdo', [controladorVistas::class,'showRecuerdos']);

//ruta tipo controlador 

route::controller(controladorVistas::class)->group
(function () {
Route::get('/', 'showWelcome');
Route::get('Home','showHome')->name('apodoHome');
Route::get('Registrar', 'showIngresar');
Route::get('Recuerdo', 'showRecuerdos');
});



|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

Route::view('/','welcome');
Route::view('/Home','Home')->name('apodoHome');
Route::view('/Registrar','Registrar');
Route::view('/Recuerdo','Recuerdo');
 
*/