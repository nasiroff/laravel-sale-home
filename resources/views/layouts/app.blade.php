<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset("css/owl.carousel.min.css")!!}">
    <link rel="stylesheet" href="{!! asset("css/owl.theme.default.css")!!}">
    <link rel="stylesheet" href="{!! asset("css/style.css")!!}">
    <link href="{!! asset("css/bootstrap.min.css") !!}" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
</head>
<body>
<header>
    <!-- navbar -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">PostHome.com</a>
                <br>
                <span class="navbarAfter">sell with us!</span>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a class="navbarText" href="{{ url('/') }}">HOME</a>
                </li>
                <li>
                    <a class="navbarText" href="{{ url('properties') }}">ALL PROPERTIES</a>
                </li>
                <li>
                    <a class="navbarText" href="{{ url('about') }}">ABOUT US</a>
                </li>
                <li>
                    <a class="navbarText" href="{{ url('support') }}">SUPPORT</a>
                </li>
                @if (is_object(Auth::user()))
                    <li>
                        <a href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false" class="loggedNavName">Hi, {{ Auth::user()->first_name }}</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('user/posts') }}"> <i class="fa fa-sticky-note"></i> My Posts</a>
                            </li>
                            <li>
                                <a href="{{ url('user/favorite') }}"> <i class="fa fa-star"></i> My Favorites</a>
                            </li>
                            <li>
                                <a href="{{ url('user/create-post') }}"> <i class="fa fa-plus-circle"></i> New Post</a>
                            </li>
                            <li>
                                <a href="{{ url('user/setting') }}"> <i class="fa fa-cog"></i> Settings</a>
                            </li>
                            <li>
                                <a href="{{ url('user/logout') }}"> <i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li>
                        <a class="btn btn-danger navbar-btn text-white" href="{{ url('login') }}">LOG IN</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
@yield('content')
<footer>
    <div class="container">
        <div class="col-md-3 push-left">
            <ul class="footerUL">
                <li class="footerOurC"> OUR CONTACTS</li>
                <li class="footerCountry"> USA</li>
                <li class="footerAdress">
                    <i class="footerMapIcon fa fa-map-marker"></i> 27th St New York, NY 10001
                </li>
                <li class="footerNumber">
                    <i class="footerPhoneIcon fa fa-phone"></i> +1 212-212-2121
                </li>
            </ul>
        </div>
        <div class="col-md-4 pull-right">
            <ul class="footerUL">
                <li class="footerOurC">OUR NEWSLETTER</li>
                <li class="footerInputLi">
                    <input class="footerInput" type="text" placeholder="Your email">
                    <button class="footerButton">SUBSCRIBE</button>
                </li>
            </ul>
            <ul class="footerUl footerUlSocial">
                <li>
                    <a href="#">
                        <i class="footerSocialIcons fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="footerSocialIcons fa fa-youtube-play " aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="footerSocialIcons fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="footerSocialIcons fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <h5 class="footerOutro">All rights reserved 2018</h5>
</footer>
<script src="{!! asset("js/jquery-3.3.1.js") !!}" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src="{!! asset("js/bootstrap.min.js") !!}"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="{!! asset("js/owl.carousel.js") !!}"></script>
<script>
    $('.owl-carousel').owlCarousel({
        stagePadding: 50,
        loop: true,
        margin: 70,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });
    $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
</script>
</body>
</html>
