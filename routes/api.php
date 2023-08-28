<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

//Rutas para los metodos 
Route::prefix('characters')->group(function () {
    Route::get('/', [CharacterController::class, 'index']);
    Route::post('/', [CharacterController::class, 'new']);
    Route::get('/{id}', [CharacterController::class, 'details']);
    Route::put('/{id}', [CharacterController::class, 'update']);
    Route::delete('/{id}', [CharacterController::class, 'delete']);
});

?>