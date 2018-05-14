<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function show()
    {
        return view('users.show');

    }

    public function showSettings()
    {
        return view('users.showSettings');
    }

    public function yourWorld()
    {
        return view('users.yourWorld');
    }

    public function yourStats()
    {
        return view('users.yourStats');
    }

    public function yourStories()
    {
        return view('users.yourStories');
    }
}