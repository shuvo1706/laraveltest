<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function index()
    {
return "hi from mycontroller";


    }
    public function baseadress()
    {
      return view('9');
    }
}
