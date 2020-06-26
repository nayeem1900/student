@php
$count=0;

@endphp
<div class="slider">

    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $slider)
            <div class="carousel-item @if($count==0){ active }@endif" data-interval="1000">
                <img src="{{asset('upload/slider_images/'.$slider->image)}}" class="d-block w-100" alt="...">
            </div>
                @php
                $count++

                @endphp

            @endforeach
        </div>

        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



</div>
