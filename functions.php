<?php  

function random_psw($length){
    $characters ='abcdefghilmnopqrstuvzABCD1234567890&%$£§ç@';
    $password ='';
    for ($i = 0; $i <$length; $i++){
        $password .=$characters[random_int(0, strlen($characters) - 1)];
    }
    return $password;
    
}

?>