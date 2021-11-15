<?php
include('main.php');

?>
<!DOCTYPE html>
<!-- 
Template Name: Real Estate

<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8" />
<title>Real Estate Responsive HTML Template</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description"  content="Real Estate"/>
<meta name="keywords" content="Real Estate, Property template, Real Estate template, rent, sale, buy" />
<meta name="author"  content=""/>
<meta name="MobileOptimized" content="320" />
<!--srart theme style -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/fonts.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<!-- favicon links -->
<link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
</head>
<body>
<div class="rle_banner_wrapper">
<div class="rle_header_wrapper">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="rle_logo">
<a href="#"><img src="images/icon/logo.png" alt="Logo" title="Logo"></a>
</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
<button class="rle_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
<div class="rle_main_menu_wrapper">
<div class="rle_main_menu">
<ul>
<li><a href="index.php">home</a>

</li>

<li><a href="about.php">about us</a></li>
<li><a href="#">property</a>
<ul class="sub-menu">
<?php
foreach($obj->property_type() as $property){
    echo ('<li><a href="property_detail.php?property='.$property['id'].'">'.$property['property_type'].'</a></li> ');
}
?>

</ul>
</li>
<li><a href="comments.php">review</a>

</li>

<li><a href="contact.php">contact</a></li>
</ul>
</div>
</div>
<div class="rle_signin">
<a href="#" class="rle_btn" id="login_button">sign in</a>
<div id="login_one" class="rle_login_form">
<p>Don’t have an account? <a href="#">Sign up</a></p>
<form class="form">
<input type="text" placeholder="Username">
<input type="password" placeholder="Password">
<div class="rle_checkbox">
<input type="checkbox" id="remember_me" checked />
<label for="remember_me">Remember me</label>
</div>
<a href="#" class="forgot_pswd">forgot password?</a>
<button type="submit" class="rle_btn">sign in</button>
<span>or</span>
<a href="#" class="share_btn fcbk_clr_1"><i class="fa fa-facebook" aria-hidden="true"></i>login with facebook</a>
<a href="#" class="share_btn ggl_clr_2"><i class="fa fa-google-plus" aria-hidden="true"></i>login with google plus</a>
</form>
</div>
</div>
</div>
</div>
</div>
</div>