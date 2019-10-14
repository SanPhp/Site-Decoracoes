<?php
//--------------------------------------------------------------------------------------------
// * ADICIONAR IMAGENS GALERIA
//--------------------------------------------------------------------------------------------
?>


<?php function adicionar_imagem_galeria() { ?>

<?php 

	if(isset($_POST['submit'])) {
					
					
					$legenda = $_POST['legenda'];
					$categoria = $_POST['categoria'];


if(!empty($categoria)) {

					
					$pasta = '../imagens/imgG/';
					
			     foreach($_FILES['imagem']['error'] as $key => $error) {
				
				
					if($error == UPLOAD_ERR_OK) {
							
							$tmp_name = $_FILES['imagem']['tmp_name'][$key];
							$nome = date('dmHisu') . '-' . $_FILES['imagem']['name'][$key];
							$nome_type = $_FILES['imagem']['type'];
							
					if(!empty($nome)) {
												
							$uploadfile = $pasta . basename($nome);
				$nova = '../imagens/imgP/';		
				$largura = 150;  
			       
             	$img = imagecreatefromjpeg($tmp_name);
                $x   = imagesx($img);
                $y   = imagesy($img);
                $altura = ($largura * $y)/$x;
                $nova = imagecreatetruecolor($largura, $altura);
                imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $altura, $x, $y);
                imagejpeg($nova, BELLADECOR_UPLOADPATH_THUBNAILS . $nome);
                imagedestroy($img);
                imagedestroy($nova);
							
							
							
					if(move_uploaded_file($tmp_name, $uploadfile)) {
					$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			        $query = "INSERT INTO galeria (legenda, categoria, imagem, miniatura) VALUES ('$legenda', '$categoria', '$nome', '$nome')";
			        $sql = mysqli_query($dbc, $query);
			        mysqli_close($dbc);
					
						echo'<p class="sucesso">Imagem adicionada com sucesso!</p>';
					}
					else {
						echo'<p class="error">Erro!</p>';
					}
							
					
					}//UPLOAD_ERR_OK
										
					}// !empty $nome (IMAGEM)
					else {
						echo 'campo imagem esta vazia';
					}
				
				}//foreach
				
			}// !empty $categoria
			else {
				echo 'o campo categoria esta vazio';
			}
				
			}//isset

?>

	

	<form action="" method="post" enctype="multipart/form-data">
        
        
        	<label for="legenda">Legenda para Imagem</label>
        	<input type="text" id="legenda" name="legenda">
            
            <label for="categoria">Escolha uma Categoria</label>
            <select name="categoria">
            	<option value="">Escolha uma Categoria</option>
            	<option value="casamento">Casamentos</option>
                <option value="aniversarios">Aniversários</option>
                <option value="aniversarios_infantis">Aniversários Infantis</option>
                <option value="corporativos">Corporativos</option>
                <option value="formaturas">Formaturas</option>
            </select>
            
            <label for="imagem">Escolha uma Imagem</label>
            <input type="file" id="imagem" name="imagem[]" class="multi" accept="jpg|pjpeg|jpeg">
            
            <input type="submit" id="submit" name="submit" value="Adicionar">
        
        
        </form>





<?php } //adicionar_imagem_galeria() ?>


<?php
//--------------------------------------------------------------------------------------------
// * ADICIONAR IMAGENS GALERIA
//--------------------------------------------------------------------------------------------
?>

<?php function listar_imagens_galeria_backend() { ?>

	<?php
	
		if(isset($_GET['cat']) && $_GET['titulo']) {
			
			$cat = $_GET['cat'];
			$titulo = $_GET['titulo'];
			
		
	
	echo '<center><h1>'.$titulo.'</h1></center>';
	
	
	
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$query = "SELECT * FROM galeria WHERE categoria = '$cat'";
	$sql = mysqli_query($dbc, $query);
	
	while($row = mysqli_fetch_array($sql)) {
	
		$id_galeria = $row['id_galeria'];
		$legenda = $row['legenda'];
		$categoria = $row['categoria'];
		$imagem =$row['imagem'];
	
	?>
	
    
    <figure>
    
     	<a href="<?php echo BELLADECOR_UPLOADPATH_NORMAL . $imagem ?>" title="" class="highslide" onClick="return hs.expand(this)"><img src="<?php echo BELLADECOR_UPLOADPATH_THUBNAILS . $imagem ?>" alt="" width="150" height="100"></a>
        <figcaption><a href="index.php?nome_imagem=<?php echo $imagem ?>&id_galeria=<?php echo $id_galeria ?>&cat=<?php echo $cat ?>&titulo=<?php echo $titulo ?>" title="Deletar?">Remover</a></figcaption>
        
         <div class="highslide-caption">
                <?php echo $legenda ?>
            </div>
            
     </figure>
    
    <?php } ?>
    <?php } //while ?>
	
	
	

<?php } //function listar_imagens_galeria_backend() ?>



