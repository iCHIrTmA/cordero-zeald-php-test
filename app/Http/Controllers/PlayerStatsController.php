<?php

namespace App\Http\Controllers;

use App\Exports\PlayerStatsExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PlayerStatsController extends Controller
{
    public function index()
    {
        // TODO: check what is more efficient: raw queries or eloquent
        $playerStats = DB::table('player_totals')
                    ->select(
                        DB::raw('roster.name as player_name'),
                        DB::raw('team.name as team_name'),
                        DB::raw('player_totals.age'),
                        DB::raw('roster.number as player_number'),
                        DB::raw('roster.pos as position'),
                        DB::raw('ROUND((player_totals.3pt / player_totals.3pt_attempted * 100), 2) AS three_pts_percent'),
                        DB::raw('player_totals.3pt AS three_pts_total'),
                        )
                    ->join('roster', 'player_totals.player_id', 'roster.id')
                    ->join('team', 'roster.team_code', 'team.code')
                    ->whereRaw('ROUND((player_totals.3pt / player_totals.3pt_attempted * 100), 2) > 35')
                    ->orderBy('three_pts_percent', 'DESC')
                    ->paginate();

        return view('player.stats', [
            'playerStats' => $playerStats
        ]);
    }

    // TODO: same as PlayerInfoController::exportToCSV() - consider interface to output to different formats;
    public function exportToCSV()
    {
        return Excel::download(new PlayerStatsExport, 'playerStats3pts.csv');
    }
}
