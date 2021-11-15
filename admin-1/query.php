  

<?php session_start();
 
class aptech{

function con(){

    $con= mysqli_connect("localhost","root","","property");
    return $con;
}
 function user_signup(){
if(isset($_POST['btn-user'])){
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $phone = $_POST['phone'];
    $img = $_FILES['img']['name'];
    $tmp_img = $_FILES['img']['tmp_name'];
    $add = $_POST['add'];
    $query=mysqli_query($this->con(),"INSERT INTO  usertype(name,email,password,contact,address,images) VALUES ('$name','$email','$psw','$phone','$add','$img')");  
      move_uploaded_file( $tmp_img,"assets/images/users/".$img);
   
  if(!$query){
        echo('<script>alert("Some thing went wrong")</script>');
    }
    else{
echo('<script>alert("successfull")</script>');
    }

}

 }
function user_login(){
if(isset($_POST['let_me_in'])){

$email=$_POST['email'];
$psw=$_POST['psw'];
$query=mysqli_query($this->con(),"SELECT id, name, email, password status FROM `usertype` WHERE email = '$email'  and password = '$psw' ");
$count = mysqli_num_rows($query);
if($count == 1){
    $_SESSION['user'] = $_POST['email'];
  
//    echo('<script>window.location.href="index.php"</script>');
   echo('<script>window.location.href="index.php"</script>');
   
  
    // echo('<script>alert("done")</script>');
 
}
else{
    echo('<script>alert("Some thing is wrong")</script>');
    echo('<script>window.location.href="signup.php"</script>');
 
}

}
 }

 function user_details(){
    $a = $_SESSION['user'];
    
	$query = mysqli_query($this->con(),"SELECT * FROM usertype where email = '$a' ");
		return $query;
        
    }


    

 
function total_user(){
	$query = mysqli_query($this->con(),"SELECT count(id)  as u FROM usertype");
	$q = mysqli_fetch_array($query,MYSQLI_ASSOC)['u'];
	return $q;
}

function add_category(){
if(isset($_POST['btn_catlog'])){
$a=$_POST['catlog'];
$query=mysqli_query($this->con(),"INSERT INTO  property_type(property_type) VALUES ('$a')");
if(!$query){
    echo('<script>alert("Some thing went wrong")</script>');
}
else{
    echo ('<script>alert("successfully add category")</script>');
    
}
return $query;

}

}
// end of add category

// function sel_category(){
//     $query=mysqli_query($this->con(),"select * from  property_type");
//     return $query;
// }





function property_type(){
    $query=mysqli_query($this->con(),"select * from property_type");
    return $query;
}
// end of select property_type


function add_pro(){
    if(isset($_POST['btn_pro'])){
        $a=$_POST['p_name'];
        $b=$_POST['price'];
        $c=$_POST['location'];
        $d=$_POST['city'];
        $img=$_FILES['img']['name'];

        $e=$_POST['pro_name'];
        $f=$_POST['p_dec'];
        $g=$_POST['yards'];
        $h=$_POST['bedroom'];
        $i=$_POST['bathroom'];
        $json=json_encode($_FILES['img']['name']);
        $user  = mysqli_fetch_array($this->user_details(),MYSQLI_ASSOC)['id'];
        $query=mysqli_query($this->con(),"INSERT INTO property(property_name, property_dec , price ,  img ,
         property_type_id, yards, bedroom, bathroom, LocationS, city, client_id) VALUES 
         ('$a','$f', $b, '$json', $e,  '$g', $h ,$i, '$c' , '$d',  $user )");
        $count= count($_FILES['img']['name']);
        for ($i=0; $i < $count; $i++) { 
            # code...
            $tmp_name=$_FILES['img']['tmp_name'][$i];
            $o_name="assets/images/property/".$_FILES['img']['name'][$i];
            move_uploaded_file($tmp_name,$o_name);
        }
   if (!$query) {
       # code...
       echo ('<script>alert("something is wrong")</script>');

   }
   else{
    echo ('<script>alert("Done")</script>');
   }
 

    }
}
//product end

// function total_product(){
//     $query= mysqli_query($this->con(),"SELECT count(p_id) as id from product");
//     $query=mysqli_fetch_array($query,MYSQLI_ASSOC)['id'];
//     return $query;
// }


function sel_property(){
    $q = mysqli_query($this->con(),"SELECT * from property where property_status = 1 ");
    return $q;

}
function sel_property_by_id($a){
    $q = mysqli_query($this->con(),"select * from property where  id = $a");
    return $q;

}

}
$obj= new aptech;


?>