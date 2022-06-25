<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai+Looped:wght@700&family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="{{url('images/browser_logo.png')}}" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
    </head>
    <body>
        @yield('container')
        <footer>
            <div class="footer">
                <div class="topFooter">
                    <div class="footer_text_block_1">
                        <p class="footer_headers">Контакти:</p>
                        <p class="footer_text_line"><a class="footer_link" href="{{ url('contact_us')}}">Адреса</a></p>
                        <p class="footer_text_line"><a class="footer_link" href="{{ url('contact_us')}}">Телефон</a></p>
                        <p class="footer_text_line"><a class="footer_link" href="https://www.gmail.com/">car_travel@gmail.com</a></p>
                    </div>
                    <div class="footer_text_block_2">
                        <p class="footer_headers">Інформація:</p>
                        <p class="footer_text_line"><a class="footer_link" href="{{ url('about')}}">Про нас</a></p>
                        <p class="footer_text_line"><a class="footer_link" href="{{ url('db\1\2')}}">БД</a></p>
                        <p class="footer_text_line"><a class="footer_link" href="{{ url('about')}}">Наша команда</a></p>
                        <p class="footer_text_line"><a class="footer_link" href="{{ url('tours')}}">Підбір туру</a></p>
                    </div>
                    <div class="footer_text_block_3">
                        <p id="footer_headers_3" class="footer_headers">Популярні напрямки:</p>
                        <p class="footer_text_line"><a class="footer_link" href="{{ url('tours')}}">Балі</a></p>
                        <p class="footer_text_line"><a class="footer_link" href="{{ url('tours')}}">Німеччина</a></p>
                        <p class="footer_text_line"><a class="footer_link" href="{{ url('tours')}}">Україна</a></p>
                    </div>
                    <div id="two_icons_1" class="footer_icons_block">
                        <div class="two_icons">
                            <div class="icon_blocks"><a href="https://www.facebook.com/"><img src="{{url('images/facebook.png')}}"></a></div>
                            <div class="icon_blocks"><a href="https://web.telegram.org/k/"><img src="{{url('images/telegram.png')}}"></a></div>
                        </div>
                        <div id="two_icons_2" class="two_icons">
                            <div class="icon_blocks"><a href="https://www.whatsapp.com/"><img src="{{url('images/whatsapp.png')}}"></a></div>
                            <div class="icon_blocks"><a href="https://www.instagram.com/"><img src="{{url('images/instagram.png')}}"></a></div>
                        </div>
                        <div id="two_icons_3" class="two_icons">
                            <div class="icon_blocks"><a href="https://www.twitter.com/"><img src="{{url('images/twitter.png')}}"></a></div>
                            <div class="icon_blocks"><a href="https://www.viber.com/"><img src="{{url('images/viber.png')}}"></a></div>
                        </div>
                    </div>
                </div>
                <div class="botFooter">
                    <div class="logo2">
                        <div class="logoimg2"><a href="{{ url('/')}}"><img src="{{url('images/logoimg2.png')}}"></a></div>
                        <div class="logoname2"><div><a href="{{ url('/')}}">CarTravel</a></div></div>
                    </div>
                    <div id="helper" class="contact2">
                        <div class="contactimg2"><img src="{{url('images/phone_icon_footer.png')}}"></div>
                        <div class="contactname2"><div><a href="tel:+380501089555">+380501089555</a></div></div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

