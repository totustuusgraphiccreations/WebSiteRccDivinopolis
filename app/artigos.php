<?php
include_once("../class/ConnectionDB.class.php");
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
	<link rel="icon" href="../images/demo/rcc/favicon.ico" type="image/x-icon" />
	<meta name="google-site-verification" content="CONFIGURAR" />
	<meta name="autor" content="IGM Solutions - Desenvolvimentos" />
	<meta name="reply-to" content="gontijo765@msn.com" />
	<meta http-equiv="content-language" content="pt-BR" />
	<link href="../images/demo/rcc/favicon.png" rel="icon" type="image/png" >
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400,700%3Alatin%7CMontserrat%3A700%3Alatin"/>
	<link rel="stylesheet" href="../css/style.css"/>
	<link rel="stylesheet" href="../css/prettyPhoto.css"/>
	<link rel="stylesheet" href="../css/toTop.css"/>
	<link rel="stylesheet" type="text/css"  href="../style-switcher/assets/css/main.css"/>
	
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../font-awesome/css/all.min.css" rel="stylesheet">
	
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/isotope.js"></script>
	<script type="text/javascript" src="../js/imagesloaded.js"></script>
	<script type="text/javascript" src="../js/modernizr.custom.24530.js"></script>
	<!--<script type='text/javascript' src='js/jquery.themepunch.essential.min.js'></script>-->
</head>
<body class="home page">

<div class="boxed-container">
	<div class="main-title" style="background-color: #f2f2f2; ">
		<div class="container">
			<h1 class="main-title__primary">ARTIGOS</h1>
			<h3 class="main-title__secondary">Fique por dentro, enriqueça seus conhecimentos com os artigos de nossa doutrina, da nossa igreja!</h3>
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
	
<script type="text/javascript" src="../js/almond.js"></script>
<script type="text/javascript" src="../js/underscore.js"></script>

<script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="../js/header_carousel.js"></script>
<script type="text/javascript" src="../js/sticky_navbar.js"></script>
<script type="text/javascript" src="../js/simplemap.js"></script>
<script type="text/javascript" src="../js/main.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/toTop.js"></script>

<script type="text/javascript" src="../js/require.js"></script>
<script type="text/javascript" src="../style-switcher/assets/js/switcher.js"></script>

</body>
</html>