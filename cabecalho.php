<header>
    	<div id="logo">
        	<a href="index.php" title="Bella Decor"><img src="estru/logo.png" alt="Logo Bella Decor"></a>
        </div>
        
        
        <nav>
        	<ul>
            	<li><a href="index.php" title="" class="<?php echo $menuHome ?>">Home</a></li>
                <li><a href="quemsomos.php" title="" class="<?php echo $menuQuemsomos ?>">Quem Somos</a></li>
                <li><a href="produtos.php" title="" class="<?php echo $menuProdutos ?>">Locações</a></li>
                <li><a href="decoracoes.php" title="" class="<?php echo $menuDecoracoes ?>">Decorações</a></li>
                <li><a href="orcamento.php" title="" class="<?php echo $menuOrcamento ?>">Orçamento</a></li>
                <li><a href="contato.php" title="" class="<?php echo $menuContato ?>">Contato</a></li>
            </ul>
        </nav>
        
        	<hr>
        
        	<?php if(isset($h3)) echo $h3 ?>
        
	</header><!--header-->