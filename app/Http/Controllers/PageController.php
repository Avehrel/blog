<?php

namespace App\Http\Controllers;

use App\Models\User;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function browse()
    {
        $members = User::latest()->take(12)->get();
        return view('browse', compact('members'));
    }

    public function pricing()
    {
        return view('pricing');
    }
}
