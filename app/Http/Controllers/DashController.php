<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function dash()

    {
        return view ('dash');
    }

    public function redirect()

    {
        return view ('index');
    }
}
