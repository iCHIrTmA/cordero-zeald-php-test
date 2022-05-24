<?php

namespace App\Http\Controllers;

use App\Exports\PlayerInfoExport;
use App\Models\PlayerInfo;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

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

    public function exportToJSON()
    {
        $data = (PlayerInfo::all()->toArray());

        $data = json_encode($data);
	    $fileName = time() . 'playerInfo.json';
        
	    File::put(public_path('json/' . $fileName), $data);
	    return Response::download(public_path('json/' . $fileName));
    }
}
