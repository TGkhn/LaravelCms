<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex(){
        return view('frontend.index');
    }

    public function getContact(){
        return view('frontend.iletisim');
    }
}
