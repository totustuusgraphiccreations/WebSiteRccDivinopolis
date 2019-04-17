<?php
include_once("class/ConnectionDB.class.php");
header("Content-Type: text/html; charset=UTF-8",true);
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
//Selecionar todos os cursos da tabela
$Conn_artigo = new ConnectionDB();
$SqlQuery_artigo = "SELECT * FROM tbartigo"; // limit $inicio, $quantidade_pg
$resultado_artigo = $Conn_artigo->connect()->query($SqlQuery_artigo);
//Contar o total de cursos
$total_artigo = $resultado_artigo->num_rows;
//Seta a quantidade de cursos por pagina
$quantidade_pg = 10;
//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total_artigo/$quantidade_pg);
//Calcular o inicio da visualizacao
$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<title>Artigos | Renovação Carismática Católica &amp; Diocese Divinópolis</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="IGM Solutions">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Oração, Louvor, Adoração, RCC Brasil, RCC Minas Gerais, RCC Diocese de Divinópolis, Grupo de Oração, intercessão, pregação, música e artes, jovens, cura e libertação, formação, Renovação Carismática Católica Diocese de Divinópolis MG, RCCDiocesedivinopolis, terço, atendimento, padre,  caridade, rosário, missão, comunicação" />
	<meta name="description" content="Encontre oração, missão, louvor, adoração e mais na Renovação Carismática Católica - Diocese de Divinópolis!" />
	<meta name="robots" content="index,follow" />
	<link rel="canonical" href="#" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="referrer" content="always" />
	<meta property="og:image:type" content="image/png">
	<link rel="icon" href="images/demo/rcc/favicon.ico" type="image/x-icon" />
	<meta name="google-site-verification" content="CONFIGURAR" />
	<meta name="autor" content="IGM Solutions - Desenvolvimentos" />
	<meta name="reply-to" content="gontijo765@msn.com" />
	<meta http-equiv="content-language" content="pt-BR" />
	<link href="images/demo/rcc/favicon.png" rel="icon" type="image/png" >
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400,700%3Alatin%7CMontserrat%3A700%3Alatin"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/prettyPhoto.css"/>
	<link rel="stylesheet" href="css/toTop.css"/>
	<link rel="stylesheet" type="text/css"  href="style-switcher/assets/css/main.css"/>
	
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="font-awesome/css/all.min.css" rel="stylesheet">
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/isotope.js"></script>
	<script type="text/javascript" src="js/imagesloaded.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.24530.js"></script>
	<!--<script type='text/javascript' src='js/jquery.themepunch.essential.min.js'></script>-->
</head>
<body class="home page">

