<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class DashboardController extends Controller
{
    public function index()
    {

        // Select two random games
        $games = Game::all();

        /**
         * Retrieves a two length array which contains the 
         * games that will compete in the dashboard
         * 
         * @param $game Game[] an array of games in our database
         * 
         * @return int[] an array which two games positions
         */
        function get_random_game_positions($games){

            // first obtain the game position in our database
            $games_length=  count($games) - 1;
            
            $positions = array();
            
            // I don't want the same game
            do{
                for($i=0; $i<2; $i++){
                    $positions[$i] = rand(0, $games_length);
                }
            }while($positions[0]==$positions[1]);
            
            return $positions;
        }

        $rand_positions = get_random_game_positions($games);

        $games = array(
            $games[$rand_positions[0]],
            $games[$rand_positions[1]],
        );

        return view('dashboard', ['games' => $games]);
    }

    public function upload()
    {
        return view('upload');
    }

    public function ranking()
    {
        return view('ranking', ['games' => Game::orderBy('likes', 'desc')->get()]);
    }
}
