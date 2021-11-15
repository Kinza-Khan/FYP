
<?php
session_start();
class property{

function con(){
   $con =  mysqli_connect("localhost","root","","property");
    return $con;
}
function property_type(){
    $query =mysqli_query($this->con(),"SELECT * from property_type");
    return $query;
}
function property_type_sel_by_id($a){
    $query =mysqli_query($this->con(),"SELECT * from property_type  where id = $a");
    return $query;
}
function sel_property(){
    $q = mysqli_query($this->con(),"SELECT * from property where property_status = 1 ");
    return $q;

}
function sel_property_by_id($a){
    $q = mysqli_query($this->con(),"select * from property where  id = $a");
    return $q;

}

// function property_sel_by_id($a){
// 	$query = mysqli_query($this->con(),"SELECT * FROM product where p_catlog = $a");
// 	return $query;

// 	}


}
$obj= new property;

// if(isset($_GET['pid'])){

//     $pid = $_GET['pid'];
//     $price = $_GET['price'];
    
//     $_SESSION['cart'][$pid]['qty'] = $_SESSION['cart'][$pid]['qty']-1;
//     $_SESSION['cart'][$pid]['price'] =  $_SESSION['cart'][$pid]['price']-$price ;
    
//     header('Location: ' . $_SERVER['HTTP_REFERER']);
    
//     }
?>