<?php
//--------------------------------------------------------------------------------------------
// * ADICIONAR IMAGENS GALERIA
//--------------------------------------------------------------------------------------------
?>


<?php function deletar_imagem_galeria() { ?>


	<?php
	
		if(isset($_GET['id_galeria']) && ($_GET['nome_imagem']) && ($_GET['cat']) && ($_GET['titulo'])) {
		
			$id_galeria = $_GET['id_galeria'];
			$nome_imagem = $_GET['nome_imagem'];
			$cat = $_GET['cat'];
			$titulo = $_GET['titulo'];
		
		
	
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$query = "DELETE FROM galeria WHERE id_galeria = '$id_galeria'";
	$sql = mysqli_query($dbc, $query);
	
	@unlink (BELLADECOR_UPLOADPATH_THUBNAILS . $nome_imagem);
	@unlink (BELLADECOR_UPLOADPATH_NORMAL . $nome_imagem);
	
	/*echo '<script language="javascript">location:window.history.back()</script>';*/
	
	//header('Location: index.php?cat='.$cat.'&titulo='.$titulo.'');
	
	
	echo '<script language= "JavaScript">
		 location.href="index.php?cat='.$cat.'&titulo='.$titulo.'"
		 </script>';
	
	}//if isset
	?>
	

<?php } //deletar_imagem_galeria() ?>



<?php
//--------------------------------------------------------------------------------------------
// * ADICIONAR IMAGENS GALERIA
//--------------------------------------------------------------------------------------------
?>


<?php function listar_galeria_frontend() { ?>

	<?php
	
		if(isset($_GET['cat'])) {
			
			$cat = $_GET['cat'];
		}
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM galeria WHERE categoria = '$cat'";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		
		
		while($row = mysqli_fetch_array($sql)) {
		
			$legenda = $row['legenda'];
			$categoria = $row['categoria'];
			$imagem = $row['imagem'];
			$miniatura = $row['miniatura'];
		
		?>
		
        
         <figure>
        	<a href="<?php echo BELLADECOR_UPLOADPATH_NORMAL_FRONTEND . $imagem ?>" class="highslide" onClick="return hs.expand(this)">
<img src="<?php echo BELLADECOR_UPLOADPATH_THUBNAILS_FRONTEND . $miniatura ?>" alt="Imagem Decorações" width="202" height="185"></a>

            <div class="highslide-caption">
                <?php echo $legenda ?>
            </div>

        </figure>
        
        
        <?php }//while ?>
		

<?php } //listar_galeria_frontend() ?>



<?php function adicionar_video() { ?>



	<?php
	
		if(isset($_POST['submit'])) {
			
			$legenda_video = $_POST['legenda_video'];
			$link_video = $_POST['link_video'];
	
	if(!empty($legenda_video) && !empty($link_video)) {
		
    	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "INSERT INTO videos (legenda_video, link_video) VALUES ('$legenda_video', '$link_video')";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_query');
		
		echo '<p class="sucesso">Video adicionado com sucesso!</p>';
	 }//if !empty campos
	 else {
	 	echo '<p class="error">Por favor, Preecha os dois campos!</p>';
	 }
    }
    
     ?>


	<form action="" method="post" enctype="multipart/form-data">
        
        
        	<label for="legenda">Legenda para o Video</label>
        	<input type="text" id="legenda_video" name="legenda_video">
            
   
            <label for="link_video">Link do Video</label>
        	<input type="text" id="link_video" name="link_video" placeholder="//www.youtube.com/embed/lHjygSpaYww?rel=0">
           
            
            <input type="submit" id="submit" name="submit" value="Adicionar Video">
        
        
        </form>


<?php } //adicionar_video() ?>



