<?php $title = 'Decorações - Bella Decor - Decoração para todos os eventos'; ?>
<?php require 'header.php'; ?>

<body>
	
    <?php $menuDecoracoes = 'active';  ?>
    <?php $h3 = '<h3 class="titulo_decoracoes">Decorações</h3>'; ?>
	<?php require 'cabecalho.php'; ?>
    
 <section id="all">
    
    	
    	<section id="decoracoes_all">
    
    <article class="decoracoes">
    
    	<p>Aqui você fica por dentro das novidades em decorações, 
           com dicas para deixar seu evento casa cada vez mais elegante e sofisticado.</p>
           
        </article><!--decoracoes-->
        
        
   <div class="listar_titulos">
    <a href="decoracoes_listagem.php?cat=casamento" title=""><img src="estru/img_decoracoes_casamentos.png" alt="Imagem decoracoes"></a>
    <a href="decoracoes_listagem.php?cat=aniversarios" title=""><img src="estru/img_decoracoes_aniversarios.png" alt="Imagem decoracoes"></a>
     
    <a href="decoracoes_listagem.php?cat=aniversarios_infantis" title=""><img src="estru/img_decoracoes_aniversarios_infantil.png" alt="Imagem decoracoes"></a>
     
    <a href="decoracoes_listagem.php?cat=corporativos" title=""><img src="estru/img_decoracoes_corporativos.png" alt="Imagem decoracoes"></a>
     <a href="decoracoes_listagem.php?cat=formaturas" title=""><img src="estru/img_decoracoes_formaturas.png" alt="Imagem decoracoes"></a>
   </div><!--listar_titulos-->
        

       </section><!--decoracoes_all-->    
           
 </section><!--all-->
    
    
  <?php require 'footer.php'; ?>
 
 

</body>
</html>