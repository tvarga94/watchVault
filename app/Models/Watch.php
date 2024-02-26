<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    use HasFactory;

    public mixed $brand;
    public mixed $model;
    public mixed $image;
    public mixed $style5;
    public mixed $style4;
    public mixed $style3;
    public mixed $style2;
    public mixed $style1;
    public mixed $functionality;
    public mixed $movement;
    public mixed $price_range_brand_class;
    public mixed $price;

    public $timestamps = true;

    protected $table = 'watches';

    protected $fillable = [
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
    ];

}
