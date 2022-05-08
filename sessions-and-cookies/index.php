<?php
$cookie_name = "user";
setcookie($cookie_name, "jaymalave", time() + (86400 * 30), "/");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions and Cookies</title>
</head>
<body>
    <?php
    if(isset($_COOKIE[$cookie_name])){
        echo $cookie_name;
        echo $_COOKIE[$cookie_name];
    }else{
        echo "Unable to fetch cookies" . "<br>";
    }
    if(count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
      } else {
        echo "Cookies are disabled.";
      }
      $_SESSION['username'] = "JayMalave";
    ?>
</body>
</html>