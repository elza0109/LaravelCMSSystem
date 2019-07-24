<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dasboardController extends Controller
{
    //
    public function dasboard()
    {
        return view('admin.dashboard');
    }
}
