<?php
if(isset($_POST['nome'])){

    $nome = $_POST['nome'];
    //criar um arquivo e escrever nele
    //FILE_APPEND adiciona mais um nome
    file_put_contents("12-teste.txt",$nome,FILE_APPEND);

    //redirecionamos para a própria página
    header("Location: 11-antiF5.php");
}
?>
<form method="POST">
    <input type="text" name="nome"/>
    <input type="submit" value="Enviar"/>
</form>