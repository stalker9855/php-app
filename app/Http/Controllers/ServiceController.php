<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $input = $request->input("key");
        if ($input === 'special') {
            return redirect('/special-page');
        } else {
            return redirect('/');
        }
    }
}
