<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function main() {
        return view('main');
    }
    public function services() {
        return view('services');
    }
    // public function service(string $id): View
    // {
    //     return view('service', ['id' => $id]);
    // }
    public function about() {
        return view('about');
    }
    public function contacts() {
        return view('contacts');
    }
    public function profile() {
        return view('profile');
    }
}

