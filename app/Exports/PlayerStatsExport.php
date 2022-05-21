<?php

namespace App\Exports;

use App\Models\PlayerStats;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class PlayerStatsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // TODO: unify with PlayerStatsController::index(); only 3pts stats; make it dynamic
        $playerStats3Pts = DB::table('player_totals')
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
                        ->get();

        return $playerStats3Pts;
    }
}
