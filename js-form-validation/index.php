<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Form Validation - JS</title>
</head>
<body>
    <form action="action.php" onsubmit="return validateForm()" name="form1" method="POST">
     Name: <input name="fname" type="text">
     Email: <input name="email" type="text">
     <input type = "submit" value="Submit">
    </form>
</body>
</html>