<?php
    function vizualizar(){
        $Boot = array();
        $Boot["marca"] = "Yezzy";
        $Boot["tamanho"] = "41";
        $Boot["valor"] = "1500";
        
        exibir("produto/vizualizar", $Boot);
         

    }
    
   function adicionar(){
   if (ehPost()) {
        $marca = $_POST["marca"];
        $tamanho = $_POST["tamanho"];
        $valor = $_POST["valor"];
        
         echo $marca;
         echo $tamanho;
         echo $valor;
        
        redirecionar("produto/vizualizar");
   } else {
       exibir("produto/formulario");
   }
   } 
