<?php
	require 'util/appvars.php';
	require 'util/connect.php';
	require 'funcoes.php';

 ?>
<?php require 'header.php'; ?>

<body>




	<?php include 'cabecalho.php'; ?>

    

	<section id="all">
    
    <center><h1 style="margin: 0px 0px 30px 0px;">Adicionar Videos</h1></center>
    
    
    
    <section class="form_video">
    
        <?php adicionar_video(); ?>
        <?php deletar_video(); ?>
        
        
     </section><!--form_video-->
     
     
     	
     
     
     
     <div class="listar_video">
     
     	
        <?php listar_videos_backend(); ?>
     
     
     
     </div><!--listar_video-->
     
     
     
     
     
     
     
     
     
     
    
    </section><!--all-->


</body>
</html>