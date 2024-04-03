<?php
try{
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        setcookie("user", "", time() - 3600);
        header("Location:./login.php");
    }else{
        header("Location:./login.php");
    }
}catch(Exception $e){
    header("Location:./login.php");
}

?>