<?php
	require 'belladecoradmin/util/appvars.php';
	require 'belladecoradmin/util/connect.php';
	require 'belladecoradmin/funcoes.php';

 ?>
 
<?php $title = 'Home - Bella Decor - Decoração para todos os eventos'; ?>
<?php require 'header.php'; ?>

<body>
	
    <?php $menuHome = 'active';  ?>
	<?php require 'cabecalho.php'; ?>
    
 <section id="all">
    
    	<article class="duvidas_suges">
        	<h1>Dúvidas ou Sugestões</h1>
             
            <p><a href="contato.php" title="">Caso haja alguma
               dúvida ou sugestão
               sobre nossos serviços
               e produtos, entre 
               em contato</a></p>
        
        </article><!--duvidas_suges-->
    
    <section id="banner">
    <div class="box_skitter box_skitter_large">
<ul>

<?php listar_banner_frontend(); ?>

</ul>

</div><!--box_skitter box_skitter_large-->

    
    	<div class="floral_only"></div>
    </section><!--banner-->
    
    <article class="bella_de_index">
    	<h1>Bella Decor Eventos</h1>
        
            <p><a href="quemsomos.php" title="">Atua no ramo de decorações para eventos, casamentos 
                festas, decorações naturais, arranjos naturais, artificiais, 
                cenografia, presentes, floristas, flor, móveis para decoração, 
                designer floral e decoração para formaturas.</a></p>
    </article><!--bella_de_index-->
    
 </section><!--all-->
  
    
  <?php require 'footer.php'; ?>
 

</body>
</html>