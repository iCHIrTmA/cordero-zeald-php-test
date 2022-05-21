<?php

namespace App\Exports;

use App\Models\PlayerInfo;
use Maatwebsite\Excel\Concerns\FromCollection;

class PlayerInfoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PlayerInfo::all();
    }
}
