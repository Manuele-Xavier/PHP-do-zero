<?php
if(isset($_POST['email']) && empty($_POST['email']) == false){
    
    $email = $_POST['email'];
    echo "O email enviado e: " .$email;
}
?>