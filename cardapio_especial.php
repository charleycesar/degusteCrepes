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
                	<h2>Buffet <span> Especial</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main">
            <div class="wrapper">
      	       <article class="col-1">
                  <div class="indent-left">
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Crepes Simples</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/page2-img1.jpg" alt=""></figure>
                                <div class="extra-wrap">
                                    <h5>Mínimo de 30 pessoas</h5>
                                    <h5>Duração de 4 horas</h5>
                                    <p align="justify">Nossos crepes são preparados por profissionais de qualidade e de forma artesanal.</p>
                                </div>
                            </div>
                            <a class="button-1" href="cardapio_simples.php">+ Detalhes</a>
                        </div>
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Crepes Especiais</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/page2-img1.jpg" alt=""></figure>
                                <div class="extra-wrap">
                                    <h5>Minimo de 30 pessoas</h5>
                                    <h5>Duração de 4 horas</h5>
                                    <p align="justify">Nossos crepes são saborosos e todos os profissionais estão aptos e qualificados para o serviço.</p>
                                </div>
                            </div>
                            <a class="button-1" href="cardapio_especial.php">+ Detalhes</a>
                        </div>
                    </div>
                </article>
                <article class="col-2">
                	<h3>Entrada</h3>
                    <ul class="price-list p2">
                      <li>Torradas finas com 2 tipos de pastas</li>
                      <li>Manteiga com ervas</li>
                    </ul>
                    <h3>Acompanhamentos</h3>
                    <ul class="price-list p2">
                      <li>Salada verde<br> (Alface, agrião, rúcula, tomate seco, kani, batata palha e blanquet de peru)</li>
                      <li>Salpicão de cenoura light<br> (Cenoura ralada, maionese light, azeitona, uva passas, batata palha)</li>
                    </ul>
                    <h3>Molhos</h3>
                    <ul class="price-list p2">
                      <li>Molho bechamel (branco)</li>
                      <li>Molho sugo (vermelho)</li>
                    </ul>
                    <h3>Recheios salgados</h3>
                    <ul class="price-list p2">
                      <li>Mussarela</li>
                      <li>Queijo minas</li>
                      <li>Alho</li>
                      <li>Presunto</li>
                      <li>Catupiry</li>
                      <li>Calabresa</li>
                      <li>Frango</li>
                      <li>Tomate</li>
                      <li>Cebola</li>
                      <li>Orégano</li>
                      <li>Manjericão</li>
                      <li>Ricota</li>
                      <li>Cheddar</li>                    
                      <li>Carne seca<li>
                      <li>Palmito<li>
                      <li>Azeitona<li>
                      <li>Camarão com catupiry<li>
                    </ul>
                    <h3>Recheios doces</h3>
                    <ul class="price-list p2">
                      <li>Chocolate</li>
                      <li>Doce de leite</li>
                      <li>Beijinho de coco</li>
                      <li>Nutela</li>
                      <li>Banana ,áçucar e canela</li>
                      <li>Morango</li>
                      <li>Coco</li>
                      <li>Romeu e Julieta</li>
                    </ul>
                    <h3>Acompanhamentos de crepes doces</h3>
                    <ul class="price-list p2">
                      <li>Sorvetes</li>
                      <li>Caldas (Morango e chocolate)</li>
                      <li>Amendoim</li>
                      <li>Paçoca</li>
                      <li>Granulado de chocolate</li>
                    </ul>
                    <h3>Bebidas</h3>
                    <ul class="price-list p2">
                      <li>Coca cola (normal e zero)</li>
                      <li>Guarana (normal e zero)</li>
                      <li>Fanta (Laranja e uva)</li>
                      <li>Sprite</li>
                      <li>Suco limitado</li>
                      <li>Ice Tea (Pêssego e limão)</li>
                      <li>Água mineral c/ e sem gás</li>
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
