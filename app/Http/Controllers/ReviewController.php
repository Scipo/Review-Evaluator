<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ReviewController extends Controller
{
    public function send(Request $request)
    {
    	$product = new Product();
    	// $product->name = $request->input('name');
        $product->name = 'Vulli Sophie the Giraffe Teether';
    	$product->review = $request->input('message');
        $product->rating = $request->input('rating');
    	$product->save();

    	$productId = $product->id;
        $productReview = $product->review;
        set_time_limit(300);
        exec("python C:/xampp/htdocs/Review-Evaluator/analyze_core/review_analysis.py ". (string)$productId, $output_python);
        //var_dump($output_python);
        $result = end($output_python);

        return view('statistic',['result'=>$result,'review'=>$productReview]);
    }
}
