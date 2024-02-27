<?php

namespace App\Repositories;

use App\Interfaces\WatchInterface;
use App\Models\Watch;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class WatchRepository implements WatchInterface
{
    public function index(): LengthAwarePaginator
    {
        return Watch::paginate(15);
    }

    public function add(Request $request): Watch
    {
        return Watch::create($request->post());
    }

    public function delete(Request $request): void
    {
        $watch = Watch::find($request->id);
        $watch->delete();
    }

    public function edit(Request $request): Watch
    {
        return Watch::find($request->id);
    }

    public function update(Request $request): void
    {
        $watch = Watch::find($request->id);
        $watch->update([
            'brand' => $request->brand,
            'model' => $request->model,
            'image' => $request->image,
            'price_range_brand_class' => $request->price_range_brand_class,
            'movement' => $request->movement,
            'functionality' => $request->functionality,
            'style1' => $request->style1,
            'style2' => $request->style2,
            'style3' => $request->style3,
            'style4' => $request->style4,
            'style5' => $request->style5,
        ]);
    }
}
