<!DOCTYPE html>
<html lang="en">
<head>
    <title>Catalogue</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
    <script src="js/hover-image.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>  
    <script src="js/jquery.bxSlider.js" type="text/javascript"></script> 
    <script type="text/javascript">
		$(document).ready(function() {
			$('#slider-2').bxSlider({
				pager: true,
				controls: false,
				moveSlideQty: 1,
				displaySlideQty: 4
			});
			$("a[data-gal^='prettyPhoto']").prettyPhoto({theme:'facebook'});
		}); 
	</script>
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
</head>
<body id="page3">
	<!--==============================header=================================-->
    <header>
    	<?php $menuActive = 'pacotes'; ?>
        <?php include('menu.php'); ?>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Impressione seus <span>convidados</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main">
            <div class="container">
            	<h3 class="prev-indent-bot">Serviços</h3>
                	<div>
                    	<div class="p4" >
                            <figure><a class="lightbox-image" href="images/slider-img1.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-img1.jpg" alt=""></a></figure>
                            <h5>Simples</h5>
                            <p class="p1">Apartir de 30 pessoas</p>
                            <p class="p2"><strong class="color-2">Preço promocional: R$ 1.020,00</strong></p>
                            <p class="p2"><strong class="color-2">Incluido 1 Garçom</strong></p>
                            <a class="button-1" href="cardapio_simples.php">+ Detalhes</a>
                        </div>
                        <div class="p4">
                            <figure><a class="lightbox-image" href="images/slider-img2.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-img5.jpg" alt=""></a></figure>
                            <h5>Especial</h5>
                            <p class="p1">Apartir de 30 pessoas</p>
                            <p class="p2"><strong class="color-2">Preço promocional: R$ 1.140,00</strong></p>
                            <p class="p2"><strong class="color-2">Incluido 1 Garçom</strong></p>
                            <a class="button-1" href="cardapio_especial.php">+ Detalhes</a>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <?php include('footer.php'); ?>
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
