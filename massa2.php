<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
    <script src="js/jquery.equalheights.js" type="text/javascript"></script>    
    <script src="js/jquery.bxSlider.js" type="text/javascript"></script> 
    <script type="text/javascript">
		$(document).ready(function() {
			$('#slider').bxSlider({
				pager: true,
				controls: false,
				moveSlideQty: 1,
				displaySlideQty: 3
			});
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
<body id="page2">
	<!--==============================header=================================-->
    <header>
        <?php $menuActive = 'cardapio';?>
    	<?php include('menu.php'); ?>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Buffet <span> Massa 2</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main">
            <div class="wrapper">
              <div class="v4-tease"><a href="contact.php">Solicite um orçamento</a></div>
      	       <article class="col-1">
                  <div class="indent-left">
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Massa 1</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/page3-img8.jpg" alt=""></figure>
                            </div>
                            <a class="button-1" href="massa1.php">+ Detalhes</a>
                        </div>
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Massa 2</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/espaguete.jpg" width="300px" alt=""></figure>
                            </div>
                            <a class="button-1" href="massa2.php">+ Detalhes</a>
                        </div>
                    </div>
                </article>
                <article class="col-2">
                  <h3>Entrada</h3>
                    <ul class="price-list p2">
                      <li>Torradas finas com 2 tipos de pastas</li>
                      <li>Pasta de azeitona preta</li>
                      <li>Pasta de atum</li>
                    </ul>
                    <h3>Acompanhamentos</h3>
                    <ul class="price-list p2">
                      <li><b>Salada verde 1</b><br> Alface, agrião, rúcula, tomate seco, kani, batata palha e blanquet de peru</li>
                      <li><b>Salada verde 2</b><br> Alface, cenoura, palmito e kani</li>
                      <li><b>Molhos para saladas</b></li>
                    </ul>
                    <h3>Tipos de Massas</h3>
                    <ul class="price-list p2">
                      <li>Ravioli de Frango</li>
                      <li>Pene</li>
                      <li>Espaguet</li>
                      <li>Fusilli</li>
                      <li>Capeletti de carne</li>
                    </ul>
                    <h3>Molhos</h3>
                    <ul class="price-list p2">
                      <li>- bechamel (branco)</li>
                      <li>- sugo (vermelho)</li>
                      <li>- Quatro queijo</li>
                      <li>- Rose</li>
                    </ul>
                    <h3>Recheios</h3>
                    <ul class="price-list p2">
                      <li>Mussarela</li>
                      <li>Cebola</li>
                      <li>Tomate</li>
                      <li>Provolone</li>
                      <li>Frango</li>
                      <li>Calabresa</li>
                      <li>Carne</li>
                      <li>Bacon</li>
                      <li>Presunto</li>
                      <li>Alho</li>
                      <li>Azeitona</li>
                      <li>Brócolis</li>
                      <li>Champion</li>
                      <li>Ervilha</li>
                      <li>Passas</li>
                      <li>Camarão</li>
                      <li>Tomate Seco</li>
                      <li>Milho</li>
                      <li>Palmito</li>
                      <li>Ovos</li>
                      <li><b>Toque verde:</b> Cebolinha, salsa, orégano e manjericão</li>
                    </ul>
                    <h3>Sobremesa</h3>
                    <ul class="price-list p2">
                      <li>Banana Flambada c/ sorvete</li>
                    </ul>
                    <h3>Bebidas</h3>
                    <ul class="price-list p2">
                      <li>Coca cola (normal e zero)</li>
                      <li>Guarana (normal e zero)</li>
                      <li>Ice Tea</li>
                      <li>Água mineral c/ e sem gás</li>
                    </ul>
                    <h3>Finalização</h3>
                    <ul class="price-list p2">
                      <li>Cafezinho</li>
                      <li>Chá</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>
    <!--==============================footer=================================-->

    <?php include('footer.php'); ?>
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
