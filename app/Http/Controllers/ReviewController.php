<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ReviewController extends Controller
{
    public function send(Request $request)
    {
    	$product = new Product();
    	$product->name = $request->input('name');
    	$product->review = $request->input('message');

    	$product->save();

    	return redirect('/');
    }
}
