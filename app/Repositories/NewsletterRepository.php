<?php

namespace App\Repositories;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterRepository
{
    public function store(Request $request): Newsletter
    {
        return Newsletter::create($request->post());
    }
}
