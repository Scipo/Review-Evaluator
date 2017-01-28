@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <h2 class="move-down">Results</h2>
                    <h3>The review:</h3>
                    <div>
                        <p>{{$review}}</p>
                    </div>
                    <h3>The probability that this review is positive is:</h3>
                    <div>
                        <p>{{$result}}</p>
                    </div>
                    {{--This is the best product, which I recently bought. I will recommend it for sure. My best friend has similar product and she is very happy with it too. I love this product, it is simply the best!--}}
                    {{--The probability that this review is positive is 0.999744184764--}}
                </div>
            </div>
        </div>
    </div>
    @endsection