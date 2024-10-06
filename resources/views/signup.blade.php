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
</head>

<body>
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
                                <li><a class="dropdown-item" href="categories.php?category=mobile">Mobile</a></li>
                                <li><a class="dropdown-item" href="categories.php?category=laptop">Laptop</a></li>
                                <li><a class="dropdown-item" href="categories.php?category=headphone">Headphone</a></li>
                                <li><a class="dropdown-item" href="categories.php?category=tv">TV</a></li>
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
                <h2 class="heading mb-3">Signup Form</h2>
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input class="form-control rounded-0" type="text" placeholder="User Full Name" id="fullname" name="username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control rounded-0" id="email" placeholder="name@example.com" name="email" required>
                </div>
                <div id="errorEmail" class="form-text text-danger"></div>
                <div class="mb-3 d-flex">
                    <input type="text" class="form-control rounded-0 w-50 me-3 d-none" id="otp" required>
                    <video id="loadingAnimation" class="d-none" width="50" height="30" autoplay loop muted>
                        <source src="img/ani.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <button type="button" class="btn rounded-0 btn-outline-success" id="send_btn">Send OTP</button>
                    <button type="button" class="btn rounded-0 btn-outline-success d-none" id="verify_btn">Verify OTP</button>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone No</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">+91</span>
                        <input type="text" class="form-control rounded-0" id="phone" aria-describedby="addon-wrapping" onkeyup="phoneValid()" name="phone">
                    </div>
                    <div id="errorPhone" class="form-text text-danger"></div>
                </div>
                <div class="mb-3">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" id="inputPassword5" class="form-control rounded-0" required onkeyup="passValid()" name="password">
                    <div id="errorPass" class="form-text text-danger"></div>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <input type="submit" name="signUp" class="btn rounded-0 btn-outline-primary" value="SignUp">
                    <a href="/login">Existing user? Login</a>
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