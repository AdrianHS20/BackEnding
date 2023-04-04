<?php
include_once "dados.php";
include_once "header.php";
include_once "menu.php";
?>
<!-- Noticias -->

<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-3">
   <?php foreach($noticias as $noticia): ?>
    <div class="col">
    <div class="card">
     <img src="<?php echo $noticia['foto']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 style="height: 100px;" class="card-title"><?php echo $noticia['titulo']; ?>"</h5>
      <p style="height: 100px;" class="card-text">src="<?php echo $noticia['chamada']; ?>"</p>
      <a href="#" class="btn btn-primary">Ler mais</a>
      </div>
   </div>
   </div>
 <?php endforeach; ?>
</div>

<!-- Fim de notícias-->
<?php

include_once "rodape.php";
?>