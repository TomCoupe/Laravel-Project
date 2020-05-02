<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Log;

class ChampionController
{
    public function showChampion($request) {
        Log::info($request);
    }
}
