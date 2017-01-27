@extends('.layout.master')
@section('content')
    <br><br><br>
    <div class="col-lg-8 moveleft-cotact" id="change">
        <h4 class="Title1">Send a review</h4>
        <form method="POST" action="" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group contentContactForm">
                <div class="col-md-5">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name*" value="">
                </div>
            </div>
            <div class="form-group contentContactForm">
                <div class="col-md-5">
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail*" value="">
                </div>
            </div>
            <div class="form-group contentContactForm">
                <div class="col-md-5">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title*" value="">
                </div>
            </div>
            <div class="form-group contentContactForm">
                <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="message" cols="15" rows="20" placeholder="Съобщение*">

                                    </textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-5" id="submitButton">
                    <button type="submit" class="btn btn-success">Send</button>
                </div>
            </div>
        </form>
    </div>
    @endsection