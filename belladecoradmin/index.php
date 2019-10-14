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
    
     <center><h1 style="margin: 0px 0px 30px 0px;">Adicionar Fotos</h1></center>
    
    <section class="form_galeria">
    
    	<?php adicionar_imagem_galeria(); ?>
        
     </section><!--form_galeria-->
     
     	
     	<nav>
        	<ul>
				
            	<li><a href="index.php?cat=casamento&titulo=Casamentos" title="">Casamentos</a></li>
                <li>|</li>
                <li><a href="index.php?cat=aniversarios&titulo=Aniversários" title="">Aniversários</a></li>
                <li>|</li>
                <li><a href="index.php?cat=aniversarios_infantis&titulo=Aniversários Infantis" title="">Aniversários Infantis</a></li>
                <li>|</li>
                <li><a href="index.php?cat=corporativos&titulo=Corporativos" title="">Corporativos</a></li>
                <li>|</li>
                <li><a href="index.php?cat=formaturas&titulo=Formaturas" title="">Formaturas</a></li>
            </ul>
        </nav>
     
     
     
     <div class="listar_imagens_galeria">
     
     	
        <?php listar_imagens_galeria_backend(); ?> 
        <?php deletar_imagem_galeria(); ?>   
     
     
     
     </div><!--listar_imagens_galeria-->
     
     
     
     
     
     
     
     
     
     
    
    </section><!--all-->


</body>
</html>