<?php
	require 'belladecoradmin/util/appvars.php';
	require 'belladecoradmin/util/connect.php';
	require 'belladecoradmin/funcoes.php';

 ?>
<?php $title = 'Produtos - Bella Decor - Decoração para todos os eventos'; ?>
<?php require 'header.php'; ?>

<body>
	
    <?php $menuProdutos = 'active';  ?>
    <?php $h3 = '<h3 class="titulo_produtos">Produtos</h3>'; ?>
	<?php require 'cabecalho.php'; ?>
    
 <section id="all">
    
    
    	<section id="produtos_all">
    
    <article class="produtos">
    
    	<p>Abaixo disponibilizamos algumas imagens de nossos produtos para sua apreciação. 
           Seja bem vindo à Bella Decor..</p>
           
        </article><!--produtos-->
        
        
        <div class="listar_produtos">
        
                    
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           
           <figure>
           	<a href="estru/1.jpg" class="highslide" onClick="return hs.expand(this)"><img src="estru/1.jpg" alt="Produtos" width="150" height="138"></a>
            
             <div class="highslide-caption">
                Legenda da Imagem vai aqui
            </div>
            
           </figure>
           
           
           
           
      </div><!--listar_produtos-->
      
      
      
      <center><h1 style="font-family: CIRPNOVA_D; color: #CC9933; margin:40px 0px 0px 0px; font-size: 50px;">Videos</h1></center>
      
      <div class="videos_produtos">
      
      
      	<?php listar_videos_frontend(); ?>
        
      
      
      </div><!--videos_produtos-->
      
      
      
      
      
      
           
           <center><p style="margin: 40px 0px 50px 0px;"><img src="estru/bg_quem_somos.png" alt=""></p></center>
           
       </section><!--produtos_all-->    
           
    
    	
 </section><!--all-->
    
    
  <?php require 'footer.php'; ?>
 
 

</body>
</html>