<div class="boxed-container">
	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<div class="top__left white-color">Bem vindos à Renovação Carísmatica Católica - Diocese Divinópolis/MG	</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="top__right">
						<ul id="menu-top-menu" class="navigation--top">
							<li><a href="extras.html">ENTRAR <i class="fa fa-sign-in-alt fa-1x" style="margin-left: 5px;"></i></a></li>
								<!--
								<li class="menu-item-has-children"></li>
									<ul class="sub-menu">
										<li><a href="shortcodes.html">Shortcodes</a></li>
										<li><a href="tables.html">Tables</a></li>
										<li><a href="brochure-box.html">Brochure Box</a></li>
									</ul>
								</li>
								-->							
						</ul>				
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php">
					<img src="images/demo/rcc/logo.png" alt="BuildPress" class="img-responsive"/>
				</a>
			</div>
			<div class="header-widgets  header-widgets-desktop">
				
				<div class="widget  widget-social-icons">	
					<a class="social-icons__link" href="https://www.facebook.com/rccdiocesedivinopolis/" target="_blank"><i class="fab  fa-facebook"></i></a>
					<a class="social-icons__link" href="https://www.instagram.com/rccdivinopolis/" target="_blank"><i class="fab  fa-instagram"></i></a>
					<a class="social-icons__link" href="https://www.youtube.com/channel/UCEJh8ij7O2YwM0T3BOw4w4w" target="_blank"><i class="fab  fa-youtube"></i></a>
					<a class="social-icons__link" href="https://play.google.com/store/apps/details?id=br.com.app.gpu1870401.gpue59eea61e3ff8d334659d7a74df1964e" target="_blank"><i class="fab fa-google-play"></i></a>
				</div>	
			</div>
			<!-- Toggle Button for Mobile Navigation -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#buildpress-navbar-collapse">
				<span class="navbar-toggle__text">MENU</span>
				<span class="navbar-toggle__icon-bar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</span>
			</button>
		</div>
		<div class="sticky-offset js-sticky-offset"></div>
		<div class="container">
			<div class="navigation">
				<div class="collapse  navbar-collapse" id="buildpress-navbar-collapse">
					<ul id="menu-main-menu" class="navigation--main">
						<li class="current-menu-item"><a href="index.php">HOME</a></li>	
						<li class="current-menu-item"><a href="artigos.php">ARTIGOS</a></li>	
						<li class="current-menu-item"><a href="noticias.php">NOTÍCIAS</a></li>						
						<li class="menu-item-has-children">
							<a href="#">EVENTOS</a>
							<ul class="sub-menu">
								<li><a href="agenda.php">Agenda Diocesana</a></li>
								<li><a href="eventos.php">Eventos Diocesanos</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#">INSTITUCIONAL</a>
							<ul class="sub-menu">
								<li><a href="quemsomos.php">Quem Somos</a></li>
								<li><a href="conselhodiocesano.php">Conselho Diocesano</a></li>
								<li><a href="grupodeoracao.php">Grupos de Oração</a></li>	
								<li><a href="escritorio.php">Escritório Diocesano</a></li>	
								<li><a href="ministerios.php">Ministérios</a></li>		
							</ul>
						</li><li class="menu-item-has-children">
							<a href="#">PROJETOS</a>
							<ul class="sub-menu">
								<li><a href="#">Em Desenvolvimento</a></li>					
							</ul>
						</li>
						<li><a href="amigosrcc.php">AMIGOS DA RCC</a></li>
						<li><a href="contato.php">CONTATO</a></li>
					</ul>	
				</div>
			</div>
		</div>
	</header>
	
	<div class="main-title" style="background-color: #f2f2f2; ">
		<div class="container">
			<h1 class="main-title__primary">ARTIGOS</h1>
			<h3 class="main-title__secondary">Fique por dentro, enriqueça seus conhecimentos com os artigos de nossa doutrina, da nossa igreja!</h3>
		</div>
	</div>
	<div class="breadcrumbs breadcrumbs--page-builder">
		<div class="container">
			<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Renvação Carismática Católica - Diocese Divinópolis" href="index.php" class="home">Renvação Carismática Católica - Diocese Divinópolis</a></span>
			<span typeof="v:Breadcrumb"><span property="v:title">Artigos</span></span>	
		</div>
	</div>
