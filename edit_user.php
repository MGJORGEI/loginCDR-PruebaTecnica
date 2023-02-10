<?php

include("connectionuser.php");
$con = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$adress = $_POST['adress'];
$married = $_POST['married'];
$email = $_POST['email'];

$sql="UPDATE users SET name='$name', lastname='$lastname', adress='$adress', married='$married', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: registros.php");
}else{

}

?>