@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
         <div class="col-lg-12">
             <br><br><br><br>
             <div class="col-md-6">
                 <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a sodales augue.
                     Ut ac blandit nunc. Nulla facilisi. Vestibulum a viverra massa. Donec vestibulum,
                     lacus mollis consequat convallis, dui mauris malesuada tellus, ac aliquet mauris odio sed nulla.
                     In tincidunt, arcu eu varius maximus, ante nisi ultricies justo, sed imperdiet est elit in eros.
                     Proin ullamcorper augue est, at viverra metus placerat ut. Aliquam nunc ipsum, dapibus vel tincidunt
                     at, sodales nec lacus. Sed eu aliquet augue. Etiam metus ex, sodales ac metus eu, lacinia egestas sapien.
                     Maecenas aliquet rhoncus nisi.
                 </p>
             </div>
             <div class="col-md-12">
                 <h2>Portfolio</h2>
                 <div class="col-md-3">
                     {!! Html::image('/portfolio/cabin.png') !!}
                </div>
                 <div class="col-md-3">
                     {!! Html::image('/portfolio/cake.png') !!}
                 </div>
                 <div class="col-md-3">
                     {!! Html::image('/portfolio/circus.png') !!}
                 </div>
             </div><br>
             <div class="col-md-12">
                 <div class="col-md-3">
                     {!! Html::image('/portfolio/game.png') !!}
                 </div>
                 <div class="col-md-3">
                     {!! Html::image('/portfolio/safe.png') !!}
                 </div>
                 <div class="col-md-3">
                     {!! Html::image('/portfolio/submarine.png') !!}
                 </div>
             </div>
         </div>
        </div>
    </div>
    @endsection