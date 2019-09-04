@extends("layouts.app")

@section('title', "Home sale. Home page")

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{!! asset("img/carousel1-01.jpg") !!}">
                <div class="container">
                    <button class="btn getButton">GET STARTED</button>
                </div>
            </div>
            <div class="item">
                <img src="{!! asset("img/carousel2-01.jpg") !!}">
                <div class="container">
                    <button class="btn getButton">GET STARTED</button>
                </div>
            </div>
        </div>
    </div>
    @if (Session::has('message'))
        {{ Session::get('message') }}
    @endif
    <div class="container mainDiv">
        <h2 class="searchIntro">Welcome to PostHome.com. Currently we have 111 properites for sale and rent.
            <br> Join us and find your dream house now!</h2>

        <!-- search bar -->
        <section class="search">

            <div class="row MainSearchRow">
                <form action="">
                    <div class="col-xs-3">
                        <input name="key_word" class="ms-input ms-input-key" type="text"
                               placeholder="Type keywords here">
                    </div>
                    <div class="col-xs-3">
                        <select name="cities" class="ms-input" name="" id="">
                            <option value="">All cities</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xs-3">
                        <select name="type" class="ms-input" name="" id="">
                            <option value="">All type of sales</option>
                            <option value="sale">Sale</option>
                            <option value="rent">Rent</option>
                        </select>
                    </div>
                    <div class="col-xs-3">
                        <button class="ms-input ms-button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- recently added -->
        <section class="recently">
            <div class="row recentlyRow">
                <h6 class="recentlyRowIntro">Recently added</h6>
                <div class="owl-carousel owl-theme">
                    @foreach($posts as $post)
                        <div class="item">
                            <div class="container-fluid adDiv">
                                <img class="adImg" src="{!! Storage::url($post->image_path) !!}" alt="">
                                <span class="sale">{{ $post->post_type }}</span>
                                <p class="city">
                                    <i class="fa fa-map-marker"></i>{{ $post->city_name }}</p>
                                <i class="fa fa-star-o star"></i>
                                <p class="price">
                                    <i class="fa fa-dollar"></i> {{ $post->price }}</p>
                                <span class="sqmP">
                                <i class="fa fa-dollar"> {{ $post->price/$post->area }}/sq.m</i>
                            </span>
                                <p class="sqm"> {{ $post->area }} sq.m</p>
                                <span class="rooms">{{ $post->room_count }} rooms
                            </span>
                                <ul class="adBottom">
                                    <li>
                                        <p class="name">
                                            <i class="fa fa-user"></i> {{ $post->user_first_name." ".$post->user_last_name  }}</p>
                                    </li>
                                    <li>
                                        <p class="date">
                                            <i class="fa fa-calendar"></i> {{ calcTimeDiff($post->created_at) }}</p>
                                    </li>
                                    <li>
                                        <a class="btn moreButton">MORE</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Random for sale -->
        <section class="saleSection">
            <div class="row recentlyRow">
                <h6 class="recentlyRowIntro">Random for sale</h6>
                <div class="owl-carousel owl-theme">
                    @foreach($randomSale as $post)
                        <div class="item">
                            <div class="container-fluid adDiv">
                                <img class="adImg" src="{!! Storage::url($post->image_path) !!}" alt="">
                                <span class="sale">{{ $post->post_type }}</span>
                                <p class="city">
                                    <i class="fa fa-map-marker"></i>{{ $post->city_name }}</p>
                                <i class="fa fa-star-o star"></i>
                                <p class="price">
                                    <i class="fa fa-dollar"></i> {{ $post->price }}</p>
                                <span class="sqmP">
                                <i class="fa fa-dollar"> {{ $post->price/$post->area }}/sq.m</i>
                            </span>
                                <p class="sqm"> {{ $post->area }} sq.m</p>
                                <span class="rooms">{{ $post->room_count }} rooms
                            </span>
                                <ul class="adBottom">
                                    <li>
                                        <p class="name">
                                            <i class="fa fa-user"></i> {{ $post->user_first_name." ".$post->user_last_name  }}</p>
                                    </li>
                                    <li>
                                        <p class="date">
                                            <i class="fa fa-calendar"></i> {{ calcTimeDiff($post->created_at) }}</p>
                                    </li>
                                    <li>
                                        <a class="btn moreButton">MORE</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Random for rent -->
        <section class="rentSection">
            <div class="row recentlyRow">
                <h6 class="recentlyRowIntro">Random for rent</h6>
                <div class="owl-carousel owl-theme">
                    @foreach($randomRent as $post)

                        <div class="item">
                            <div class="container-fluid adDiv">
                                <img class="adImg" src="{!! Storage::url($post->image_path) !!}" alt="">
                                <span class="sale">{{ $post->post_type }}</span>
                                <p class="city">
                                    <i class="fa fa-map-marker"></i>{{ $post->city_name }}</p>
                                <i class="fa fa-star-o star"></i>
                                <p class="price">
                                    <i class="fa fa-dollar"></i> {{ $post->price }}</p>
                                <span class="sqmP">
                                <i class="fa fa-dollar"> {{ $post->price/$post->area }}/sq.m</i>
                            </span>
                                <p class="sqm"> {{ $post->area }} sq.m</p>
                                <span class="rooms">{{ $post->room_count }} rooms
                            </span>
                                <ul class="adBottom">
                                    <li>
                                        <p class="name">
                                            <i class="fa fa-user"></i> {{ $post->user_first_name." ".$post->user_last_name  }}</p>
                                    </li>
                                    <li>
                                        <p class="date">
                                            <i class="fa fa-calendar"></i> {{ calcTimeDiff($post->created_at) }}</p>
                                    </li>
                                    <li>
                                        <a class="btn moreButton">MORE</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


    </div>
@endsection
