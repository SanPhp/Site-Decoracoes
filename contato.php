<?php $validacao_contato = '<script type="text/javascript" language="javascript" src="form_vali/form_vali_contato.js"></script>'; ?>

<?php $title = 'Contato - Bella Decor - Decoração para todos os eventos'; ?>
<?php require 'header.php'; ?>

<body>
	
    <?php $menuContato = 'active';  ?>
    <?php $h3 = '<h3 class="titulo_contato">Contato</h3>'; ?>
	<?php require 'cabecalho.php'; ?>
    
 <section id="all">
    
    <section id="contato_all">
    
    <article class="contato">
    
    	<p>Caso haja alguma dúvida ou sugestão sobre nossos serviços e ou produtos, entre 
           em contato.</p>
           
    </article><!--quem_somos-->
    
    
    	<div id="formulario_contato">
        
            <form action="contato_ok.php" name="form_contato" method="post" onSubmit="return validacao();">
            
            	<input type="text" id="nome" name="nome" placeholder="Nome">
                
                <input type="text" id="email" name="email" placeholder="E-mail">
                
                <input type="text" id="fone" name="fone" placeholder="Fone">
                
                <input type="text" id="assunto" name="assunto" placeholder="Assunto">
                
                <input type="text" id="cidade" name="cidade" placeholder="Cidade">
                
                <textarea id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
                
                <input type="submit" id="submit" name="submit">
                
            
            </form>
        
        
        <div class="end_mapa">
        
        	<div class="mapa">
            	
                <iframe width="495" height="190" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Flamingos,+389,+Arapongas+-+Paran%C3%A1&amp;aq=0&amp;oq=Rua:+Flamingos,+389+-++Arapongas+-+Paran%C3%A1&amp;sll=-23.513025,-51.100451&amp;sspn=0.766888,0.883026&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Flamingos,+389,+Arapongas+-+Paran%C3%A1,+86701-390&amp;t=m&amp;ll=-23.411823,-51.433332&amp;spn=0.003741,0.0106&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Flamingos,+389,+Arapongas+-+Paran%C3%A1&amp;aq=0&amp;oq=Rua:+Flamingos,+389+-++Arapongas+-+Paran%C3%A1&amp;sll=-23.513025,-51.100451&amp;sspn=0.766888,0.883026&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Flamingos,+389,+Arapongas+-+Paran%C3%A1,+86701-390&amp;t=m&amp;ll=-23.411823,-51.433332&amp;spn=0.003741,0.0106&amp;z=16&amp;iwloc=A" style="color:#0000FF;text-align:left"></a></small>
                
                
            </div><!--mapa-->
        
        
        <div class="end">
        
            <h2>Fone para contato</h2>
            <p>(43) 3055-4628</p>
            <h2>Endereço</h2>
            <p>Rua: Flamingos, 389 - Centro</p>
            <p>Arapongas - Paraná</p>
        
        </div><!--end-->
        
        
        </div><!--end_mapa-->			
                    
        
        </div><!--formulario_contato-->
    
    
 	</section><!--orcamento_all-->
    	
 </section><!--all-->
    
    
  <?php require 'footer.php'; ?>
 

</body>
</html>