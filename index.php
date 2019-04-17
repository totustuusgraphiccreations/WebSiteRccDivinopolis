<?php
include_once("class/ConnectionDB.class.php");
header("Content-Type: text/html; charset=pt_BR.UTF-8",true);

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<title>Home | Renovação Carismática Católica &amp; Diocese Divinópolis</title>
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
	<link rel="stylesheet" href="css/testimonial.css"/>
	<link rel="stylesheet" href="css/toTop.css"/>
	<link rel="stylesheet" href="css/loader.css"/>
	<link rel="stylesheet" type="text/css"  href="style-switcher/assets/css/main.css"/>
	
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="font-awesome/css/all.min.css" rel="stylesheet">
	
	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/isotope.js"></script>
	<script type="text/javascript" src="js/imagesloaded.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.24530.js"></script>
	<!--<script type='text/javascript' src='js/jquery.themepunch.essential.min.js'></script>-->
	
	
<!-- carousal -->
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(document).on('ready', function() {
	  $(".center").slick({
		dots: true,
		infinite: true,
		centerMode: true,
		slidesToShow: 2,
		slidesToScroll: 2,
		responsive: [
			{
			  breakpoint: 768,
			  settings: {
				arrows: true,
				centerMode: false,
				slidesToShow: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				arrows: true,
				centerMode: false,
				centerPadding: '40px',
				slidesToShow: 1
			  }
			}
		 ]
	  });
	});
</script>
<!-- //carousal -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript">
	//<![CDATA[
	$(window).on('load', function () {
		$('.wrap .loader').fadeOut();
		$('.wrap').delay(350).fadeOut('slow'); 
		$('body').delay(350).css({'overflow': 'visible'});
	})
	//]]>
</script>	
</head>
<body class="home page">
<!-- 
<div class="wrap">
  <div class="loader"></div>
  <div class="loaderbefore"></div>
  <div class="circular"></div>
  <div class="circular another"></div>
