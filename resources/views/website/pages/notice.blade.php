@include('website.layout.style')
@include('website.layout.header')
@include('website.layout.nav')

<div class="row">
    <div class="col-sm-12">

        <div class="card-About" >
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Notice</li>
                <p>




                    {{--<img src="{{asset('website/images/'.'Liflet-2019-1.jpg')}}">--}}
                    <img src="{{asset('website/images/'.'aboutus.png')}}">



                </p>
            </ul>
        </div>


    </div>


</div>





@include('website.layout.footer')