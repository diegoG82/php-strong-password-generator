<?php
if (isset($_GET['length'])){
    $length =$_GET['length'];

    $characters ='abcdefghilmnopqrstuvzABCD1234567890&%$£§ç@';
    $password ='';
    for ($i = 0; $i <$length; $i++){
        $password .=$characters[random_int(0, strlen($characters) - 1)];
    }
    echo "your password is: $password";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password</title>
</head>
<body>

<form action="index.php" method="GET">
  <label for="length">Lunghezza password:</label>
  <input type="number" id="length" name="length" min="5" max="15" required>
  <button type="submit">Create password</button>
</form>



    
</body>
</html>