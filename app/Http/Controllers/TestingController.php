<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    //
    function hallo($nama = "Kepo"){
        return "halo ".$nama;
    }
}
