<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <script src="{{ asset('js/captcha.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home_page.css') }}">
    <style>
        .imageCap {
            font-size: 25px;
            font-weight: 600;
            background-color: #d3dae0;
            color: #505152;
            height: 35px;
            border: 1px solid black;
            width: 90px;
            text-decoration: line-through;
            font-family: cursive;
        }
    </style>
</head>

<body onload="generate()">
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.jpg') }}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                Ecommerce Web
            </a>
            <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Ecommerce Web</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="categories/mobile">Mobile</a></li>
                                <li><a class="dropdown-item" href="categories/laptop">Laptop</a></li>
                                <li><a class="dropdown-item" href="categories/headphone">Headphone</a></li>
                                <li><a class="dropdown-item" href="categories/tv">TV</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Offers</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Login/Signup
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/login">Login</a></li>
                                <li><a class="dropdown-item" href="/signup">Signup</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-5">
        <form action="" method="post">
            <div class="form">
                <h2 class="heading mb-3">Login Form</h2>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input required type="email" class="form-control rounded-0" id="email" placeholder="name@example.com" name="email" required>
                </div>
                <div id="errorEmail" class="form-text text-danger"></div>

                <div class="mb-3">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input required type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required onkeyup="passValid()" name="password">
                    <div id="errorPass" class="form-text text-danger"></div>
                </div>

                <div class="mb-3 d-flex gap-2">
                    <div id="image" class="imageCap text-center" selectable="False"></div>
                    <div class="btn" id="refresh" onclick="generate()">
                        <i class="fa-solid fa-arrows-rotate"></i>
                    </div>
                </div>
                <div class="mb-3 d-flex">
                    <input required type="text" class="form-control rounded-0 w-50 me-3" id="submit" placeholder="Enter Captha" />
                    <div class="btn btn-outline-success" id="btn_check" onclick="printmsg()">Enter</div>
                </div>
                <p id="key" class="text-danger mb-3"></p>
                <div class="mb-3 d-flex align-items-end justify-content-between">
                    <input required type="submit" name="login" class="btn btn-outline-primary" value="Login">
                    <a href="/signup">New user Signup?</a>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
</body>

</html>