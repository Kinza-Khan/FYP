
<?php

include('header.php');


var_dump($_SESSION['user']);

?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-themecolor">Dashboard</h3>
</div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Dashboard</li>
</ol>
</div>
<div>
<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="card-group">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-12">
<h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
<h3 class="">2456</h3>
<h6 class="card-subtitle">New Projects</h6></div>
<div class="col-12">
<div class="progress">
<div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Column -->
<!-- Column -->
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-12">
<h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
<h3 class="">546</h3>
<h6 class="card-subtitle">Pending Project</h6></div>
<div class="col-12">
<div class="progress">
<div class="progress-bar bg-success" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Column -->
<!-- Column -->
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-12">
<h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
<h3 class="">$24561</h3>
<h6 class="card-subtitle">Total Cost</h6></div>
<div class="col-12">
<div class="progress">
<div class="progress-bar bg-primary" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Column -->
<!-- Column -->
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-12">
<h2 class="m-b-0"><i class="mdi mdi-buffer text-warning"></i></h2>
<h3 class=""><?php 
 echo $obj->total_user();
?></h3>
<h6 class="card-subtitle">Total Earnings</h6></div>
<div class="col-12">
<div class="progress">
<div class="progress-bar bg-warning" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Row -->
<div class="row">
<!-- Column -->
<div class="col-lg-8 col-xlg-9">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-12">
<div class="d-flex flex-wrap">
<div>
<h4 class="card-title">Yearly Earning</h4>
</div>
<div class="ml-auto">
<ul class="list-inline">
<li>
<h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Sales</h6> </li>
<li>
<h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Earning ($)</h6> </li>
</ul>
</div>
</div>
</div>
<div class="col-12">
<div id="earning" style="height: 355px;"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Column -->
<div class="col-lg-4 col-xlg-3">
<div class="card card-inverse card-info">
<div class="card-body">
<div class="d-flex">
<div class="m-r-20 align-self-center">
<h1 class="text-white"><i class="ti-light-bulb"></i></h1></div>
<div>
<h3 class="card-title">Sales Analytics</h3>
<h6 class="card-subtitle">March  2017</h6> </div>
</div>
<div class="row">
<div class="col-6 align-self-center">
<h2 class="font-light text-white"><sup><small><i class="ti-arrow-up"></i></small></sup>35487</h2>
</div>
<div class="col-6 p-t-10 p-b-20 text-right">
<div class="spark-count" style="height:65px"></div>
</div>
</div>
</div>
</div>
<div class="card card-inverse card-success">
<div class="card-body">
<div class="d-flex">
<div class="m-r-20 align-self-center">
<h1 class="text-white"><i class="ti-pie-chart"></i></h1></div>
<div>
<h3 class="card-title">Bandwidth usage</h3>
<h6 class="card-subtitle">March  2017</h6> </div>
</div>
<div class="row">
<div class="col-6 align-self-center">
<h2 class="font-light text-white">50 GB</h2>
</div>
<div class="col-6 p-t-10 p-b-20 text-right align-self-center">
<div class="spark-count2" style="height:65px"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Column -->
</div>
<!-- Row -->

