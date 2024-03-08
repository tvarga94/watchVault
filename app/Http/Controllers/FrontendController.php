<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class FrontendController extends Controller
{

    public function showMainPage(): View
    {
        return view('welcome');
    }

    public function showContactPage(): View
    {
        return view('contact/contact');
    }

    public function showAboutPage(): View
    {
        return view('contact/about');
    }

}
