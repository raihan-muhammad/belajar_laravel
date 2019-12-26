<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //

    function all(){
        return "all";
    }

    function shirt(){
        return "shirt";
    }

    function latest(){
        return "latest";
    }

    function popular(){
        return "popular";
    }
}
