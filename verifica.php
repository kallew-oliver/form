<?php

if(isset($_POST['email']) && !empty($_POST['email']));

$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']);
$email = addslashes($_POST['email']);
$confirmeemail = addslashes($_POST['confirmEmail']);


$to = "kallew10@hotmail.com";
$subject = "Contato - Teste";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email;

$header = "From: kallew10@hotmail.com"."\r\n".
            "Reply-to:" .$email."\r\n".
            "X=Mailer:PHP/".phpversion();


if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");
}   else{

    echo("O Email não pode ser enviado");
}

?>