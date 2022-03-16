<?php

$bd = new SQLite3("./db/filmes.db");  //CRIAÇÃO ARQVO PARA ARMAZENAMENTO


$sql = "ALTER TABLE filmes ADD COLUMN favorito INT DEFAULT 0";

if ($bd->exec($sql))
    echo "\ntabela ALTERADA\n";
else
    echo "\nERRO AO ALTERAR TABELA\n";

