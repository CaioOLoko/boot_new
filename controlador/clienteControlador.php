<?php

 function cadastro(){
     if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
         echo $nome;
         echo $email;
         echo $senha;
        
        //redirecionar("cliente/cadastro");
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
   
  