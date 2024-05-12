<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', ' - Nama Wesbite')</title>
    <!-- Link Style CSS -->
    <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
</head>
<body>
    
    <header id="header">
        <img src="./assets/images/logo.png" class="image-logo" alt="logo">
        <ul class="menu-list">
            <li class="active">
                <a href="#">About Us</a>
            </li>
            <li>
                <a href="#">Our Product</a>
            </li>
            <li>
                <a href="#">Delivery</a>
            </li>
        </ul>
        <div class="menu-actions">
            <div class="menu-search">
                <img src="./assets/icons/search-icon.svg" width="18" height="18" alt="search-icon">
                <input type="search" name="search" id="search" placeholder="Search your coffee...">
            </div>
            <button class="menu-cart">
                <span></span>
                <img src="./assets/icons/cart-icon.svg" width="25" height="25" alt="cart">
            </button>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-left">
                    <h1>Enjoy your <span class="text-primary">coffee</span> before your activity</h1>
                    <p>
                        Boost your productivity and build your mood with a glass of coffee in the morning 
                    </p>
                    <div class="hero-action-buttons">
                        <button type="button">
                            <span>Order Now</span>
                            <img src="./assets/icons/white-cart-icon.svg" width="24" height="24" alt="cart-icon">
                        </button>
                        <a href="#" class="text-primary">More Menu</a>
                    </div>
                </div>
    
                <div class="hero-right">
                    <div class="wrapper-images">
                        <div class="wrap-elipse-image">
                            <img src="./assets/images/shadow-coffee-image.png" width="434" height="251" class="shadow-screen-image" alt="shadow-coffee-image">
                            <img src="./assets/images/hero-coffee-image.png" width="350" height="350" class="front-screen-image" alt="hero-coffee-image">
                        </div>
                        <span class="badge-1">Cappucino</span>
                        <span class="badge-2">
                            4.8
                            <img src="./assets/icons/star-icon.svg" width="24" height="24" alt="">
                        </span>
                        <span class="badge-3">18K</span>
                    </div>
                </div>
            </div>
            <div class="hero-images">
                <img src="./assets/images/hero-image.png" width="569" height="394" class="hero-img-1" alt="hero image">
                <img src="./assets/images/hero-image-2.png" width="559" height="394" class="hero-img-2" alt="hero image">
            </div>
        </section>

        <!-- Popular Product -->
        <section class="popular-product">
            <div class="container">
                <h1 class="section-title">Popular <span class="primary-b-line">Now</span></h1>
                <div class="wrapper-card">
                    <div class="card">
                        <div class="card-image">
                            <img src="./assets/images/product-1.png" width="300" height="220" alt="product 1">
                            <span class="card-badge">
                                4.8
                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
                            </span>
                        </div>
                        <div class="card-description">
                            <h4>Vanilla Latte</h4>
                            <span>21K</span>
                        </div>
                        <div class="card-actions">
                            <ul>
                                <li class="active">
                                    <a href="#">Hot</a>
                                </li>
                                <li>
                                    <a href="#">Cold</a>
                                </li>
                            </ul>
                            <button type="button">
                                <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="./assets/images/product-2.png" width="300" height="220" alt="product 2">
                            <span class="card-badge">
                                4.8
                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
                            </span>
                        </div>
                        <div class="card-description">
                            <h4>Ekspresso</h4>
                            <span>14K</span>
                        </div>
                        <div class="card-actions">
                            <ul>
                                <li class="active">
                                    <a href="#">Hot</a>
                                </li>
                                <li>
                                    <a href="#">Cold</a>
                                </li>
                            </ul>
                            <button type="button">
                                <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="./assets/images/product-3.png" width="300" height="220" alt="product 3">
                            <span class="card-badge">
                                4.8
                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
                            </span>
                        </div>
                        <div class="card-description">
                            <h4>Hazelnut Latte</h4>
                            <span>21K</span>
                        </div>
                        <div class="card-actions">
                            <ul>
                                <li class="active">
                                    <a href="#">Hot</a>
                                </li>
                                <li>
                                    <a href="#">Cold</a>
                                </li>
                            </ul>
                            <button type="button">
                                <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="service">
            <div class="container">
                <h2 class="section-title">How to use delivery <span class="primary-b-line">service</span></h2>
                <div class="wrapper-card">
                    <div class="card">
                        <img src="./assets/images/service-1.png" width="159" height="159" alt="service-1">
                        <h4>choose your coffee</h4>
                        <p>these are 20+ coffes for you</p>
                    </div>
                    <div class="card">
                        <img src="./assets/images/service-2.png" width="159" height="159" alt="service-1">
                        <h4>we delivery it to you</h4>
                        <p>Choose delivery service</p>
                    </div>
                    <div class="card">
                        <img src="./assets/images/service-3.png" width="159" height="159" alt="service-1">
                        <h4>Enjoy your coffee</h4>
                        <p>Choose delivery service</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- About Us -->
        <section class="about-us">
            <div class="container">

                <div class="image">
                    <img src="./assets/images/preview-product.png" width="359" height="497" alt="preview image">
                </div>
                <div class="detail-information">
                    <h2>About <span class="primary-b-line">Us</span></h2>
                    <div class="description">
                        <h4>We provide quality coffee, and ready to deliver.</h4>
                        <p>
                            We are a company that makes and distributes delicious drinks. our main product is made with a secret recipe and available in stores worldwide.
                        </p>    
                    </div>
                    <button type="button">Get your coffee</button>
                </div>

            </div>
        </section>

        <!-- Products -->
        <section class="products">
            <div class="container">
                <h1 class="section-title">Special menu <span class="primary-b-line">for you</span></h1>
                <div class="wrapper-card">
                    <div class="card">
                        <div class="card-image">
                            <img src="./assets/images/product-list-1.png" width="300" height="220" alt="product 1">
                            <span class="card-badge">
                                4.8
                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
                            </span>
                        </div>
                        <div class="card-description">
                            <h4>Sandwich</h4>
                            <span>12K</span>
                        </div>
                        <div class="card-actions">
                            <p>bread with meat and vegetables</p>
                            <button type="button">
                                <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="./assets/images/product-list-1.png" width="300" height="220" alt="product 2">
                            <span class="card-badge">
                                4.8
                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
                            </span>
                        </div>
                        <div class="card-description">
                            <h4>Ekspresso</h4>
                            <span>14K</span>
                        </div>
                        <div class="card-actions">
                            <p>Hot Milk with less sugar</p>
                            <button type="button">
                                <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="./assets/images/product-list-2.png" width="300" height="220" alt="product 3">
                            <span class="card-badge">
                                4.8
                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
                            </span>
                        </div>
                        <div class="card-description">
                            <h4>Hazelnut Latte</h4>
                            <span>21K</span>
                        </div>
                        <div class="card-actions">
                            <p>Coffe with ice cream vanilla</p>
                            <button type="button">
                                <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="./assets/images/product-list-3.png" width="300" height="220" alt="product 3">
                            <span class="card-badge">
                                4.8
                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
                            </span>
                        </div>
                        <div class="card-description">
                            <h4>Cappucino</h4>
                            <span>12K</span>
                        </div>
                        <div class="card-actions">
                            <p>Hot Cappucino</p>
                            <button type="button">
                                <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="./assets/images/product-list-4.png" width="300" height="220" alt="product 3">
                            <span class="card-badge">
                                4.8
                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
                            </span>
                        </div>
                        <div class="card-description">
                            <h4>Moccacinno</h4>
                            <span>12K</span>
                        </div>
                        <div class="card-actions">
                            <p>Coffe with ice cream vanilla</p>
                            <button type="button">
                                <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="./assets/images/product-list-5.png" width="300" height="220" alt="product 3">
                            <span class="card-badge">
                                4.8
                                <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
                            </span>
                        </div>
                        <div class="card-description">
                            <h4>Hot Moccacino </h4>
                            <span>21K</span>
                        </div>
                        <div class="card-actions">
                            <p>Wafle with Ice cream</p>
                            <button type="button">
                                <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="testimonial">
            <div class="container">

                <div class="detail-information">
                    <h4>What they say about us</h4>
                    <p>We always provide the best service and always maintain the quality of coffee</p>
                </div>
                <div class="wrapper-testimonial">
                    <div class="list-testimonial">
                        <div class="testimonial">
                            <img src="./assets/images/client-1.png" width="213" height="280" alt="client profile">
                            <div class="content">
                                <h5>Naura</h5>
                                <p>I really love the cappucino, the coffee was very smooth </p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <img src="./assets/images/client-2.png" width="213" height="280" alt="client profile">
                            <div class="content">
                                <h5>John</h5>
                                <p>this coffee shop is very convenient</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <img src="./assets/images/client-3.png" width="213" height="280" alt="client profile">
                            <div class="content">
                                <h5>Azura</h5>
                                <p>the coffee menu here is very much</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-pagination">
                        <span class="active"></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

            </div>
        </section>
        
        <!-- Subsribe -->
        <section class="subscribe">
            <div class="container">

                <div class="content">
                    <h1>Subscribe to get 50% discount price</h1>
                    <form action="#">
                        <div class="form-group">
                            <input type="search" name="search" id="search" placeholder="Email Address">
                            <button type="submit">Order Now</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </main>

    <script type="text/javascript">
        function toggleHeaderClass() {
            var header = document.getElementById('header');
            var scrollPosition = window.pageYOffset;

            if (scrollPosition > 0) {
                header.classList.add('active');
            } else {
                header.classList.remove('active');
            }
        }

        window.addEventListener('scroll', function() {
            toggleHeaderClass();
        });
    </script>

</body>
</html>