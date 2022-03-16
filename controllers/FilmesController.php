<?php

session_start();
require "./repository/FilmesRepositoryPDO.php";
require "./model/Filme.php";

class FilmesController{

    public function index(){
        $filmesRepository = new FilmesRepositoryPDO();
        return $filmesRepository->listarTodos();
    }

    public function save($request){
        $filmesRepository = new FilmesRepositoryPDO();
        $filme = (object) $request;
        
        $upload = $this->saveCapa($_FILES);

        if(gettype($upload)=="string"){
            $filme->capa = $upload;
        }

        if ($filmesRepository->salvar($filme)) 
            $_SESSION["msg"] = "Desenho cadastrado com sucesso!";
        else 
            $_SESSION["msg"] = "Falha ao cadastrar Desenho!";
        header("Location: /");
    }

    private function saveCapa($file){
        $capaDir = "img/capas/";
        $capaPath = $capaDir . basename($file["capa_file"]["name"]);
        $capaTmp = $file["capa_file"]["tmp_name"];

        if (move_uploaded_file($capaTmp, $capaPath)){
                return $capaPath;
        }else{
            return false;
        };
       //trabalho de redimensionamento
    }
    
    public function favorite(int $id){
        $filmesRepository = new FilmesRepositoryPDO();
        $result = ['success' => $filmesRepository->favoritos($id)];
        header('Content-type: appplication/json');
        echo json_encode($result);
    }

}


//INSERINDO DADOS A TABELA - Primeira Forma de fazer
// $sql = "INSERT INTO filmes (titulo, capa)
//         VALUES(
//             '$titulo',
//             '$capa'
// )";
// if ($bd->exec($sql)) 
//     echo "\nFILME INSERIDO\n";
// else 
//     echo "\nerro ao INSERIR FILME\n";

?>