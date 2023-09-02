<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'index',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => NULL,
    'content' => '<p>You have successfully installed MODX Revolution&nbsp;[[++settings_version]]!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your&nbsp;website. </p>

<h2>New to&nbsp;MODX?</h2>

<p>Pages on a MODX site are called <a href="https://docs.modx.com/current/en/building-sites/resources">Resources</a>, and are visible on the left-hand side of the manager in the Resources tab. Resources can be nested under other resources, making it easy to create a tree of resources. There are different types of resources for different use&nbsp;cases.</p>

<p>Building your website is done through a combination of <b>Templates</b>, <b>Template Variables</b>, <b>Chunks</b>, <b>Snippets</b> and <b>Plugins</b>. Collectively these are known as <b>Elements</b>, and can also be found in the left-hand side of the manager, in the Elements&nbsp;tab.</p>

<p><a href="https://docs.modx.com/current/en/building-sites/elements/templates">Templates</a> contain the outer markup of any page. Each resource can only be assigned to a single template at a time. By adding <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables">Template Variables</a> to a template, you can add custom fields for any resource using that particular&nbsp;template.</p>

<p>With <a href="https://docs.modx.com/current/en/building-sites/elements/chunks">Chunks</a> you can share parts of the markup, such as a header, across different templates. <a href="https://docs.modx.com/current/en/building-sites/elements/snippets">Snippets</a> are pieces of PHP that return dynamic content, such as summaries of other resources or the current date. With snippets, you will often use Chunks to mark up the pieces of content it returns, instead of mixing the PHP and&nbsp;HTML.</p>

<p>Finally, <a href="https://docs.modx.com/current/en/extending-modx/plugins">Plugins</a> enable more advanced features by hooking into the extensive events system provided by&nbsp;MODX.</p>

<p>To learn more about MODX, be sure to check out the <a href="https://docs.modx.com/current/en/getting-started">Getting Started</a> section in the official&nbsp;documentation.</p>
',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1683537657,
    'editedby' => 0,
    'editedon' => 0,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
<base href="http://revo-shop-business.local/">
<meta name="description" content="Ogani Template">
<meta name="keywords" content="Ogani, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Оптовый магазин</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<body>
  <!-- Page Preloder -->
