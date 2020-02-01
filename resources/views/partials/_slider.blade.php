
<div class="container mt-3">


    <div id="myCarousel" class="carousel slide" data-ride="carousel">


      <!-- Indicators -->
      {{-- <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="1" ></li>
        <li data-target="#myCarousel" data-slide-to="2" ></li>
        <li data-target="#myCarousel" data-slide-to="3" ></li>
      </ul> --}}

      <!-- The slideshow -->

      <div class="carousel-inner clearfix hidden-xs-block hidden-sm-block hidden-md-block ">
        @foreach ($sliders as $index=>$slider)
        <div class="carousel-item   {{ $index == 0 ? 'active' : '' }}">
        <img src="/images/{{$slider->image}}" alt="Los Angeles" style="margin: auto" >
        </div>

        @endforeach
      </div>


      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    </div>
