<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        $data = [];
        $data['first'] = 'Achim';
        $data['last'] = 'Fritz';
        return view('pages/about', $data);
    }
}
