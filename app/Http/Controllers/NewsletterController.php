<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterSubscriptionRequest;
use App\Repositories\NewsletterRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class NewsletterController
{
    public NewsletterRepository $newsletterRepository;
    public function __construct(NewsletterRepository $newsletterRepository)
    {
        $this->newsletterRepository = $newsletterRepository;
    }

    public function store(NewsletterSubscriptionRequest $request): RedirectResponse
    {
        $this->newsletterRepository->store($request);

        return redirect()->route('home')->with('success', 'Subscription successful!');
    }
}
