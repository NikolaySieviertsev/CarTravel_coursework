@extends ('layout')
@section('container')
<html>
<head>
	<title>Замовлення авто</title>
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
		<div class="text_header_1">Найбільший прокат авто <br> серед усіх туроператорів</div>
        <div class="text_header_1_1">Обери авто для туру на власний смак</div>
	</div>
</div>
</header>
<main>
	<div class="main">
		<div class="h_type">Інформація про авто:</div>
		<div class="one_car_layout">
			<div class="one_car_layout_left">
				<img src="{{url('images/car'.$car->id.'.png')}}">
			</div>
			<div class="one_car_layout_right">
				<div class="text_1half">
					<p>Марка та модель:</p>
					<p>Тип КПП:</p>
					<p>Тип двигуна:</p>
					<p>Кількість місць:</p>
					<p>Ціна:</p>
				</div>
				<div class="text_2half">
					<p>{{$car->name}}</p>
					<p>{{$car->gearbox}}</p>
					<p>{{$car->engine}}</p>
					<p>{{$car->capacity}} місць</p>
					<p>від {{$car->price}}$/день</p>
				</div>
			</div>			
		</div>
		<button class="button_order" onclick="window.location.href='{{ url('contact_us')}}'"><div>Замовити</div></button>
		<button class="button_home" onclick="window.location.href='{{ url('cars')}}'"><div>Назад</div></button>
	</div>
</main>
</body>
</html>
@endsection
