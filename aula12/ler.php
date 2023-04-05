<?php include_once "dados.php"?>
<?php include_once "header.php"?>
<?php include_once "menu.php"?>

<?php 
    $id = $_GET["id"];
    $noticia = $noticias[$id]
?>
<div class="container">
    <h1><?php echo $noticia['titulo'];?></h1>
    <hr>
    <div class="ler">
        <img width="700px" height="600px" src="<?php echo $noticia['foto'];?>" class="">
        <p style="margin-left: 20px; font-size: 25px;"><?php echo $noticia['materia'];?></p>
    </div>
</div>
<?php include_once "rodape.php"?>