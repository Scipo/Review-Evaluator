<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function review(Request $request){
        return view('review');
    }
    public function home(Request $request){
        return view('home');
    }
    public function statistic(Request $request){
        return view('statistic');
    }
}