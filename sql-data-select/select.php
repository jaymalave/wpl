<?php
  $conn = mysqli_connect("localhost", "root", "", "db");

  if(!$conn){
      echo mysqli_connect_error();
  }

  $sql = "SElECT * FROM details";

  $result = mysqli_query($conn, $sql);
 
  if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
          echo $row["name"] . " " . $row["username"] . " " . $row["phone"];
      }
  }else{
      echo "No results";
  }

  mysqli_close($conn);
  
?>