<div class="spacer"></div>
	<div class="container">
		<div class="row">
			<!--
			<div class="col-xs-12">
				<article class="post sticky hentry post-inner">
				 	<a href="blog-single.html">
						<img width="848" height="480" src="images/demo/blog/6.jpg" class="img-responsive wp-post-image" alt="Content Image"/>	
					</a>
					<div class="meta-data">
						<time datetime="2014-10-13T13:59:35+00:00" class="meta-data__date">October 13, 2014</time>
						<span class="meta-data__author">By Primož Cigler</span>
						<span class="meta-data__categories"><a href="blog-single.html">Construction</a> &bull; <a href="blog-single.html">General Information</a></span>	
						<span class="meta-data__comments"><a href="blog-single.html">4 Comments</a></span>
					</div>
					<h2 class="hentry__title">
						<a href="blog-single.html">10 Tips for buying new dream house &#8211; sticky</a>
					</h2>
					<div class="hentry__content">
						<p>If you are looking to shift to a new house or want to renovate your existing one, the first thing you 
									will need to think about is the painting. While it may be tempting to hire a professional to do it if you 
									have never painted before, it will cost you a lot of money. Painting your own house allows you to experiment 
									with something new and will help you save thousands of dollars.</p>
						<p>
						<a href="blog-single.html#comments" class="more-link"><span class="read-more read-more--post">Read more</span></a></p>
					</div>
					<div class="clearfix"></div>
				</article>
			</div><!-- /blogpost -->
			<?php 						

							//Selecionar os cursos a serem apresentado na página
							$Conn_tbartigo = new ConnectionDB();
							$SqlQuery_tbartigo = "SELECT * FROM tbartigo ORDER BY datetbartigo DESC limit $inicio, $quantidade_pg"; // limit $inicio, $quantidade_pg
							$result_tbartigo = $Conn_tbartigo->connect()->query($SqlQuery_tbartigo);
							
							while($rows_tbartigo = $result_tbartigo->fetch_assoc()){
									$datatbartigo = new DateTime($rows_tbartigo['datetbartigo']);
									switch($datatbartigo->format('m')){
										case "01": $mesartigo = "Janeiro"; break;
										case "02": $mesartigo = "Fevereiro"; break;
										case "03": $mesartigo = "Março"; break;
										case "04": $mesartigo = "Abril"; break;
										case "05": $mesartigo = "Maio"; break;
										case "06": $mesartigo = "Junho"; break;
										case "07": $mesartigo = "Julho"; break;
										case "08": $mesartigo = "Agosto"; break;
										case "09": $mesartigo = "Setembro"; break;
										case "10": $mesartigo = "Outubro"; break;
										case "11": $mesartigo = "Novembro"; break;
										case "12": $mesartigo = "Dezembro"; break;
									}
									?>
						<!-- /blogpost -->
						<div class="col-xs-12">
							<article class="post hentry post-inner">
								<!-- /blogpost 
								<a href="blog-single.html">
									<img width="848" height="480" src="images/demo/blog/1.jpg" class="img-responsive wp-post-image" alt="Content Image"/>	
								</a>-->
								<div class="meta-data">
									<i class="fa fa-calendar" style="margin-right:10px; margin-top:15px;"></i>
									<time datetime="2014-10-20T09:36:46+00:00" class="meta-data__date"><?php echo $datatbartigo->format('d')." de ".$mesartigo." de ".$datatbartigo->format('Y');?></time>									
								</div>
								<h2 class="hentry__title">
									<a><?php echo $rows_tbartigo['titletbartigo'];?></a>
								</h2>
								<div class="hentry__content">
									<p>
										<?php 
											    $len=strlen($rows_tbartigo['descritiontbartigo']);
                                                if ($len>300) {
                                                	$titulo_nome=substr($rows_tbartigo['descritiontbartigo'],0,301).'...';
                                                }
                                                echo  $titulo_nome;
										?>
									</p>
									<a class="btn  btn-primary" href="artigos-single.php?id_artigo=<?php echo $rows_tbartigo['idtbartigo']; ?>">LEIA O ARTIGO</a>
								</div>
								<div class="clearfix"></div>
							</article>
						</div>
			<!-- /blogpost -->
									
									<?php								
							}					
							//Verificar a pagina anterior e posterior
							$pagina_anterior = $pagina - 1;
							$pagina_posterior = $pagina + 1;
						?>
						<!-- Paginação -->
						<div class="col-xs-12">
							<nav class="pagination  text-center">
								<ul class="page-numbers">
									
									<?php
										if($pagina_anterior != 0){ ?>
											<li><a class="page-numbers" href="artigos.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous"><i class="fa fa-angle-double-left"></i></a></li>
										<?php }else{ ?>
											<span class="sr-only" aria-hidden="true">ANTERIOR</span>
									<?php }  
									//Apresentar a paginacao
									for($i = 1; $i < $num_pagina + 1; $i++){ ?>
										<li><a  class="page-numbers current" href="artigos.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
									<?php } 
										if($pagina_posterior <= $num_pagina){ ?>
											<li><a  class="page-numbers" href="artigos.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous"><i class="fa fa-angle-double-right"></i></a></li>
										<?php }else{ ?>
											<span class="sr-only"  aria-hidden="true">PRÓXIMO</i></span>
									<?php }  ?>
									
								</ul>
							</nav>	
						</div>
						<!-- Paginação -->		
				</div>
		</div>
	</div>
