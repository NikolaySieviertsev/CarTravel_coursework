@extends ('layout')
@section('container')
<html>
    <head>
        <title>CarTravel</title>
        <link rel="shortcut icon" href="images/browser_logo.png" type="image/png">
    </head>
    <body>
        <header>
            <div class="header">
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
                    <div class="text_header_1">Ексклюзивні світові <br> автомобільні тури</div>
                    <div class="text_header_1_1">Отримай незабутні враження</div>
                </div>
                <div class="botHeader">
                    <button class="button1" onclick="window.location.href='{{ url('tours')}}'"><div>Обрати тур</div></button>
                </div>
            </div>
        </header>
        <main>
            <div class="main">
                <div class="h_type">Весь світ з CarTravel!</div>
                <div class="module_1">
                    <div class="landing_text">
                        <p>Компанія Car Travel має професійний досвід у сфері виїзного туризму і пропонує на українському туристичному ринку тільки високоякісний турпродукт.</p>
                        <p>Здійснюються програми автоперевезень на чартерній і регулярній основі з великих міст України та інших країн світу. Офіси компанії Car Travel функціонують в столиці країни Києві, а також в Запоріжжі, Львові, Одесі та Харкові.</p>
                        <p>У компанії приділяють величезну увагу системі управління якістю та людських ресурсів. Бренд Car Travel позиціонується на українському ринку як марка надійності та якості, що накладає особливу відповідальність на діяльність компанії та є стимулом для подальшого розвитку і вдосконалення.</p>
                    </div>
                    <div class="img_time_to_travel"><img src="images/time_to_travel.png"></div>
                </div>
                <div id="h_type_2" class="h_type">Наші найпопулярніші автомобілі:</div>
                <div class="module_2">
                    <div class="three_cars_tiles_landing">
                        <a href="{{ url('cars')}}"><div class="inside_one_car_form_landing">
                                <img src="images/jeep.png">
                                <p>від 35$/день</p>
                            </div></a>
                        <a href="{{ url('cars')}}"><div class="inside_one_car_form_landing">
                                <img id="mustang" src="images/mustang.png">
                                <p>від 60$/день</p>
                            </div></a>
                        <a href="{{ url('cars')}}"><div class="inside_one_car_form_landing">
                                <img src="images/porsche.png">
                                <p>від 100$/день</p>
                            </div></a>
                    </div>
                </div>
                <div class="h_type">Гарячі тури:</div>
                <div class="module_3">
                    <div class="four_tours_palette">
                        <div class="four_tours_form"><a href="{{ url('tours')}}"><img src="images/ukraine_tour.png"></a></div>
                        <div class="four_tours_form"><a href="{{ url('tours')}}"><img src="images/spain_tour.png"></a></div>
                        <div class="four_tours_form"><a href="{{ url('tours')}}"><img src="images/montenegro_tour.png"></a></div>
                        <div class="four_tours_form"><a href="{{ url('tours')}}"><img src="images/turkey_tour.png"></a></div>
                    </div>
                </div>
                <div class="h_type">Чому туристи обирають CarTravel:</div>
                <div class="module_4">
                    <div class="four_pros_palette">
                        <div id="two_pros_block_1" class="two_pros_block">
                            <div id="pros_form_1" class="four_pros_form">
                                <img src="images/pros_1.png">
                                <p>Надійно</p>
                            </div>
                            <div id="pros_form_2" class="four_pros_form">
                                <img src="images/pros_2.png">
                                <p>Вигідно</p>
                            </div>
                        </div>
                        <div class="two_pros_block">
                            <div id="pros_form_3" class="four_pros_form">
                                <img src="images/pros_3.png">
                                <p>Відпочинок <br> для всіх</p>
                            </div>
                            <div id="pros_form_4" class="four_pros_form">
                                <img src="images/pros_4.png">
                                <p>Великий <br> вибір</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
@endsection