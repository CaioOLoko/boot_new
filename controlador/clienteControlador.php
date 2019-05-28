<?php

require_once "modelo/clienteModelo.php";

 function cadastro(){
     if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
         echo $nome;
         echo $email;
         echo $senha;
        
    if (strlen(trim($_POST['nome'])) == 0) {
         $errors[] = "Você deve inserir um nome.";
  }
   if (strlen(trim($_POST['email'])) == 0) {
         $errors[] = "Você deve inserir um e-mail.";
  }
   if (strlen(trim($_POST['senha'])) == 0) {
         $errors[] = "Você deve inserir uma semha.";
  }
  
           $msg = cadastroCliente($nome, $email, $senha);
           echo $msg;
         
        redirecionar("cliente/cadastro");
   } else {
       exibir("cliente/cadastro");
   }
               
  }
 
   
    function contato(){
     if (ehPost()) {
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $mensagem = $_POST["mensagem"];
        
         echo $nome;
         echo $telefone;
         echo $mensagem;
        
        //redirecionar("cliente/contato");
   } else {
       exibir("cliente/contato");
   }
    }  
   
  
