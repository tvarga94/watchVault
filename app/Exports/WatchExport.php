<?php

namespace App\Exports;

use App\Models\Watch;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WatchExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(): Collection
    {
        return Watch::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'brand',
            'model',
            'image',
            'price',
            'price_range_brand_class',
            'movement',
            'functionality',
            'style1',
            'style2',
            'style3',
            'style4',
            'style5',
            'created_at',
            'updated_at'
        ];
    }
}
