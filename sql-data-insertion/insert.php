<html>
    <body>
    <?php 
      $conn = mysqli_connect("localhost", "root", "", "db");

      if($conn == false){
          echo mysqli_connect_error();
      }

      $username = $_REQUEST['username'];
      $name = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $phone = $_REQUEST['phone'];
      $password = $_REQUEST['password'];

      $sql = "INSERT INTO details VALUES('$username', '$password', '$name', '$email', '$phone')";

      if(mysqli_query($conn, $sql)){
          echo "<h1>Data inserted successfully</h1>";
      }else{
          echo mysqli_error($conn);
      }

    ?>
    </body>
</html>