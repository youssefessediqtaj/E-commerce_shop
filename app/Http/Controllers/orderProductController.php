<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderProductController extends Controller
{
    public function index(){

        return view('order');
    }
}
