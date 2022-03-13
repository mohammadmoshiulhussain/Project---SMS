<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/')}}/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}/css/all.css"/>
    <link rel="stylesheet" href="{{asset('/')}}/css/style.css"/>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light bg bg-light border-bottom shadow sticky-top" >
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">HOME</a></li>
                <li><a href="" class="nav-link">All Course</a></li>
                <li><a href="{{route('user-login')}}" class="nav-link">Login</a></li>
                <li><a href="{{route('user-register')}}" class="nav-link">Registration</a></li>
            </ul>
        </div>
    </nav>

    @yield('body')

    <footer class="pt-5 pb-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>About Institute</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate inventore natus provident sit veniam! Delectus dolor fugit in minima natus placeat sit voluptatem! Aliquam beatae eveniet illum labore suscipit voluptatibus!</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>Popular Link</h3>
                        <hr/>
                        <ul class="navbar-nav">
                            <li><a href="">Popular Course One</a></li>
                            <li><a href="">Popular Course Two</a></li>
                            <li><a href="">Popular Course Three</a></li>
                            <li><a href="">Popular Course Four</a></li>
                            <li><a href="">Popular Course Five</a></li>
                            <li><a href="">Popular Course Six</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>Follow Us On</h3>
                        <hr/>
                        <ul class="nav">
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitter-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-linkedin"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-youtube-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-instagram-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-whatsapp-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-viber"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-tiktok"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-telegram"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-behance-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-discord"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-github"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-google-plus"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-google-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="bg-white mt-5"/>
            <div class="row">
                <div class="col-12">
                    <p class="text-white text-center mb-0">Copyright@2022, All Right Reserved by BASIS SEIP PWLFB - 3</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('/')}}js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
