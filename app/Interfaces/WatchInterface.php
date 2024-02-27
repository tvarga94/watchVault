<?php

namespace App\Interfaces;

use App\Models\Watch;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

interface WatchInterface
{
    public function index(): LengthAwarePaginator;
    public function add(Request $request): Watch;
    public function delete(Request $request): void;
    public function edit(Request $request): Watch;
    public function update(Request $request): void;
}
