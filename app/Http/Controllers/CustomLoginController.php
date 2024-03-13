<?php

namespace App\Http\Controllers;

use Canvas\Http\Controllers\Auth\AuthenticatedSessionController;
use Canvas\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;

class CustomLoginController extends AuthenticatedSessionController
{
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('start');
    }
}
