<?php

use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PrincipalController;
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

// Route::get('/', function () {   // https://sisdental.test/
//     return view('welcome');
// });

// Route::get('/hola/{nombre}', function ($nombre) { // https://sisdental.test/hola/juan
//     echo "Hola $nombre, como estas?";
// });

Route::get('/bienvenido/{nombre}', [PrincipalController::class, 'bienvenido']);
// Route::get('/paciente/crearregistro', [PacienteController::class, 'crearRegistro']);

// ----------- RUTAS PARA CONTROLADOR DE PACIENTES

// Ruta para  mostrar formulario de creacion de paciente
Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');

// Ruta para guardar datos de paciente en la DB
Route::post('/pacientes', [PacienteController::class, 'store'])->name('pacientes.store');

// Ruta para listar todos los pacientes
Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');

// Ruta para mostrar los detalles de un paciente
Route::get('/pacientes/{id}', [PacienteController::class, 'show'])->name('pacientes.show');

// Ruta para mostrar el formulario de edicion de un registro
Route::get('/pacientes/{id}/edit', [PacienteController::class, 'edit'])->name('pacientes.edit');

// Ruta para guardar los cambios de un registro de paciente en la DB
Route::put('/pacientes/{id}', [PacienteController::class, 'update'])->name('pacientes.update');

// Ruta para eliminar de la DB un registro de paciente
Route::delete('/pacientes/{id}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');

// ---------------- RUTAS PARA CONTROLADOR DE CONSULTAS
Route::resource('consultas', ConsultaController::class);


// --------------------------------
// function factorial($n) {
//     $r = 1;
//     while ($n > 0) {
//         $r = $r * $n;
//         $n--;
//     }
//     return $r;
// }
