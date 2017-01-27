<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function review(Request $request){
        return view('review');
    }
}