<div id="preloder">
  <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
  <div class="humberger__menu__logo">
	<a href="#"><img src="assets/img/logo.png" alt=""></a>
  </div>
  <div class="humberger__menu__cart">
	<ul>
	  <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
	  <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
	</ul>
	<div class="header__cart__price">item: <span>$150.00</span></div>
  </div>
  <div class="humberger__menu__widget">
	<div class="header__top__right__language">
	  <img src="assets/img/language.png" alt="">
	  <div>English</div>
	  <span class="arrow_carrot-down"></span>
	  <ul>
		<li><a href="#">Spanis</a></li>
		<li><a href="#">English</a></li>
	  </ul>
	</div>
	<div class="header__top__right__auth">
	  <a href="#"><i class="fa fa-user"></i> Login</a>
	</div>
  </div>
  <nav class="humberger__menu__nav mobile-menu">
	<ul>
	  <li class="active"><a href="./index.html">Home</a></li>
	  <li><a href="./shop-grid.html">Shop</a></li>
	  <li><a href="#">Pages</a>
		<ul class="header__menu__dropdown">
		  <li><a href="./shop-details.html">Shop Details</a></li>
		  <li><a href="./shoping-cart.html">Shoping Cart</a></li>
		  <li><a href="./checkout.html">Check Out</a></li>
		  <li><a href="./blog-details.html">Blog Details</a></li>
		</ul>
	  </li>
	  <li><a href="./blog.html">Blog</a></li>
	  <li><a href="./contact.html">Contact</a></li>
	</ul>
  </nav>
  <div id="mobile-menu-wrap"></div>
  <div class="header__top__right__social">
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-pinterest-p"></i></a>
  </div>
  <div class="humberger__menu__contact">
	<ul>
	  <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
	  <li>Free Shipping for all Order of $99</li>
	</ul>
  </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
  <div class="header__top">
	<div class="container">
	  <div class="row">
		<div class="col-lg-6 col-md-6">
		  <div class="header__top__left">
			<ul>
			  <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
			  <li>Free Shipping for all Order of $99</li>
			</ul>
		  </div>
		</div>
		<div class="col-lg-6 col-md-6">
		  <div class="header__top__right">
			<div class="header__top__right__social">
			  <a href="#"><i class="fa fa-facebook"></i></a>
			  <a href="#"><i class="fa fa-twitter"></i></a>
			  <a href="#"><i class="fa fa-linkedin"></i></a>
			  <a href="#"><i class="fa fa-pinterest-p"></i></a>
			</div>
			<div class="header__top__right__language">
			  <img src="assets/img/language.png" alt="">
			  <div>English</div>
			  <span class="arrow_carrot-down"></span>
			  <ul>
				<li><a href="#">Spanis</a></li>
				<li><a href="#">English</a></li>
			  </ul>
			</div>
			<div class="header__top__right__auth">
			  <a href="#"><i class="fa fa-user"></i> Login</a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <div class="container">
	<div class="row">
	  <div class="col-lg-3">
		<div class="header__logo">
		  <a href="./index.html"><img src="assets/img/logo-lavander.png" alt=""></a>
		</div>
	  </div>
	  <div class="col-lg-6">
		<nav class="header__menu">
		  <ul>
			<li class="active"><a href="./index.html">Home</a></li>
			<li><a href="./shop-grid.html">Shop</a></li>
			<li><a href="#">Pages</a>
			  <ul class="header__menu__dropdown">
				<li><a href="./shop-details.html">Shop Details</a></li>
				<li><a href="./shoping-cart.html">Shoping Cart</a></li>
				<li><a href="./checkout.html">Check Out</a></li>
				<li><a href="./blog-details.html">Blog Details</a></li>
			  </ul>
			</li>
			<li><a href="./blog.html">Blog</a></li>
			<li><a href="./contact.html">Contact</a></li>
		  </ul>
		</nav>
	  </div>
	  <div class="col-lg-3">
	  [[!msMiniCart?tpl=`miniCartTpl`]]
	  
	  </div>
	</div>
	<div class="humberger__open">
	  <i class="fa fa-bars"></i>
	</div>
  </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero">
  <div class="container">
	<div class="row">
	  <div class="col-lg-3">
		<div class="hero__categories">
		  <div class="hero__categories__all">
			<i class="fa fa-bars"></i>
			<span>All departments</span>
		  </div>
		  <ul>
			<li><a href="#">Fresh Meat</a></li>
			<li><a href="#">Vegetables</a></li>
			<li><a href="#">Fruit & Nut Gifts</a></li>
			<li><a href="#">Fresh Berries</a></li>
			<li><a href="#">Ocean Foods</a></li>
			<li><a href="#">Butter & Eggs</a></li>
			<li><a href="#">Fastfood</a></li>
			<li><a href="#">Fresh Onion</a></li>
			<li><a href="#">Papayaya & Crisps</a></li>
			<li><a href="#">Oatmeal</a></li>
			<li><a href="#">Fresh Bananas</a></li>
		  </ul>
		</div>
	  </div>
	  <div class="col-lg-9">
		<div class="hero__search">
		  <div class="hero__search__form">
			<form action="#">
			  <div class="hero__search__categories">
				All Categories
				<span class="arrow_carrot-down"></span>
			  </div>
			  <input type="text" placeholder="What do yo u need?">
			  <button type="submit" class="site-btn">SEARCH</button>
			</form>
		  </div>
		  <div class="hero__search__phone">
			<div class="hero__search__phone__icon">
			  <i class="fa fa-phone"></i>
			</div>
			<div class="hero__search__phone__text">
			  <h5>+65 11.188.888</h5>
			  <span>support 24/7 time</span>
			</div>
		  </div>
		</div>
		<div class="hero__item set-bg" data-setbg="assets/img/hero/banner.jpg">
		  <div class="hero__text">
			<span>FRUIT FRESH</span>
			<h2>Vegetable <br />100% Organic</h2>
			<p>Free Pickup and Delivery Available</p>
			<a href="#" class="primary-btn">SHOP NOW</a>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
      <section class="categories">
  <div class="container">
	<div class="row">
	  <div class="categories__slider owl-carousel">
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-1.jpg">
			<h5><a href="#">Fresh Fruit</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-2.jpg">
			<h5><a href="#">Dried Fruit</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-3.jpg">
			<h5><a href="#">Vegetables</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-4.jpg">
			<h5><a href="#">drink fruits</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-5.jpg">
			<h5><a href="#">drink fruits</a></h5>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
  <div class="container">
	<div class="row">
	  <div class="col-lg-12">
		<div class="section-title">
		  <h2>Featured Product</h2>
		</div>
		<div class="featured__controls">
		  <ul>
			<li class="active" data-filter="*">All</li>
			<li data-filter=".oranges">Oranges</li>
			<li data-filter=".fresh-meat">Fresh Meat</li>
			<li data-filter=".vegetables">Vegetables</li>
			<li data-filter=".fastfood">Fastfood</li>
		  </ul>
		</div>
	  </div>
	</div>
	<div class="row featured__filter">
	  <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-1.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-2.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-3.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-4.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-5.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-6.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-7.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-8.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
  <div class="container">
	<div class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6">
		<div class="banner__pic">
		  <img src="assets/img/banner/banner-1.jpg" alt="">
		</div>
	  </div>
	  <div class="col-lg-6 col-md-6 col-sm-6">
		<div class="banner__pic">
		  <img src="assets/img/banner/banner-2.jpg" alt="">
		</div>
	  </div>
	</div>
  </div>
</div>
    <!-- Banner End -->

   

    <!-- Footer Section Begin -->
    <footer class="footer spad">
       <div class="container">
  <div class="row">
	<div class="col-lg-3 col-md-6 col-sm-6">
	  <div class="footer__about">
		<div class="footer__about__logo">
		  <a href="./index.html"><img src="assets/img/logo.png" alt=""></a>
		</div>
		<ul>
		  <li>Address: 60-49 Road 11378 New York</li>
		  <li>Phone: +65 11.188.888</li>
		  <li>Email: hello@colorlib.com</li>
		</ul>
	  </div>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
	  <div class="footer__widget">
		<h6>Useful Links</h6>
		<ul>
		  <li><a href="#">About Us</a></li>
		  <li><a href="#">About Our Shop</a></li>
		  <li><a href="#">Secure Shopping</a></li>
		  <li><a href="#">Delivery infomation</a></li>
		  <li><a href="#">Privacy Policy</a></li>
		  <li><a href="#">Our Sitemap</a></li>
		</ul>
		<ul>
		  <li><a href="#">Who We Are</a></li>
		  <li><a href="#">Our Services</a></li>
		  <li><a href="#">Projects</a></li>
		  <li><a href="#">Contact</a></li>
		  <li><a href="#">Innovation</a></li>
		  <li><a href="#">Testimonials</a></li>
		</ul>
	  </div>
	</div>
	<div class="col-lg-4 col-md-12">
	  <div class="footer__widget">
		<h6>Join Our Newsletter Now</h6>
		<p>Get E-mail updates about our latest shop and special offers.</p>
		<form action="#">
		  <input type="text" placeholder="Enter your mail">
		  <button type="submit" class="site-btn">Subscribe</button>
		</form>
		<div class="footer__widget__social">
		  <a href="#"><i class="fa fa-facebook"></i></a>
		  <a href="#"><i class="fa fa-instagram"></i></a>
		  <a href="#"><i class="fa fa-twitter"></i></a>
		  <a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
	  </div>
	</div>
  </div>
  <div class="row">
	<div class="col-lg-12">
	  <div class="footer__copyright">
		<div class="footer__copyright__text"><p><!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
		  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		  <!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. --></p></div>
		<div class="footer__copyright__payment"><img src="assets/img/payment-item.png" alt=""></div>
	  </div>
	</div>
  </div>