<div class="row">
<!-- Column -->
<div class="col-lg-4">
<div class="card card-inverse card-success">
<div class="card-body">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Carousel items -->
<div class="carousel-inner">
<div class="carousel-item flex-column carousel-item-next carousel-item-left">
<i class="fa fa-facebook fa-2x text-white"></i>
<p class="text-white">25th Jan</p>
<h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
on buy</h3>
<div class="text-white m-t-20">
<i>- post form wrap</i>
</div>
</div>
<div class="carousel-item flex-column">
<i class="fa fa-facebook fa-2x text-white"></i>
<p class="text-white">25th Jan</p>
<h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
on buy</h3>
<div class="text-white m-t-20">
<i>- post form wrap</i>
</div>
</div>
<div class="carousel-item flex-column active carousel-item-left">
<i class="fa fa-facebook fa-2x text-white"></i>
<p class="text-white">25th Jan</p>
<h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
on buy</h3>
<div class="text-white m-t-20">
<i>- post form wrap</i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-4">
<div class="card card-inverse card-danger">
<div class="card-body">
<div id="myCarouse2" class="carousel slide" data-ride="carousel">
<!-- Carousel items -->
<div class="carousel-inner">
<div class="carousel-item flex-column carousel-item-next carousel-item-left">
<i class="fa fa-google-plus fa-2x text-white"></i>
<p class="text-white">25th Jan</p>
<h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
on buy</h3>
<div class="text-white m-t-20">
<i>- Eric fandanc</i>
</div>
</div>
<div class="carousel-item flex-column">
<i class="fa fa-google-plus fa-2x text-white"></i>
<p class="text-white">25th Jan</p>
<h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
on buy</h3>
<div class="text-white m-t-20">
<i>- Numbro zomix</i>
</div>
</div>
<div class="carousel-item flex-column active carousel-item-left">
<i class="fa fa-google-plus fa-2x text-white"></i>
<p class="text-white">25th Jan</p>
<h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
on buy</h3>
<div class="text-white m-t-20">
<i>- Sitrix stock</i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-4">
<div class="card card-inverse card-info">
<div class="card-body">
<div id="myCarouse3" class="carousel slide" data-ride="carousel">
<!-- Carousel items -->
<div class="carousel-inner">
<div class="carousel-item flex-column carousel-item-next carousel-item-left">
<i class="fa fa-twitter fa-2x text-white"></i>
<p class="text-white">25th Jan</p>
<h3 class="text-white font-light">Tweet now <span class="font-bold">50% Off</span><br>
on buy</h3>
<div class="text-white m-t-20">
<i>- @shoperstaff</i>
</div>
</div>
<div class="carousel-item flex-column">
<i class="fa fa-twitter fa-2x text-white"></i>
<p class="text-white">25th Jan</p>
<h3 class="text-white font-light">Sachin #star <span class="font-bold">50% Off</span><br>
on buy</h3>
<div class="text-white m-t-20">
<i>- #shoperstaff</i>
</div>
</div>
<div class="carousel-item flex-column active carousel-item-left">
<i class="fa fa-twitter fa-2x text-white"></i>
<p class="text-white">25th Jan</p>
<h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
on buy</h3>
<div class="text-white m-t-20">
<i>- @shoperstaff</i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Column -->
</div>
<!-- Row -->
 <div class="card card-default">
<div class="card-header">
<div class="card-actions">
<a class="" data-action="collapse"><i class="ti-minus"></i></a>
<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
<a class="btn-close" data-action="close"><i class="ti-close"></i></a>
</div>
<h4 class="card-title m-b-0">Property Overview</h4>
</div>
<div class="card-body collapse show">
<div class="table-responsive">
<table class="table product-overview">
<thead>
<tr>
<th>Client</th>
<th>Photo</th>
<th>Price</th>
<th>Date</th>
<th>Status</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>Steave Jobs</td>
<td>
<img src="assets/images/gallery/chair.jpg" alt="iMac" width="80">
</td>

<?php
foreach($obj->sel_property() as $property){
 echo ('<td href="property.php?property='.$property['id'].'">Rs '.$property['price'].'</td> ');
}
?>

<td>10-7-2017</td>
<td>
<span class="label label-success font-weight-100">Paid</span>
</td>
<td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
</tr>
<!-- end of first row  -->
<tr>
<td>Varun Dhavan</td>
<td>
<img src="assets/images/gallery/chair2.jpg" alt="iPhone" width="80">
</td>
<td>25</td>
<td>09-7-2017</td>
<td>
<span class="label label-warning font-weight-100">Pending</span>
</td>
<td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
</tr>

<tr>
<td>Ritesh Desh</td>
<td>
<img src="assets/images/gallery/chair3.jpg" alt="apple_watch" width="80">
</td>
<td>12</td>
<td>08-7-2017</td>
<td>
<span class="label label-success font-weight-100">Paid</span>
</td>
<td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
</tr>

<tr>
<td>Hrithik</td>
<td>
<img src="assets/images/gallery/chair4.jpg" alt="mac_mouse" width="80">
</td>
<td>18</td>
<td>02-7-2017</td>
<td>
<span class="label label-danger font-weight-100">Failed</span>
</td>
<td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-5">



</div>
</div>
</div>
</div>
</div>


<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<div class="right-sidebar">
<div class="slimscrollright">
<div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
<div class="r-panel-body">
<ul id="themecolors" class="m-t-20">
<li><b>With Light sidebar</b></li>
<li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
<li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
<li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
<li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
<li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
<li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
<li class="d-block m-t-30"><b>With Dark sidebar</b></li>
<li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
<li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
<li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
<li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
<li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
<li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
</ul>
<ul class="m-t-20 chatonline">
<li><b>Chat option</b></li>
<li>
<a href="javascript:void(0)"><img src="assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
</li>
<li>
<a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
</li>
</ul>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php
include('footer.php');
?>