@extends('.layout.master')
@section('content')
       <div class="container">
           <div class="row move-down-row">
               <div class="col-lg-6 moveleft-cotact">
                   <h4 class="Title1">Send us review</h4>
                   <form method="POST" action="{{ url('/reviews/send') }}" class="form-horizontal">
                       {{ csrf_field() }}
                       <div class="form-group contentContactForm">
                           <div class="col-md-5">
                               <input type="text" class="form-control" id="name" name="name" placeholder="Name*" value="">
                           </div>
                       </div>
                       <div class="form-group contentContactForm">
                           <div class="col-md-9">
                    <textarea class="form-control" id="message" name="message" cols="10" rows="15" placeholder="Съобщение*">

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
               <div class="col-md-5 move-down">
                   <p>
                       Donec ultricies bibendum ex eu molestie. Morbi ullamcorper mauris
                       vel ultricies auctor. Fusce id aliquam felis, id tristique diam. Etiam
                       augue quam, fermentum id sollicitudin at, laoreet sed mi. Fusce lacinia libero
                       et diam dapibus faucibus. Maecenas pellentesque in orci ut sodales.
                   </p>
               </div>
               <div class="col-md-5">
                   <div class="col-md-5">
                       {!! Html::image('/portfolio/cabin.png') !!}
                   </div>
                   <div class="col-md-5">
                       {!! Html::image('/portfolio/cake.png') !!}
                   </div>
             </div>
               <div class="col-md-5">
                   <div class="col-md-5">
                       {!! Html::image('/portfolio/game.png') !!}
                   </div>
                   <div class="col-md-5">
                       {!! Html::image('/portfolio/safe.png') !!}
                   </div>
               </div>
       </div>

    @endsection
