<?php

namespace App\Http\Controllers;

use Illuminate\View\View;


class MessageController extends Controller
{
    /**
     * Display the about form.
     */
    public function Index(): View
    {
        return view('frontend.message');
    }

}