<div class="text">Loading</div>
</div>
 -->
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
							<li><a href="#">ENTRAR <i class="fa fa-sign-in-alt fa-1x" style="margin-left: 5px;"></i></a></li>
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
				<!--
				<div class="widget  widget-icon-box">	
					<div class="icon-box">
						
						<i class="fa fa-business-time fa-3x green-dark-color" style="margin-right:10px;"></i>
						<div class="icon-box__textr">							
							<h4 class="icon-box__title">Seg - Sex 10H - 19H</h4>
							<span class="icon-box__subtitle">Sáb 10H - 12H</span>
						</div>
						
					</div>
				</div>
				-->
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
	
	<div class="jumbotron  jumbotron--with-captions">
		<div class="carousel  slide  js-jumbotron-slider" id="headerCarousel" data-interval="5000">
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<?php 
					$Conntbbanneragendaevents = new ConnectionDB();
					$validation = 1;
					$SqlQuerytbbanneragendaevents = "SELECT * FROM tbbanneragendaevents WHERE statustbbanneragendaevents = '$validation' ORDER BY idtbbanneragendaevents ASC";
					$resultstbbanneragendaevents = $Conntbbanneragendaevents->connect()->query($SqlQuerytbbanneragendaevents);
					$numRowstbbanneragendaevents = $resultstbbanneragendaevents->num_rows;
					$ContEvent = 1;
					if($numRowstbbanneragendaevents > 0){						
						while($row_tbbanneragendaevents = $resultstbbanneragendaevents->fetch_assoc()){
							$idtbbanneragendaevents = $row_tbbanneragendaevents['idtbbanneragendaevents'];
							$idtbagendaevents = $row_tbbanneragendaevents['idtbagendaevents'];
							$Conntbagendaevents = new ConnectionDB();
							$SqlQuerytbagendaevents = "SELECT * FROM tbagendaevents WHERE idtbagendaevents = '$idtbagendaevents'";
							$resultstbagendaevents = $Conntbagendaevents->connect()->query($SqlQuerytbagendaevents);
								while($row_tbagendaevents = $resultstbagendaevents->fetch_assoc()){
									$descricaoevent = $row_tbagendaevents['titletbagendaevents'];
								}
							$Conntbdayagendaevents = new ConnectionDB();
							$SqlQuerytbdayagendaevents = "SELECT * FROM tbdayagendaevents WHERE idtbagendaevents = '$idtbagendaevents'";
							$resultstbdayagendaevents = $Conntbdayagendaevents->connect()->query($SqlQuerytbdayagendaevents);
								while($row_tbdayagendaevents = $resultstbdayagendaevents->fetch_assoc()){
									$datainicial = new DateTime($row_tbdayagendaevents['datestarttbdayagendaevents']);
									$datafinal= new DateTime($row_tbdayagendaevents['datelasttbdayagendaevents']);
								}
							$Conntbbuttonagendaevents = new ConnectionDB();
							$SqlQuerytbbuttonagendaevents = "SELECT * FROM tbbuttonagendaevents WHERE idtbbanneragendaevents = '$idtbbanneragendaevents'";
							$resultstbbuttonagendaevents = $Conntbbuttonagendaevents->connect()->query($SqlQuerytbbuttonagendaevents);                            
							$numRowstbbuttonagendaevents = $resultstbbuttonagendaevents->num_rows;
							$butttoninscricao = 0;
							if($numRowstbbuttonagendaevents > 0){
								while($row_tbbuttonagendaevents = $resultstbbuttonagendaevents->fetch_assoc()){									
									$namebutton = $row_tbbuttonagendaevents['nametbbuttonagendaevents'];
									$linkbutton= $row_tbbuttonagendaevents['linktbbuttonagendaevents'];
									$butttoninscricao = 1;
								}
							}
							else{
																
									$namebutton = "SAÍBA MAIS";
									$linkbutton= "#";
									$butttoninscricao = 0;
							}
							if($ContEvent == 1){
				?>
				<div class="item active">
					<?php echo '<img src="data:image/png;base64,' . base64_encode( $row_tbbanneragendaevents['bannertbbanneragendaevents'] ) . '" alt='.$descricaoevent.' />' ?>
					<div class="container">
						<div class="carousel-content">
							<div class="jumbotron__category">
								<h6><?php echo $descricaoevent;?></h6>
							</div>
							<div class="jumbotron__title">
								<?php 
										switch ($datafinal->format('m')){
												case 1: $datafinalmes = "Janeiro"; break;
												case 2: $datafinalmes = "Fevereiro"; break;
												case 3: $datafinalmes = "Março"; break;
												case 4: $datafinalmes = "Abril"; break;
												case 5: $datafinalmes = "Maio"; break;
												case 6: $datafinalmes = "Junho"; break;
												case 7: $datafinalmes = "Julho"; break;
												case 8: $datafinalmes = "Agosto"; break;
												case 9: $datafinalmes = "Setembro"; break;
												case 10: $datafinalmes = "Outubro"; break;
												case 11: $datafinalmes = "Novembro"; break;
												case 12: $datafinalmes = "Dezembro"; break;
										}
										if($datainicial->format('d') == $datafinal->format('d')){
											?>
											<h1><?php echo $datainicial->format('d')." de ".$datafinalmes;?></h1>
											<?php
										}else{
										?>
										<h1><?php echo $datainicial->format('d')." a ".$datafinal->format('d')." de ".$datafinalmes;?></h1>
										<?php
										}
							?>
							</div>
							<div class="jumbotron__content">
								<?php echo $row_tbbanneragendaevents['descricaotbbanneragendaevents']; ?>
								<a class="btn  btn-primary" href="<?php echo $linkbutton;?>" target="_blank"><?php echo $namebutton;?></a>
								<?php if($butttoninscricao == 1){?>
								<a class="btn  btn-primary" href="#" target="_blank">SAÍBA MAIS</a>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
				<?php
								$ContEvent += 1;
					}else{
				?>				
				<div class="item">
					<?php echo '<img src="data:image/png;base64,' . base64_encode( $row_tbbanneragendaevents['bannertbbanneragendaevents'] ) . '" alt='.$descricaoevent.' />' ?>
					<div class="container">
						<div class="carousel-content">
							<div class="jumbotron__category">
								<h6><?php echo $descricaoevent;?></h6>
							</div>
							<div class="jumbotron__title">
								<?php 
										switch ($datafinal->format('m')){
												case 1: $datafinalmes = "Janeiro"; break;
												case 2: $datafinalmes = "Fevereiro"; break;
												case 3: $datafinalmes = "Março"; break;
												case 4: $datafinalmes = "Abril"; break;
												case 5: $datafinalmes = "Maio"; break;
												case 6: $datafinalmes = "Junho"; break;
												case 7: $datafinalmes = "Julho"; break;
												case 8: $datafinalmes = "Agosto"; break;
												case 9: $datafinalmes = "Setembro"; break;
												case 10: $datafinalmes = "Outubro"; break;
												case 11: $datafinalmes = "Novembro"; break;
												case 12: $datafinalmes = "Dezembro"; break;
										}
										if($datainicial->format('d') == $datafinal->format('d')){
											?>
											<h1><?php echo $datainicial->format('d')." de ".$datafinalmes;?></h1>
											<?php
										}else{
										?>
										<h1><?php echo $datainicial->format('d')." a ".$datafinal->format('d')." de ".$datafinalmes;?></h1>
										<?php
										}
							?>
							</div>
							<div class="jumbotron__content">
								<?php echo $row_tbbanneragendaevents['descricaotbbanneragendaevents']; ?>
								<a class="btn  btn-primary" href="<?php echo $linkbutton;?>" target="_blank"><?php echo $namebutton;?></a>
								<?php if($butttoninscricao == 1){?>
								<a class="btn  btn-primary" href="#" target="_blank">SAÍBA MAIS</a>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
				<?php 
								$ContEvent += 1;
							}
						}
					}
				?>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#headerCarousel" role="button" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="right carousel-control" href="#headerCarousel" role="button" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
	</div>
	<div class="master-container">
		<div class="promo">
			<div class="container" >
				<div class="row">
					<div class="col-md-12">
						<div class="siteorigin-panels-stretch panel-row-style" style="background-color:#eeeeee">
							<div class="panel-grid-cell">
								<div class="panel widget widget_pt_banner panel-first-child panel-last-child">	
									<div class="banner__text">
										Ainda não faz parte de um GRUPO DE ORAÇÃO?	
									</div>
									<div class="banner__buttons">
										<a class="btn btn-primary" href="grupodeoracao.php" target="_self">O QUE É GRUPO DE ORAÇÃO</a>&nbsp;
										<a class="btn  btn-default" href="mapsgrupodeoracao.php" target="_self">ENCONTRE O GRUPO DE ORAÇÃO MAIS PRÓXIMO DE VOCÊ</a>	
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
		<div class="container" role="main">
			<div class="row">
				<div class="col-md-4">
					<div class="panel widget widget_pt_featured_page panel-first-child panel-last-child" id="panel-7-1-0-0">
						<div class="has-post-thumbnail page-box page-box--block">
							<a class="page-box__picture" href="quemsomos.php">
								<img width="360" height="240" src="images/demo/content/banner_content 01.jpg" alt="Content Image"/>
							</a>
							<div class="page-box__content">
								<h5 class="page-box__title  text-uppercase">
									<a>Conheça a Renovação Carismática Católica</a>
								</h5>
								
								A RCC é uma corrente de graça que flui dentro da Igreja Católica e tem como objetivo espalhar a cultura de Pentecostes sobre o mundo. E ela o faz atraves dos grupos de oração e de diversas missões e serviços que desempenhamos.	
								<p>
									<a href="quemsomos.php" class="read-more read-more--page-box">Saiba Mais</a>
								</p>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel widget widget_pt_featured_page panel-first-child panel-last-child" id="panel-7-1-1-0">
						<div class="has-post-thumbnail page-box page-box--block">
							<a class="page-box__picture" href="#">
								<img width="360" height="240" src="images/demo/content/banner_content 02.jpg" alt="Content Image"/>
							</a>
							<div class="page-box__content">
								<h5 class="page-box__title text-uppercase">
									<a>Grupos de Oração</a>
								</h5>
								O Grupo de Oração é a célula fundamental da Renovação Carismática Católica; é o lugar da expectativa e, ao mesmo tempo, da realização da promessa perene de Deus; é cenáculo de Pentecostes dos dias atuais.	
								<p>
									<a href="#" class="read-more read-more--page-box">Saiba Mais</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel widget widget_pt_featured_page panel-first-child" id="panel-7-1-2-0">
						<div class="has-post-thumbnail page-box page-box--inline">
							<a class="page-box__picture" href="#">
								<img src="images/demo/content/banner_content 03.png" style="width:100px; heigth:75px;" alt="Content Image"/>
							</a>
							<div class="page-box__content">
								<h5 class="page-box__title text-uppercase">
									<a>Serviço</a>
								</h5>
								Ao executar nossa missão de espalhar a cultura de pentecostes sobre o mundo a realizar através de diversos ministérios e serviços de evangelização. Click abaixo e conheça alguns deles... 	
								
								</br>
							<!-- <a class="btn  btn-primary" href="#" target="_blank">SAIBA MAIS</a> -->
							</div>
						</div>
						<div class="spacer"></div>
					</div>
					<div class="panel widget widget_pt_featured_page" id="panel-7-1-2-1">
						<div class="has-post-thumbnail page-box page-box--inline">
							<a class="page-box__picture" href="#">
								<img width="100" height="75" src="images/demo/content/banner_content 04.png" style="width:100px; heigth:75px;"  class="attachment-thumbnail wp-post-image" alt="Content Image"/>
							</a>
							<div class="page-box__content">
								<h5 class="page-box__title text-uppercase">
									<a>Ministérios</a>
								</h5>
								O termo “ministério” é amplamente usado na Renovação Carismática Católica para designar, de uma maneira geral, os diversos serviços do Grupo de Oração.	
								</br>
							
							<a class="btn  btn-primary" href="ministerios.php" target="_blank">SAIBA MAIS</a>
							</div>
						</div>
						<div class="spacer"></div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="spacer"></div>
		<!--
		<div class="portfolio-mini-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- GRID WRAPPER FOR CONTAINER SIZING - HERE YOU CAN SET THE CONTAINER SIZE AND CONTAINER SKIN --
						<div class="portfolio-container portfolio-active">
							<div id="options" class="text-left">
								<!-- THE FILTER BUTTONS --
								<ul id="filters" class="filter">
									<li class="active"><a href="#" data-filter="*">Todas as fotos</a></li>
									<li><a href="#" data-filter=".filter-buildings">Buildings</a></li>
									<li><a href="#" data-filter=".filter-interior-design">Interior Design</a></li>	
									<li><a href="#" data-filter=".filter-isolation">Isolation</a></li>
									<li><a href="#" data-filter=".filter-plumbing">Plumbing</a></li>									
									<li><a href="#" data-filter=".filter-tiling">Tiling</a></li>
								</ul>
							</div>
								
							<!-- THE GRID ITSELF WITH ENTRIES --
							<div id="portfolio-content" class="projects-container row">
								<div class="project-post filter-buildings col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS --
									<img src="images/demo/projects/3.jpg" alt="Project Image"  />
									<div class="project-content">
										<div class="inner-project">
											<h3>Contemporary Villa</h3>                                    
											<a href="images/demo/projects/big1.jpg" class="project-link" title="Contemporary Villa" data-rel="prettyPhoto[gallery]">
												Zoom Project
											</a>
										</div>	
									</div>
									
								</div>
								<div class="project-post filter-isolation col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS --
									<img src="images/demo/projects/1.jpg" alt="Project Image" />
									<div class="project-content">
										<div class="inner-project">
											<h3>Green House</h3>                                    
											<a href="projects-single.html" class="project-link">View Project</a>
										</div>	
									</div>
								</div>
								<div class="project-post filter-buildings filter-interior-design col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS --
									<img src="images/demo/projects/4.jpg" alt="Project Image"  />
									<div class="project-content">
										<div class="inner-project">
											<h3>Villa Rustica Renovation</h3>                                    
											<a href="images/demo/projects/big1.jpg" class="project-link" title="Villa Rustica Renovation" data-rel="prettyPhoto[gallery]">
												Zoom Project
											</a>
										</div>	
									</div>
								</div>
								<div class="project-post filter-isolation filter-plumbing col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS --
									<img src="images/demo/projects/6.jpg" alt="Project Image" />
									<div class="project-content">
										<div class="inner-project">
											<h3>Pool In Luxury Neighbourhood</h3>                                    
											<a href="projects-single.html" class="project-link">View Project</a>
										</div>	
									</div>
								</div>
								<div class="project-post filter-buildings filter-tiling col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS --
									<img src="images/demo/projects/2.jpg" alt="Project Image" />
									<div class="project-content">
										<div class="inner-project">
											<h3>House of Cards</h3>                                    
											<a href="images/demo/projects/big1.jpg" class="project-link" title="House of Cards" data-rel="prettyPhoto[gallery]">
												Zoom Project
											</a>
										</div>	
									</div>
								</div>
								<div class="project-post filter-isolation filter-plumbing col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS --
									<img src="images/demo/projects/8.jpg" alt="Project Image"  />
									<div class="project-content">
										<div class="inner-project">
											<h3>Green School</h3>                                    
											<a href="projects-single.html" class="project-link">View Project</a>
										</div>	
									</div>
								</div>
								<div class="project-post filter-buildings col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<img src="images/demo/projects/5.jpg" alt="Project Image"  />
									<div class="project-content">
										<div class="inner-project">
											<h3>House Under The Palms</h3>                                    
											<a href="images/demo/projects/big1.jpg" class="project-link" title="House Under The Palms" data-rel="prettyPhoto[gallery]">
												Zoom Project
											</a>
										</div>	
									</div>
								</div>
								<div class="project-post filter-isolation col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<img src="images/demo/projects/7.jpg" alt="Project Image" />
									<div class="project-content">
										<div class="inner-project">
											<h3>Kitchen And Living Room</h3>                                    
											<a href="projects-single.html" class="project-link">View Project</a>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
-->		
	<div class="spacer"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="panel widget widget_text panel-first-child" id="panel-7-3-0-0">	
						<div class="textwidget"></div>
					</div>
					<div class="panel panel-grid widget widget_black-studio-tinymce panel-last-child" id="panel-7-3-0-1">
						<h3 class="widget-title">Artigos</h3>
						<?php 
							$Conntbartigo = new ConnectionDB();
							$SqlQuerytbartigo= "SELECT * FROM tbartigo ORDER BY datetbartigo DESC LIMIT 3"; 
							$resultstbartigo = $Conntbartigo->connect()->query($SqlQuerytbartigo);
							$numRowstbartigo = $resultstbartigo->num_rows;
							if($numRowstbartigo > 0){						
								while($row_tbartigo = $resultstbartigo->fetch_assoc()){
									$datatbartigo = new DateTime($row_tbartigo['datetbartigo']);
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
									<div class="textwidget">
										<p>
											<i class="fa fa-calendar" style="margin-right:10px; margin-top:15px;"></i>
											<strong style="text-transform: uppercase;"><?php echo $datatbartigo->format('d')." de ".$mesartigo." de ".$datatbartigo->format('Y');?></strong>
											<h5 style="text-transform: uppercase;">
												<span style="color: #fcc71f"><br/><span class="icon-container"><span class="fa fa-check"></span></span></span> 
												<?php echo $row_tbartigo['titletbartigo'];?>
											</h5>
										</p>
										<p style="text-align: justify;">
											<?php 
											    $len=strlen($row_tbartigo['descritiontbartigo']);
                                                if ($len>200) {
                                                	$titulo_nome=substr($row_tbartigo['descritiontbartigo'],0,201).'...';
                                                }
                                                echo  $titulo_nome;
											?>
										</p>
										<a class="btn  btn-primary" href="artigos-single.php?id_artigo=<?php echo $row_tbartigo['idtbartigo']; ?>" >LEIA O ARTIGO</a>
									</div>
									<?php
								}
							}
						?>	
					
					<div class="banner__buttons">
						<a class="btn  btn-default" href="artigos.php" target="_self">TODO OS ARTIGOS</a>	
					</div>
				</div>
				</div>
				<div class="col-md-6">
					<div class="panel widget widget_text panel-first-child" id="panel-7-3-1-0">	
						<div class="textwidget"></div>
					</div>
					<div class="panel panel-grid widget widget_black-studio-tinymce panel-last-child" id="panel-7-3-1-1">
						<h3 class="widget-title">Notícias</h3>						
						<?php 
							$Conntbnoticia = new ConnectionDB();
							$SqlQuerytbnoticia= "SELECT * FROM tbnoticia ORDER BY datetbnoticia DESC LIMIT 2"; 
							$resultstbnoticia = $Conntbnoticia->connect()->query($SqlQuerytbnoticia);
							$numRowstbnoticia = $resultstbnoticia->num_rows;
							if($numRowstbnoticia > 0){						
								while($row_tbnoticia = $resultstbnoticia->fetch_assoc()){
									$datatbnoticia = new DateTime($row_tbnoticia['datetbnoticia']);
									switch($datatbnoticia->format('m')){
										case "01": $mestbnoticia = "Janeiro"; break;
										case "02": $mestbnoticia = "Fevereiro"; break;
										case "03": $mestbnoticia = "Março"; break;
										case "04": $mestbnoticia = "Abril"; break;
										case "05": $mestbnoticia = "Maio"; break;
										case "06": $mestbnoticia = "Junho"; break;
										case "07": $mestbnoticia = "Julho"; break;
										case "08": $mestbnoticia = "Agosto"; break;
										case "09": $mestbnoticia = "Setembro"; break;
										case "10": $mestbnoticia = "Outubro"; break;
										case "11": $mestbnoticia = "Novembro"; break;
										case "12": $mestbnoticia = "Dezembro"; break;
									}
									?>
									<div class="textwidget">
										<p>
											<i class="fa fa-calendar" style="margin-right:10px;"></i><strong style="text-transform: uppercase;"><?php echo $datatbnoticia->format('d')." de ".$mestbnoticia." de ".$datatbnoticia->format('Y');?></strong>
										</p>
										<p>
											<a href="<?php echo 'data:image/png;base64,' . base64_encode($row_tbnoticia['imagetbnoticia'])  ; ?>" data-rel="prettyPhoto">			
												<?php echo '<img src="data:image/png;base64,' . base64_encode( $row_tbnoticia['imagetbnoticia'] ) . '" alt='.$row_tbnoticia['titletbnoticia'].' class="alignleft wp-image-115 size-medium" width="250" height="250" />' ?>
											</a>
										</p>
										<p>
											<strong style="text-transform: uppercase;"><?php echo $row_tbnoticia['titletbnoticia'];?></strong>
										</p>
										<p style="text-align: justify;">
											<?php 
												$idtbnoticias = $row_tbnoticia['idtbnoticia'];
											    $Conn_tbparagraphnotice = new ConnectionDB();
												$SqlQuery_tbparagraphnotice = "SELECT * FROM tbparagraphnotice WHERE idtbnoticia = '$idtbnoticias'";
												$result_tbparagraphnotice = $Conn_tbparagraphnotice->connect()->query($SqlQuery_tbparagraphnotice);
												$rows_tbparagraphnotice = $result_tbparagraphnotice->fetch_assoc();
											    $len=strlen($rows_tbparagraphnotice['paragraphtbparagraphnotice']);
                                                if ($len>300) {
                                                	$titulo_nome=substr($rows_tbparagraphnotice['paragraphtbparagraphnotice'],0,301).'...';
                                                }
												else{
													$titulo_nome = $rows_tbparagraphnotice['paragraphtbparagraphnotice'];
												}
                                                echo  $titulo_nome;
											?>
										</p>
										</br>
										<h5><strong><a href="noticias-single.php?id_noticia=<?php echo $row_tbnoticia['idtbnoticia']; ?>">LEIA A NOTÍCIA</a></strong></h5>

									</div>
									<?php
								}
							}
						?>	
						
					
				</div>
			</div>
				<div class="banner__buttons">
					<a class="btn  btn-default" href="noticias.php" target="_self">TODAS AS NOTÍCIAS</a>	
				</div>
			
			</div>
		</div>
	</div>
	<div class="spacer"></div>
	<div class="testimonials">
		<div class="container">
			<div class="widget widget-brochure-box  push-down-30">
				<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;">Testemunhos</h4>	
			</div>
			<div class="phpkida_testimonials_grids">
				<section class="center slider">
				<?php 
					$Conntbtestimonials = new ConnectionDB();
					$SqlQuerytbtestimonials = "SELECT * FROM tbtestimonials ORDER BY idtbtestimonials DESC LIMIT 10"; 
					$resultstbtestimonials = $Conntbtestimonials->connect()->query($SqlQuerytbtestimonials);
					$numRowstbtestimonials = $resultstbtestimonials->num_rows;
						if($numRowstbtestimonials > 0){			
							$numtestemunials = 0;
							while($row_tbtestimonials = $resultstbtestimonials->fetch_assoc()){
								$idtbcontact = $row_tbtestimonials['idtbcontact'];
								$Conntbcontact = new ConnectionDB();
								$SqlQuerytbcontact = "SELECT * FROM tbcontact WHERE idtbcontact = '$idtbcontact' "; 
								$resultstbcontact = $Conntbcontact->connect()->query($SqlQuerytbcontact);
									while($row_tbcontact = $resultstbcontact->fetch_assoc()){
										$nometbcontact = $row_tbcontact['nametbcontact'];
									}
				?>
				<div class="agileits_testimonial_grid">
					<div class="pk_testimonial_grid">
						<p><?php echo $row_tbtestimonials['descritiontbtestimonials'];?></p>
						<h4><?php echo $nometbcontact;?></h4>
						<!-- <h5>Developer</h5>
						<div class="pk_testimonial_grid_pos">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						</div> -->
					</div>
				</div>											
				<?php 
					}
				}										
				?>
				</div>
			</section>
		</div>
	</div>
</div>
	<div class="spacer"></div>
		<div class="panel-grid" id="pg-7-5">
			<div class="promobg">
				<div class="container">
					<div class="panel widget row">	
						<div class="col-md-12">
							<div class="motivational-text">
								Nosso Objetivo é levar você amado de Deus a um reencontro genuino com Deus, renovando e vivendo uma constante e verdadeira EFUSÃO DO ESPÍRITO SANTO.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
		<div class="panel-grid">
			<div class="panel-grid-cell">
				<div class="panel container">
					<h3 class="widget-title">Parceiros</h3>	
					<div class="textwidget">
						<div class="logo-panel">
							<div class="row">
								<div class="col-xs-12 col-sm-2"><img src="images/demo/clients/totustuus.jpg" alt="Client" width="208" height="98"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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