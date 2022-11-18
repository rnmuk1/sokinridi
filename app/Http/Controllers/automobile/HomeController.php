<?php

namespace App\Http\Controllers\automobile;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {

        return view('.pages.index');
    }

}
