<?php

namespace App\Http\Controllers;

use App\Exports\PlayerInfoExport;
use App\Models\PlayerInfo;
use Maatwebsite\Excel\Facades\Excel;

class PlayerInfoController extends Controller
{
    public function index()
    {
        $players = PlayerInfo::paginate();

        return view('player.info', [
            'players' => $players
        ]);
    }

    // TODO: Use Interface to export to different formats
    public function exportToCSV()
    {
        return Excel::download(new PlayerInfoExport, 'playerInfo.csv');
    }
}
