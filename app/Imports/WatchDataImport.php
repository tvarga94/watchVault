<?php

namespace App\Imports;

use App\Models\Watch;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class WatchDataImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row): Model|Watch|null
    {
        return new Watch([
            'brand' => (string) $row['brand'],
            'model' => (string) $row['model'],
            'image' => (string) $row['image'] ?? null,
            'price' => (string) $row['price'] ?? null,
            'price_range_brand_class' => (string) $row['price_range_brand_class'] ?? null,
            'movement' => (string) $row['movement'] ?? null,
            'functionality' => (string) $row['functionality'] ?? null,
            'style1' => (string) $row['style1'] ?? null,
            'style2' => (string) $row['style2'] ?? null,
            'style3' => (string) $row['style3'] ?? null,
            'style4' => (string) $row['style4'] ?? null,
            'style5' => (string) $row['style5'] ?? null,
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
