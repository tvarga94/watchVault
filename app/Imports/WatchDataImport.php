<?php

namespace App\Imports;

use App\Models\Watch;
use Maatwebsite\Excel\Concerns\ToModel;

class WatchDataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Watch([
            'brand' => $row['brand'],
            'model' => $row['model'],
            'image' => $row['image'],
            'price' => $row['price'],
            'price_range_brand_class' => $row['price_range_brand_class'],
            'movement' => $row['movement'],
            'functionality' => $row['functionality'],
            'style1' => $row['style1'],
            'style2' => $row['style2'],
            'style3' => $row['style3'],
            'style4' => $row['style4'],
            'style5' => $row['style5'],
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
