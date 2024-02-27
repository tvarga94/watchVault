<?php

namespace App\Exports;

use App\Models\Watch;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class WatchExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(): Collection
    {
        return Watch::all();
    }
}
