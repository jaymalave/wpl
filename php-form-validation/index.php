<?php
    if (isset($_POST['submit'])){
        $username = $email = "";
        $username = $_POST["username"];
        $email = $_POST["email"];
        if ($username == "" || strlen($username) > 25 || strlen($username) < 5){
            echo "username is not valid";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation - PHP</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="form1" method="POST">

     Username: <input name="username" type="text">

     Email: <input name="email" type="text">
     
     <input type = "submit" value="Submit" name="submit">
    </form>
</body>
</html>