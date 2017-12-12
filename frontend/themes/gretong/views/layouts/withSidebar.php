<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\debug\Toolbar;

\frontend\assets\GretongAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <title><?php echo Html::encode($this->title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <!-- start menu -->
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <?php $this->head(); ?>
</head>
<body class='wsite-theme-light tall-header-page wsite-page-index weeblypage-index'>
<?php $this->beginBody(); ?>
<div id="wrap">
    <div class="header_bg">
        <div class="container">
            <div class="header">
                <div class="head-t">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""/> </a>
                    </div>
                    <!-- start header_right -->
                    <div class="header_right">
                        <div class="rgt-bottom">
                            <div class="log">
                                <div class="login" >
                                    <div id="loginContainer"><a href="#" id="loginButton"><span>Войти</span></a>
                                        <div id="loginBox">
                                            <form id="loginForm">
                                                <fieldset id="body">
                                                    <fieldset>
                                                        <label for="email">Email Address</label>
                                                        <input type="text" name="email" id="email">
                                                    </fieldset>
                                                    <fieldset>
                                                        <label for="password">Password</label>
                                                        <input type="password" name="password" id="password">
                                                    </fieldset>
                                                    <input type="submit" id="login" value="Sign in">
                                                    <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                                </fieldset>
                                                <span><a href="#">Forgot your password?</a></span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reg">
                                <a href="register.html">REGISTER</a>
                            </div>
                            <div class="cart box_1">
                                <a href="checkout.html">
                                    <h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
                                </a>
                                <p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="create_btn">
                                <a href="checkout.html">CHECKOUT</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="search">
                            <form>
                                <input type="text" value="" placeholder="search...">
                                <input type="submit" value="">
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- start header menu -->
                <ul class="megamenu skyblue">
                    <li class="active grid"><a class="color1" href="index.html">Home</a></li>
                    <li class="grid"><a class="color2" href="#">new arrivals</a></li>
                    <li><a class="color4" href="#">TUXEDO</a></li>
                    <li><a class="color5" href="#">SWEATER</a></li>

                    <li><a class="color7" href="#">GLASSES</a></li>

                    <li><a class="color8" href="#">T-SHIRT</a></li>
                    <li><a class="color9" href="#">WATCHES</a></li>
                </ul>
            </div>
        </div>
        <div id="main">
            <div id="banner">
                <div class="wsite-header"></div>
            </div>
            <div class="container">
                <div class="women_main">
                    <div class="col-md-3 s-d">
                        <div class="w_sidebar">
                            <div class="w_nav1">
                                <h4>All</h4>
                                <ul>
                                    <li><a href="women.html">women</a></li>
                                    <li><a href="#">new arrivals</a></li>
                                    <li><a href="#">trends</a></li>
                                    <li><a href="#">boys</a></li>
                                    <li><a href="#">girls</a></li>
                                    <li><a href="#">sale</a></li>
                                </ul>
                            </div>
                            <h3>filter by</h3>
                            <section  class="sky-form">
                                <h4>catogories</h4>
                                <div class="row1 scroll-pane">
                                    <div class="col col-4">
                                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>kurtas</label>
                                    </div>
                                    <div class="col col-4">
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>kutis</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>churidar kurta</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>salwar</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>printed sari</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
                                    </div>
                                </div>
                            </section>
                            <section  class="sky-form">
                                <h4>brand</h4>
                                <div class="row1 scroll-pane">
                                    <div class="col col-4">
                                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>shree</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
                                    </div>
                                    <div class="col col-4">
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>vishud</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>amari</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
                                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
                                    </div>
                                </div>
                            </section>
                            <section class="sky-form">
                                <h4>colour</h4>
                                <ul class="w_nav2">
                                    <li><a class="color1" href="#"></a></li>
                                    <li><a class="color2" href="#"></a></li>
                                    <li><a class="color3" href="#"></a></li>
                                    <li><a class="color4" href="#"></a></li>
                                    <li><a class="color5" href="#"></a></li>
                                    <li><a class="color6" href="#"></a></li>
                                    <li><a class="color7" href="#"></a></li>
                                    <li><a class="color8" href="#"></a></li>
                                    <li><a class="color9" href="#"></a></li>
                                    <li><a class="color10" href="#"></a></li>
                                    <li><a class="color12" href="#"></a></li>
                                    <li><a class="color13" href="#"></a></li>
                                    <li><a class="color14" href="#"></a></li>
                                    <li><a class="color15" href="#"></a></li>
                                    <li><a class="color5" href="#"></a></li>
                                    <li><a class="color6" href="#"></a></li>
                                    <li><a class="color7" href="#"></a></li>
                                    <li><a class="color8" href="#"></a></li>
                                    <li><a class="color9" href="#"></a></li>
                                    <li><a class="color10" href="#"></a></li>
                                </ul>
                            </section>
                            <section class="sky-form">
                                <h4>discount</h4>
                                <div class="row1 scroll-pane">
                                    <div class="col col-4">
                                        <label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
                                        <label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
                                        <label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
                                    </div>
                                    <div class="col col-4">
                                        <label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
                                        <label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
                                        <label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-md-9 w_content">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="foot-top">
            <div class="container">
                <div class="col-md-6 s-c">
                    <li>
                        <div class="fooll">
                            <h5>follow us on</h5>
                        </div>
                    </li>
                    <li>
                        <div class="social-ic">
                            <ul>
                                <li><a href="#"><i class="facebok"> </i></a></li>
                                <li><a href="#"><i class="twiter"> </i></a></li>
                                <li><a href="#"><i class="goog"> </i></a></li>
                                <li><a href="#"><i class="be"> </i></a></li>
                                <li><a href="#"><i class="pp"> </i></a></li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                    </li>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 s-c">
                    <div class="stay">
                        <div class="stay-left">
                            <form>
                                <input type="text" placeholder="Enter your email to join our newsletter" required="">
                            </form>
                        </div>
                        <div class="btn-1">
                            <form>
                                <input type="submit" value="join">
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="col-md-3 cust">
                    <h4>КАК ЗАКАЗАТЬ?</h4>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="buy.html">How To Buy</a></li>
                    <li><a href="#">Delivery</a></li>
                </div>
                <div class="col-md-2 abt">
                    <h4>ABOUT US</h4>
                    <li><a href="#">Our Stories</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </div>
                <div class="col-md-2 myac">
                    <h4>MY ACCOUNT</h4>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="#">My Cart</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="buy.html">Payment</a></li>
                </div>
                <div class="col-md-5 our-st">
                    <div class="our-left">
                        <h4>OUR STORES</h4>
                    </div>
                    <div class="our-left1">
                        <div class="cr_btn">
                            <a href="#">SOLO</a>
                        </div>
                    </div>
                    <div class="our-left1">
                        <div class="cr_btn1">
                            <a href="#">BOGOR</a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <li><i class="add"> </i>Jl. Haji Muhidin, Blok G no.69</li>
                    <li><i class="phone"> </i>025-2839341</li>
                    <li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
