<?php

namespace App\Http\Controllers;

use App\Repositories\NewsletterRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NewsletterController
{
    public NewsletterRepository $newsletterRepository;
    public function __construct(NewsletterRepository $newsletterRepository)
    {
        $this->newsletterRepository = $newsletterRepository;
    }

    public function store(Request $request): JsonResponse
    {
        if (NULL !== $request->subscribe) {
            $this->newsletterRepository->store($request);

            return response()->json(['message' => 'Subscription successful!']);
        }
    }
}
