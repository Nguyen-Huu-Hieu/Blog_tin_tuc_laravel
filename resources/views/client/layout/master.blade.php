<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>blog tin tức - trang chủ</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="frontend/img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="frontend/lib/slick/slick.css" rel="stylesheet">
        <link href="frontend/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="frontend/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>huuhieu2468@gmail.com</p>
                            <p><i class="fas fa-phone-alt"></i>0962-331-881</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tb-menu">
                            <a href=""><i class="fa fa-lock"></i>Đăng nhập </a>
                            <a href="">Đăng ký</a>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-8">
                        <div class="b-logo">
                            <a href="{{ Route('home')}}">
                                <img src="frontend/img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                {{--     <div class="col-lg-6 col-md-4">
                        <div class="b-ads">
                            <a href="https://htmlcodex.com">
                                <img src="frontend/img/ads-1.jpg" alt="Ads">
                            </a>
                        </div>
                    </div> --}}
                    <div class="col-lg-3 col-md-4">
                        <form action="{{ Route('search')}}" method="get">
                                <div class="b-search">
                                    <input type="text" name="search_news" value="{{ request()->input('search_news')}}" placeholder="Tìm kiếm tin tức">
                                    <button><i class="fa fa-search"></i></button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{ Route('home')}}" class="nav-item nav-link active">Home</a>
                            @foreach($categories as $category)
                                <a href="{{ Route('PostsByCategory', $category->id)}}" class="nav-item nav-link ">{{ $category->name }}</a>

                            @endforeach
                            
                       {{--      <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">chủ đề</a>
                                <div class="dropdown-menu">
                                        <a href="{{ Route('PostsByCategory', $category->id)}}" class="dropdown-item">{{ $category->name }}</a>
                                </div>
                            </div>
                            <a href="single-page.html" class="nav-item nav-link">Single Page</a>
                            <a href="contact.html" class="nav-item nav-link">Contact Us</a> --}}
                        </div>
                        <div class="social ml-auto">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        @yield('content')
        @yield('posts_by_category')
        @yield('search')
        @yield('single_page')

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Thông Tin</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Hà Nội - Việt Nam</p>
                                <p><i class="fa fa-envelope"></i>huuhieu2468@gmail.com</p>
                                <p><i class="fa fa-phone"></i>0962-331-881</p>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Chủ Đề</h3>
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="{{ Route('PostsByCategory', $category->id)}}">{{ $category->name }}</a></li>
                              
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Menu Start -->
        <div class="footer-menu">
            <div class="container">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Accessibility help</a>
                    <a href="">Advertise with us</a>
                    <a href="">Contact us</a>
                </div>
            </div>
        </div>
        <!-- Footer Menu End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="frontend/lib/easing/easing.min.js"></script>
        <script src="frontend/lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="frontend/js/main.js"></script>
    </body>
</html>
