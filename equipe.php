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
    	<?php $menuActive = 'equipe'; ?>
        <?php include('menu.php'); ?>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Equipe <span>qualificada</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main">
            <div class="container">
            	<h3 class="prev-indent-bot">Equipe</h3>
            	<div>
                    <p align="justify">
                        <img src="images/equipe.jpg" align="left" style="margin-right:15px;"/>
                	Chegada da equipe no local 2 a 3 horas de antecedência
                    para a preparação do buffet. 
                    horário combinado. 
                     Equipes devidamente uniformizadas e capacitadas para
                      o  serviço. 
                      Levamos todo material necessário para a preparação dos 
                      crepes para que todos sejam bem servidos com qualidade 
                      . Todo material de infra estrutura
                       necessária: copos de vidro, pratos de louças decorativos, 
                       talheres de inox, bandejas, cardápio e guardanapos 
                       tudo por nossa conta.
                    Bebidas servidas a vontade durante o evento : coca cola, 
                    coca cola zero, guaraná antártica, guaraná antártica zero, 
                    nestea, água mineral c/ e sem gás.

Equipes uniformizados, capacitado e treinadas para o serviço.
                    </p>
                    <hr>
                    <br>
                    <p><strong>Buffet a domicílio!</strong></p>
                    <p><strong>Mínimo 30 pessoas</strong></p>
                    <p><strong>Duração do evento 4 horas</strong></p>

                </div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <?php include('footer.php'); ?>
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
