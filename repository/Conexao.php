<?php

class Conexao{
    public static function criar():PDO{
        return new PDO("sqlite:db/filmes.db"); //unico arquivo pra fazer a troca do BD
    }
}