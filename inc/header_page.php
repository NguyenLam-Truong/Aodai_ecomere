<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width">

    <title>Home</title>

    <link rel="shortcut icon" href="favicon.ico">
    <link href="../../public/css/style.css" media="screen" rel="stylesheet" type="text/css">

    <script src="../../public/js/jquery-1.7.2.min.js"></script>
    <script src="../../public/js/html5.js"></script>
    <script src="../../public/js/main.js"></script>
    <script src="../../public/js/jquery.carouFredSel-6.2.0-packed.js"></script>
    <script src="../../public/js/jquery.touchSwipe.min.js"></script>
    <script src="../../public/js/checkbox.js"></script>
    <script src="../../public/js/radio.js"></script>
    <script src="../../public/js/selectBox.js"></script>
    <script src="../../public/js/jquery.jqzoom-core.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="container_12">
        <div id="top">
            <div class="grid_3 ">
                <div class="phone_top">
                    <span>Call Us +777 (100) 1234</span>
                </div><!-- .phone_top -->
            </div><!-- .grid_3 -->

            <div class="grid_6">
                <div class="welcome">
                    Welcome visitor you can <a href="/login.html">login</a> or <a href="/login.html">create an account</a>.
                </div><!-- .welcome -->
            </div><!-- .grid_6 -->

            <div class="grid_3">
                <div class="valuta">
                    <ul>
                        <li class="curent"><a href="#">$</a></li>
                        <li><a href="#">&#8364;</a></li>
                        <li><a href="#">&#163;</a></li>
                    </ul>
                </div><!-- .valuta -->

                <div class="lang">
                    <ul>
                        <li class="curent"><a href="#">EN</a></li>
                        <li><a href="#">FR</a></li>
                        <li><a href="#">GM</a></li>
                    </ul>
                </div><!-- .lang -->
            </div><!-- .grid_3 -->
        </div><!-- #top -->

        <div class="clear"></div>

        <header id="branding">
            <div class="grid_3">
                <hgroup>
                    <h1 id="site_logo"><a href="/" title=""><img src="../../public/images/logo.png" alt="Online Store Theme Logo" /></a></h1>
                    <h2 id="site_description">Online Store Theme</h2>
                </hgroup>
            </div><!-- .grid_3 -->

            <div class="grid_3">
                <form class="search">
                    <input type="text" name="search" class="entry_form" value="" placeholder="Search entire store here..." />
                </form>
            </div><!-- .grid_3 -->

            <div class="grid_6">
                <ul id="cart_nav">
                    <li>
                        <a class="cart_li" href="/shopping_cart.html">Cart <span>$0.00</span></a>
                        <ul class="cart_cont">
                            <li class="no_border">
                                <p>Recently added item(s)</p>
                            </li>
                            <li>
                                <a href="/product_page.html" class="prev_cart">
                                    <div class="cart_vert"><img src="images/cart_img.png" alt="" title="" /></div>
                                </a>
                                <div class="cont_cart">
                                    <h4>Caldrea Linen and Room Spray</h4>
                                    <div class="price">1 x $399.00</div>
                                </div>
                                <a title="close" class="close" href="#"></a>
                                <div class="clear"></div>
                            </li>

                            <li>
                                <a href="/product_page.html" class="prev_cart">
                                    <div class="cart_vert"><img src="images/produkt_slid1.png" alt="" title="" /></div>
                                </a>
                                <div class="cont_cart">
                                    <h4>Caldrea Linen and Room Spray</h4>
                                    <div class="price">1 x $399.00</div>
                                </div>
                                <a title="close" class="close" href="#"></a>
                                <div class="clear"></div>
                            </li>
                            <li class="no_border">
                                <a href="/shopping_cart.html" class="view_cart">View shopping cart</a>
                                <a href="/checkout.html" class="checkout">Procced to Checkout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <nav class="private">
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li class="separator">|</li>
                        <li><a href="#">My Wishlist</a></li>
                        <li class="separator">|</li>
                        <li><a href="index.php?ctrl=login">Log In</a></li>
                        <li class="separator">|</li>
                        <li><a href="/login.html">Sign Up</a></li>
                    </ul>
                </nav><!-- .private -->
            </div><!-- .grid_6 -->
        </header><!-- #branding -->
    </div><!-- .container_12 -->

    <div class="clear"></div>

    <div id="block_nav_primary">
        <div class="container_12">
            <div class="grid_12">
                <nav class="primary">
                    <a class="menu-select" href="#">Catalog</a>
                    <ul>
                        <li class="curent"><a href="/">Home</a></li>
                        <li><a href="/catalog_grid.html">Solids</a></li>
                        <li><a href="/catalog_grid.html">Liquids</a></li>
                        <li class="parent">
                            <a href="#">Spray</a>
                            <ul class="sub">
                                <li><a href="/catalog_grid.html">For home</a></li>
                                <li><a href="/catalog_grid.html">For Garden</a></li>
                                <li><a href="/catalog_grid.html">For Car</a></li>
                                <li><a href="/catalog_grid.html">Other spray</a></li>
                            </ul>
                        </li>
                        <li><a href="/catalog_grid.html">Electric</a></li>
                        <li><a href="/catalog_grid.html">For cars</a></li>
                        <?php
                        if(!empty($_SESSION['role'])){
                            if($_SESSION['role']==1){
                                echo '
                                <li class="parent">
                                    <a href="#">QU???N TR???</a>
                                    <ul class="sub">
                                        <li>
                                            <a href="?act=redirect_admin">
                                               V??O QU???N TR???
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            ';
                            }
                        }
                        if(!empty($_SESSION['username'])){
                            echo '<li><a href="login_site.php?act=logout">????ng Xu???t</a></li>';
                        }
                        ?>
                    </ul>
                </nav><!-- .primary -->
            </div><!-- .grid_12 -->
        </div><!-- .container_12 -->
    </div><!-- .block_nav_primary -->

    <div class="clear"></div>