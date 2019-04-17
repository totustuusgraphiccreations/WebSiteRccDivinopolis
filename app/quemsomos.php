<?php
include_once("../class/ConnectionDB.class.php");
header("Content-Type: text/html; charset=UTF-8",true);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<title>Quem Somos | Renovação Carismática Católica &amp; Diocese Divinópolis</title>
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
	<link href="../css/testimonial.css" rel="stylesheet">
	<link href="../css/component.css" rel="stylesheet">
	<link href="../css/profile.css" rel="stylesheet">
	<link href="../css/agent-box.css" rel="stylesheet">
	
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/isotope.js"></script>
	<script type="text/javascript" src="../js/imagesloaded.js"></script>
	<script type="text/javascript" src="../js/modernizr.custom.24530.js"></script>
	<!--<script type='text/javascript' src='js/jquery.themepunch.essential.min.js'></script>-->
	<script type="text/javascript">
   		function mySubmit(){
   		var subtext = document.getElementById("filtercalendar").submit() == "EXTRAS";	
		}
	</script>
</head>
<body class="home page">

<div class="boxed-container">
	<div class="main-title" style="background-color: #f2f2f2; ">
		<div class="container">
			<h1 class="main-title__primary">QUEM SOMOS</h1>
			<h3 class="main-title__secondary"><strong>Nós somos a Renovação Carismática Católica</strong> Apostolica Romana - Diocese Divinópolis</h3>
		</div>
	</div>
	<?php
		$Conntbquemsomos = new ConnectionDB();
		$SqlQuerytbquemsomos = "SELECT * FROM tbquemsomos";
		$resultstbquemsomos = $Conntbquemsomos->connect()->query($SqlQuerytbquemsomos);
		$numRowstbquemsomos = $resultstbquemsomos->num_rows;
		if($numRowstbquemsomos > 0){
		while($row_tbquemsomos = $resultstbquemsomos->fetch_assoc()){
	?>
	<div class="master-container">
		<div class="container">
			<div class="row">
				<main class="col-xs-12" role="main">
					<div class="row">
						<div class="col-md-6">
							<p style="text-align: justify; width: 100%; word-wrap: break-word;">
								<?php echo $row_tbquemsomos['quemsomostbquemsomos'];?>
							</p>
						</div>
						<div class="col-md-6">
							
							<p>
								<iframe width="100%" height="300" src="<?php echo $row_tbquemsomos['videotbquemsomos'];?>" frameborder="0" allowfullscreen="true"></iframe>							
							</p>
							<!-- 
<iframe width="100%" height="300" src="https://www.youtube.com/watch?time_continue=4&v=CUf8HcrENRc" frameborder="0" allowfullscreen></iframe>
							<p>
								<a href="images/demo/projects/project1.jpg" data-rel="prettyPhoto" title="Project Image">
									<img src="images/demo/projects/project1.jpg" class="alignnone" alt="Project Image" />
								</a>
							</p>
							-->
						</div>
					</div>
					<div class="spacer"></div>
				  
					<!-- /.col-md-4 -->
							<div class="col-sm-6 col-md-4">
								<!-- . Agent Box -->
								<div class="agent-box-card rounded">
									<div class="image-content">
										<div class="image image-fill">
											<?php echo '<img src="data:image/png;base64,' . base64_encode( $row_tbquemsomos['iconevisaotbquemsomos'] ) . '" alt='.$row_tbquemsomos['titlevisaotbquemsomos'].' />' ?>											
										</div>						
									</div>
									<div class="info-agent">
										<span class="name"><?php echo $row_tbquemsomos['titlevisaotbquemsomos'];?></span>
										<div class="text">
											<i class="fa fa-quote-left"></i><?php echo $row_tbquemsomos['visaotbquemsomos'];?> <i class="fa fa-quote-right"></i>
										</div>										
									</div>
								</div>
							</div><!-- /.col-md-4 -->	
					<!-- /.col-md-4 -->
							<div class="col-sm-6 col-md-4">
								<!-- . Agent Box -->
								<div class="agent-box-card rounded">
									<div class="image-content">
										<div class="image image-fill">
											<?php echo '<img src="data:image/png;base64,' . base64_encode( $row_tbquemsomos['iconemissaotbquemsomos'] ) . '" alt='.$row_tbquemsomos['titlemissaotbquemsomos'].' />' ?>
										</div>						
									</div>
									<div class="info-agent">
										<span class="name"><?php echo $row_tbquemsomos['titlemissaotbquemsomos'];?></span>
										<div class="text">
											<i class="fa fa-quote-left"></i><?php echo $row_tbquemsomos['missaotbquemsomos'];?> <i class="fa fa-quote-right"></i>
										</div>										
									</div>
								</div>
							</div><!-- /.col-md-4 -->	
					<!-- /.col-md-4 -->
							<div class="col-sm-6 col-md-4">
								<!-- . Agent Box -->
								<div class="agent-box-card rounded">
									<div class="image-content">
										<div class="image image-fill">
											<?php echo '<img src="data:image/png;base64,' . base64_encode( $row_tbquemsomos['iconegrupodeoracaotbquemsomos'] ) . '" alt=' .$row_tbquemsomos['titlegrupodeoracaotbquemsomos'].' />' ?>
										</div>						
									</div>
									<div class="info-agent">
										<span class="name"><?php echo $row_tbquemsomos['titlegrupodeoracaotbquemsomos'];?></span>
										<div class="text">
											<i class="fa fa-quote-left"></i><?php echo $row_tbquemsomos['grupodeoracaotbquemsomos'];?><i class="fa fa-quote-right"></i>
										</div>										
									</div>
								</div>
							</div><!-- /.col-md-4 -->	
				
				</main>
			</div>
		</div><!-- /container -->
	</div>
	<?php
			}
		}
	?>
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