<div class="spacer"></div>
	<footer>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<div class="widget  widget_text  push-down-30">
							<h6 class="footer__headings">SOBRE NÓS</h6>	
							<div class="textwidget">
								<img src="images/rccdiocesedivinopolis.png" alt="RCC DIOCESE DIVINÓPOLIS" class="col-xs-12"/>
								<br>
								<p style="text-align: justify;">
"Nós somos a Renovação Carismática Católica". Nós acreditamos que a ação do Espírito de Deus não se restringiu apenas a uma época, pois Ele renova sua Igreja diariamente. Somos um Movimento que tem testemunhado, para a glória de Deus, vidas sendo transformadas, famílias sendo restauradas. Pois, acreditamos firmemente que a única cultura capaz de fecundar a civilização do amor é a Cultura de Pentecostes.
								</p>
								<br>
								<strong><a href="quemsomos.php" class="read-more" target="_blank">CONSULTE MAIS INFORMAÇÕES</a></strong>
							</div>
						</div>
					</div>
					<div class="col-xs-12  col-md-4">
						<div class="widget  widget_nav_menu  push-down-30">
							<h6 class="footer__headings">ESCRITÓRIO DIOCESANO</h6>
							<div class="menu-top-menu-container">
								<div class="widget  widget-icon-box ">	
									<div class="icon-box">
										<div class="icon-box__text">
											<h5 class="icon-box__contact">
												<i class="fa  fa-phone" style="margin-right:5px;"></i>+55 37 9 9903-2090</h5>
											<span class="icon-box__contact"><i class="fa  fa-envelope" style="margin-right:5px;"></i>escritorio@rccdivinopolis.com.br</span>
										</div>
									</div>
								</div>
								<div class="widget  widget-icon-box">	
									<div class="icon-box">
										<div class="icon-box__text">
											<h5 class="icon-box__contact"><i class="fa  fa-home" style="margin-right:5px;"></i>Rua Doutor Herminio Gonçalves</h5>
											<span class="icon-box__contact">138 Bairro Lourdes - Itaúna - MG CEP 35680-192</span>
										</div>
									</div>
								</div>
								<!--
								<ul id="menu-top-menu-1" class="menu">
									<li><a href="extras.html">Extras</a>
										<ul class="sub-menu">
											<li><a href="shortcodes.html">Shortcodes</a></li>
											<li><a href="tables.html">Tables</a></li>
											<li><a href="brochure-box.html">Brochure Box</a></li>
										</ul>
									</li>
									<li><a href="alternative-page.html">Alternative Pages</a>
										<ul class="sub-menu">
											<li><a href="shop-front.html">Home for Shop</a></li>
											<li><a href="contact-multiple-locations.html">Multiple Contacts</a></li>
											<li><a href="team-contact-combined.html">Team &#038; Contact</a></li>
										</ul>
									</li>
									<li>
										<a target="_blank" href="http://www.weblusive-themes.com/buildpress/documentation">Online Documentation</a>
									</li>
								</ul>
								-->
							</div>
						</div>
						<div class="widget  widget_nav_menu  push-down-30">
							<h6 class="footer__headings">CASA DE ORAÇÃO SÃO RAFAEL</h6>
							<div class="menu-top-menu-container">
								<div class="widget  widget-icon-box ">	
									<div class="icon-box">
										<div class="icon-box__text">
											<h5 class="icon-box__contact">
												<i class="fa  fa-phone" style="margin-right:5px;"></i>+55 37 9 9903-2090</h5>
											<span class="icon-box__contact"><i class="fa  fa-envelope" style="margin-right:5px;"></i>escritorio@rccdivinopolis.com.br</span>
										</div>
									</div>
								</div>
								<div class="widget  widget-icon-box">	
									<div class="icon-box">
										<div class="icon-box__text">
											<h5 class="icon-box__contact"><i class="fa  fa-home" style="margin-right:5px;"></i>Rua Frei Lourenço</h5>
											<span class="icon-box__contact">394, Bairro São Francisco, Para de Minas-MG CEP 35661-170</span>
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div>
					<div class="col-xs-12  col-md-4">
						<div class="widget  widget_text  push-down-30">
							<h6 class="footer__headings">AMIGO DA RCC</h6>	
							<div class="textwidget">
								O Projeto Amigo da RCC foi criado para você, amigo da Renovação Carismática Católica da Diocese de Divinópolis, que sente o desejo de ajudar a salvar almas na nossa Diocese. 
								<br><br>
								<a class="btn  btn-primary" href="amigosrcc.php" target="_blank">SEJA UM AMIGO DA RCC</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12  col-md-4">
						<div class="widget  widget_text  push-down-30">
							<h6 class="footer__headings">APLICATIVO RCC DIOCESE DIVINÓPOLIS</h6>	
							<a href="https://play.google.com/store/apps/details?id=br.com.app.gpu1870401.gpue59eea61e3ff8d334659d7a74df1964e" target="_blank"><img class="alignleft wp-image-115 size-medium col-xs-12" src="images/demo/app/icon-google-play.png" alt="Content Image"/></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom__left">
					Desenvolvido por <a href="#" target="_blank">IGM Solutions</a>	
				</div>
				<div class="footer-bottom__right">
					&copy; 1967 - 2019 <strong>Renovação Carismárica Católica - Diocese Divinópolis</strong>. Todos os direitos reservados.	
				</div>
			</div>
		</div>
	</footer>
