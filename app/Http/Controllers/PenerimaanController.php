<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    
    function index(){
        return view('penerimaan.penerimaan');
    }
}
