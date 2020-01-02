<!DOCTYPE html>
<html>
<head>
    <title>The Coffee Bean CoffeeTory</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta property="og:title" content="Vide"/>
    <meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--- start-rate---->
    <script src="js/jstarbox.js"></script>
    <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8"/>
    <script type="text/javascript">
        jQuery(function () {
            jQuery('.starbox').each(function () {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function (event, value) {
                    if (starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' ' + val);
                        return val;
                    }
                })
            });
        });
    </script>
    <!---//End-rate---->

</head>
<body>
<div class="header">

    <div class="container">

        <div class="logo">
            <h1><a href="index.php">The Coffee Bean CoffeeTory<span>The Best Coffee Shop</span></a></h1>
        </div>
        <div class="head-t">
            <ul class="card">
                <li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                <li><a href="register.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
            </ul>
        </div>
        <div class="nav-top">
            <nav class="navbar navbar-default">

                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                            data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav ">
                        <li><a href="index.php" class="hyper "><span>Home</span></a></li>

                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown"><span>Coffee<b
                                    class="caret"></b></span></a>
                            <ul class="dropdown-menu multi">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="multi-column-dropdown">

                                            <li><a href="coffees.php"><i class="fa fa-angle-right"
                                                                         aria-hidden="true"></i>Coffee</a>
                                            </li>
                                            <li><a href="coffees.php"><i class="fa fa-angle-right"
                                                                         aria-hidden="true"></i>Green Coffee</a>
                                            </li>
                                            <li><a href="coffees.php"> <i class="fa fa-angle-right"
                                                                          aria-hidden="true"></i>Roasted Coffee</a>
                                            </li>
                                            <li><a href="coffees.php"><i class="fa fa-angle-right"
                                                                         aria-hidden="true"></i>Italian</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <a href="coffees.php"><img src="images/coffee_item5-600x600.jpg"
                                                                   class="img-responsive"
                                                                   alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> Foods <b
                                    class="caret"></b></span></a>
                            <ul class="dropdown-menu multi multi1">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="foods.php"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                All </a></li>
                                            <li><a href="foods.php"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                Cakes</a></li>
                                            <li><a href="foods.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Puddings</a>
                                            </li>
                                            <li><a href="foods.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Sweets
                                            </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="foods.php"><img src="images/product-1-152x160.png"
                                                                 class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
                    </ul>
                </div>
            </nav>
            <div class="cart">

                <span class="fa fa-shopping-cart my-cart-icon"><span
                        class="badge badge-notify my-cart-badge"></span></span>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<!---->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="coffees.php"><img class="carousel-image" src="images/coffee_banner_1.jpg" alt="First slide"></a>
        </div>
        <div class="item">
            <a href="foods.php"> <img class="carousel-image" src="images/coffee_banner_2.jpg" alt="Second slide"></a>

        </div>
        <div class="item">
            <a href="hold.html"><img class="carousel-image" src="images/coffee_banner_3.jpg" alt="Third slide"></a>
        </div>
    </div>

</div>

