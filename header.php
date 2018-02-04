<?php require 'top-cache.php';
require 'config/db.php'; ?>
<?php require 'config/metadata.php';?>
<?php require 'function.php';?>
<title>
    <?php
    if (isset($title) && $title != NULL) {
        echo $title . " | Travel Agency Tropical - Dream becomes reality";
    } else {
        echo 'Travel Agency Tropical - Dream becomes reality';
    }
    ?>
</title>
<!-- Web Fonts -->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1455089917938637'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=1455089917938637&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- Font Awesome CSS -->
<link href="/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- Fontello CSS -->
<link href="/fonts/fontello/css/fontello.css" rel="stylesheet">
<!-- Plugins -->
<link href="/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
<link href="/plugins/rs-plugin/css/settings.css" rel="stylesheet">
<link href="/css/animations.css" rel="stylesheet">
<link href="/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
<link href="/plugins/hover/hover-min.css" rel="stylesheet">
<link href="/plugins/morphext/morphext.css" rel="stylesheet">
<!-- the project core CSS file -->
<link href="/css/style.css" rel="stylesheet" >
<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
<link href="/css/skins/light_blue.css" rel="stylesheet">
<!-- Custom css -->
<link href="/css/custom.css" rel="stylesheet">
</head>
<body class="no-trans front-page   ">
    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">
        <!-- header-container start -->
        <div class="header-container">
            <!-- header-top start -->
            <!-- classes:  -->
            <!-- "dark": dark version of header top e.g. class="header-top dark" -->
            <!-- "colored": colored version of header top e.g. class="header-top colored" -->
            <!-- ================ -->
            <div class="header-top" style="
            background-color: #2098d1;
            border-bottom: 1px solid #2aa4a5;
            color: #ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2 col-sm-5">
                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <div class="header-top-first clearfix">
                            <ul class="list-inline">
                             <li> Licenca A Понеделник / Петок od 09:00h - 16:30h Сабота од 10:00h - 13.30h</li>
                         </ul>
                         <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                            <div class="btn-group dropdown">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
                                <ul class="dropdown-menu dropdown-animation">
                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- header-top-first end -->
                </div>
                <div class="col-xs-10 col-sm-7">
                    <!-- header-top-second start -->
                    <!-- ================ -->
                    <div id="header-top-second"  class="clearfix text-right">
                        <ul class="list-inline">
                            <li><i class="fa fa-phone pr-5 pl-10"></i>+389 (02) 3231 055</li>
                            <li><i class="fa fa-envelope-o pr-5 pl-10"></i> info@tropical.mk</li>
                        </ul>
                    </div>
                    <!-- header-top-second end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-top end -->
    <!-- header start -->
    <!-- classes:  -->
    <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
    <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
    <!-- "full-width": mandatory class for the full-width menu layout -->
    <!-- "centered": mandatory class for the centered logo layout -->
    <!-- ================ -->
    <header class="header centered fixed clearfix">
        <div class="container">
            <div class="row">
                <!-- header-left start -->
                <!-- ================ -->
                <div class="col-md-12">
                    <!-- header-left start -->
                    <!-- ================ -->
                    <div class="header-left clearfix">
                        <!-- logo -->
                        <div id="logo" class="logo">
                            <a href="/"><img id="logo_img" src="/images/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <!-- header-left end -->
                </div>
                <!-- header-left end -->
            </div>
            <div class="col-md-12">
                <!-- header-right start -->
                <!-- ================ -->
                <div class="header-right clearfix">
                    <!-- main-navigation start -->
                    <!-- classes: -->
                    <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                    <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                    <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                    <!-- ================ -->
                    <div class="main-navigation  animated with-dropdown-buttons">
                        <!-- navbar start -->
                        <!-- ================ -->
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <!-- Toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <!-- main-menu -->
                                    <ul class="nav navbar-nav navbar-right">
                                        <!-- mega-menu start -->
                                        <li><a href="/">Почетна</a></li>
                                        <li><a href="/zanas">За нас</a></li>
                                        <li class="dropdown active mega-menu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Лето</a>
                                            <ul class="dropdown-menu" style="background-color: white">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                             <div class="col-sm-4 col-md-1">
                                                                <h4 class="title" style="color:black;">Грција</h4>
                                                                <div class="divider"></div>
                                                                 <h6 class="title" style="color:black;">Апартмани</h6>
                                                                <div class="divider"></div>
                                                                <ul class="menu" style="font-size: 13px">
                                                                    <li ><a href="/kasandraapartmani">Касандра</a></li>
                                                                    <li ><a href="/sitonijaapartmani">Ситонија</a></li>
                                                                    <li ><a href="/atosapartmani">Атос</a></li>
                                                                    <li ><a href="/neavrasna">Неа Врасна</a></li>
                                                                    <li ><a href="/pireaapartmani">Пиeриа</a></li>
                                                                    <h6 class="title" style="color:black;">Хотели</h6>
                                                                    <div class="divider"></div>
                                                                    <li ><a href="/kasandrahoteli">Касандра</a></li>
                                                                    <li ><a href="/sitonijahoteli">Ситонија</a></li>
                                                                    <li ><a href="/atoshoteli">Атос</a></li>
                                                                    <li ><a href="/pireahoteli">Пиeриа</a></li>
                                                                    <h6 class="title" style="color:black;">Острови</h6>
                                                                    <div class="divider"></div>
                                                                    <li ><a href="/lefkada">Лефкада</a></li>
                                                                    <li ><a href="/zakintos">Закинтос</a></li>
                                                                    <li ><a href="/krf">Крф</a></li>
                                                                    <li ><a href="/tasos">Тасос</a></li>
                                                                    <li ><a href="/skijatos">Скијатос</a></li>


                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-4 col-md-1">
                                                                <h4 class="title" style="color:black;">Бугарија</h4>
                                                                <div class="divider"></div>
                                                                <ul class="menu">
                                                                    <li ><a href="/bugarijahoteli"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                    <li ><a href="/bugarijaaranzmani"><i class="icon-suitcase pr-10"></i>Аражмани</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-4 col-md-1">
                                                                <h4 class="title" style="color:black;">Албанија</h4>
                                                                <div class="divider"></div>
                                                                <ul class="menu">
                                                                    <li ><a href="/albanijahoteli"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                    <li ><a href="/albanijaaranzmani"><i class="icon-suitcase pr-10"></i>Аражмани</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-4 col-md-1">
                                                                <h4 class="title" style="color:black;">Црна Гора</h4>
                                                                <div class="divider"></div>
                                                                <ul class="menu">
                                                                    <li ><a href="crnagorahoteli"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                    <li ><a href="crnagoraaranzmani"><i class="icon-suitcase pr-10"></i>Аражмани</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-4 col-md-1">
                                                                <h4 class="title" style="color:black;">Хрватска</h4>
                                                                <div class="divider"></div>
                                                                <ul class="menu">
                                                                    <li ><a href="/hrvatskahoteli"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                    <li ><a href="/hrvatskaaranzmani"><i class="icon-suitcase pr-10"></i>Аражмани</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-4 col-md-1">
                                                                <h4 class="title" style="color:black;">Шпанија</h4>
                                                                <div class="divider"></div>
                                                                <ul class="menu">
                                                                    <li ><a href="/spanijahoteli"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                    <li ><a href="/spanijaaranzmani"><i class="icon-suitcase pr-10"></i>Аражмани</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-4 col-md-1">
                                                                <h4 class="title" style="color:black;">Турција</h4>
                                                                <div class="divider"></div>
                                                                <ul class="menu">
                                                                    <li ><a href="/turcijahoteli"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                    <li ><a href="/turcijaaranzmani"><i class="icon-suitcase pr-10"></i>Аражмани</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- mega-menu end -->
                                    <li><li class="dropdown active mega-menu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Зима</a>
                                        <ul class="dropdown-menu" style="background-color: white">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-sm-4 col-md-2">
                                                                <h4 class="title" style="color:black;">Бугарија</h4>
                                                                <div class="divider"></div>
                                                                <ul class="menu">
                                                                    <li ><a href="/bansko"><i class="icon-suitcase pr-10"></i>Банско</a></li>
                                                                    <li ><a href="/borovec"><i class="icon-suitcase pr-10"></i>Боровец</a></li>
                                                                    <li ><a href="/pamporovo"><i class="icon-suitcase pr-10"></i>Пампорово</a></li>
                                                                    <li ><a href="/razlog.php"><i class="icon-suitcase pr-10"></i>Разлог</a></li>
                                                                    <li ><a href="/bugarijaaranzmanizima.php"><i class="icon-suitcase pr-10"></i>Аражмани</a></li>
                                                                </div>
                                                                <div class="col-sm-4 col-md-2">
                                                                    <h4 class="title" style="color:black;">Србија</h4>
                                                                    <div class="divider"></div>
                                                                    <ul class="menu">
                                                                        <li ><a href="/kopaonik"><i class="icon-suitcase pr-10"></i>Копаоник</a></li>
                                                                        <li ><a href="/zlatibor"><i class="icon-suitcase pr-10"></i>Златибор</a></li>
                                                                        <li ><a href="/srbijaaranzmanizima"><i class="icon-suitcase pr-10"></i>Аражмани</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Патувања</a>
                                            <ul class="dropdown-menu" style="background-color: white">
                                                <li ><a href="/prolet">Пролетни патувања</a></li>
                                                <li ><a href="/esen">Есенски патувања</a></li>
                                                <li ><a href="/novagodina">Нова година</a></li>
                                                <li ><a href="/individualni">Индивидуални патувања</a></li>
                                                <li ><a href="/dalecni">Далечни патувања</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Услови и правила</a>
                                            <ul class="dropdown-menu" style="background-color: white">
                                                <li ><a href="/uslovi">Општи услови на патување</a></li>
                                                <li ><a href="/podatoci">Зштита на лични податоци</a></li>
                                            </ul>
                                        </li>
                                      <li ><a href="/usligi">Услуги</a></li>
                                      <li ><a href="/contact">Контакт</a></li>

                                  </ul>
                              </div>
                          </div>
                      </nav>
                      <!-- navbar end -->
                  </div>
                  <!-- main-navigation end -->
              </div>
              <!-- header-right end -->
          </div>
      </div>
  </div>
</header>
<!-- header end -->
</div>
    <!-- header-container end -->

