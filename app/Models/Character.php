<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = ['name', 'status'];

    public static $rules = [
        'name' => 'required|string',
        'status' => 'required|string',
    ];

    public function index()
    {
        $characters = Character::all();
        return $characters;
    }

    public function new($data)
    {
        $character = Character::create($data);
        return $character;
    }

    public function details($id)
    {
        $character = Character::find($id);
        return $character;
    }

}
