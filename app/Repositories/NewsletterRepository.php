<?php

namespace App\Repositories;

use App\Http\Requests\NewsletterSubscriptionRequest;
use App\Models\Newsletter;

class NewsletterRepository
{
    public function store(NewsletterSubscriptionRequest $request): Newsletter
    {
        $validated = $request->validated();
        return Newsletter::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);
    }
}
