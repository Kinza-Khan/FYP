
<?php
include('header.php');

?>
<div class="rle_banner_wrapper">

<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="rle_banner_text">
<h1>luxury properties <span>for sale</span></h1>
<p>Exclusive luxury residential specialists</p>
</div>
</div>
</div>
</div>
</div>
<!-- Tab Form Section start -->
<div class="rle_searchform_wrapper">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="rle_searchform_tabs">
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="#buy" aria-controls="buy" role="tab" data-toggle="tab">buy</a></li>
<li role="presentation"><a href="#rent" aria-controls="rent" role="tab" data-toggle="tab">rent</a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active" id="buy">
<form method="get" action="filter.php">
<div class="row">

<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
<div class="rle_searchform_box">
<!-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<input type="serch" placeholder="Street, town & landmark">
</div> -->
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>Location</option>
<?php
foreach($obj->sel_property() as $property){
 echo ('<option name="location" href="property.php?property='.$property['id'].'">'.$property['locationS'].'</option> ');
}
?>
</select>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>All property types</option>
<?php
foreach($obj->property_type() as $property){
    echo ('<option name="pro_type" href="property_detail.php?property='.$property['id'].'">'.$property['property_type'].'</option> ');
}
?>
</select>
</div>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>Bedroom</option>
<?php
foreach($obj->sel_property() as $property){
 echo ('<option name="bedroom" href="property.php?property='.$property['id'].'">'.$property['bedroom'].'</option> ');
}
?>
</select>
</div>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>Bathroom</option>
<?php
foreach($obj->sel_property() as $property){
 echo ('<option name="bathroom" href="property.php?property='.$property['id'].'">'.$property['bathroom'].'</option> ');
}
?>
</select>
</div>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>Max price</option>
<?php
foreach($obj->sel_property() as $property){
 echo ('<option name="maxprice" href="property.php?property='.$property['id'].'">Rs '.$property['price'].'</option> ');
}
?>
</select>
</div>

<!-- //end of maximum price -->

<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>Min price</option>
<?php
foreach($obj->sel_property() as $property){
 echo ('<option name="minprice" href="property.php?property='.$property['id'].'">Rs '.$property['price'].'</option> ');
}
?>
</select>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option> Area</option>
<?php
foreach($obj->sel_property() as $property){
 echo ('<option name="yards" href="property.php?property='.$property['id'].'">'.$property['yards']. ' Sqft</option> ');
}
?>
</select>
</div>

</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
<div class="rle_searchform_btn">
<img src="images/icon/search_icon.png">
<!-- <p>search</p> -->
<button type="submit" name="btn"> search</button>
</div>
</div>
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="rent">
<div class="row">
<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
<div class="rle_searchform_box">

<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>Location</option>
<?php
foreach($obj->sel_property() as $property){
 echo ('<option name="location" href="property.php?property='.$property['id'].'">'.$property['locationS'].'</option> ');
}
?>
</select>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>All property types</option>
<?php
foreach($obj->property_type() as $property){
    echo ('<option name="pro_type" href="property_detail.php?property='.$property['id'].'">'.$property['property_type'].'</option> ');
}
?>
</select>
</div>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>Bedroom</option>
<?php
foreach($obj->sel_property() as $property){
 echo ('<option name="bedroom" href="property.php?property='.$property['id'].'">'.$property['bedroom'].'</option> ');
}
?>
</select>
</div>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>Bathroom</option>
<?php
foreach($obj->sel_property() as $property){
 echo ('<option name="bathroom" href="property.php?property='.$property['id'].'">'.$property['bathroom'].'</option> ');
}
?>
</select>
</div>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>Max price</option>
<?php
foreach($obj->sel_property() as $property){
 echo ('<option name="maxprice" href="property.php?property='.$property['id'].'">Rs '.$property['price'].'</option> ');
}
?>
</select>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>Min price</option>
<?php
foreach($obj->sel_property() as $property){
 echo ('<option name="minprice" href="property.php?property='.$property['id'].'">Rs '.$property['price'].'</option> ');
}
?>
</select>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<select>
<option>Area</option>
<?php
foreach($obj->sel_property() as $property){
 echo ('<option name="yards" href="property.php?property='.$property['id'].'">'.$property['yards'].' Sqft</option> ');
}
?>
</select>
</div>

