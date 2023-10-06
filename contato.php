<?php
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $tel = addslashes($_POST['tel']);
    $assunto = addslashes($_POST['assunto']);
    $destinatario = "arielyfloquet@gmail.com";
    $head = "From: arielyfloquet@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();
    $body = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$tel."\n"."Assunto:".$assunto;

    if(mail($destinatario, $assunto, $body, $head)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Erro ao enviar o e-mail!");
    }
?>