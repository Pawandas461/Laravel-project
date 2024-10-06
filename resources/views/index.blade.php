<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'loginUser');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.green.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home_page.css') }}">

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.jpg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
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
                            <a class="nav-link" href="product.php">Products</a>
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
                        <li class="nav-item">
                            <a href="#" class="nav-link">Cart</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Login/Signup
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/login">Login</a></li>
                                <li><a class="dropdown-item" href="/signup">Signup</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-0">
        <!-- Address section Start -->
        <!-- <div class="container-fluid bg-primary-subtle">Delivery Address: <br> Pawan Das (PURBAMADARIHAT, MADARIHAT, ALIPURDUAR, 735220)</div> -->
        <!-- Address section End -->

        <!-- Carousel section Start -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <div class="row p-2 carousel-row justify-content-center align-items-center">
                        <div class="col-sm-6 text-center">
                            <!-- Product image -->
                            <img src="img/product/Gadget.jpg" class="img-fluid border rounded" alt="Product Image">
                        </div>
                        <div class="col-sm-6  col-text-center">
                            <!-- Product details -->
                            <h5>Special Offer!</h5>
                            <p>50% off on selected items. Limited time offer!</p>
                            <a href="#" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row p-2 carousel-row justify-content-center align-items-center">
                        <div class="col-sm-6 text-center">
                            <!-- Product image -->
                            <img src="img/product/laptop.jpg" class="img-fluid border rounded" alt="Product Image">
                        </div>
                        <div class="col-sm-6  col-text-center">
                            <!-- Product details -->
                            <h5>New Arrivals!</h5>
                            <p>Check out the latest collection in our store.</p>
                            <a href="#" class="btn btn-primary">Explore Now</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row p-2 carousel-row justify-content-center align-items-center">
                        <div class="col-sm-6 text-center">
                            <!-- Product image -->
                            <img src="img/product/iWatch.jpg" class="img-fluid border rounded" alt="Product Image">
                        </div>
                        <div class="col-sm-6  col-text-center">
                            <!-- Product details -->
                            <h5>Exclusive Deal!</h5>
                            <p>Get a free gift with every purchase over $100.</p>
                            <a href="#" class="btn btn-primary">Grab the Deal</a>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container-md my-4">
            <form class="d-flex" style="height: 3rem;" role="search">
                <div class="search-message me-2" style="color: rgb(19, 240, 118); font-weight: 600;">Search Product or Categories</div>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="container-md my-4">

        </div>
        <div class="container-md my-4">
            <h2 class="">Best selling products</h2>
            <h5 class="">Grab your offer with popular products</h5>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product/laptop.jpg" alt="" style="width: 100%;">
                            <div class="icons">
                                <div class="cart fw-bold"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a></div>
                                <div class="like fw-bold"><a href="#"><i class="fa-brands fa-gratipay"></i> Like</a></div>
                            </div>
                            <div class="black-overlay"></div>
                        </div>
                        <div class="card-info">
                            <h5>1Card title</h5>
                            <p>card information and button</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product/laptop.jpg" alt="" style="width: 100%;">
                            <div class="icons">
                                <div class="cart fw-bold"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a></div>
                                <div class="like fw-bold"><a href="#"><i class="fa-brands fa-gratipay"></i> Like</a></div>
                            </div>
                            <div class="black-overlay"></div>
                        </div>
                        <div class="card-info">
                            <h5>2 Card title</h5>
                            <p>card information and button</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product/laptop.jpg" alt="" style="width: 100%;">
                            <div class="icons">
                                <div class="cart fw-bold"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a></div>
                                <div class="like fw-bold"><a href="#"><i class="fa-brands fa-gratipay"></i> Like</a></div>
                            </div>
                            <div class="black-overlay"></div>
                        </div>
                        <div class="card-info">
                            <h5>3 Card title</h5>
                            <p>card information and button</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product/laptop.jpg" alt="" style="width: 100%;">
                            <div class="icons">
                                <div class="cart fw-bold"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a></div>
                                <div class="like fw-bold"><a href="#"><i class="fa-brands fa-gratipay"></i> Like</a></div>
                            </div>
                            <div class="black-overlay"></div>
                        </div>
                        <div class="card-info">
                            <h5>4 Card title</h5>
                            <p>card information and button</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product/laptop.jpg" alt="" style="width: 100%;">
                            <div class="icons">
                                <div class="cart fw-bold"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a></div>
                                <div class="like fw-bold"><a href="#"><i class="fa-brands fa-gratipay"></i> Like</a></div>
                            </div>
                            <div class="black-overlay"></div>
                        </div>
                        <div class="card-info">
                            <h5>5 Card title</h5>
                            <p>card information and button</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product/laptop.jpg" alt="" style="width: 100%;">
                            <div class="icons">
                                <div class="cart fw-bold"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a></div>
                                <div class="like fw-bold"><a href="#"><i class="fa-brands fa-gratipay"></i> Like</a></div>
                            </div>
                            <div class="black-overlay"></div>
                        </div>
                        <div class="card-info">
                            <h5>6 Card title</h5>
                            <p>card information and button</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product/laptop.jpg" alt="" style="width: 100%;">
                            <div class="icons">
                                <div class="cart fw-bold"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a></div>
                                <div class="like fw-bold"><a href="#"><i class="fa-brands fa-gratipay"></i> Like</a></div>
                            </div>
                            <div class="black-overlay"></div>
                        </div>
                        <div class="card-info">
                            <h5>7 Card title</h5>
                            <p>card information and button</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product/laptop.jpg" alt="" style="width: 100%;">
                            <div class="icons">
                                <div class="cart fw-bold"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a></div>
                                <div class="like fw-bold"><a href="#"><i class="fa-brands fa-gratipay"></i> Like</a></div>
                            </div>
                            <div class="black-overlay"></div>
                        </div>
                        <div class="card-info">
                            <h5>8 Card title</h5>
                            <p>card information and button</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product/laptop.jpg" alt="" style="width: 100%;">
                            <div class="icons">
                                <div class="cart fw-bold"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a></div>
                                <div class="like fw-bold"><a href="#"><i class="fa-brands fa-gratipay"></i> Like</a></div>
                            </div>
                            <div class="black-overlay"></div>
                        </div>
                        <div class="card-info">
                            <h5>9 Card title</h5>
                            <p>card information and button</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product/laptop.jpg" alt="" style="width: 100%;">
                            <div class="icons">
                                <div class="cart fw-bold"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a></div>
                                <div class="like fw-bold"><a href="#"><i class="fa-brands fa-gratipay"></i> Like</a></div>
                            </div>
                            <div class="black-overlay"></div>
                        </div>
                        <div class="card-info">
                            <h5>10 Card title</h5>
                            <p>card information and button</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product/laptop.jpg" alt="" style="width: 100%;">
                            <div class="icons">
                                <div class="cart fw-bold"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a></div>
                                <div class="like fw-bold"><a href="#"><i class="fa-brands fa-gratipay"></i> Like</a></div>
                            </div>
                            <div class="black-overlay"></div>
                        </div>
                        <div class="card-info">
                            <h5>11 Card title</h5>
                            <p>card information and button</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product/laptop.jpg" alt="" style="width: 100%;">
                            <div class="icons">
                                <div class="cart fw-bold"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a></div>
                                <div class="like fw-bold"><a href="#"><i class="fa-brands fa-gratipay"></i> Like</a></div>
                            </div>
                            <div class="black-overlay"></div>
                        </div>
                        <div class="card-info">
                            <h5>12 Card title</h5>
                            <p>card information and button</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                center: true,
                autoplay: true,
                autoplayTimeout: 1500,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    344: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    },
                    1200: {
                        items: 5
                    }
                }
            });
        });
    </script>
</body>

</html>