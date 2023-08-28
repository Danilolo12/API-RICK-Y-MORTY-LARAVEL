<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
//Metodo para listar todos los personajes

    public function index()
    {
        $characters = Character::all();
        return response()->json(['characters' => $characters], 200);
    }

// Metodo para Crear un nuevo personaje

    public function new(Request $request)
{
    $validatedData = $request->validate(Character::$rules);

    $character = Character::create($validatedData);

    return response()->json(['message' => 'Character Creado', 'character' => $character], 201);
}


//Metodo para tener detalles especificos de cada personaje 

    public function details($id)
{
    $character = Character::find($id);

    if (!$character) {
        return response()->json(['message' => 'NO hay Detalles'], 404);
    }

    return response()->json(['character' => $character], 200);
}

//Metodo Actualizar
    public function update(Request $request, $id)
{
    $validatedData = $request->validate(Character::$rules);

    $character = Character::find($id);

    if (!$character) {
        return response()->json(['message' => 'No Actualiza'], 404);
    }

    $character->update($validatedData);

    return response()->json(['message' => 'Character Actualizado', 'character' => $character], 200);
}


// Metodo Eliminar
    public function delete($id)
{
    $character = Character::find($id);

    if (!$character) {
        return response()->json(['message' => 'Character not found'], 404);
    }

    $character->delete();

    return response()->json(['message' => 'Character deleted'], 200);
}


}
