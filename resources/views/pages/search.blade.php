<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PostHome.com - Search</title>


    <!-- Font Awesome !-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
    <!-- Font Source Sans Pro Google !-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- OWl CSS-->
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
    <!-- OWl CSS-->
    <link rel="stylesheet" href="{{ asset("css/owl.theme.default.css") }}">
    <!-- Style CSS !-->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <!-- Bootstrap CSS !-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

</head>

<body>


    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">MyHome.com</a>
                    <br>
                    <span class="navbarAfter">sell with us!</span>
                </div>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">HOME</a>
                    </li>
                    <li>
                        <a href="#">ALL PROPERTIES</a>
                    </li>
                    <li>
                        <a href="#">ABOUT US</a>
                    </li>
                    <li>
                        <a href="#">SUPPORT</a>
                    </li>
                    <li>
                        <button class="btn btn-danger navbar-btn" data-toggle="modal" data-target="#myModal">LOG IN</button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>



    <div class="postIntroDiv">
        <div class="container">
            <h1 class="postIntro">Advanced search</h1>
            <span class="postAdress">
                <p>home ></p>
                <p>search</p>
            </span>
        </div>
    </div>


    <div class="container mainDiv">

<section class="Mainsearch">
    <div class="row MainSearchRow">
        <form action="">
            <div class="col-xs-3">
                <input class="ms-input ms-input-key" type="text" placeholder="Type keywords here">
            </div>
            <div class="col-xs-3">
                <select class="ms-input" name="" id="">
                    <option selected disabled value="a">All cities</option>
                    <option value="b">b</option>
                </select>
            </div>
            <div class="col-xs-3">
                <select class="ms-input" name="" id="">
                    <option selected disabled value="a">All type of sales</option>
                    <option value="b">b</option>
                </select>
            </div>
            <div class="col-xs-3">
                <button class="ms-input ms-button">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="col-xs-3">
                <select class="ms-input" name="" id="">
                    <option selected disabled value="a">All type of properties</option>
                    <option value="b">b</option>
                </select>
            </div>
            <div class="col-xs-3">
                <select class="ms-input" name="" id="">
                    <option selected disabled value="a">Rooms</option>
                    <option value="b">b</option>
                </select>
            </div>
            <div class="col-xs-3">
                <select class="ms-input" name="" id="">
                    <option selected disabled value="a">Bedrooms</option>
                    <option value="b">b</option>
                </select>
            </div>
            <div class="col-xs-3">
                <select class="ms-input" name="" id="">
                    <option selected disabled value="a">Bathrooms</option>
                    <option value="b">b</option>
                </select>
            </div>
            <div class="col-xs-3">
                <input class="ms-input" type="number" placeholder="Min. price">
            </div>
            <div class="col-xs-3">
                <input class="ms-input" type="number" placeholder="Max. price">
            </div>
            <div class="col-xs-3">
                <input class="ms-input" type="number" placeholder="Min. area">
            </div>
            <div class="col-xs-3">
                <input class="ms-input" type="number" placeholder="Max. area">
            </div>
        </form>
    </div>
