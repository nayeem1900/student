@include('website.layout.style')
@include('website.layout.header')
@include('website.layout.nav')



<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial;
    }

    /* The grid: Four equal columns that floats next to each other */
    .column {
        float: left;
        width: 25%;
        padding: 10px;
    }

    /* Style the images inside the grid */
    .column img {
        opacity: 0.8;
        cursor: pointer;
    }

    .column img:hover {
        opacity: 1;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* The expanding image container */
    .container {
        position: relative;
        display: none;
    }

    /* Expanding image text */
    #imgtext {
        position: absolute;
        bottom: 15px;
        left: 15px;
        color: white;
        font-size: 20px;
    }

    /* Closable button inside the expanded image */
    .closebtn {
        position: absolute;
        top: 10px;
        right: 15px;
        color: white;
        font-size: 35px;
        cursor: pointer;
    }
</style>



<body>

<div style="text-align:center">
    <h2>IBIT Image Gallery</h2>
    <p>Click on the images below:</p>
</div>

<!-- The four columns -->

<div class="row row-cols-4" style="padding-top: 10px;">
    <div class="col"><img src="{{asset('website/images/gallery/'.'DSC3377-414x414.jpg')}}" alt="Nature" style="width:100%" onclick="myFunction(this);"></div>
    <div class="col"><img src="{{asset('website/images/gallery/'.'DSC3378-600x600.jpg')}}" alt="Nature" style="width:100%" onclick="myFunction(this);"></div>
    <div class="col"><img src="{{asset('website/images/gallery/'.'DSC3393-130x130.jpg')}}" alt="Nature" style="width:100%" onclick="myFunction(this);"></div>
    <div class="col"><img src="{{asset('website/images/gallery/'.'DSC3434-1200x675.jpg')}}" alt="Nature" style="width:100%" onclick="myFunction(this);"></div>
    <div class="col"><img src="{{asset('website/images/gallery/'.'DSC3473-414x235.jpg')}}" alt="Nature" style="width:100%" onclick="myFunction(this);"></div>
    <div class="col"><img src="{{asset('website/images/gallery/'.'DSC3489-414x414.jpg')}}" alt="Nature" style="width:100%" onclick="myFunction(this);"></div>
    <div class="col"><img src="{{asset('website/images/gallery/'.'DSC3536-400x256.jpg')}}" alt="Nature" style="width:100%" onclick="myFunction(this);"></div>

</div>






<div class="container">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <img id="expandedImg" style="width:100%">
    <div id="imgtext"></div>
</div>

<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>

</body>











<!-- The grid: four columns -->
{{--<div class="row">
    <div class="column">
        <img src="img_nature.jpg" alt="Nature" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src="img_snow.jpg" alt="Snow" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src="img_mountains.jpg" alt="Mountains" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src="img_lights.jpg" alt="Lights" onclick="myFunction(this);">
    </div>
</div>--}}


<!-- The expanding image container -->
<div class="container">
    <!-- Close the image -->
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

    <!-- Expanded image -->
    <img id="expandedImg" style="width:100%">

    <!-- Image text -->
    <div id="imgtext"></div>
</div>










@include('website.layout.footer')