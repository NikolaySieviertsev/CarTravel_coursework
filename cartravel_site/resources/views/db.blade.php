@extends ('layout')
@section('container')
<html>
    <head>
        <title>БД</title>
        <link rel="shortcut icon" href="{{url('images/browser_logo.png')}}" type="image/png">
    </head>
    <body>
    <header>
        <div id="header_db" class="header_info">
            <div class="topHeader">
                <div class="logo">
                    <div class="logoimg"><a href="{{ url('/')}}"><img src="{{url('images/logoimg.png')}}"></a></div>
                    <div class="logoname"><div><a href="{{ url('/')}}">CarTravel</a></div></div>
                </div>

                <div id="helper" class="turi"><a href="{{ url('tours')}}">Тури</a></div>

                <div id="helper" class="avto"><a href="{{ url('cars')}}">Авто</a></div>

                <div id="helper" class="akcii"><a href="{{ url('sales')}}">Акції</a></div>

                <div id="helper" class="proCompany"><a href="{{ url('about')}}">Про компанію</a></div>

                <div id="helper" class="contact">
                    <div class="contactimg"><img src="{{url('images/phone_icon.png')}}"></div>
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
                <div class="text_header_2">CarTravel Database</div>
                <div class="text_header_2_2">Зв'язки між таблицями</div>
            </div>
        </div>
    </header>
    <main>
        <div class="main">
                <div class="h_type">Робота з базами даних:</div>
                <div id="db_body" class="module_1">
                    @foreach($managers as $manager)
                    <p>Менеджер, який організував подорож з id: {{($manager->pivot->trip_id)}}</p>
                    <p>{{$manager->name}} {{$manager->surname}}</p>
                    <p>{{$manager}}<br><br></p>
                    @endforeach
                    @foreach($trips as $trip)
                    <p>Подорожі, організовані менеджером з id: {{$trip->pivot->manager_id}}</p>
                    <p>{{$trip->name}}</p>
                    <p>{{$trip}}<br><br></p>
                    @endforeach
                    <p>Подорожі, замовлені клієнтом з id: 1 </p>
                    <p>{{$my_trips}}<br><br></p>
                    <p>Клієнти, які замовляли подорожі з id: 3 </p>
                    <p>{{$my_clients}}<br><br></p>
                </div>
                <div class="module_2">
                    <button class="button_home" onclick="window.location.href='{{ url('/')}}'"><div>Назад</div></button>
                </div>
            </div>
    </main>
</html>
@endsection