</div><!-- end of .boxed-container -->

<!-- 
<div class="ptss-frame  js-ptss-frame">
	<div class="ptss__toggle-btn js-ptss-toggle-btn"><i class="fa fa-cogs"></i></div>
	<div class="ptss__header">SWITCHER DE ESTILO</div>
	<div class="ptss__settings">
		<div class="ptss__single-setting" id="ptss__layout">
			<p class="ptss__setting-title">Estilo de Layout</p>
			<div class="ptss__setting-control">
				<div class="ptss__layout-wrapper is-selected">
					<div class="ptss__layout-box ptss__layout-box--wide"></div>
					Wide
				</div>
				<div class="ptss__layout-wrapper">
					<div class="ptss__layout-box ptss__layout-box--boxed"></div>
					Boxed
				</div>
			</div>
		</div>	
	</div>
</div>
 -->
<a href="#" id="toTop" class="color-white">
	<i class="fa fa-angle-up fsize-14" aria-hidden="true"></i>
</a>
	
<script type='text/javascript' src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCU2MA7gmTgezes48y9emx1Z91SiVkh0"></script>
	
<script type="text/javascript" src="js/almond.js"></script>
<script type="text/javascript" src="js/underscore.js"></script>

<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/header_carousel.js"></script>
<script type="text/javascript" src="js/sticky_navbar.js"></script>
<script type="text/javascript" src="js/simplemap.js"></script>
<script type="text/javascript" src="js/main.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/toTop.js"></script>

<script type="text/javascript" src="js/require.js"></script>
<script type="text/javascript" src="style-switcher/assets/js/switcher.js"></script>

</body>
</html>