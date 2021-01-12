<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="{{URL::to('/')}}">Գլխավոր</a></li>
                <li><a href="{{URL::to('/rooms')}}">Սենյակներ</a></li>
                <li><a href="{{URL::to('/we')}}">Մեր մասին</a></li>
                <li><a href="{{URL::to('/contacts')}}">Կապ հաստատել</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (+374) 97 282809</li>
            <li><i class="fa fa-envelope"></i> zoravan_hotel@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal" style="z-index: 1000000">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (+374) 97 282809</li>
                            <li><i class="fa fa-envelope"></i> zoravan_hotel@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="{{URL::to('/rooms')}}" class="bk-btn">ԶԲԱՂԵՑՐՈՒ՛ ՀԻՄԱ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{URL::to('/')}}">
                                ԶՈՐԱՎԱՆ
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="{{URL::to('/')}}">Գլխավոր</a></li>
                                    <li><a href="{{URL::to('/rooms')}}">Սենյակներ</a></li>
                                    <li><a href="{{URL::to('/we')}}">Մեր մասին</a></li>
                                    <li><a href="{{URL::to('/contacts')}}">Կապ հաստատել</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('body')

    <!-- Footer Section Begin -->
    <footer class="footer-section" style="margin-top: 100px;">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="{{URL::to('/')}}">
                                    ԶՈՐԱՎԱՆ
                                </a>
                            </div>
                            <p>Մենք կկազմակերպենք Ձեր հանգիստը</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Կապ մեզ հետ</h6>
                            <ul>
                                <li>(+374) 97 282809</li>
                                <li>zoravan_hotel@gmail.com</li>
                                <li>Ճարտար,Զորավան (Մարտունի 2)</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Կապ</a></li>
                            <li><a>Գաղտնիություն</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->    
    <script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{URL::asset('js/script.js')}}"></script>
</html>