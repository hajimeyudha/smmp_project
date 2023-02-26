<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyaluranController extends Controller
{
    function index(){
        return view('penyaluran');
    }
}
