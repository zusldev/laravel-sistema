<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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

// invoke the index method of the EmpleadoController class
Route::get('empleado', [EmpleadoController::class, 'index']);

// invoke the create method of the EmpleadoController class
Route::get('empleado/create', [EmpleadoController::class, 'create']);

// invoke the store method of the EmpleadoController class
Route::post('empleado', [EmpleadoController::class, 'store']);

// invoke the destroy method of the EmpleadoController class receiving the id of the employee to be deleted
Route::delete('empleado/{id}', [EmpleadoController::class, 'destroy']);

// invoke the edit method of the EmpleadoController class receiving the id of the employee to be edited
Route::get('empleado/{id}/edit', [EmpleadoController::class, 'edit']);

// invoke the update method of the EmpleadoController class receiving the id of the employee to be updated
Route::put('empleado/{id}', [EmpleadoController::class, 'update']);


