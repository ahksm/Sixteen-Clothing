<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">

    <style>
        .product-page .product-content h2 {
            font-size: 40px;
        }

        .product-page .product-content h6 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #f33f3f;
        }

        .product-page .product-content p {
            font-size: 20px;
        }

        .product-page form textarea {
            border: none;
            border-bottom: 1px solid #3f3f3f;
            height: 30px;
            font-size: 18px;
            resize: none;
            width: 100%;
        }

        .product-page form textarea:focus {
            outline: none;
            border-bottom: 2px solid #f33f3f;
        }

        .product-page form input[type=button] {
            background-color: transparent;
        }

        .product-page form input[type=submit] {
            background-color: #f33f3f;
            padding: 10px 15px;
            color: #fff;
        }

        .product-page form input[type=submit]:disabled {
            background-color: #575757;
            color: #C1C1C1;
        }

        .bar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fd998a;
        }

        /* START FROM HERE */

        [data-star] {
            text-align: left;
            font-style: normal;
            display: inline-block;
            position: relative;
            unicode-bidi: bidi-override;
        }

        [data-star]::before {
            display: block;
            font-size: 50px;
            content: '★★★★★';
            color: #fd998a;
        }

        [data-star]::after {
            white-space: nowrap;
            position: absolute;
            top: 0;
            left: 0;
            font-size: 50px;
            content: '★★★★★';
            width: 0;
            color: #f33f3f;
            overflow: hidden;
            height: 100%;
        }

        [data-star^="0.1"]::after,
        [data-star^=".1"]::after {
            width: 2%
        }

        [data-star^="0.2"]::after,
        [data-star^=".2"]::after {
            width: 4%
        }

        [data-star^="0.3"]::after,
        [data-star^=".3"]::after {
            width: 6%
        }

        [data-star^="0.4"]::after,
        [data-star^=".4"]::after {
            width: 8%
        }

        [data-star^="0.5"]::after,
        [data-star^=".5"]::after {
            width: 10%
        }

        [data-star^="0.6"]::after,
        [data-star^=".6"]::after {
            width: 12%
        }

        [data-star^="0.7"]::after,
        [data-star^=".7"]::after {
            width: 14%
        }

        [data-star^="0.8"]::after,
        [data-star^=".8"]::after {
            width: 16%
        }

        [data-star^="0.9"]::after,
        [data-star^=".9"]::after {
            width: 18%
        }

        [data-star^="1"]::after {
            width: 20%
        }

        [data-star^="1.1"]::after {
            width: 22%
        }

        [data-star^="1.2"]::after {
            width: 24%
        }

        [data-star^="1.3"]::after {
            width: 26%
        }

        [data-star^="1.4"]::after {
            width: 28%
        }

        [data-star^="1.5"]::after {
            width: 30%
        }

        [data-star^="1.6"]::after {
            width: 32%
        }

        [data-star^="1.7"]::after {
            width: 34%
        }

        [data-star^="1.8"]::after {
            width: 36%
        }

        [data-star^="1.9"]::after {
            width: 38%
        }

        [data-star^="2"]::after {
            width: 40%
        }

        [data-star^="2.1"]::after {
            width: 42%
        }

        [data-star^="2.2"]::after {
            width: 44%
        }

        [data-star^="2.3"]::after {
            width: 46%
        }

        [data-star^="2.4"]::after {
            width: 48%
        }

        [data-star^="2.5"]::after {
            width: 50%
        }

        [data-star^="2.6"]::after {
            width: 52%
        }

        [data-star^="2.7"]::after {
            width: 54%
        }

        [data-star^="2.8"]::after {
            width: 56%
        }

        [data-star^="2.9"]::after {
            width: 58%
        }

        [data-star^="3"]::after {
            width: 60%
        }

        [data-star^="3.1"]::after {
            width: 62%
        }

        [data-star^="3.2"]::after {
            width: 64%
        }

        [data-star^="3.3"]::after {
            width: 66%
        }

        [data-star^="3.4"]::after {
            width: 68%
        }

        [data-star^="3.5"]::after {
            width: 70%
        }

        [data-star^="3.6"]::after {
            width: 72%
        }

        [data-star^="3.7"]::after {
            width: 74%
        }

        [data-star^="3.8"]::after {
            width: 76%
        }

        [data-star^="3.9"]::after {
            width: 78%
        }

        [data-star^="4"]::after {
            width: 80%
        }

        [data-star^="4.1"]::after {
            width: 82%
        }

        [data-star^="4.2"]::after {
            width: 84%
        }

        [data-star^="4.3"]::after {
            width: 86%
        }

        [data-star^="4.4"]::after {
            width: 88%
        }

        [data-star^="4.5"]::after {
            width: 90%
        }

        [data-star^="4.6"]::after {
            width: 92%
        }

        [data-star^="4.7"]::after {
            width: 94%
        }

        [data-star^="4.8"]::after {
            width: 96%
        }

        [data-star^="4.9"]::after {
            width: 98%
        }

        [data-star^="5"]::after {
            width: 100%
        }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2>Sixteen <span>Clothing</span></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ request()->is('/*') ? 'active' : '' }}">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item {{ request()->is('products*') ? 'active' : '' }}">
                            <a class="nav-link" href="/products">Our
                                Products</a>
                        </li>
                        <li class="nav-item {{ request()->is('about*') ? 'active' : '' }}">
                            <a class="nav-link" href="/about">About
                                Us</a>
                        </li>
                        <li class="nav-item {{ request()->is('contact*') ? 'active' : '' }}">
                            <a class="nav-link" href="/contact">Contact
                                Us</a>
                        </li>
                        @auth
                            <li class="nav-item {{ request()->is('/profile*') ? 'active' : '' }} dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">
                                    User
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/profile"
                                        onfocus="this.style.background='#f8f9fa';">Profile</a>
                                    <form action="/logout" method="POST">
                                        @csrf

                                        <button type="submit" class="dropdown-item"
                                            onfocus="this.style.background='#f8f9fa';">Log Out</button>
                                    </form>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register">Register</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{ $slot }}

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

                            - Design: <a rel="nofollow noopener" href="https://templatemo.com"
                                target="_blank">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>


</body>

</html>
