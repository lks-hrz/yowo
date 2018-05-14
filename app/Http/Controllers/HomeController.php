<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function root()
    {
        return redirect()->route('home');
    }

    public function home()
    {
        return view('home');
    }
}