<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function updateLike(Game $game)
    {
        // automaticamente al usar increment se guardan los cambios en 
        // la base de datos
        $game->increment('likes');

        // redirecciono al dashboard principal
        return redirect()->route('dashboard', ['games' => Game::all()]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imageName = time() . '.' . $request->image->extension();

        // Public Folder
        $request->image->move(public_path('assets/images'), $imageName);

        Game::create(
            [
                'title' => $request->title,
                'company' => $request->company,
                'image' => $imageName
            ]
        );

        // redirecciono al dashboard principal
        return redirect()->route('dashboard', ['games' => Game::all()]);
    }
}
