<?php

$conn = mysqli_connect("localhost", "root", "", "db");

if($conn == false){
    echo mysqli_connect_error();
}

$username = $_REQUEST['username'];
$updatedUsername = $_REQUEST['updatedUsername'];

$sql = "UPDATE details SET username='$updatedUsername' WHERE username='$username'";

if(mysqli_query($conn, $sql)){
    echo "Updated Successfully";
}else{
    echo mysqli_error($conn);
}

?>