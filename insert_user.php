<?php
include("connectionuser.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$adress = $_POST['adress'];
$married = $_POST['married'];
$email = $_POST['email'];

$sql = "INSERT INTO users VALUES('$id','$name','$lastname','$adress','$married','$email')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: registros.php");
}else{

}

?>