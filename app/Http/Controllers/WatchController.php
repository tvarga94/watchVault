<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use App\Repositories\WatchRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WatchController extends Controller
{
    public WatchRepository $watchRepository;
    public function __construct(WatchRepository $watchRepository)
    {
        $this->watchRepository = $watchRepository;
    }

    public function index(): View
    {
        $watches = $this->watchRepository->index();

        return view('watch/main')->with("watches",$watches);
    }

    public function add(Request $request): RedirectResponse
    {
        $this->watchRepository->add($request);

        return redirect()->back();
    }

    public function delete(Request $request): RedirectResponse
    {
        $this->watchRepository->delete($request);

        return redirect()->back();
    }

    public function edit(Request $request): View
    {
        $watch = $this->watchRepository->edit($request);

        return view('watch/edit')->with("watch",$watch);
    }

    public function update(Request $request): RedirectResponse
    {
        $this->watchRepository->update($request);

        return redirect()->back();
    }
}
