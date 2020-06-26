<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">IBIT-CTG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('website.aboutus')}}">About US</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admission
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('website.addmission-info')}}">Admission info</a>
                        <a class="dropdown-item" href="">Admission Form</a>

                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Course
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Computer Technology</a>
                        <a class="dropdown-item" href="#">Electrical Technology</a>
                        <a class="dropdown-item" href="#">Civil Technology</a>
                        <a class="dropdown-item" href="#">Textile Technology</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Facilities</a>
                <li class="nav-item">
                    <a class="nav-link" href="#">Library</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Result</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Notice
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('website.notice')}}">Notice</a>
                        <a class="dropdown-item" href="">Download</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('website.gallery')}}">Photo Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Carrer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('website.contact')}}">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
