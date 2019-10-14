<!doctype html>
<html>
<head>
<meta charset="utf-8">

<meta name="author" content="http://www.agenciahrs.com.br"> 
<meta name="robots" content="all">
<meta name="distribution" content="Global">
<meta name="service" content="Bella Decor Eventos, tudo para organização e decoralçao para festas e comemoraçoes em geral.">

<meta name="description" content="Na Bella Decor eventos voçê pode encotrar tudo para a festa do seu casamento e aniversários em decoração e organizaçao">

<meta name="keywords" content="festa, casamento, organização, decoração, flores, bancos, vazos, arapongas, paraná, parana, londrina, agência, hrs, desenvolvimento, web">



<link rel="stylesheet" type="text/css" href="css/syle.css">

<link rel="stylesheet" type="text/css" href="lightbox/lightbox.css">

<link href="banner/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet">

<script type="text/javascript" src="lightbox/lightbox-with-gallery.js"></script>

<?php

 if(isset($validacao_orcamento))
  echo $validacao_orcamento;


if(isset($validacao_contato))
  echo $validacao_contato;
?>
<script type="text/javascript" language="javascript" src="banner/js/jquery-1.6.3.min.js"></script>
<script type="text/javascript" language="javascript" src="banner/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" language="javascript" src="banner/js/jquery.skitter.min.js"></script>


<link rel="shortcut icon" type="image/png" href="estru/favicon.png">
<link rel="icon" href="estru/favicon.png" sizes="32x32">
<link rel="icon" href="estru/favicon.ico" sizes="32x32">

<title><?php echo $title ?></title>

<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'clean',
				numbers_align: 'center',
				numbers: false,
				progressbar: false, 
				dots: false, 
				animation: 'directionLeft',
				label: false,
				preview: true
				
			});
		});
</script>

<script type="text/javascript">
hs.graphicsDir = 'lightbox/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: 0.75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
</script>

<!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
<![endif]-->

<!--[if lt IE 9]>
 <style type="text/css">
 
 header, nav, section, article, aside, footer {
   display:block;
}

</style
<![endif]-->

</head>