<div class="product">
    <div class="container">
        <div class="spec ">
            <h3>Coffees</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class=" con-w3l agileinf">
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal1">
                        <img src="images/coffee_item1-300x300.jpg" class="img-responsive"
                             alt="mycoffeeshop cup">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="single.html">MyCoffeeShop Cup</a></h6>
                        </div>
                        <div class="mid-2">
                            <p><em class="item_price">RS 200 LKR</em></p>

                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1"
                                    data-name="Moong" data-summary="summary 1" data-price="1.50"
                                    data-quantity="1" data-image="images/of.png">Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
				<div class="col-m">
					<a href="#" data-toggle="modal" data-target="#myModal2">
						<img src="images/coffee_item3-300x300.jpg" class="img-responsive"
							 alt="ephiopian aroma">
					</a>
					<div class="mid-1">
						<div class="women">
							<h6><a href="single.html">Ephiopian Aroma</a></h6>
						</div>
						<div class="mid-2">
							<p><em class="item_price">RS 900 LKR</em></p>
							<div class="clearfix"></div>
						</div>
						<div class="add">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="2"
									data-name="Sunflower Oil" data-summary="summary 2" data-price="9.00"
									data-quantity="1" data-image="images/of1.png">Add to Cart
							</button>
						</div>
					</div>
				</div>
            </div>
            <div class="col-md-3 pro-1">
				<div class="col-m">
					<a href="#" data-toggle="modal" data-target="#myModal3">
						<img src="images/coffee_item2-300x300.jpg" class="img-responsive"
							 alt="green africana">
					</a>
					<div class="mid-1">
						<div class="women">
							<h6><a href="single.html">Green Africana</a></h6>
						</div>
						<div class="mid-2">
							<p><em class="item_price">RS 200 LKR</em></p>
							<div class="clearfix"></div>
						</div>
						<div class="add">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="3"
									data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00"
									data-quantity="1" data-image="images/of2.png">Add to Cart
							</button>
						</div>
					</div>
				</div>
            </div>
            <div class="col-md-3 pro-1">
				<div class="col-m">
					<a href="#" data-toggle="modal" data-target="#myModal4">
						<img src="images/coffee_item4-300x300.jpg" class="img-responsive"
							 alt="american black coffeee">
					</a>
					<div class="mid-1">
						<div class="women">
							<h6><a href="single.html">American Black Coffee</a></h6>
						</div>
						<div class="mid-2">
							<p><em class="item_price">RS 350 LKR</em></p>
							<div class="clearfix"></div>
						</div>
						<div class="add">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="4"
									data-name="Soya Chunks" data-summary="summary 4" data-price="3.50"
									data-quantity="1" data-image="images/of3.png">Add to Cart
							</button>
						</div>
					</div>
				</div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="col-md-4 footer-grid">
            <h3>About Us</h3>
            <p>Nam libero tempore, cum soluta nobis est eligendi
                optio cumque nihil impedit quo minus id quod maxime
                placeat facere possimus.</p>
        </div>
        <div class="col-md-4 footer-grid ">
            <h3>Menu</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="coffees.php">Coffee</a></li>
                <li><a href="foods.php">Foods</a></li>
                <li><a href="contact.html.html">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-4 footer-grid">
            <h3>My Account</h3>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="footer-bottom">
            <h2><a href="index.php">The Coffee Bean CoffeeTory<span>The Best SupeCoffee Shop</span></a></h2>
            <p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
            <ul class="social-fo">
                <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            </ul>
            <div class=" address">
                <div class="col-md-4 fo-grid1">
                    <p><i class="fa fa-home" aria-hidden="true">The Coffee Bean CoffeeTory, Colombo 10</i></p>
                </div>
                <div class="col-md-4 fo-grid1">
                    <p><i class="fa fa-phone" aria-hidden="true"></i>(011) 56748798</p>
                </div>
                <div class="col-md-4 fo-grid1">
                    <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>coffeshop@example.lk</a>
                    </p>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
        <div class="copy-right">
            <p> &copy; 2019 The Coffee Bean CoffeeTory. All Rights Reserved | Design by <b> Yashodhi Anodhya</b>
            </p>
        </div>
    </div>
</div>
<!-- //footer-->

<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
<script type="text/javascript">
    $(function () {

        var goToCartIcon = function ($addTocartBtn) {
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
                "position": "fixed",
                "z-index": "999"
            });
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({
                top: position.top,
                left: position.left
            }, 500, "linear", function () {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function (products) {
                $.each(products, function () {
                    console.log(this);
                });
            },
            clickOnAddToCart: function ($addTocart) {
                goToCartIcon($addTocart);
            },
            getDiscountPrice: function (products) {
                var total = 0;
                $.each(products, function () {
                    total += this.quantity * this.price;
                });
                return total * 1;
            }
        });

    });
</script>

</body>
</html>