</section>

        <section class="MainResult">
            <div class="row mainResultRow">
                <div class="col-md-4 adDivSearchCol">
                    <div class="container-fluid adDiv adDivSearch">
                        <img class="adImg" src="images/1.jpg" alt="">
                        <span class="sale">SALE</span>
                        <p class="city">
                            <i class="fa fa-map-marker"></i> Chigago</p>
                        <i class="fa fa-star-o star"></i>
                        <p class="price">
                            <i class="fa fa-dollar"></i> 420.000</p>
                        <span class="sqmP">
                            <i class="fa fa-dollar"> 750/sq.m</i>
                        </span>
                        <p class="sqm">
                            <i class="fa fa-dollar"></i> 540 sq.m</p>
                        <span class="rooms">
                            <i class="fa fa-dollar"> 3 rooms</i>
                        </span>
                        <ul class="adBottom">
                            <li>
                                <p class="name">
                                    <i class="fa fa-user"></i> Jeff Beck</p>
                            </li>
                            <li>
                                <p class="date">
                                    <i class="fa fa-calendar"></i> 1 day ago</p>
                            </li>
                            <li>
                                <button class="btn moreButton">MORE</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 adDivSearchCol">
                    <div class="container-fluid adDiv adDivSearch">
                        <img class="adImg" src="images/1.jpg" alt="">
                        <span class="sale">SALE</span>
                        <p class="city">
                            <i class="fa fa-map-marker"></i> Chigago</p>
                        <i class="fa fa-star-o star"></i>
                        <p class="price">
                            <i class="fa fa-dollar"></i> 420.000</p>
                        <span class="sqmP">
                            <i class="fa fa-dollar"> 750/sq.m</i>
                        </span>
                        <p class="sqm">
                            <i class="fa fa-dollar"></i> 540 sq.m</p>
                        <span class="rooms">
                            <i class="fa fa-dollar"> 3 rooms</i>
                        </span>
                        <ul class="adBottom">
                            <li>
                                <p class="name">
                                    <i class="fa fa-user"></i> Jeff Beck</p>
                            </li>
                            <li>
                                <p class="date">
                                    <i class="fa fa-calendar"></i> 1 day ago</p>
                            </li>
                            <li>
                                <button class="btn moreButton">MORE</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 adDivSearchCol">
                    <div class="container-fluid adDiv adDivSearch">
                        <img class="adImg" src="images/1.jpg" alt="">
                        <span class="sale">SALE</span>
                        <p class="city">
                            <i class="fa fa-map-marker"></i> Chigago</p>
                        <i class="fa fa-star-o star"></i>
                        <p class="price">
                            <i class="fa fa-dollar"></i> 420.000</p>
                        <span class="sqmP">
                            <i class="fa fa-dollar"> 750/sq.m</i>
                        </span>
                        <p class="sqm">
                            <i class="fa fa-dollar"></i> 540 sq.m</p>
                        <span class="rooms">
                            <i class="fa fa-dollar"> 3 rooms</i>
                        </span>
                        <ul class="adBottom">
                            <li>
                                <p class="name">
                                    <i class="fa fa-user"></i> Jeff Beck</p>
                            </li>
                            <li>
                                <p class="date">
                                    <i class="fa fa-calendar"></i> 1 day ago</p>
                            </li>
                            <li>
                                <button class="btn moreButton">MORE</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 adDivSearchCol">
                    <div class="container-fluid adDiv adDivSearch">
                        <img class="adImg" src="images/1.jpg" alt="">
                        <span class="sale">SALE</span>
                        <p class="city">
                            <i class="fa fa-map-marker"></i> Chigago</p>
                        <i class="fa fa-star-o star"></i>
                        <p class="price">
                            <i class="fa fa-dollar"></i> 420.000</p>
                        <span class="sqmP">
                            <i class="fa fa-dollar"> 750/sq.m</i>
                        </span>
                        <p class="sqm">
                            <i class="fa fa-dollar"></i> 540 sq.m</p>
                        <span class="rooms">
                            <i class="fa fa-dollar"> 3 rooms</i>
                        </span>
                        <ul class="adBottom">
                            <li>
                                <p class="name">
                                    <i class="fa fa-user"></i> Jeff Beck</p>
                            </li>
                            <li>
                                <p class="date">
                                    <i class="fa fa-calendar"></i> 1 day ago</p>
                            </li>
                            <li>
                                <button class="btn moreButton">MORE</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 adDivSearchCol">
                    <div class="container-fluid adDiv adDivSearch">
                        <img class="adImg" src="images/1.jpg" alt="">
                        <span class="sale">SALE</span>
                        <p class="city">
                            <i class="fa fa-map-marker"></i> Chigago</p>
                        <i class="fa fa-star-o star"></i>
                        <p class="price">
                            <i class="fa fa-dollar"></i> 420.000</p>
                        <span class="sqmP">
                            <i class="fa fa-dollar"> 750/sq.m</i>
                        </span>
                        <p class="sqm">
                            <i class="fa fa-dollar"></i> 540 sq.m</p>
                        <span class="rooms">
                            <i class="fa fa-dollar"> 3 rooms</i>
                        </span>
                        <ul class="adBottom">
                            <li>
                                <p class="name">
                                    <i class="fa fa-user"></i> Jeff Beck</p>
                            </li>
                            <li>
                                <p class="date">
                                    <i class="fa fa-calendar"></i> 1 day ago</p>
                            </li>
                            <li>
                                <button class="btn moreButton">MORE</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 adDivSearchCol">
                    <div class="container-fluid adDiv adDivSearch">
                        <img class="adImg" src="images/1.jpg" alt="">
                        <span class="sale">SALE</span>
                        <p class="city">
                            <i class="fa fa-map-marker"></i> Chigago</p>
                        <i class="fa fa-star-o star"></i>
                        <p class="price">
                            <i class="fa fa-dollar"></i> 420.000</p>
                        <span class="sqmP">
                            <i class="fa fa-dollar"> 750/sq.m</i>
                        </span>
                        <p class="sqm">
                            <i class="fa fa-dollar"></i> 540 sq.m</p>
                        <span class="rooms">
                            <i class="fa fa-dollar"> 3 rooms</i>
                        </span>
                        <ul class="adBottom">
                            <li>
                                <p class="name">
                                    <i class="fa fa-user"></i> Jeff Beck</p>
                            </li>
                            <li>
                                <p class="date">
                                    <i class="fa fa-calendar"></i> 1 day ago</p>
                            </li>
                            <li>
                                <button class="btn moreButton">MORE</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <footer>
        <div class="container">
            <div class="col-md-3 push-left">
                <ul class="footerUL">
                    <li class="footerOurC"> OUR CONTACTS</li>
                    <li class="footerCountry"> Azerbaijan</li>
                    <li class="footerAdress">
                        <i class="footerMapIcon fa fa-map-marker"></i> 27th St New York, NY 10001</li>
                    <li class="footerNumber">
                        <i class="footerPhoneIcon fa fa-phone"></i> +1 212-217-7999</li>
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


    <!-- Jquerys !-->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript !-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <!-- OWl JS !-->
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
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        });
        $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
        $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
    </script>
</body>

</html>