</div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/mixitup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>



</body>

</html>
',
    '_isForward' => true,
    '_sjscripts' => 
    array (
      0 => '<link rel="stylesheet" href="/assets/components/minishop2/css/web/default.css?v=667ec14321" type="text/css" />',
      1 => '<link rel="stylesheet" href="/assets/components/minishop2/css/web/lib/jquery.jgrowl.min.css" type="text/css" />',
      2 => '<script>miniShop2Config = {"close_all_message":"\\u0437\\u0430\\u043a\\u0440\\u044b\\u0442\\u044c \\u0432\\u0441\\u0435","cssUrl":"\\/assets\\/components\\/minishop2\\/css\\/web\\/","jsUrl":"\\/assets\\/components\\/minishop2\\/js\\/web\\/","actionUrl":"\\/assets\\/components\\/minishop2\\/action.php","ctx":"web","price_format":[2,"."," "],"price_format_no_zeros":true,"weight_format":[3,"."," "],"weight_format_no_zeros":true};</script>',
    ),
    '_jscripts' => 
    array (
      0 => '<script src="/assets/components/minishop2/js/web/default.js?v=667ec14321"></script>',
      1 => '<script src="/assets/components/minishop2/js/web/lib/jquery.jgrowl.min.js"></script>',
      2 => '<script src="/assets/components/minishop2/js/web/message_settings.js"></script>',
    ),
    '_loadedjscripts' => 
    array (
      '/assets/components/minishop2/css/web/default.css?v=667ec14321' => true,
      '/assets/components/minishop2/css/web/lib/jquery.jgrowl.min.css' => true,
      '/assets/components/minishop2/js/web/default.js?v=667ec14321' => true,
      '<script>miniShop2Config = {"close_all_message":"\\u0437\\u0430\\u043a\\u0440\\u044b\\u0442\\u044c \\u0432\\u0441\\u0435","cssUrl":"\\/assets\\/components\\/minishop2\\/css\\/web\\/","jsUrl":"\\/assets\\/components\\/minishop2\\/js\\/web\\/","actionUrl":"\\/assets\\/components\\/minishop2\\/action.php","ctx":"web","price_format":[2,"."," "],"price_format_no_zeros":true,"weight_format":[3,"."," "],"weight_format_no_zeros":true};</script>' => true,
      '/assets/components/minishop2/js/web/lib/jquery.jgrowl.min.js' => true,
      '/assets/components/minishop2/js/web/message_settings.js' => true,
    ),
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$meta]]' => '<meta charset="UTF-8">
<base href="http://revo-shop-business.local/">
<meta name="description" content="Ogani Template">
<meta name="keywords" content="Ogani, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Оптовый магазин</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">',
    '[[$top-main]]' => '<!-- Page Preloder -->
