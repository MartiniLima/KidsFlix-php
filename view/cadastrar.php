<?php include "cabecalho.php" ?>

<body>

    <!-- HEADER -->
    <nav class="nav-extended #bbdefb blue lighten-4">
        <div class="nav-wrapper">
        
        <a href="#" class="orange-text text-darken-3 aftest">KIDSFLIX</a>

        <ul id="nav-mobile" class="right">
            <li ><a class="teal-text text-darken-3" href="/">Inicio</a></li>
            <li><a class="teal-text text-darken-3 active" href="/novo">Cadastrar</a></li>
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

   <!-- FORM CADASTRO -->
   <div class="row">
   <form method="POST" enctype="multipart/form-data">
      <div class="col s6 offset-s3">
         <div class="card #009688 teal">
            <div class="card-content">
               <span class="card-title white-text">Cadastrar Desenho</span>
                     <!-- INPUT TITULO -->
               <div class="row">
                  <div class="input-field col s12">
                     <input id="titulo" type="text" class="validate white-text" name="titulo" required>
                     <label for="titulo" class="white-text">Titulo do Filme</label>
                  </div>
               </div>
                     <!-- INPUT CAPA -->
            
               <div class="file-field input-field">
                     <div class="btn teal lighten-3">
                        <span>Capa</span>
                        <input type="file" name="capa_file">
                     </div>
                     <div class="file-path-wrapper">
                        <input class="file-path validate white-text" type="text" name="capa">
                     </div>
               </div>
               <!-- BOTOES DE AÇÃO -->
               <div class="card-action">
                  <a class="btn waves-effect waves-light btn #80cbc4 teal lighten-3" href="galeria.php">Cancelar</a>
                  <button type="submit" class="waves-effect waves-light btn #f57c00 orange darken-2">Salvar</button>
               </div>
            </div>               
         </div>
      </div>
   </form>
   </div>

</body>
</html>