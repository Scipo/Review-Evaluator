<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ URL::to('/')}}">HOME</a></li>
                <li><a href="{{ URL::to('/review')}}">REVIEWS</a></li>
                <li><a href="{{ URL::to('/statistic')}}">STATISTICS</a></li>
             </ul>
        </div>
    </div>
</nav>