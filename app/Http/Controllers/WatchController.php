<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function index()
    {
        $watches = Watch::all();

        return view('watch/main')->with("watches",$watches);
    }

    public function add(Request $request): RedirectResponse
    {
        Watch::create($request->post());

        return redirect()->back();
    }

    public function delete(Request $request){
        $watch = Watch::find($request->id);
        $watch->delete();

        return redirect()->back();
    }

    public function edit(Request $request){
        $watch = Watch::find($request->id);

        return view('watch/edit')->with("watch",$watch);
    }

    public function update(Request $request){
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

        return redirect()->back();
    }
}
