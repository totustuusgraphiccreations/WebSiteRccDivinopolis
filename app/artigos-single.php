<?php
include_once("../class/ConnectionDB.class.php");
header("Content-Type: text/html; charset=UTF-8",true);
$id_artigo = $_GET['id_artigo'];
//Selecionar os cursos a serem apresentado na página
$Conn_tbartigo = new ConnectionDB();
$SqlQuery_tbartigo = "SELECT * FROM tbartigo WHERE idtbartigo = '$id_artigo'";
$result_tbartigo = $Conn_tbartigo->connect()->query($SqlQuery_tbartigo);
$rows_tbartigo = $result_tbartigo->fetch_assoc();
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
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<title>Artigo | Renovação Carismática Católica &amp; Diocese Divinópolis</title>
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
			<h1 class="main-title__primary"><?php echo $rows_tbartigo['titletbartigo'];?></h1>
			<h3 class="main-title__secondary">
				<i class="fa fa-calendar" style="margin-right:10px; margin-top:15px;"></i>
				<time datetime="2014-10-20T09:36:46+00:00" class="meta-data__date"><?php echo $datatbartigo->format('d')." de ".$mesartigo." de ".$datatbartigo->format('Y');?></time>	
			</h3>
		</div>
	</div>
<div class="spacer"></div>	
	
	<div class="master-container">
		<div class="container">
			<div class="row">
				<main class="col-xs-12  col-md-12" role="main">
					<article class="post tformat-standard hentry">
						<a href="<?php echo 'data:image/png;base64,' . base64_encode($rows_tbartigo['imagetbartigo'])  ; ?>">
							<?php echo '<img src="data:image/png;base64,' . base64_encode( $rows_tbartigo['imagetbartigo'] ) . '" alt='.$rows_tbartigo['titletbartigo'].' class="img-responsive wp-post-image" width="848" height="480" />' ?>
						</a>
						<div class="meta-data">
							<i class="fa fa-calendar" style="margin-right:10px; margin-top:15px;"></i>
							<time datetime="2014-10-20T09:36:46+00:00" class="meta-data__date"><?php echo $datatbartigo->format('d')." de ".$mesartigo." de ".$datatbartigo->format('Y');?></time>							
							<span class="meta-data__comments"><a href="#">0 Comentários</a></span>
						</div>
						
						<div class="hentry__content" style="text-align: justify;">
							<p>
								<?php echo $rows_tbartigo['descritiontbartigo'];?>
							</p>
						</div>
						<div class="meta-data">														
							<span class="meta-data__comments"><a href="<?php echo $rows_tbartigo['fontetbartigo'];?>" target="_blank"><?php echo "Fonte: ".$rows_tbartigo['fontetbartigo'];?></a></span>
						</div>
						
						</div>	
					</article>
				</main>
			
				</div>
			</div>
		</div><!-- /container -->
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