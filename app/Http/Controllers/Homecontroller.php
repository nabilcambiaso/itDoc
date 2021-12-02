<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    // controller values
    public function index()
    {
        return 'hi my name is Nabil';
    }

    public function inside($name=null)
    {
        return 'this is '.$name;
    }
}
