<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/tailwindcss-colors.css">
    <link rel="stylesheet" href="../../css/stylep.css">
    <link rel="stylesheet" href="../../output/./output.css">
    <title>Secondhome Login/SignUp/Registration</title>
</head>
<body>
    
    <!-- start: Topbar -->
    <section class="topbar-section">
        <div class="container">
            <div class="topbar-wrapper">
                <div class="topbar-translate">
                    <button type="button" class="topbar-translate-toggle">
                        <img src="img/en-flag.png" alt="">
                    </button>
                    <div class="topbar-translate-dropdown">
                        <a href="#">Bangla</a>
                        <a href="#">English</a>
                    </div>
                </div>
                <div class="topbar-link">
                    <a href="#">Wishlist</a>
                    <a href="#">Sign In</a>
                    <a href="#">Register</a>
                    <a href="#">Blog</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Topbar -->

    <!-- start: Navbar -->
    <nav>
        <div class="container">
            <div class="navbar-wrapper">
                <a href="#" class="navbar-logo"><i class="ri-shopping-cart-fill"></i></a>
                <form action="" class="navbar-form">
                    <div class="navbar-form-group">
                        <button type="button" class="navbar-form-close"><i class="ri-arrow-left-line"></i></button>
                        <input type="search" class="navbar-form-input" placeholder="What do you looking for?">
                    </div>
                    <button type="submit" class="navbar-form-submit">Search</button>
                </form>
                <div class="navbar-link">
                    <a href="#" class="navbar-link-sm"><i class="ri-whatsapp-line"></i></a>
                    <a href="#" class="navbar-link-sm"><i class="ri-instagram-line"></i></a>
                    <a href="#" class="navbar-link-sm"><i class="ri-phone-line"></i></a>
                    <div class="navbar-link-divider navbar-link-sm"></div>
                    <a href="#" class="navbar-link-cart"><i class="ri-shopping-cart-line"></i><span>8</span></a>
                    <a href="#" class="navbar-link-toggle"><i class="ri-menu-line"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="navbar-menu">
        <div class="navbar-menu-header">
            <div class="navbar-menu-header-title">Menu</div>
            <button type="button" class="navbar-menu-header-close">&times;</button>
        </div>
        <div class="navbar-menu-body">
            <div class="navbar-menu-buttons">
                <a href="#" class="btn btn-blue">Sign In</a>
                <a href="#" class="btn btn-outline-blue">Sign Up</a>
            </div>
            <div class="navbar-menu-link">
                <a href="#"><i class="ri-heart-3-line"></i> Wishlist</a>
                <a href="#"><i class="ri-star-line"></i> Reviews</a>
                <a href="#"><i class="ri-file-list-line"></i> Transactions</a>
                <a href="#"><i class="ri-edit-box-line"></i> Blog</a>
            </div>
        </div>
    </div>
    <!-- end: Navbar -->

    <!-- start: Category -->
    <section class="category-section">
        <div class="container">
            <div class="category-wrapper">
                <button type="button" class="category-arrow prev hidden"><i class="ri-arrow-left-s-line"></i></button>
                <button type="button" class="category-arrow next"><i class="ri-arrow-right-s-line"></i></button>
                <div class="category-link">
                    <a href="#">Clothing</a>
                    <a href="#">Electronics</a>
                    <a href="#">Home & Garden</a>
                    <a href="#">Health & Beauty</a>
                    <a href="#">Sports & Outdoors</a>
                    <a href="#">Toys & Games</a>
                    <a href="#">Pet Supplies</a>
                    <a href="#">Office & School Supplies</a>
                    <a href="#">Automotive</a>
                    <a href="#">Clothing</a>
                    <a href="#">Electronics</a>
                    <a href="#">Home & Garden</a>
                    <a href="#">Health & Beauty</a>
                    <a href="#">Sports & Outdoors</a>
                    <a href="#">Toys & Games</a>
                    <a href="#">Pet Supplies</a>
                    <a href="#">Office & School Supplies</a>
                    <a href="#">Automotive</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Category -->

    <!-- start: Hero -->
    <header>
        <div class="container">
            <div class="hero-wrapper">
                <div data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1608231387042-66d1773070a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8c2hvZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" class="hero-image active">
                    <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="hero-image">
                    <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZWFyYnVkc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="" class="hero-image">
                </div>
                <div class="hero-item-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <div class="hero-item active">
                        <div>
                            <div class="hero-item-title">White Nike Air Force</div>
                            <p class="hero-item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor dignissimos culpa mollitia magnam porro. Adipisci doloremque pariatur consequuntur odit!</p>
                            <a href="#" class="link-blue">View more <i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                    <div class="hero-item">
                        <div>
                            <div class="hero-item-title">Pink Leather Crossbody Bag</div>
                            <p class="hero-item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor dignissimos culpa mollitia magnam porro. Adipisci doloremque pariatur consequuntur odit!</p>
                            <a href="#" class="link-blue">View more <i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                    <div class="hero-item">
                        <div>
                            <div class="hero-item-title">Bluetooth Earbuds</div>
                            <p class="hero-item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor dignissimos culpa mollitia magnam porro. Adipisci doloremque pariatur consequuntur odit!</p>
                            <a href="#" class="link-blue">View more <i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end: Hero -->

    <!-- start: Features -->
    <section class="features-section">
        <div class="container">
            <div class="features-wrapper">
                <div data-aos="fade-up">
                    <div class="features-item-title">Affordable Prices</div>
                    <p class="features-item-description">We offer competitive prices on all our products, so you can save money without compromising on quality.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="features-item-title">Fast and Free Shipping</div>
                    <p class="features-item-description">We offer fast and free shipping on all orders over a certain amount, so you can receive your purchases quickly and without any additional costs.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="features-item-title">Easy Returns</div>
                    <p class="features-item-description">We offer a hassle-free returns policy, so if you're not satisfied with your purchase, you can return it for a refund or exchange.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Features -->

    <!-- start: Special Discount -->
    <section class="product-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Special Discount</h2>
            <div class="product-wrapper" data-aos="fade-up">
                <button type="button" class="product-arrow prev hidden"><i class="ri-arrow-left-s-line"></i></button>
                <button type="button" class="product-arrow next"><i class="ri-arrow-right-s-line"></i></button>
                <div class="product-grid product-grid-scroller">
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Special Discount -->

    <!-- start: Products -->
    <section class="product-section">
        <div class="container">
            <div class="product-tab" data-aos="fade-up">
                <button type="button" data-tab="featured" class="active">Featured Products</button>
                <button type="button" data-tab="recommended">Recommended Products</button>
                <button type="button" data-tab="popular">Popular Products</button>
            </div>
            <div data-tab-item="featured" class="shown" data-aos="fade-up">
                <div class="product-grid">
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-tab-item="recommended">
                <div class="product-grid">
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-tab-item="popular">
                <div class="product-grid">
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item-header">
                            <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFnfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="product-item-image">
                            <a href="#" class="product-item-cart"><i class="ri-shopping-cart-line"></i></a>
                        </div>
                        <div class="product-item-body">
                            <div class="product-item-tag"><span>New</span></div>
                            <a href="#" class="product-item-title">Pink Leather Crossbody Bag</a>
                            <div class="product-item-price">&dollar;10</div>
                            <div class="product-item-discount">
                                <span class="product-item-discount-percent">50%</span>
                                <span class="product-item-discount-price">&dollar;20</span>
                            </div>
                            <div class="product-item-rating">
                                <i class="ri-star-fill"></i>
                                4.8
                                <span class="product-item-sold">(sold 2k)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Products -->

    <!-- start: Banner -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-box" data-aos="zoom-in-up">
                <h2 class="banner-title">Get 50% Off Your First Purchase!</h2>
                <p class="banner-description">Sign up for our newsletter and receive 10% off your first order, plus exclusive access to sales, promotions, and new products.</p>
                <a href="#" class="btn btn-white">Sign Up Now!</a>
            </div>
        </div>
    </section>
    <!-- end: Banner -->

    <!-- start: Footer -->
    <footer>
        <div class="container">
            <p class="footer-text">Made with ❤️ by <a href="#">Fajar Std</a>.</p>
        </div>
    </footer>
    <!-- end: Footer -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../../dist/js/scriptp.js"></script>
</body>
</html>