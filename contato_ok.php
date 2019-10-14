<?php

if (isset($_POST['submit'])){	
$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$assunto = $_POST['assunto'];
$cidade = $_POST['cidade'];
$mensagem = $_POST['mensagem'];


    $from = 'Bella Decor Eventos';
	$to = 'sandro@hrsweb.com.br';
	$subject = 'Contato Site Bella Decor Eventos';
	$msg = "Formulário de Contato do Site: $from \n" .
	        "Nome: $nome \n" .
	        "Email: $email \n" .
			"Fone: $fone \n" .
			"Assunto: $assunto \n" .
			"Cidade: $cidade \n" .
			"Mensagem: $mensagem";
	        mail($to, $subject, $msg);
	header('refresh:3; url=http://www.belladecoreventos.com.br/contato.php');
				
}
?>


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
        
          <center><h1 style="font-family:'Dekar'; color:#fff; margin: 0px 0px 100px 0px; font-size:24px;">Mensagem enviada com sucesso!<br>
            <a href="http://www.belladecoreventos.com.br/contato.php" title="Clique para voltar ou aguarde o redirecionamento" style="color:#963;">Voltar</a></h1></center>
        		
                    
        
        </div><!--formulario_contato-->
    
    
 	</section><!--orcamento_all-->
    	
 </section><!--all-->
    
    
  <?php require 'footer.php'; ?>
 

</body>
</html>