</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
<div class="rle_searchform_btn">
<img src="images/icon/search_icon.png">
<p>search</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
<!-- Property Wrapper start -->
<div class="rle_property_wrapper rle_toppadder100 rle_bottompadder70">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="rle_center_heading rle_bottompadder60">
<h1>Top properties</h1>
<p>Check out some of our listed properties</p>
</div>
</div>
<?php
 foreach($obj->sel_property() as $pro) { 
	$img = json_decode($pro['img']);
 
echo ('<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="rle_property_infobox">
<div class="rle_property_infobox_img">
<img src="../admin-1/assets/images/property/'.$img[0].'" alt="" title="">
<span><sup>Rs</sup>'.$pro['price'].'</span>
</div>
<div class="rle_property_infobox_details">
<div class="rle_property_infobox_details_header">
<ul>
<li class="rle_red_clr">for sale</li>
<li class="rle_black_clr">hot offer</li>
</ul>
<h3><a href="#">'.$pro['property_name'].'</a></h3>
<h4><a href="#">'.$pro['locationS'].'</a></h4>

<p>'.$pro['property_dec'].'</p>
</div>
<div class="rle_property_infobox_details_footer">
<p>'.$pro['yards'].' sqft </p>
<ul>
<li><i class="fa fa-bed" aria-hidden="true"></i>'.$pro['bedroom'].'</li>
<li><i class="fa fa-bath" aria-hidden="true"></i>'.$pro['bathroom'].'</li>
<li><i class="fa fa-taxi" aria-hidden="true"></i> yes</li>
</ul>
</div>
</div>
</div>
</div>');
}

?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="rle_btn_wrapper rle_toppadder40">
<a href="#" class="rle_btn">View all properties</a>
</div>
</div>
</div>
</div>
</div>

<!-- Latest news Wrapper start -->
<div class="rle_latesnews_wrapper rle_toppadder100 rle_bottompadder100">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="rle_center_heading rle_bottompadder60">
<h1>Latest news</h1>
<p>Real Estate has access to new release properties</p>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="rle_news_slider">
<div class="owl-carousel owl-theme">
<div class="item">
<div class="rle_news_slider_details">
<img src="images/banner/nws1.jpg" alt="" title="">
<div class="rle_news_slider_details_text">
<p>january 5, 2017</p>
<h4>Best Property Management Software Buildium vs Appfolio</h4>
<a href="#">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
</div>
</div>
</div>
<div class="item">
<div class="rle_news_slider_details">
<img src="images/banner/nws1.jpg" alt="" title="">
<div class="rle_news_slider_details_text">
<p>january 5, 2017</p>
<h4>How to Ask For Real Estate Reviews Without Sounding</h4>
<a href="#">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
</div>
</div>
</div>
<div class="item">
<div class="rle_news_slider_details">
<img src="images/banner/nws1.jpg" alt="" title="">
<div class="rle_news_slider_details_text">
<p>january 5, 2017</p>
<h4>Best Real Estate CRM: Which Tool Is Right for Your Business?</h4>
<a href="#">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
</div>
</div>
</div>
<div class="item">
<div class="rle_news_slider_details">
<img src="images/banner/nws1.jpg" alt="" title="">
<div class="rle_news_slider_details_text">
<p>january 5, 2017</p>
<h4>Best Property Management Software Buildium vs Appfolio</h4>
<a href="#">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
</div>
</div>
</div>
<div class="item">
<div class="rle_news_slider_details">
<img src="images/banner/nws1.jpg" alt="" title="">
<div class="rle_news_slider_details_text">
<p>january 5, 2017</p>
<h4>How to Ask For Real Estate Reviews Without Sounding</h4>
<a href="#">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Why we Wrapper start -->
<div class="rle_whywe_wrapper rle_toppadder100 rle_bottompadder70">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="rle_whywe_box">
<img src="images/icon/wyw1.png">
<div class="rle_whywe_box_text">
<h1>3475</h1>
<p>Homes For Sale</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="rle_whywe_box">
<img src="images/icon/wyw2.png">
<div class="rle_whywe_box_text">
<h1>2896</h1>
<p>Homes For Rent</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="rle_whywe_box">
<img src="images/icon/wyw3.png">
<div class="rle_whywe_box_text">
<h1>8540</h1>
<p>Visitor Month</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="rle_whywe_box">
<img src="images/icon/wyw4.png">
<div class="rle_whywe_box_text">
<h1>1247</h1>
<p>Happy Client</p>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Clients & Partners Wrapper start -->
<div class="rle_clntsNprtnr_wrapper rle_toppadder100 rle_bottompadder100">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="rle_left_heading rle_bottompadder60">
<h1>What customer say</h1>
<p>Lorem ipsum dolor sit amet consectetur adipiscing</p>
</div>
<div class="rle_client_say_slider">
<div class="owl-carousel owl-theme">
<div class="item">
<div class="rle_clientsay_slider_details">
<div class="rle_clientsay_slider_details_text">
<p>“ The sale of one's family home is an emotional time and I was not looking forward to the stress that can come with the process it is with thanks. ”</p>
<ul>
<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
</ul>
</div>
<div class="rle_clientsay_slider_details_img">
<img src="images/content/client1.png" alt="" title="">
<h4>Eliza Salazar</h4>
<p>San Francisco, California</p>
</div>
</div>
</div>
<div class="item">
<div class="rle_clientsay_slider_details">
<div class="rle_clientsay_slider_details_text">
<p>“ The sale of one's family home is an emotional time and I was not looking forward to the stress that can come with the process it is with thanks. ”</p>
</div>
<div class="rle_clientsay_slider_details_img">
<img src="images/content/client2.png" alt="" title="">
<h4>Hunter West</h4>
<p>San Francisco, California</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="rle_left_heading rle_bottompadder60">
<h1>Our partner</h1>
<p>Lorem ipsum dolor sit amet consectetur adipiscing</p>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="rle_partner_style_2">
<img src="images/icon/prt1.png" alt="" title="">
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="rle_partner_style_2">
<img src="images/icon/prt6.png" alt="" title="">
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="rle_partner_style_2">
<img src="images/icon/prt3.png" alt="" title="">
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="rle_partner_style_2">
<img src="images/icon/prt4.png" alt="" title="">
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="rle_partner_style_2">
<img src="images/icon/prt5.png" alt="" title="">
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="rle_partner_style_2">
<img src="images/icon/prt2.png" alt="" title="">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Newletters Wrapper start -->
<div class="rle_newletters_wrapper rle_toppadder80 rle_bottompadder80">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="rle_center_heading rle_bottompadder30">
<h1>Subcribe now for latest update</h1>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
<div class="rle_newletters_box">
<input type="serch" placeholder="Enter Your Email">
<button class="rle_btn">Subcribe</button>
</div>
</div>
</div>
</div>
</div>
<?php
include('footer.php');
?>