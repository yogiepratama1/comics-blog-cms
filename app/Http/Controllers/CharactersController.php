<?php

namespace App\Http\Controllers;

use App\Models\Character;

class CharactersController extends Controller
{


    public function index()
    {
        return view('pages.characters-index', ['title' => "EasyComics"]);
    }

    public function show(Character $character)
    {
        return view('pages.characters-show', [
            'character' => $character,
            'next' => Character::where('name', '>', $character->name)->orderBy('name')->select('slug', 'name')->first(),
            'previous' => Character::where('name', '<', $character->name)->orderBy('name', 'DESC')->select('slug', 'name')->first(),
        ]);
    }
}
