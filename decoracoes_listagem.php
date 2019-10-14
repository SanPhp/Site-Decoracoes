<?php
	require 'belladecoradmin/util/appvars.php';
	require 'belladecoradmin/util/connect.php';
	require 'belladecoradmin/funcoes.php';

 ?>
 
<?php $title = 'Decorações - Bella Decor - Decoração para todos os eventos'; ?>
<?php require 'header.php'; ?>

<body>
	
    <?php $menuDecoracoes = 'active';  ?>
    <?php $h3 = '<h3 class="titulo_listagem">Casamentos</h3>'; ?>
	<?php require 'cabecalho.php'; ?>
    
 <section id="all">
    
    	
    	<section id="decoracoes_listagem_all">
    
    <article class="decoracoes_listagem">
    
    	<p>É chegada a hora de compartilhar a vida. Um momento desejado desde que 
           vocês se conheceram. A Bella Decor  pode te ajudar com seu casamento.</p>
           
        </article><!--decoracoes-->
        
   
   	<section class="listar_decoracoes">
    
    	
       <?php listar_galeria_frontend(); ?>
        
        
    
    </section><!--listar_decoracoes"-->
   
   
        

       </section><!--decoracoes_listagem_all-->    
           
 </section><!--all-->
    
    
  <?php require 'footer.php'; ?>
 
 

</body>
</html>