<?php
//--------------------------------------------------------------------------------------------
// * ADICIONAR IMAGENS GALERIA
//--------------------------------------------------------------------------------------------
?>


<?php function listar_videos_backend() { ?>

	<?php
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM videos";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		
		while($row = mysqli_fetch_array($sql)) {
		
			$id_video = $row['id_video'];
			$legenda_video = $row['legenda_video'];
			$link_video = $row['link_video'];
		?>
		
        
        <article>
        	<h2><?php echo $legenda_video ?></h2>
        	<iframe width="450" height="253" src="<?php echo $link_video ?>" frameborder="0" allowfullscreen></iframe><br>
            	<span><a href="add_videos.php?id_video=<?php echo $id_video ?>" title="">Remover</a></span>
        </article>
        
        
        <?php }//while ?>


<?php } //listar_videos_backend() ?>



<?php
//--------------------------------------------------------------------------------------------
// * DELETAR VIDEO
//--------------------------------------------------------------------------------------------
?>


<?php function deletar_video() { ?>


	<?php
	
		if(isset($_GET['id_video'])) {
			
			$id_video = $_GET['id_video'];
	
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "DELETE FROM videos WHERE id_video = '$id_video'";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
	
		}// if isset
	?>


<?php } //deletar_video() ?>


<?php
//--------------------------------------------------------------------------------------------
// * LISTAR VIDEOS FRONTEND
//--------------------------------------------------------------------------------------------
?>



<?php function listar_videos_frontend() { ?>


	<?php 
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM videos";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		while($row = mysqli_fetch_array($sql)) {
		
			$legenda_video = $row['legenda_video'];
			$link_video = $row['link_video'];
		
		?>
		
		
        
        <article>
        	<h2><?php echo $legenda_video ?></h2>
        	<iframe width="450" height="253" src="<?php echo $link_video ?>" frameborder="0" allowfullscreen></iframe>
        </article>
        
        <?php } // while?>
			
	
	


<?php } // listar_videos_frontend()?>



<?php
//--------------------------------------------------------------------------------------------
// * ADICIONAR BANNER
//--------------------------------------------------------------------------------------------
?>


<?php function adicionar_banner() { ?>


	<?php
		if(isset($_POST['submit'])) {
		
			$titulo = $_POST['titulo'];
			$link_banner = $_POST['link_banner'];
			$imagem_banner = date('dmHisu') . '-' . $_FILES['imagem_banner']['name'];
			@$anexo = str_replace(" ", "", $anexo);
			$anexo = str_replace("ç", "", $anexo);
			$anexo = str_replace("Ã", "", $anexo);
			$anexo = str_replace("ã", "", $anexo);
			$anexo = str_replace("(", "", $anexo);
			$anexo = str_replace(")", "", $anexo);
			$anexo = str_replace("'", "", $anexo);
			
			$imagem_banner_type = $_FILES['imagem_banner']['type'];
			$imagem_banner_size =$_FILES['imagem_banner']['size'];
			
			
			if(!empty($imagem_banner)) {
			
				if(($imagem_banner_type == 'image/jpg') || ($imagem_banner_type == 'image/jpeg') || ($imagem_banner_type == 'image/pjpeg') || ($imagem_banner_type == 'image/png') && ($imagem_banner_size > 0) & ($imagem_banner_size <= BELLADECOR_MAXFILESIZE)) {
				 if ($_FILES['imagem_banner']['error'] == 0) {
					 
					$target = BELLADECOR_UPLOADPATH_BANNERS . $imagem_banner;
					if(move_uploaded_file($_FILES['imagem_banner']['tmp_name'], $target)) {
					
						$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
						$query = "INSERT INTO banners (titulo, link, imagem_banner) VALUES('$titulo', '$link_banner', '$imagem_banner')";
						$sql = mysqli_query($dbc, $query)
						or die('mysqli_error');
						
						echo '<p class="sucesso">Banner Adicionado com Sucesso!</p>';

					
					}//if move_uploaded_file
				
					 
				 }//if error
								
				}// imagem_type
				else {
					echo'<p class="error">Imagem type error</p>';
				}//else imagem type
			
			
			}//!empty imagem
			else {
				echo '<p class="error">Escolha uma Imagem</p>';
			}//else !empty imagem
		
		
		}//id(isset
	
	
	
	 ?>

<form action="" method="post" enctype="multipart/form-data">
        
        	<label for="titulo">Titulo para o Banner</label>
        	<input type="text" id="titulo" name="titulo">
            
   
            <label for="link_banner">Link do Banner</label>
        	<input type="text" id="link_banner" name="link_banner">
            
            
            <label for="imagem_banner">Imagem Banner</label>
        	<input type="file" id="imagem_banner" name="imagem_banner">
           
            
            <input type="submit" id="submit" name="submit" value="Adicionar Banner">
        
        
        </form>


<?php }// adicionar_banner ?>

