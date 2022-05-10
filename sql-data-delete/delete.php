<?php

$conn = mysqli_connect("localhost", "root", "", "db");

if($conn == false){
    echo mysqli_connect_error();
}

$username = $_REQUEST['username'];

$sql = "DELETE FROM details WHERE username='$username'";

if(mysqli_query($conn, $sql)){
    echo "Deleted Successfully";
}else{
    echo mysqli_error($conn);
}

?>