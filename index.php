<?php session_start();
include  'functions.php';
$password = '';
if (isset($_GET['length'])) {
    $length = $_GET['length'];
    $password = random_psw($length);

    
    // $characters ='abcdefghilmnopqrstuvzABCD1234567890&%$£§ç@';
    // $password ='';
    // for ($i = 0; $i <$length; $i++){
    //     $password .=$characters[random_int(0, strlen($characters) - 1)];
    // }
    // echo "your password is: $password";

}

if(!empty($password)){
    $_SESSION['password']= $password;
    header("Location: result.php"); 
    exit();

};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center mt-4">
        NOT REALLY SAFE PASSWORD GENERATOR
    </h1>

    <div class="container text-center">
        <form action="index.php" method="GET">
            <label for="length">Lunghezza password:</label>
            <input type="number" id="length" name="length" min="5" max="15" required>
            <button type="submit">Create password</button>
        </form>

        <?php if ($password) { ?>
            <p class="mt-4"> la password e' <?php echo $password; ?> </p>
        <?php } ?>



    </div>






</body>

</html>