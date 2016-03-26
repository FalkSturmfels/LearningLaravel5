<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        $first = 'Fox';
        $last = 'Mulder';

        return view('pages/about', compact('first', 'last'));
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
