<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Log;

class ChampionController
{
    public function showChampion($request) {
        return view('champion')->with(['champion' => $request]);
    }
}
