@include('website.layout.style')
@include('website.layout.header')
@include('website.layout.nav')

<div class="row">
    <div class="col-sm-9">

        <div class="card-About" >
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Admission info</li>
                <p>

                    <img src="{{asset('website/images/'.'Liflet-2019-1.jpg')}}">
                    <img src="{{asset('website/images/'.'Liflet-2019-2.jpg')}}">


                </p>
            </ul>
        </div>


    </div>
    <div class="col-sm-">



    </div>

    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                Notice Board
            </div>
        </div>

        <div class="card-center" style="width: 18rem;">

            <div class="card-body">
                <h3 class="card-title">Office Notice</h3>
                <p class="card-text">Stay at home for saftey self and nation. </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Rightside</li>
                <li class="list-group-item">Admission Result</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>

        </div>



    </div>
</div>


</div>


<div class="row">
    <div class="col-sm-9">



    </div>

    @include('website.layout.down-right-result')


</div>
@include('website.layout.footer')