<?php
include_once('conectar.php');
$nome= $_POST['nome'];
$email= $_POST['email'];
$celular= $_POST['celular'];
$data= $_POST['data'];
$cpf= $_POST['cpf'];
$senha= $_POST['senha'];

$sql= "INSERT INTO cadastro(nome, email, celular , data_nascimento, cpf, senha) VALUES('$nome', '$email', '$celular', '$data', '$cpf', '$senha')";
/* msqli_query= pega as variáveis com os dados da conexão e comando SQL */
$query= mysqli_query($conection, $sql);

if($query){
    echo "<script>
    window.alert('Dados Registrados com Sucesso')
    window.location.replace('login.html')
    </script>";
}
?>