<?php
//--------------------------------------------------------------------------------------------
// * ADICIONAR BANNER
//--------------------------------------------------------------------------------------------
?>

<?php function listar_banner_backend() { ?>

	<?php
		
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM banners";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_query');
		$conta_linha = mysqli_num_rows($sql);
		
		while( $row = mysqli_fetch_array($sql)) {
			
			$id_banner = $row['id_banner'];
			$titulo = $row['titulo'];
			$link = $row['link'];
			$imagem_banner = $row['imagem_banner'];
		?>
		
        <figure>
        	<a href="<?php if(!empty($link)) { echo $link; } else { echo '#'; } ?>" title="<?php echo $titulo ?>"><img src="<?php echo BELLADECOR_UPLOADPATH_BANNERS . $imagem_banner ?>" alt="<?php echo $titulo ?>" width="450" height="236"></a>
            <figcaption><a href="?titulo_banner=<?php echo $imagem_banner ?>&id_banner=<?php echo $id_banner ?>" title="Deletar?">Deletar</a></figcaption>
        </figure>
        
        <?php } ?>
	
	 

<?php }//listar_banner_backend() ?>

<?php
//--------------------------------------------------------------------------------------------
// * DELETAR BANNER
//--------------------------------------------------------------------------------------------
?>

<?php function deletar_banner() {?>

	<?php
		if(isset($_GET['titulo_banner']) && ($_GET['id_banner'])) {
		
			$id_banner = $_GET['id_banner'];
			$titulo_banner = $_GET['titulo_banner'];
	
	
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "DELETE FROM banners WHERE id_banner = '$id_banner'";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_query');
		 
		@unlink(BELLADECOR_UPLOADPATH_BANNERS . $titulo_banner);
		
		echo'<script language= "JavaScript">alert("Banner Deletado com Sucesso!");</script>';
		
		echo '<script language= "JavaScript">
              location.href="add_banner.php"
              </script>';
		  
			 
	}
	
	 ?>

<?php } //deletar_banner ?>


<?php
//--------------------------------------------------------------------------------------------
// * LISTAR BANNER FRONTEND
//--------------------------------------------------------------------------------------------
?>

<?php function listar_banner_frontend() { ?>

	<?php 
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM banners";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		while($row = mysqli_fetch_array($sql)) {
			
			$titulo_banner = $row['titulo'];
			$link = $row['link'];
			$imagem_banner = $row['imagem_banner'];
		?>
		
		
        <li><a href="<?php if(!empty($link)) { echo $link; } else { echo '#'; } ?>"><img src="<?php echo BELLADECOR_UPLOADPATH_BANNERS_FRONTEND . $imagem_banner ?>" class="cube" alt="<?php echo $titulo_banner ?>" /></a><div class="label_text"><!--<p>cube</p>--></div></li>
        
		
		<?php } //while ?>
	

<?php }//listar_banner_frontend ?>


<?php
//--------------------------------------------------------------------------------------------
// * CONTAGEM DE LINHAS DA GALERIA
//--------------------------------------------------------------------------------------------
?>

<?php class listagem { function contagem_linhas_galeria() { ?>


	<?php 
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM galeria WHERE categoria = 'casamento'";
		$sql = mysqli_query($dbc, $query)
		or die('mysqli_error');
		
		$count = mysqli_num_rows($sql);
		
		
		
		
		?>



<?php } }//contagem_linhas_galeria() ?>
