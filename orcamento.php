<?php $title = 'Orçamento - Bella Decor - Decoração para todos os eventos'; ?>

<?php $validacao_orcamento = '<script type="text/javascript" language="javascript" src="form_vali/form_vali.js"></script>';
 ?>
<?php require 'header.php'; ?>

<body>
	
    <?php $menuOrcamento = 'active';  ?>
    <?php $h3 = '<h3 class="titulo_orcamento">Orçamentos</h3>'; ?>
	<?php require 'cabecalho.php'; ?>
    
 <section id="all">
    
    <section id="orcamento_all">
    
    <article class="orcamento">
    
    	<p>Preencha o formulário abaixo para que possamos elaborar um orçamento à sua necessidade.
           Nós da Bella Decor Eventos teremos um enorme prazer em poder ajudá-lo!.</p>
           
    </article><!--quem_somos-->
    
    
    	<div id="formulario_orcamento">
        
        	<table>
            <form action="orcamento_ok.php" name="form" method="post" onSubmit="return validacao();">
            	<tr>
                	<td><input type="text" id="nome" name="nome" placeholder="Nome"></td>
                    <td><input type="text" id="local" name="local" placeholder="Local"></td>
                </tr>
                
                <tr>
                	<td><input type="text" id="email" name="email" placeholder="E-mail"></td>
                    <td><input type="text" id="numero_convidados" name="numero_convidados" placeholder="N. de Convidados"></td>
                </tr>
                
                <tr>
                	<td><input type="text" id="fones" name="fone" placeholder="Fone"></td>
                    <td rowspan="2"><textarea id="mensagem" name="mensagem" placeholder="Mensagem"></textarea></td>
                </tr>
                
                <tr>
                	<td><input type="text" id="data" name="data" placeholder="Data"></td>
                </tr>
                
                <tr>
                	<td colspan="2"><input type="submit" id="submit" name="submit" value="Enviar"></td>
                </tr>
                
                </form>
            </table>
        
        
        
        
        	<center><img src="estru/img_orcamento.png" alt="Orçamento Imagem"></center>        	
			
        
        </div><!--formulario_orcamento-->
    
    
 	</section><!--orcamento_all-->
    	
 </section><!--all-->
    
    
  <?php require 'footer.php'; ?>
 
 

</body>
</html>