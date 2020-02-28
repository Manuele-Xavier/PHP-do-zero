
<?php
    //verificação dos dados
    //primeira forma para verificar se os dados não estão vazios - forma facil
    
    // if(isset($_POST['email']) && $_POST['email'] != ""){
    //     echo "O usuario enviou os dados";
    // }
    
    //forma intermediaria que utiliza empty que retorna true ou false
    // if(isset($_POST['email']) && empty ($_POST['email']) == false){
    //     echo "O usuario enviou os dados!";
    // }
    
    if(isset($_POST['email']) && empty ($_POST['email']) == false ){
        
        if(isset($_POST['senha']) && empty($_POST['senha']) == false ){

            $email = $_POST['email'];
            echo "Seu email e: " . $email . "<br/>";
            
            $senha = $_POST['senha'];
            echo "E Sua senha e: " . $senha . "<br/> <br/>";
        }
        
        
    }


?>
<hr/>
<form method="POST">
    E-mail:<br/>
    <input type="text" name="email"/><br/><br/>
    Senha:<br/>
    <input type="password" name="senha"/><br/><br/>
    <input type="submit" value="enviar dados"/>
</form>