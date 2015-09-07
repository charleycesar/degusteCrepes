<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contato</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
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
<body id="page6">
	<!--==============================header=================================-->
    <header>
        <?php $menuActive = 'contato'; ?>
    	<?php include('menu.php'); ?>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Obrigado.<span> Retornaremos o mais breve possivel</span></h2>
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
                    	<h3 class="p1">Endereço</h3>
                        <dl>
                            <dt class="p1">Rio de Janeiro</dt>
                        </dl>
                        <h3 class="p1">Telefones</h3>
                        <dl>
                            <dd><span>Fixo:</span>  (21) 3681-8324</dd>
                            <dd><span>Claro:</span>  (21) 98324-4001</dd>
                            <dd><span>Email:</span><a class="color-2" href="#">degustecrepes@hotmail.com</a></dd>
                        </dl>
                    </div>
                </article>
                <article class="col-2">
                	<h3 class="p1">Fale Conosco</h3>
                    <?php
                    if($_GET['retorno'] == 'enviado'){
                        echo 'Obrigado por entrar em contato conosco retornaremos o mais breve possivel.';
                    }
                    if($_GET['retorno'] == 'falha'){
                        echo 'Houve um erro ao enviar o e-mail.';
                    }
                    ?>
                    <form id="contact-form" action="enviar.php" method="post" enctype="multipart/form-data">                    
                        <fieldset>
                              <label><span class="text-form">Nome:</span><input name="nome" type="text" /></label>
                              <label><span class="text-form">Email:</span><input name="email" type="text" /></label>                              
                              <label><span class="text-form">Qtd pessoas:</span><input name="qtd" type="text" /></label>                              
                              <label><span class="text-form">Serviço:</span><input name="servico" type="text" /></label>                              
                              <div class="wrapper">
                                <div class="text-form">Mensagem:</div>
                                <div class="extra-wrap">
                                    <textarea name="message"></textarea>
                                    <div class="clear"></div>
                                    <div class="buttons">
                                        <a class="button-2" href="#" onClick="document.getElementById('contact-form').submit()">Send</a>
                                    </div> 
                                </div>
                              </div>                            
                        </fieldset>						
                    </form>
                </article>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <?php include('footer.php'); ?>
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
