<?php

include("connectionuser.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM users WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: registros.php");
}else{

}

?>