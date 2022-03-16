<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql))
    echo "\ntabela APAGADA\n";

//CRIAÇÃO DE TABELA ATUALIZADA
$sql = "CREATE TABLE filmes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(200) NOT NULL,
    capa VARCHAR(200)
)";

if ($bd->exec($sql)) 
    echo "\ntabela filmes criada\n";
else 
    echo "\nerro ao criar tabela\n";

    //INSERINDO DADOS A TABELA
    $sql = "INSERT INTO filmes (titulo, capa) VALUES(
        
                'Cleo e Cuquin',
                'https://fotos.web.sapo.io/i/B8e17c719/21221936_tABpe.jpeg'
    )";

if ($bd->exec($sql)) 
    echo "\nFILME INSERIDO\n";
else 
    echo "\nerro ao INSERIR FILME\n";

    //INSERINDO DADOS A TABELA
    $sql = "INSERT INTO filmes (titulo, capa) VALUES(
                'Cocomelon',
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8br0cGtmZaH1vUeEPWfI500HSVQ8qJQwCDA&usqp=CAU'
    )";

if ($bd->exec($sql)) 
    echo "\nFILME INSERIDO\n";
else 
    echo "\nerro ao INSERIR FILME\n"; 


?>
