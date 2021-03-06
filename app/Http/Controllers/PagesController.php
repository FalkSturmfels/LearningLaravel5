<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        $people = [
            'John Doe',
            'Frank Bogart',
            'Lucy MacQuire',
            'Julia Franklin',
            'Max Buche',
            'Lisa Maywather'
        ];

        return view('pages/about', compact('people'));
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
