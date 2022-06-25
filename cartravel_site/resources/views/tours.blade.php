@extends ('layout')
@section('container')
<html>
    <head>
        <title>Тури</title>
        <link rel="shortcut icon" href="images/browser_logo.png" type="image/png">
    </head>
    <body>
    <header>
        <div class="header_cars">
            <div class="topHeader">
                <div class="logo">
                    <div class="logoimg"><a href="{{ url('/')}}"><img src="images/logoimg.png"></a></div>
                    <div class="logoname"><div><a href="{{ url('/')}}">CarTravel</a></div></div>
                </div>

                <div id="helper" class="turi"><a href="{{ url('tours')}}">Тури</a></div>

                <div id="helper" class="avto"><a href="{{ url('cars')}}">Авто</a></div>

                <div id="helper" class="akcii"><a href="{{ url('sales')}}">Акції</a></div>

                <div id="helper" class="proCompany"><a href="{{ url('about')}}">Про компанію</a></div>

                <div id="helper" class="contact">
                    <div class="contactimg"><img src="images/phone_icon.png"></div>
                    <div class="contactname"><div><a href="tel:+380501089555">+380501089555</a></div></div>
                </div>
                <div class="burger_block">
                    <input class="burger_checkbox" type="checkbox" id="burger">
                    <label for="burger"></label>
                    <nav  class="burger_nav">
                        <ul>
                            <li class="burger_link"><a href="{{ url('/')}}">&#10140; Головна</a></li>
                            <li class="burger_link"><a href="{{ url('tours')}}">&#10140; Тури</a></li>
                            <li class="burger_link"><a href="{{ url('cars')}}">&#10140; Авто</a></li>
                            <li class="burger_link"><a href="{{ url('sales')}}">&#10140; Акції</a></li>
                            <li class="burger_link"><a href="{{ url('about')}}">&#10140; Про компанію</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="midHeader">
                <div id="t_h_320_1" class="text_header_1">Найоптимальніший вибір турів <br> серед усіх туроператорів</div>
                <div id="t_h_320_2" class="text_header_1_1">Обери найбажаніший та найзручніший авто-тур</div>
            </div>
        </div>
    </header>
    <main>
        <div class="main">
            <div class="h_type">Тури CarTravel:</div>
            <div class="module_1">
                <div class="six_tours_tiles">
                @if (count($tours)>0)
                    @foreach($tours as $tour)
                        @if(($loop->index % 3) == 0)
                    <div id="three_cars_tiles_1" class="three_cars_tiles">
                        @endif
                        <div class="one_car_form">
                            <div id="tour_img_{{$tour->id}}" class="inside_one_tour_form">
                                <p>від {{$tour->price}}$</p>
                            </div>
                            <div class="inside_car_form_text">
                                <p id="car_name">{{$tour->country}}</p>
                                <p>{{$tour->stops}} зупинок</p>
                                <p>{{$tour->duration}} ночей</p>
                                <p>{{$tour->living}}</p>
                            </div>
                            <button class="button_car" onclick="window.location.href='{{ url('tour_order/'.$tour->id)}}'"><div>Обрати</div></button>
                        </div>
                        @if((((($loop->index)+1) % 3) == 0) and ($loop->index != 0))
                    </div>
                    @endif
                    @endforeach
                    </div>
                </div>
                @endif
            </div>
            <div class="module_2">
                <button class="button_more" onclick="window.location.href='{{ url('contact_us')}}'"><div>Більше</div></button>
            </div>
        </div>
    </main>
    </body>
</html>
@endsection
