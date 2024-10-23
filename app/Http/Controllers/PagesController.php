<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function main()
    {
        return view('main');
    }
    public function services()
    {
        return view('services');
    }
    public function about()
    {
        return view('about');
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
}
