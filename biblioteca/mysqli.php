<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "Boot");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}