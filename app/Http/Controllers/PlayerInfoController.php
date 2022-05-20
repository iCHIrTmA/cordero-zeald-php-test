<?php

namespace App\Http\Controllers;

use App\Models\PlayerInfo;
use Illuminate\Http\Request;

class PlayerInfoController extends Controller
{
    public function index()
    {
        $players = PlayerInfo::paginate();

        return view('player.info', [
            'players' => $players
        ]);
    }
}
