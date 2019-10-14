<?php
	require 'util/appvars.php';
	require 'util/connect.php';
	require 'funcoes.php';

 ?>
<?php require 'header.php'; ?>

<body>




	<?php include 'cabecalho.php'; ?>

    

	<section id="all">
    
    <center><h1 style="margin: 0px 0px 30px 0px;">Adicionar Banner</h1></center>
    
    
    
    <section class="form_video">
    
        <?php adicionar_banner(); ?>
        
        
        
     </section><!--form_video-->
     
     
     <div class="listar_banner">
     
        <?php listar_banner_backend(); ?>
        <?php deletar_banner(); ?>
     
     
     
     </div><!--listar_banner-->
     

    
    </section><!--all-->


</body>
</html>