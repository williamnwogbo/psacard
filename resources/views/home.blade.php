<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
    <meta name="author" content="Cruz" />
    <meta name="description" content="Get the latest prices " />
    <meta name="keywords" content="PSACARD API" />
    <title>PSACARD EXTRACTOR</title>
    <link rel="stylesheet" href="/frontend/css/swiper.css">
    <link rel="stylesheet" href="/style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="header__content header__content--fix-width">
        <div class="header__logo-title">PSACARD EXTRACTOR</div>
        <nav class="header__menu">
            <ul>
                <li><a class="selected header-link" href="#intro">HOME</a></li>
                <li><a href="#pricing" class="header-link">Collections</a></li>
                <li class="header__btn header__btn--login"><a href="{{ url('/login') }}">LOGIN</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Section intro -->
<section class="section section--intro" id="intro">
    <div class="section__content section__content--fix-width section__content--intro">
        <div class="intro">
            <div class="intro__content">
                <div class="intro__title"><span>PSACARD</span> PRICE </div>
                <div class="intro__subtitle">With this site you can easily view PSA graded card population reports and sales.</div>
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" style="padding: 10px;
    width: 30%;" aria-label="Search"
                           aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary">search</button>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- Section -->
{{--<section class="section section--cta" id="cta">--}}
    {{--<div class="section__content section__content--fix-width section__content--padding">--}}
        {{--<h2 class="section__title section__title--centered section__title--cta">Get Started Now!</h2>--}}
        {{--<div class="section__description section__description--centered section__description--cta">--}}
            {{--Get an account today and gain unlimited access to our rates--}}
        {{--</div>--}}
        {{--<div class="intro__buttons intro__buttons--centered">--}}
            {{--<a href="{{ route('register') }}" class="btn btn--green-bg">CREATE AN ACCOUNT</a>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<svg class="svg-cta-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">--}}
        {{--<polygon fill="#fff" points="0,100 100,0 0,0"/>--}}
    {{--</svg>--}}
{{--</section>--}}


<footer class="footer" id="footer">
    <div class="footer__content footer__content--fix-width footer__content--svg">

        <div class="grid grid--5col grid--footer">

            <div class="grid__item grid__item--x2">
                <h3 class="grid__title grid__title--footer-logo">PSACARD EXTRACTOR</h3>
                <p class="grid__text grid__text--copyright">Copyright &copy; {{ date('Y') }} PSACARD EXTRACTOR.  <br />All Rights Reserved. </p>
                <ul class="grid__list grid__list--sicons">
                    <li><a href="#"><img src="/frontend/images/social/black/twitter.png" alt="" title=""/></a></li>
                    <li><a href="#"><img src="/frontend/images/social/black/facebook.png" alt="" title=""/></a></li>
                    <li><a href="#"><img src="/frontend/images/social/black/linkedin.png" alt="" title=""/></a></li>
                </ul>
            </div>


            <div class="grid__item">
                <h3 class="grid__title grid__title--footer">Info</h3>
                <ul class="grid__list grid__list--fmenu">
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Press</a></li>

                </ul>
            </div>

        </div>

        <div class="clear"></div>
    </div>

</footer>

   <!-- Modal for animation -->
<script src="/frontend/js/jquery-3.3.1.min.js"></script>
<script src="/frontend/js/jquery.custom.js"></script>
<script src="/frontend/js/swiper.min.js"></script>
<script src="/frontend/js/swiper.custom.js"></script>
<script src="/frontend/js/menu.js"></script>
</body>
</html>