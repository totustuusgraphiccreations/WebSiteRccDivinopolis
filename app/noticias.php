<?php
include_once("../class/ConnectionDB.class.php");
header("Content-Type: text/html; charset=UTF-8",true);
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
//Selecionar todos os cursos da tabela
$Conn_noticia = new ConnectionDB();
$SqlQuery_noticia = "SELECT * FROM tbnoticia"; // limit $inicio, $quantidade_pg
$resultado_noticia = $Conn_noticia->connect()->query($SqlQuery_noticia);
//Contar o total de cursos
$total_noticia = $resultado_noticia->num_rows;
//Seta a quantidade de cursos por pagina
$quantidade_pg = 10;
//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total_noticia/$quantidade_pg);
//Calcular o inicio da visualizacao
$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<title>Notícias | Renovação Carismática Católica &amp; Diocese Divinópolis</title>
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
			<h1 class="main-title__primary">NOTÍCIAS</h1>
			<h3 class="main-title__secondary">Fique por dentro das novidades da Renovação Carismática Católica!</h3>
		</div>
	</div>
<div class="spacer"></div>
	<div class="container">
		<div class="row">

			<?php 
			//Selecionar os cursos a serem apresentado na página
							$Conn_tbnoticia = new ConnectionDB();
							$SqlQuery_tbnoticia = "SELECT * FROM tbnoticia ORDER BY datetbnoticia DESC limit $inicio, $quantidade_pg"; // limit $inicio, $quantidade_pg
							$result_tbnoticia = $Conn_tbnoticia->connect()->query($SqlQuery_tbnoticia);				
					
								while($row_tbnoticia = $result_tbnoticia->fetch_assoc()){
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
										<div class="main-title__secondary">
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
									</div>
								</div>
								</br>
								<h5><strong><a href="noticias-single.php?id_noticia=<?php echo $row_tbnoticia['idtbnoticia']; ?>">LEIA A NOTÍCIA</a></strong></h5>
								<div class="clearfix"></div>
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
											<li><a class="page-numbers" href="noticias.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous"><i class="fa fa-angle-double-left"></i></a></li>
										<?php }else{ ?>
											<span class="sr-only" aria-hidden="true">ANTERIOR</span>
									<?php }  
									//Apresentar a paginacao
									for($i = 1; $i < $num_pagina + 1; $i++){ ?>
										<li><a  class="page-numbers current" href="noticias.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
									<?php } 
										if($pagina_posterior <= $num_pagina){ ?>
											<li><a  class="page-numbers" href="noticias.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous"><i class="fa fa-angle-double-right"></i></a></li>
										<?php }else{ ?>
											<span class="sr-only"  aria-hidden="true">PRÓXIMO</i></span>
									<?php }  ?>
									
								</ul>
							</nav>	
						</div>
						<!-- Paginação -->		
				
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