<div id="preloder">
  <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
  <div class="humberger__menu__logo">
	<a href="#"><img src="assets/img/logo.png" alt=""></a>
  </div>
  <div class="humberger__menu__cart">
	<ul>
	  <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
	  <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
	</ul>
	<div class="header__cart__price">item: <span>$150.00</span></div>
  </div>
  <div class="humberger__menu__widget">
	<div class="header__top__right__language">
	  <img src="assets/img/language.png" alt="">
	  <div>English</div>
	  <span class="arrow_carrot-down"></span>
	  <ul>
		<li><a href="#">Spanis</a></li>
		<li><a href="#">English</a></li>
	  </ul>
	</div>
	<div class="header__top__right__auth">
	  <a href="#"><i class="fa fa-user"></i> Login</a>
	</div>
  </div>
  <nav class="humberger__menu__nav mobile-menu">
	<ul>
	  <li class="active"><a href="./index.html">Home</a></li>
	  <li><a href="./shop-grid.html">Shop</a></li>
	  <li><a href="#">Pages</a>
		<ul class="header__menu__dropdown">
		  <li><a href="./shop-details.html">Shop Details</a></li>
		  <li><a href="./shoping-cart.html">Shoping Cart</a></li>
		  <li><a href="./checkout.html">Check Out</a></li>
		  <li><a href="./blog-details.html">Blog Details</a></li>
		</ul>
	  </li>
	  <li><a href="./blog.html">Blog</a></li>
	  <li><a href="./contact.html">Contact</a></li>
	</ul>
  </nav>
  <div id="mobile-menu-wrap"></div>
  <div class="header__top__right__social">
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-pinterest-p"></i></a>
  </div>
  <div class="humberger__menu__contact">
	<ul>
	  <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
	  <li>Free Shipping for all Order of $99</li>
	</ul>
  </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
  <div class="header__top">
	<div class="container">
	  <div class="row">
		<div class="col-lg-6 col-md-6">
		  <div class="header__top__left">
			<ul>
			  <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
			  <li>Free Shipping for all Order of $99</li>
			</ul>
		  </div>
		</div>
		<div class="col-lg-6 col-md-6">
		  <div class="header__top__right">
			<div class="header__top__right__social">
			  <a href="#"><i class="fa fa-facebook"></i></a>
			  <a href="#"><i class="fa fa-twitter"></i></a>
			  <a href="#"><i class="fa fa-linkedin"></i></a>
			  <a href="#"><i class="fa fa-pinterest-p"></i></a>
			</div>
			<div class="header__top__right__language">
			  <img src="assets/img/language.png" alt="">
			  <div>English</div>
			  <span class="arrow_carrot-down"></span>
			  <ul>
				<li><a href="#">Spanis</a></li>
				<li><a href="#">English</a></li>
			  </ul>
			</div>
			<div class="header__top__right__auth">
			  <a href="#"><i class="fa fa-user"></i> Login</a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <div class="container">
	<div class="row">
	  <div class="col-lg-3">
		<div class="header__logo">
		  <a href="./index.html"><img src="assets/img/logo-lavander.png" alt=""></a>
		</div>
	  </div>
	  <div class="col-lg-6">
		<nav class="header__menu">
		  <ul>
			<li class="active"><a href="./index.html">Home</a></li>
			<li><a href="./shop-grid.html">Shop</a></li>
			<li><a href="#">Pages</a>
			  <ul class="header__menu__dropdown">
				<li><a href="./shop-details.html">Shop Details</a></li>
				<li><a href="./shoping-cart.html">Shoping Cart</a></li>
				<li><a href="./checkout.html">Check Out</a></li>
				<li><a href="./blog-details.html">Blog Details</a></li>
			  </ul>
			</li>
			<li><a href="./blog.html">Blog</a></li>
			<li><a href="./contact.html">Contact</a></li>
		  </ul>
		</nav>
	  </div>
	  <div class="col-lg-3">
	  [[!msMiniCart?tpl=`miniCartTpl`]]
	  
	  </div>
	</div>
	<div class="humberger__open">
	  <i class="fa fa-bars"></i>
	</div>
  </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero">
  <div class="container">
	<div class="row">
	  <div class="col-lg-3">
		<div class="hero__categories">
		  <div class="hero__categories__all">
			<i class="fa fa-bars"></i>
			<span>All departments</span>
		  </div>
		  <ul>
			<li><a href="#">Fresh Meat</a></li>
			<li><a href="#">Vegetables</a></li>
			<li><a href="#">Fruit & Nut Gifts</a></li>
			<li><a href="#">Fresh Berries</a></li>
			<li><a href="#">Ocean Foods</a></li>
			<li><a href="#">Butter & Eggs</a></li>
			<li><a href="#">Fastfood</a></li>
			<li><a href="#">Fresh Onion</a></li>
			<li><a href="#">Papayaya & Crisps</a></li>
			<li><a href="#">Oatmeal</a></li>
			<li><a href="#">Fresh Bananas</a></li>
		  </ul>
		</div>
	  </div>
	  <div class="col-lg-9">
		<div class="hero__search">
		  <div class="hero__search__form">
			<form action="#">
			  <div class="hero__search__categories">
				All Categories
				<span class="arrow_carrot-down"></span>
			  </div>
			  <input type="text" placeholder="What do yo u need?">
			  <button type="submit" class="site-btn">SEARCH</button>
			</form>
		  </div>
		  <div class="hero__search__phone">
			<div class="hero__search__phone__icon">
			  <i class="fa fa-phone"></i>
			</div>
			<div class="hero__search__phone__text">
			  <h5>+65 11.188.888</h5>
			  <span>support 24/7 time</span>
			</div>
		  </div>
		</div>
		<div class="hero__item set-bg" data-setbg="assets/img/hero/banner.jpg">
		  <div class="hero__text">
			<span>FRUIT FRESH</span>
			<h2>Vegetable <br />100% Organic</h2>
			<p>Free Pickup and Delivery Available</p>
			<a href="#" class="primary-btn">SHOP NOW</a>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>',
    '[[$header]]' => '<section class="categories">
  <div class="container">
	<div class="row">
	  <div class="categories__slider owl-carousel">
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-1.jpg">
			<h5><a href="#">Fresh Fruit</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-2.jpg">
			<h5><a href="#">Dried Fruit</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-3.jpg">
			<h5><a href="#">Vegetables</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-4.jpg">
			<h5><a href="#">drink fruits</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-5.jpg">
			<h5><a href="#">drink fruits</a></h5>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
  <div class="container">
	<div class="row">
	  <div class="col-lg-12">
		<div class="section-title">
		  <h2>Featured Product</h2>
		</div>
		<div class="featured__controls">
		  <ul>
			<li class="active" data-filter="*">All</li>
			<li data-filter=".oranges">Oranges</li>
			<li data-filter=".fresh-meat">Fresh Meat</li>
			<li data-filter=".vegetables">Vegetables</li>
			<li data-filter=".fastfood">Fastfood</li>
		  </ul>
		</div>
	  </div>
	</div>
	<div class="row featured__filter">
	  <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-1.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-2.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-3.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-4.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-5.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-6.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-7.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-8.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
  <div class="container">
	<div class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6">
		<div class="banner__pic">
		  <img src="assets/img/banner/banner-1.jpg" alt="">
		</div>
	  </div>
	  <div class="col-lg-6 col-md-6 col-sm-6">
		<div class="banner__pic">
		  <img src="assets/img/banner/banner-2.jpg" alt="">
		</div>
	  </div>
	</div>
  </div>
</div>',
    '[[$footer]]' => '<div class="container">
  <div class="row">
	<div class="col-lg-3 col-md-6 col-sm-6">
	  <div class="footer__about">
		<div class="footer__about__logo">
		  <a href="./index.html"><img src="assets/img/logo.png" alt=""></a>
		</div>
		<ul>
		  <li>Address: 60-49 Road 11378 New York</li>
		  <li>Phone: +65 11.188.888</li>
		  <li>Email: hello@colorlib.com</li>
		</ul>
	  </div>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
	  <div class="footer__widget">
		<h6>Useful Links</h6>
		<ul>
		  <li><a href="#">About Us</a></li>
		  <li><a href="#">About Our Shop</a></li>
		  <li><a href="#">Secure Shopping</a></li>
		  <li><a href="#">Delivery infomation</a></li>
		  <li><a href="#">Privacy Policy</a></li>
		  <li><a href="#">Our Sitemap</a></li>
		</ul>
		<ul>
		  <li><a href="#">Who We Are</a></li>
		  <li><a href="#">Our Services</a></li>
		  <li><a href="#">Projects</a></li>
		  <li><a href="#">Contact</a></li>
		  <li><a href="#">Innovation</a></li>
		  <li><a href="#">Testimonials</a></li>
		</ul>
	  </div>
	</div>
	<div class="col-lg-4 col-md-12">
	  <div class="footer__widget">
		<h6>Join Our Newsletter Now</h6>
		<p>Get E-mail updates about our latest shop and special offers.</p>
		<form action="#">
		  <input type="text" placeholder="Enter your mail">
		  <button type="submit" class="site-btn">Subscribe</button>
		</form>
		<div class="footer__widget__social">
		  <a href="#"><i class="fa fa-facebook"></i></a>
		  <a href="#"><i class="fa fa-instagram"></i></a>
		  <a href="#"><i class="fa fa-twitter"></i></a>
		  <a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
	  </div>
	</div>
  </div>
  <div class="row">
	<div class="col-lg-12">
	  <div class="footer__copyright">
		<div class="footer__copyright__text"><p><!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
		  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		  <!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. --></p></div>
		<div class="footer__copyright__payment"><img src="assets/img/payment-item.png" alt=""></div>
	  </div>
	</div>
  </div>
