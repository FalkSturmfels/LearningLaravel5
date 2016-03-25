<?php
/**
 * Created by IntelliJ IDEA.
 * User: Achim
 * Date: 25.03.2016
 * Time: 21:59
 */

namespace App\Http\Controllers;


class WelcomeController extends Controller
{

    public function index()
    {
        return view('Welcome');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}