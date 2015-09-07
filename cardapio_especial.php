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
              <div class="v4-tease"><a href="contact.php">Solicite um orçamento</a></div>
      	       <article class="col-1">
                  <div class="indent-left">
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Crepes Simples</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/page2-img1.jpg" alt=""></figure>
                            </div>
                            <a class="button-1" href="cardapio_simples.php">+ Detalhes</a>
                        </div>
                        <div class="img-indent-bot">
                            <h3 class="prev-indent-bot">Crepes Especiais</h3>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/crepeEspecial.jpg" width="300px" alt=""></figure>
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
                      <li>Pasta de azeitona preta</li>
                      <li>Pasta de alho ou atum</li>
                    </ul>
                    <h3>Acompanhamentos</h3>
                    <ul class="price-list p2">
                      <li><b>Salada verde 1</b><br> Alface, agrião, rúcula, tomate seco, kani, batata palha e blanquet de peru</li>
                      <li><b>Salada verde 2</b><br> Cenoura, Azeitona, maionese, passas e batata palha</li>
                      <li><b>Molhos para saladas</b></li>
                    </ul>
                    <h3>Molhos</h3>
                    <ul class="price-list p2">
                      <li>Molho bechamel (branco)</li>
                      <li>Molho sugo (vermelho)</li>
                    </ul>
                    <h3>Recheios salgados</h3>
                    <ul class="price-list p2">
                      <li><b>Napolitano:</b> Queijo, tomate, presunto e orégano </li>
                      <li><b>Pizza:</b> Queijo, presunto, tomate, cebola, orégano e manjericão</li>
                      <li><b>Margherita:</b> Queijo, parmesão, tomate, cebola e manjericão</li>
                      <li><b>4 Queijos:</b> Mussarela, catupiry, parmesão e ricota</li>
                      <li><b>Portuguesa:</b> Queijo, presunto, calabresa, azeitona, tomate, cebola e orégano</li>
                      <li><b>Tradicional:</b> Queijo e presunto</li>
                      <li><b>Frango c/ catupiry</b></li>
                      <li><b>Mineira:</b> Queijo, carne seca, catupiry e orégano</li>
                      <li><b>Brasileira:</b> Calabresa, cebola, tomate, orégano manjericão e queijo</li>
                      <li><b>Frances:</b> Frango, catupiry e champion</li>
                      <li><b>5 Queijos:</b> Mussarela, catupiry, provolone, cheddar e queijo minas</li>
                      <li><b>Vegetariano:</b> Ricota, tomate, cebola, alho e orégano</li>
                      <li><b>Camarão ao molho</b></li>
                    </ul>
                    <h3>Recheios doces</h3>
                    <ul class="price-list p2">
                      <li><b>Banana c/ Chocolate</b></li>
                      <li><b>Romeu e Julieta</b></li>
                      <li><b>Sensação:</b> Chocolate, morango e coco</li>
                      <li><b>Doce de leite c/ banana</b></li>
                      <li><b>Mineiro:</b> Doce de leite c/ queijo</li>
                      <li><b>Banana, áçucar e canela</b></li>
                      <li><b>Doce de leite com coco</b></li>
                      <li><b>Chocolate c/ manga</b></li>
                      <li><b>Realeza:</b> Beijinho de coco c/ morango</li>
                      <li><b>Paixão</b>Nutela c/ morango</li>
                    </ul>
                    <h3>Acompanhamentos de crepes doces</h3>
                    <ul class="price-list p2">
                      <li>Sorvetes</li>
                      <li>Caldas (Morango e chocolate)</li>
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
                      <li>Ice Tea</li>
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
