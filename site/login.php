<?php
include_once('conectar.php');
$email= $_POST['email'];
$senha=  $_POST['senha'];

$sql= "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";

$query= mysqli_query($conection, $sql);
$user= $query->fetch_assoc();

if(mysqli_num_rows($query) ==0){
    echo "Dados Incorretos!!!";
}else{
    if(!isset($_SESSION)){
        session_start();
        $_SESSION['email']= $user['senha'];
        header('Location:zampe.html');
    }
}



?>