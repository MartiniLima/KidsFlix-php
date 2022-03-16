<?php include "cabecalho.php" ?>

<?php
if(!isset($_SESSION)){ 
session_start();
}

require "./util/Mensagem.php";

$controller = new FilmesController();
$filmes = $controller->index();

?>

<body>

    <!-- HEADER -->
    <nav class="nav-extended #bbdefb blue lighten-4">
        <div class="nav-wrapper">
        
        <a href="/" class="orange-text text-darken-3 aftest">KIDSFLIX</a>

        <ul id="nav-mobile" class="right">
            <li ><a class="teal-text text-darken-3 active" href="/">Inicio</a></li>
            <li><a class="teal-text text-darken-3" href="/novo">Cadastrar</a></li>
            <li><a class="teal-text text-darken-3" href="/pesquisar">Pesquisar</a></li>
        </ul>
        </div>
        <div class="nav-content">
        <ul class="tabs tabs-transparent #f57c00 orange darken-2">
            <li class="tab"><a class="active" href="/">Todos</a></li>
            <li class="tab"><a href="/assistidos">Assistidos</a></li>
            <li class="tab"><a href="/favoritos">Favoritos</a></li>
        </ul>
        </div>
    </nav>

   <!-- TODOS OS DESENHOS -->
   <div class="container">
      <div class="row">

         <?php foreach($filmes as $filme) : ?>
               <div class="col s12 m6 l3">
                  <div class="card hoverable">
                           <!-- CAPA DO DESENHO(POSTER) -->
                     <div class="card-image">
                        <img src="<?= $filme->capa ?>">
                        <button class="btn-fav btn-floating halfway-fab waves-effect waves-light #f57c00 orange darken-2" data-id="<?= $filme->id ?>">
                           <i class="material-icons"><?= ($filme->favorito) ? "favorite" : "favorite_border" ?></i>
                        </button>
                     </div>                         
                        
                     <div class="card-content #00897b teal darken-1">
                        <span class="card-title white-text"><?= $filme->titulo ?></span>
                     </div>
                  </div>
               </div>
         <?php endforeach ?>
      </div>
   </div>
</body>

<?= Mensagem::mostrar(); ?>

<script>
   document.querySelectorAll(".btn-fav").forEach(btn => {
      btn.addEventListener("click", e => {
        const id = btn.getAttribute("data-id")
        console.log(id)
        fetch(`/favoritos/${id}`)
          .then(response => response.json())
          .then(response => {
             if (response.success === "ok"){
               if (btn.querySelector("i").innerHTML === "favorite"){
                  btn.querySelector("i").innerHTML = "favorite_border";
               }else{
                  btn.querySelector("i").innerHTML = "favorite";
               }
             }
         })
         .catch(error => {
            M.toast({html: 'Erro ao favoritar'})
         })
      });
   });

</script>

</html>