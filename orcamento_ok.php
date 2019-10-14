<?php

if (isset($_POST['submit'])){	
$nome = $_POST['nome'];
$local = $_POST['local'];
$email = $_POST['email'];
$numero_convidados = $_POST['numero_convidados'];
$fone = $_POST['fone'];
$data = $_POST['data'];
$mensagem = $_POST['mensagem'];


    $from = 'Bella Decor';
	$to = 'sandro@hrsweb.com.br';
	$subject = 'Orçamento Site Bella Decor';
	$msg = "Formulário de Orçamento do Site: $from \n" .
	        "Nome: $nome \n" .
			"Local: $local \n" .
	        "Email: $email \n" .
			"N. de Convidados: $numero_convidados \n" .
			"Fone: $fone \n" .
			"Data: $data \n" .
			"Mensagem: $mensagem";
	        mail($to, $subject, $msg);
	header('refresh:3; url=http://www.belladecoreventos.com.br/contato.php');
				
}
?>


<?php $title = 'Orçamento - Bella Decor - Decoração para todos os eventos'; ?>
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
        
        	<center><h1 style="font-family:'Dekar'; color:#fff; margin: 0px 0px 100px 0px; font-size:24px;">Mensagem enviada com sucesso!<br>
            <a href="http://www.belladecor.com.br/orcamento.php" title="Clique para voltar ou aguarde o redirecionamento" style="color:#963;">Voltar</a></h1></center>
        
        
        	<center><img src="estru/img_orcamento.png" alt="Orçamento Imagem"></center>        	
			
        
        </div><!--formulario_orcamento-->
    
    
 	</section><!--orcamento_all-->
    	
 </section><!--all-->
    
    
  <?php require 'footer.php'; ?>
 
 

</body>
</html>