<?php
	/* Definição dos Header */
 $meta1['titulo'] = "Título Aqui";
 $meta2['description'] = "Descrição Aqui";
 $meta3['canonico'] = "Link Canonico Aqui";
?>
   <?php include("seo-pages/seo-header.php");?>

<div class="espacinho"></div>
<div class="container">
<div class="row">
	<div class="col-md-8 col-sm-12">
		<h1><?php echo $meta1['titulo']; ?></h1>
<?php 
		/*Todo o Conteúdo irá Aqui*/ 
?>

<img src="seo-img/01.jpg" alt="<?php echo $meta1['titulo']; ?>" />
<br>

		<p>Conteúdo</p>
		


<?php 
		/*Todo o Conteúdo Termina Aqui*/ 
?>
	</div>
	<div class="col-md-4 col-sm-12" id="links">
		  <?php include("seo-pages/seo-link.php");?>
	</div>
</div>
</div>

<div class="espacinho"></div>
<?php
	include("seo-pages/seo-footer.php")
?>