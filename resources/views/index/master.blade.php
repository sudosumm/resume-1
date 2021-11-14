<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/client/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>
    <title>Morteza</title>
    <link href="{{ asset('assets/client/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/client/css/all.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
<nav class="navbar navbar-expand-md fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menumel">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menumel">
        <ul class="navbar-nav text-center my-1">
            <li class="nav-item mx-1"><a class="nav-link mx-1" href="#home">صفحه اصلی</a></li>
            <li class="nav-item mx-1"><a class="nav-link mx-1" href="#documents">مدارک</a></li>
            <li class="nav-item mx-1"><a class="nav-link mx-1" href="#sample">نمونه کارها</a></li>
            <li class="nav-item mx-1"><a class="nav-link mx-1" href="#skill">میزان مهارت ها</a></li>
            <li class="nav-item mx-1"><a class="nav-link mx-1" href="#contact_us">تماس با ما</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-12 mb-5 text-center home">

            @include('index.includes.home')

            <hr>

            @include('index.includes.document')

            <hr>

            @include('index.includes.sample')

            <hr>

            @include('index.includes.skill')

            <hr>

            @include('index.includes.contactus')

        </div>
    </div>
</div>

@include('index.includes.fontawesome')

<hr>
<p class="text-center">تمامی حقوق متعلق به سایت <a class="rtlcopy" href="https://google.com/" target="_blank">SudoSu</a> می باشد.&copy;</p>
<script>
    // Scroll spy
    $(document).ready(function(){
        $('body').scrollspy({target: ".navbar", offset: 50});
        $("#menumel a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 500, function(){
                    window.location.hash = hash;
                });
            }
        });
    });
    // tooltip
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>


</html>
