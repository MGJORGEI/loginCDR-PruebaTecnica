<?php
function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "Mexico100@";

    $bd = "logincdr";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}
?>