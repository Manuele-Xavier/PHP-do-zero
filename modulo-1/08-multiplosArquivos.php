<?php
// se der erro para de executar
require "09-recebedor.php";

// importa o arquivo uma vez
//require_once "09-recebedor.php";

//include só da uma msg de avisa
//include "09-recebedor.php";
?>
<form method="POST" >
    E-mail:<br/>
    <input type="text" name="email"/><br/><br/>
    <input type="submit" value="enviar dados"/>
</form>