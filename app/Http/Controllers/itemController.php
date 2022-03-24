<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemController extends Controller
{
    // HTTP method 

    function testRequest(Request $req)
    {
        return $req->input();

    }
}
