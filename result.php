<?php session_start();
$password = $_SESSION['password'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> La tua password poco sicura e': <?php echo $password ?> !!! </h1>
</body>

</html>