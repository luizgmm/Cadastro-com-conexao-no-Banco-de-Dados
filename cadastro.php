<?php
 
 include("conexao.php");

 $nome=$_POST['nome'];
 $codigo=md5($_POST['codigo']);
 $tecnico=$_POST['tecnico'];

$sql="INSERT INTO cadastro(nome, codigo, tecnico)
    VALUES ('$nome', '$codigo', '$tecnico')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_errno($conexao);
    }

    mysqli_close($conexao);
    



?>