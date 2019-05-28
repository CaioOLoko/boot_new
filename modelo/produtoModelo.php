<?php

function adicionarCliente($marca, $tamanho, $valor) {
    $sql = "INSERT INTO cliente (marca, tamanho, valor) VALUES ('$marca', '$tamanho', '$valor')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die ('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';  
}
