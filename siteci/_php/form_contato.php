<?php

    $para = "email_que_recebera_o_form";
    $assunto = "Contato pelo Site";
    $nome = $_POST['nome'];
    $fone = $_POST['telefone'];
    $email = $_POST['email'];
    $msg = $_POST['assunto'];
    
    //teste
    //echo $nome."</br>";
    //echo $fone."</br>";
    //echo $email."</br>";
    //echo $msg;
    
        $corpo = "<strong> Mensagem de Contato </strong></br></br>";
        $corpo .= "<strong> Nome: </strong> $nome"; 
        $corpo .= "</br><strong> Telefone: </strong> $fone"; 
        $corpo .= "</br><strong> Email: </strong> $email"; 
        $corpo .= "</br><strong> Mensagem: </strong> $msg"; 
        
        $header = "Container-Type: text/html; charset- utf-8\n";
        $header .= "From: $email Reply-to: $email\n";
        
    @mail($para, $assunto, $corpo, $header);//tirar @ depois dos testes
    
    // header("location:../index.php?msg=enviado");
    echo json_encode("enviado")


?>