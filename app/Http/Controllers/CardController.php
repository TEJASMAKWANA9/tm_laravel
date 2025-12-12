<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        // This returns the Blade view located at resources/views/card/index.blade.php
        return view('card.index');
    }
}
