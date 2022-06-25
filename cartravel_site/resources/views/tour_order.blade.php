@extends ('layout')
@section('container')
<html>
<head>
	<title>Замовлення туру</title>
    <link rel="shortcut icon" href="{{url('images/browser_logo.png')}}" type="image/png">
</head>
<body>
<header>
<div class="header_cars">
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
		<div id="t_h_320_1" class="text_header_1">Найоптимальніший вибір турів <br> серед усіх туроператорів</div>
        <div id="t_h_320_2" class="text_header_1_1">Обери найбажаніший та найзручніший авто-тур</div>
	</div>
</div>
</header>
<main>
	<div class="main">
		<div class="h_type">Інформація про тур:</div>
		<div class="one_car_layout">
			<div id="one_tour_layout_left" class="one_car_layout_left">
				<img src="{{url('images/tour'.$tour->id.'.png')}}">
			</div>
			<div class="one_car_layout_right">
				<div class="text_1half">
					<p>Країна:</p>
					<p>Зупинки:</p>
					<p>Тривалість:</p>
					<p>Проживання:</p>
					<p>Ціна:</p>
				</div>
				<div class="text_2half">
					<p>{{$tour->country}}</p>
					<p>{{$tour->stops}} зупинок</p>
					<p>{{$tour->duration}} ночей</p>
					<p>{{$tour->living}}</p>
					<p>від {{$tour->price}}$</p>
				</div>
			</div>			
		</div>
		<button class="button_order" onclick="window.location.href='{{ url('contact_us')}}'"><div>Замовити</div></button>
		<button class="button_home" onclick="window.location.href='{{ url('tours')}}'"><div>Назад</div></button>
	</div>
</main>
</body>
</html>
@endsection