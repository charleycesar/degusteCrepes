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
    	            <div class="wrapper">
                        <article class="col-1">
                        	<div class="p4" >
                                <h3>Crepe Simples</h3>
                                <figure><a class="lightbox-image" href="images/capa3.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/capa3.jpg" alt=""></a></figure>
                                <h5>Simples</h5>
                                <p class="p1">Apartir de 30 pessoas</p>
                                <p class="p2"><strong class="color-2">Incluido 1 Garçom</strong></p>
                                <a class="button-1" href="cardapio_simples.php">+ Detalhes</a>
                            </div>
                        </article>
                        <article style="margin-left:15px;" class="col-2">
                            <div class="p4">
                                <h3>Crepe Especial</h3>
                                <figure><a class="lightbox-image" href="images/crepeEspecial.jpg" data-gal="prettyPhoto[prettyPhoto]"><img width="290px" height="150px" src="images/crepeEspecial.jpg" alt=""></a></figure>
                                <h5>Especial</h5>
                                <p class="p1">Apartir de 30 pessoas</p>
                                <p class="p2"><strong class="color-2">Incluido 1 Garçom</strong></p>
                                <a class="button-1" href="cardapio_especial.php">+ Detalhes</a>
                            </div>
                        </article>
                        <article style="margin-left:15px;" class="col-2">
                            <div class="p4">
                                <h3>Massa 1 <b style="font-size:9px;color:red;">Novo</b></h3>
                                <figure><a class="lightbox-image" href="images/page3-img8.jpg" data-gal="prettyPhoto[prettyPhoto]"><img width="290px" height="150px" src="images/page3-img8.jpg" alt=""></a></figure>
                                <h5>Simples</h5>
                                <p class="p1">Apartir de 30 pessoas</p>
                                <p class="p2"><strong class="color-2">Incluido 1 Garçom</strong></p>
                                <a class="button-1" href="massa1.php">+ Detalhes</a>
                            </div>
                        </article>
                        <article class="col-2">
                            <div class="p4">
                                <h3>Massa 2 <b style="font-size:9px;color:red;">Novo</b></h3>
                                <figure><a class="lightbox-image" href="images/espaguete.jpg" data-gal="prettyPhoto[prettyPhoto]"><img width="290px" height="150px" src="images/espaguete.jpg" alt=""></a></figure>
                                <h5>Especial</h5>
                                <p class="p1">Apartir de 30 pessoas</p>
                                <p class="p2"><strong class="color-2">Incluido 1 Garçom</strong></p>
                                <a class="button-1" href="massa2.php">+ Detalhes</a>
                            </div>
                        </article>
                         <article class="col-2" style="margin-left:15px;">
                            <div class="p4">
                                <h3>Crepes e Massas<b style="font-size:9px;color:red;">Novo</b></h3>
                                <figure><a class="lightbox-image" href="images/crepe_massa.jpg" data-gal="prettyPhoto[prettyPhoto]"><img width="290px" height="150px" src="images/crepe_massa.jpg" alt=""></a></figure>
                                <h5>Especial</h5>
                                <p class="p1">Apartir de 30 pessoas</p>
                                <p class="p2"><strong class="color-2">Incluido 1 Garçom</strong></p>
                                <a class="button-1" href="massas_e_crepes.php">+ Detalhes</a>
                            </div>
                        </article>
                    </div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <?php include('footer.php'); ?>
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