</div>',
    '[[$scripts]]' => '<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/mixitup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'meta' => 
      array (
        'fields' => 
        array (
          'id' => 24,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'meta',
          'description' => 'Сквозной чанк на каждой странице сайта.',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<meta charset="UTF-8">
<base href="[[++site_url]]">
<meta name="description" content="Ogani Template">
<meta name="keywords" content="Ogani, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Оптовый магазин</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<meta charset="UTF-8">
<base href="[[++site_url]]">
<meta name="description" content="Ogani Template">
<meta name="keywords" content="Ogani, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Оптовый магазин</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'top-main' => 
      array (
        'fields' => 
        array (
          'id' => 34,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'top-main',
          'description' => 'Чанк верхней части главной страницы сайта. ',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<!-- Page Preloder -->
<div id="preloder">
  <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
  <div class="humberger__menu__logo">
	<a href="#"><img src="assets/img/logo.png" alt=""></a>
  </div>
  <div class="humberger__menu__cart">
	<ul>
	  <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
	  <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
	</ul>
	<div class="header__cart__price">item: <span>$150.00</span></div>
  </div>
  <div class="humberger__menu__widget">
	<div class="header__top__right__language">
	  <img src="assets/img/language.png" alt="">
	  <div>English</div>
	  <span class="arrow_carrot-down"></span>
	  <ul>
		<li><a href="#">Spanis</a></li>
		<li><a href="#">English</a></li>
	  </ul>
	</div>
	<div class="header__top__right__auth">
	  <a href="#"><i class="fa fa-user"></i> Login</a>
	</div>
  </div>
  <nav class="humberger__menu__nav mobile-menu">
	<ul>
	  <li class="active"><a href="./index.html">Home</a></li>
	  <li><a href="./shop-grid.html">Shop</a></li>
	  <li><a href="#">Pages</a>
		<ul class="header__menu__dropdown">
		  <li><a href="./shop-details.html">Shop Details</a></li>
		  <li><a href="./shoping-cart.html">Shoping Cart</a></li>
		  <li><a href="./checkout.html">Check Out</a></li>
		  <li><a href="./blog-details.html">Blog Details</a></li>
		</ul>
	  </li>
	  <li><a href="./blog.html">Blog</a></li>
	  <li><a href="./contact.html">Contact</a></li>
	</ul>
  </nav>
  <div id="mobile-menu-wrap"></div>
  <div class="header__top__right__social">
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-pinterest-p"></i></a>
  </div>
  <div class="humberger__menu__contact">
	<ul>
	  <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
	  <li>Free Shipping for all Order of $99</li>
	</ul>
  </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
  <div class="header__top">
	<div class="container">
	  <div class="row">
		<div class="col-lg-6 col-md-6">
		  <div class="header__top__left">
			<ul>
			  <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
			  <li>Free Shipping for all Order of $99</li>
			</ul>
		  </div>
		</div>
		<div class="col-lg-6 col-md-6">
		  <div class="header__top__right">
			<div class="header__top__right__social">
			  <a href="#"><i class="fa fa-facebook"></i></a>
			  <a href="#"><i class="fa fa-twitter"></i></a>
			  <a href="#"><i class="fa fa-linkedin"></i></a>
			  <a href="#"><i class="fa fa-pinterest-p"></i></a>
			</div>
			<div class="header__top__right__language">
			  <img src="assets/img/language.png" alt="">
			  <div>English</div>
			  <span class="arrow_carrot-down"></span>
			  <ul>
				<li><a href="#">Spanis</a></li>
				<li><a href="#">English</a></li>
			  </ul>
			</div>
			<div class="header__top__right__auth">
			  <a href="#"><i class="fa fa-user"></i> Login</a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <div class="container">
	<div class="row">
	  <div class="col-lg-3">
		<div class="header__logo">
		  <a href="./index.html"><img src="assets/img/logo-lavander.png" alt=""></a>
		</div>
	  </div>
	  <div class="col-lg-6">
		<nav class="header__menu">
		  <ul>
			<li class="active"><a href="./index.html">Home</a></li>
			<li><a href="./shop-grid.html">Shop</a></li>
			<li><a href="#">Pages</a>
			  <ul class="header__menu__dropdown">
				<li><a href="./shop-details.html">Shop Details</a></li>
				<li><a href="./shoping-cart.html">Shoping Cart</a></li>
				<li><a href="./checkout.html">Check Out</a></li>
				<li><a href="./blog-details.html">Blog Details</a></li>
			  </ul>
			</li>
			<li><a href="./blog.html">Blog</a></li>
			<li><a href="./contact.html">Contact</a></li>
		  </ul>
		</nav>
	  </div>
	  <div class="col-lg-3">
	  [[!msMiniCart?tpl=`miniCartTpl`]]
	  
	  </div>
	</div>
	<div class="humberger__open">
	  <i class="fa fa-bars"></i>
	</div>
  </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero">
  <div class="container">
	<div class="row">
	  <div class="col-lg-3">
		<div class="hero__categories">
		  <div class="hero__categories__all">
			<i class="fa fa-bars"></i>
			<span>All departments</span>
		  </div>
		  <ul>
			<li><a href="#">Fresh Meat</a></li>
			<li><a href="#">Vegetables</a></li>
			<li><a href="#">Fruit & Nut Gifts</a></li>
			<li><a href="#">Fresh Berries</a></li>
			<li><a href="#">Ocean Foods</a></li>
			<li><a href="#">Butter & Eggs</a></li>
			<li><a href="#">Fastfood</a></li>
			<li><a href="#">Fresh Onion</a></li>
			<li><a href="#">Papayaya & Crisps</a></li>
			<li><a href="#">Oatmeal</a></li>
			<li><a href="#">Fresh Bananas</a></li>
		  </ul>
		</div>
	  </div>
	  <div class="col-lg-9">
		<div class="hero__search">
		  <div class="hero__search__form">
			<form action="#">
			  <div class="hero__search__categories">
				All Categories
				<span class="arrow_carrot-down"></span>
			  </div>
			  <input type="text" placeholder="What do yo u need?">
			  <button type="submit" class="site-btn">SEARCH</button>
			</form>
		  </div>
		  <div class="hero__search__phone">
			<div class="hero__search__phone__icon">
			  <i class="fa fa-phone"></i>
			</div>
			<div class="hero__search__phone__text">
			  <h5>+65 11.188.888</h5>
			  <span>support 24/7 time</span>
			</div>
		  </div>
		</div>
		<div class="hero__item set-bg" data-setbg="assets/img/hero/banner.jpg">
		  <div class="hero__text">
			<span>FRUIT FRESH</span>
			<h2>Vegetable <br />100% Organic</h2>
			<p>Free Pickup and Delivery Available</p>
			<a href="#" class="primary-btn">SHOP NOW</a>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!-- Page Preloder -->
<div id="preloder">
  <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
  <div class="humberger__menu__logo">
	<a href="#"><img src="assets/img/logo.png" alt=""></a>
  </div>
  <div class="humberger__menu__cart">
	<ul>
	  <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
	  <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
	</ul>
	<div class="header__cart__price">item: <span>$150.00</span></div>
  </div>
  <div class="humberger__menu__widget">
	<div class="header__top__right__language">
	  <img src="assets/img/language.png" alt="">
	  <div>English</div>
	  <span class="arrow_carrot-down"></span>
	  <ul>
		<li><a href="#">Spanis</a></li>
		<li><a href="#">English</a></li>
	  </ul>
	</div>
	<div class="header__top__right__auth">
	  <a href="#"><i class="fa fa-user"></i> Login</a>
	</div>
  </div>
  <nav class="humberger__menu__nav mobile-menu">
	<ul>
	  <li class="active"><a href="./index.html">Home</a></li>
	  <li><a href="./shop-grid.html">Shop</a></li>
	  <li><a href="#">Pages</a>
		<ul class="header__menu__dropdown">
		  <li><a href="./shop-details.html">Shop Details</a></li>
		  <li><a href="./shoping-cart.html">Shoping Cart</a></li>
		  <li><a href="./checkout.html">Check Out</a></li>
		  <li><a href="./blog-details.html">Blog Details</a></li>
		</ul>
	  </li>
	  <li><a href="./blog.html">Blog</a></li>
	  <li><a href="./contact.html">Contact</a></li>
	</ul>
  </nav>
  <div id="mobile-menu-wrap"></div>
  <div class="header__top__right__social">
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-pinterest-p"></i></a>
  </div>
  <div class="humberger__menu__contact">
	<ul>
	  <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
	  <li>Free Shipping for all Order of $99</li>
	</ul>
  </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
  <div class="header__top">
	<div class="container">
	  <div class="row">
		<div class="col-lg-6 col-md-6">
		  <div class="header__top__left">
			<ul>
			  <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
			  <li>Free Shipping for all Order of $99</li>
			</ul>
		  </div>
		</div>
		<div class="col-lg-6 col-md-6">
		  <div class="header__top__right">
			<div class="header__top__right__social">
			  <a href="#"><i class="fa fa-facebook"></i></a>
			  <a href="#"><i class="fa fa-twitter"></i></a>
			  <a href="#"><i class="fa fa-linkedin"></i></a>
			  <a href="#"><i class="fa fa-pinterest-p"></i></a>
			</div>
			<div class="header__top__right__language">
			  <img src="assets/img/language.png" alt="">
			  <div>English</div>
			  <span class="arrow_carrot-down"></span>
			  <ul>
				<li><a href="#">Spanis</a></li>
				<li><a href="#">English</a></li>
			  </ul>
			</div>
			<div class="header__top__right__auth">
			  <a href="#"><i class="fa fa-user"></i> Login</a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <div class="container">
	<div class="row">
	  <div class="col-lg-3">
		<div class="header__logo">
		  <a href="./index.html"><img src="assets/img/logo-lavander.png" alt=""></a>
		</div>
	  </div>
	  <div class="col-lg-6">
		<nav class="header__menu">
		  <ul>
			<li class="active"><a href="./index.html">Home</a></li>
			<li><a href="./shop-grid.html">Shop</a></li>
			<li><a href="#">Pages</a>
			  <ul class="header__menu__dropdown">
				<li><a href="./shop-details.html">Shop Details</a></li>
				<li><a href="./shoping-cart.html">Shoping Cart</a></li>
				<li><a href="./checkout.html">Check Out</a></li>
				<li><a href="./blog-details.html">Blog Details</a></li>
			  </ul>
			</li>
			<li><a href="./blog.html">Blog</a></li>
			<li><a href="./contact.html">Contact</a></li>
		  </ul>
		</nav>
	  </div>
	  <div class="col-lg-3">
	  [[!msMiniCart?tpl=`miniCartTpl`]]
	  
	  </div>
	</div>
	<div class="humberger__open">
	  <i class="fa fa-bars"></i>
	</div>
  </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero">
  <div class="container">
	<div class="row">
	  <div class="col-lg-3">
		<div class="hero__categories">
		  <div class="hero__categories__all">
			<i class="fa fa-bars"></i>
			<span>All departments</span>
		  </div>
		  <ul>
			<li><a href="#">Fresh Meat</a></li>
			<li><a href="#">Vegetables</a></li>
			<li><a href="#">Fruit & Nut Gifts</a></li>
			<li><a href="#">Fresh Berries</a></li>
			<li><a href="#">Ocean Foods</a></li>
			<li><a href="#">Butter & Eggs</a></li>
			<li><a href="#">Fastfood</a></li>
			<li><a href="#">Fresh Onion</a></li>
			<li><a href="#">Papayaya & Crisps</a></li>
			<li><a href="#">Oatmeal</a></li>
			<li><a href="#">Fresh Bananas</a></li>
		  </ul>
		</div>
	  </div>
	  <div class="col-lg-9">
		<div class="hero__search">
		  <div class="hero__search__form">
			<form action="#">
			  <div class="hero__search__categories">
				All Categories
				<span class="arrow_carrot-down"></span>
			  </div>
			  <input type="text" placeholder="What do yo u need?">
			  <button type="submit" class="site-btn">SEARCH</button>
			</form>
		  </div>
		  <div class="hero__search__phone">
			<div class="hero__search__phone__icon">
			  <i class="fa fa-phone"></i>
			</div>
			<div class="hero__search__phone__text">
			  <h5>+65 11.188.888</h5>
			  <span>support 24/7 time</span>
			</div>
		  </div>
		</div>
		<div class="hero__item set-bg" data-setbg="assets/img/hero/banner.jpg">
		  <div class="hero__text">
			<span>FRUIT FRESH</span>
			<h2>Vegetable <br />100% Organic</h2>
			<p>Free Pickup and Delivery Available</p>
			<a href="#" class="primary-btn">SHOP NOW</a>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 25,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => 'Чанк с товарами в шаблоне Главная страница.
',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<section class="categories">
  <div class="container">
	<div class="row">
	  <div class="categories__slider owl-carousel">
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-1.jpg">
			<h5><a href="#">Fresh Fruit</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-2.jpg">
			<h5><a href="#">Dried Fruit</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-3.jpg">
			<h5><a href="#">Vegetables</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-4.jpg">
			<h5><a href="#">drink fruits</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-5.jpg">
			<h5><a href="#">drink fruits</a></h5>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
  <div class="container">
	<div class="row">
	  <div class="col-lg-12">
		<div class="section-title">
		  <h2>Featured Product</h2>
		</div>
		<div class="featured__controls">
		  <ul>
			<li class="active" data-filter="*">All</li>
			<li data-filter=".oranges">Oranges</li>
			<li data-filter=".fresh-meat">Fresh Meat</li>
			<li data-filter=".vegetables">Vegetables</li>
			<li data-filter=".fastfood">Fastfood</li>
		  </ul>
		</div>
	  </div>
	</div>
	<div class="row featured__filter">
	  <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-1.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-2.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-3.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-4.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-5.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-6.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-7.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-8.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
  <div class="container">
	<div class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6">
		<div class="banner__pic">
		  <img src="assets/img/banner/banner-1.jpg" alt="">
		</div>
	  </div>
	  <div class="col-lg-6 col-md-6 col-sm-6">
		<div class="banner__pic">
		  <img src="assets/img/banner/banner-2.jpg" alt="">
		</div>
	  </div>
	</div>
  </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<section class="categories">
  <div class="container">
	<div class="row">
	  <div class="categories__slider owl-carousel">
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-1.jpg">
			<h5><a href="#">Fresh Fruit</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-2.jpg">
			<h5><a href="#">Dried Fruit</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-3.jpg">
			<h5><a href="#">Vegetables</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-4.jpg">
			<h5><a href="#">drink fruits</a></h5>
		  </div>
		</div>
		<div class="col-lg-3">
		  <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-5.jpg">
			<h5><a href="#">drink fruits</a></h5>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
  <div class="container">
	<div class="row">
	  <div class="col-lg-12">
		<div class="section-title">
		  <h2>Featured Product</h2>
		</div>
		<div class="featured__controls">
		  <ul>
			<li class="active" data-filter="*">All</li>
			<li data-filter=".oranges">Oranges</li>
			<li data-filter=".fresh-meat">Fresh Meat</li>
			<li data-filter=".vegetables">Vegetables</li>
			<li data-filter=".fastfood">Fastfood</li>
		  </ul>
		</div>
	  </div>
	</div>
	<div class="row featured__filter">
	  <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-1.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-2.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-3.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-4.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-5.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-6.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-7.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
		<div class="featured__item">
		  <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-8.jpg">
			<ul class="featured__item__pic__hover">
			  <li><a href="#"><i class="fa fa-heart"></i></a></li>
			  <li><a href="#"><i class="fa fa-retweet"></i></a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		  </div>
		  <div class="featured__item__text">
			<h6><a href="#">Crab Pool Security</a></h6>
			<h5>$30.00</h5>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
  <div class="container">
	<div class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6">
		<div class="banner__pic">
		  <img src="assets/img/banner/banner-1.jpg" alt="">
		</div>
	  </div>
	  <div class="col-lg-6 col-md-6 col-sm-6">
		<div class="banner__pic">
		  <img src="assets/img/banner/banner-2.jpg" alt="">
		</div>
	  </div>
	</div>
  </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 26,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<div class="container">
  <div class="row">
	<div class="col-lg-3 col-md-6 col-sm-6">
	  <div class="footer__about">
		<div class="footer__about__logo">
		  <a href="./index.html"><img src="assets/img/logo.png" alt=""></a>
		</div>
		<ul>
		  <li>Address: 60-49 Road 11378 New York</li>
		  <li>Phone: +65 11.188.888</li>
		  <li>Email: hello@colorlib.com</li>
		</ul>
	  </div>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
	  <div class="footer__widget">
		<h6>Useful Links</h6>
		<ul>
		  <li><a href="#">About Us</a></li>
		  <li><a href="#">About Our Shop</a></li>
		  <li><a href="#">Secure Shopping</a></li>
		  <li><a href="#">Delivery infomation</a></li>
		  <li><a href="#">Privacy Policy</a></li>
		  <li><a href="#">Our Sitemap</a></li>
		</ul>
		<ul>
		  <li><a href="#">Who We Are</a></li>
		  <li><a href="#">Our Services</a></li>
		  <li><a href="#">Projects</a></li>
		  <li><a href="#">Contact</a></li>
		  <li><a href="#">Innovation</a></li>
		  <li><a href="#">Testimonials</a></li>
		</ul>
	  </div>
	</div>
	<div class="col-lg-4 col-md-12">
	  <div class="footer__widget">
		<h6>Join Our Newsletter Now</h6>
		<p>Get E-mail updates about our latest shop and special offers.</p>
		<form action="#">
		  <input type="text" placeholder="Enter your mail">
		  <button type="submit" class="site-btn">Subscribe</button>
		</form>
		<div class="footer__widget__social">
		  <a href="#"><i class="fa fa-facebook"></i></a>
		  <a href="#"><i class="fa fa-instagram"></i></a>
		  <a href="#"><i class="fa fa-twitter"></i></a>
		  <a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
	  </div>
	</div>
  </div>
  <div class="row">
	<div class="col-lg-12">
	  <div class="footer__copyright">
		<div class="footer__copyright__text"><p><!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
		  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		  <!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. --></p></div>
		<div class="footer__copyright__payment"><img src="assets/img/payment-item.png" alt=""></div>
	  </div>
	</div>
  </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="container">
  <div class="row">
	<div class="col-lg-3 col-md-6 col-sm-6">
	  <div class="footer__about">
		<div class="footer__about__logo">
		  <a href="./index.html"><img src="assets/img/logo.png" alt=""></a>
		</div>
		<ul>
		  <li>Address: 60-49 Road 11378 New York</li>
		  <li>Phone: +65 11.188.888</li>
		  <li>Email: hello@colorlib.com</li>
		</ul>
	  </div>
	</div>
	<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
	  <div class="footer__widget">
		<h6>Useful Links</h6>
		<ul>
		  <li><a href="#">About Us</a></li>
		  <li><a href="#">About Our Shop</a></li>
		  <li><a href="#">Secure Shopping</a></li>
		  <li><a href="#">Delivery infomation</a></li>
		  <li><a href="#">Privacy Policy</a></li>
		  <li><a href="#">Our Sitemap</a></li>
		</ul>
		<ul>
		  <li><a href="#">Who We Are</a></li>
		  <li><a href="#">Our Services</a></li>
		  <li><a href="#">Projects</a></li>
		  <li><a href="#">Contact</a></li>
		  <li><a href="#">Innovation</a></li>
		  <li><a href="#">Testimonials</a></li>
		</ul>
	  </div>
	</div>
	<div class="col-lg-4 col-md-12">
	  <div class="footer__widget">
		<h6>Join Our Newsletter Now</h6>
		<p>Get E-mail updates about our latest shop and special offers.</p>
		<form action="#">
		  <input type="text" placeholder="Enter your mail">
		  <button type="submit" class="site-btn">Subscribe</button>
		</form>
		<div class="footer__widget__social">
		  <a href="#"><i class="fa fa-facebook"></i></a>
		  <a href="#"><i class="fa fa-instagram"></i></a>
		  <a href="#"><i class="fa fa-twitter"></i></a>
		  <a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
	  </div>
	</div>
  </div>
  <div class="row">
	<div class="col-lg-12">
	  <div class="footer__copyright">
		<div class="footer__copyright__text"><p><!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
		  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		  <!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. --></p></div>
		<div class="footer__copyright__payment"><img src="assets/img/payment-item.png" alt=""></div>
	  </div>
	</div>
  </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'scripts' => 
      array (
        'fields' => 
        array (
          'id' => 27,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'scripts',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/mixitup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/mixitup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'msMiniCart' => 
      array (
        'fields' => 
        array (
          'id' => 44,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'msMiniCart',
          'description' => '',
          'editor_type' => 0,
          'category' => 9,
          'cache_type' => 0,
          'snippet' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var miniShop2 $miniShop2 */
$miniShop2 = $modx->getService(\'miniShop2\');
$miniShop2->initialize($modx->context->key);

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.msMiniCart\');

$cart = $miniShop2->cart->status();
$cart[\'total_cost\'] = $miniShop2->formatPrice($cart[\'total_cost\']);
$cart[\'total_weight\'] = $miniShop2->formatWeight($cart[\'total_weight\']);
$cart[\'total_discount\'] = $miniShop2->formatPrice($cart[\'total_discount\']);
$cart[\'scriptProperties\'] = $scriptProperties;
return $miniShop2->pdoTools->getChunk($tpl, $cart);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'ms2_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.msMiniCart',
              'lexicon' => 'minishop2:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления для каждого результата',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/minishop2/elements/snippets/snippet.ms_minicart.php',
          'content' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var miniShop2 $miniShop2 */
$miniShop2 = $modx->getService(\'miniShop2\');
$miniShop2->initialize($modx->context->key);

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.msMiniCart\');

$cart = $miniShop2->cart->status();
$cart[\'total_cost\'] = $miniShop2->formatPrice($cart[\'total_cost\']);
$cart[\'total_weight\'] = $miniShop2->formatWeight($cart[\'total_weight\']);
$cart[\'total_discount\'] = $miniShop2->formatPrice($cart[\'total_discount\']);
$cart[\'scriptProperties\'] = $scriptProperties;
return $miniShop2->pdoTools->getChunk($tpl, $cart);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);