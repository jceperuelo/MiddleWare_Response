<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JordiController extends Controller
{
    public function __construct(){
        $this->middleware('Lunes');
    }
}

