<?php

namespace App\Http\Controllers;

use Illuminate\View\View;


class WebsiteController extends Controller
{
    /**
     * Display the about form.
     */
    public function Index(): View
    {
        return view('frontend.Website');
    }

}