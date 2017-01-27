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

    	$productId = $product->id;	// use this shit in the py script
    	// http://stackoverflow.com/questions/19781768/executing-python-script-with-php-variables

    	return redirect('/');
    }
}
