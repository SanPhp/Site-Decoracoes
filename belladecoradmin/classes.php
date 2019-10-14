<?php
	class Contagem {
		
		
		
		    function contagem_categorias_casamento() {
		
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "SELECT categoria FROM galeria WHERE categoria = 'casamento'";
			$sql = mysqli_query($dbc, $query)
			or die('mysqli_error');
			
			$count = mysqli_num_rows($sql);
			
			
			return $count;
			
		
		}// contagem_categorias_casamento()
		
		
		
		function contagem_categorias_aniversarios() {
		
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "SELECT categoria FROM galeria WHERE categoria = 'aniversarios'";
			$sql = mysqli_query($dbc, $query)
			or die('mysqli_error');
			
			$count = mysqli_num_rows($sql);
			
			
			
			return $count;
			
		
		}// contagem_categorias_aniversarios()
		
		
		function contagem_categorias_aniversarios_infantis() {
		
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "SELECT categoria FROM galeria WHERE categoria = 'aniversarios_infantis'";
			$sql = mysqli_query($dbc, $query)
			
			or die('mysqli_error');
			
			$count = mysqli_num_rows($sql);
			
			
			
			return $count;
			
		
		}// contagem_categorias_aniversarios_infantis()
		
		
		
		function contagem_categorias_corporativos() {
		
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "SELECT categoria FROM galeria WHERE categoria = 'corporativos'";
			$sql = mysqli_query($dbc, $query)
			or die('mysqli_error');
			
			$count = mysqli_num_rows($sql);
						
			return $count;
			
		
		}// contagem_categorias_corporativos()
		
		
		
		
		function contagem_categorias_formaturas() {
		
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "SELECT categoria FROM galeria WHERE categoria = 'formaturas'";
			$sql = mysqli_query($dbc, $query)
			or die('mysqli_error');
			
			$count = mysqli_num_rows($sql);
						
			return $count;
			
		
		}// contagem_categorias_formaturas()
		
		
				
		
		function contagem_videos() {
		
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "SELECT * FROM videos";
			$sql = mysqli_query($dbc, $query)
			or die('mysqli_error');
			
			$count = mysqli_num_rows($sql);
						
			return $count;
			
		
		}// contagem_videos()
		
		
		
		function contagem_banners() {
		
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query = "SELECT * FROM banners";
			$sql = mysqli_query($dbc, $query)
			or die('mysqli_error');
			
			$count = mysqli_num_rows($sql);
						
			return $count;
			
		
		}// contagem_banners()
				
		
	}//class


 ?>