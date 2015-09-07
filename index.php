<!DOCTYPE html>
<html lang="en">
<head>
    <title>Deguste Crepes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/tms-0.3.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.equalheights.js" type="text/javascript"></script>    
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
<body id="page1">
	<!--==============================header=================================-->
    <header>
        <?php $menuActive = 'index';?>

    	<?php include('menu.php'); ?>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Em qualquer evento. <span> Crepe cai bem!</span></h2>
                    <div class="slider-wrapper">
                        <div class="slider">
                            <ul class="items">
                                <li>
                                    <img src="images/fotoSlide01.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="images/slide3.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="images/slide4.jpg" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - January 23, 2012!</div>
        <div class="main">
            <div class="wrapper img-indent-bot">
                <article class="col-1">
                	<img class="img-border" src="images/salada.png" alt="">
                </article>
                <article class="col-1">
                	<img class="img-border" src="images/capa2.jpg" alt="">
                </article>
                <article class="col-2">
                	<img class="img-border" src="images/capa3.jpg" alt="">
                </article>
            </div>
            <div class="wrapper">
            	<article class="column-1">
                	<div class="indent-left">
                        <div class="maxheight indent-bot">
                            <h3>Serviços</h3>
                            <ul class="list-1">
                                <li><a href="cardapio_simples.php">Crepe simples</a></li>
                                <li><a href="cardapio_especial.php">Crepe Especial</a></li>
                                <li><a href="massa1.php">Massa 1</a></li>
                                <li><a href="massa2.php">Massa 2</a></li>
                            </ul>
                        </div>
                        <a class="button-1" href="pacotes.php">Ver todos</a>
                    </div>
                </article>
                <article class="column-2">
                	<div class="maxheight indent-bot">
                        <h3 class="p1">Quem Somos</h3>
                        <p class="p2" align='justify'>O <a href="http://www.degustecrepes.com" target="_self">Deguste Crepes</a> foi criado com o objetivo de levar o seu paladar a degustar sabores extremamente deliciosos.
                        A arte do crepe não é para qualquer um somente para o Deguste Crepes, que prepara seus crepes recheados a gosto de seus convidados.
                        Conquistando a satisfação de todo o público.
                        Atendemos seus convidados sem você ter que se preoculpar com nada, realize em qualquer lugar ou ocasião e apenas desfrute do melhor da sua festa.</p>
                    </div>
                    <a class="button-2" href="contact.php">Fale Conosco</a>
                </article>
            </div>
        </div>
    </section>
    
	<?php include('footer.php'); ?>

    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'slideDown',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:true,
				pagNums:false
			});
		});
    </script>
</body>
</html>
