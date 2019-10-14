<?php
	require 'util/appvars.php';
	require 'util/connect.php';
	require 'classes.php';
	require 'funcoes.php';
	
	
	$contagem = new Contagem()

 ?>
<?php require 'header.php'; ?>

<body>


	<?php include 'cabecalho.php'; ?>



	<section id="all">
    
     <center><h1 style="margin: 0px 0px 30px 0px;">Relatório / Quantidade de arquivos adicionados</h1></center>
    
   <center><h1>Casamento | <?php echo $contagem->contagem_categorias_casamento() ?> </h1></center>
   <center><h1>Aniverário | <?php echo $contagem->contagem_categorias_aniversarios() ?> </h1></center>
   <center><h1>Aniverários Infantis | <?php echo $contagem->contagem_categorias_aniversarios_infantis() ?></h1></center>
   <center><h1>Corporativos | <?php echo $contagem->contagem_categorias_corporativos() ?></h1></center>
   <center><h1>Formatura | <?php echo $contagem->contagem_categorias_formaturas() ?> </h1></center>
   
 
   
   
   <center><h1>Videos | <?php echo $contagem->contagem_videos() ?></h1></center>
   <center><h1>Banners | <?php echo $contagem->contagem_banners() ?></h1></center>
   
   
   
   
   <center><h1>Total | <?php echo $contagem->contagem_banners()+$contagem->contagem_categorias_aniversarios()+$contagem->contagem_categorias_aniversarios_infantis()+$contagem->contagem_categorias_casamento()+$contagem->contagem_categorias_corporativos()+$contagem->contagem_categorias_formaturas()+$contagem->contagem_videos() ?></h1></center>
     
     
     
     
     
     
    
    </section><!--all-->


</body>
</html>