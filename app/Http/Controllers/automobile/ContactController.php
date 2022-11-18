<?php

namespace App\Http\Controllers\automobile;

use App\Http\Controllers\Controller;


class ContactController extends Controller
{
    public function index()
    {

        return view('.pages.contact');
    }

}
