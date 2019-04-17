<?php
include_once("class/ConnectionDB.class.php");
header("Content-Type: text/html; charset=UTF-8",true);
$Year = date("Y");
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<title>Agenda Diocesana | Renovação Carismática Católica &amp; Diocese Divinópolis</title>
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
	<link href="css/testimonial.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	<link href="css/profile.css" rel="stylesheet">
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/isotope.js"></script>
	<script type="text/javascript" src="js/imagesloaded.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.24530.js"></script>
	<!--<script type='text/javascript' src='js/jquery.themepunch.essential.min.js'></script>-->
	<script type="text/javascript">
   		function mySubmit(){
   		var subtext = document.getElementById("filtercalendar").submit() == "EXTRAS";	
		}
	</script>
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
			<h1 class="main-title__primary">AGENDA DIOCESANA</h1>
			<h3 class="main-title__secondary"><strong><?php echo "Calendário ".$Year;?></strong> com os <strong>Feriados Nacionais</strong>, Datas Comemorativas e Eventos da Renovação Carismática Católica - Diocese Divinópolis.</h3>
		</div>
	</div>
	<div class="breadcrumbs ">
		<div class="container">
			<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Renvação Carismática Católica - Diocese Divinópolis" href="index.php" class="home">Renvação Carismática Católica - Diocese Divinópolis</a></span>
			<span typeof="v:Breadcrumb" class="home"><span property="v:title"><a>Eventos</a></span></span>	
			<span typeof="v:Breadcrumb"><span property="v:title">Agenda Diocesana</span></span>	
		</div>
	</div>
	<form name="filtercalendar" method="post">
	<?php 				
		$Month = date("m");
				switch($Month){
					case "01":
						$MonthExtense = "Janeiro";
						break;
						
					case "02":
						$MonthExtense = "Fevereiro";
						break;
						
					case "03":
						$MonthExtense = "março";
						break;
						
					case "04":
						$MonthExtense = "Abril";
						break;
						
					case "05":
						$MonthExtense = "Maio";
						break;
						
					case "06":
						$MonthExtense = "Junho";
						break;
						
					case "07":
						$MonthExtense = "Julho";
						break;
						
					case "08":
						$MonthExtense = "Agosto";
						break;
					case "09":
						$MonthExtense = "Setembro";
						break;
					case "10":
						$MonthExtense = "Outubro";
						break;
					case "11":
						$MonthExtense = "Novembro";
						break;
					case "12":
						$MonthExtense = "Dezembro";
						break;
						
				}
				
	?>
	<div class="master-container">
		<div class="container">
			<div class="row">
				<?php 
				if (isset($_POST['submitmes'])) {						
						
					// If $_POST['list'] is not empty
						if (!empty($_POST['submitmes'])) {
							$MontSubmit = $_POST['submitmes'];
						}
				}
							?>
				<div class="col-md-3">
					<!--<div class="col-xs-12  col-md-3  col-md-pull-9"> -->
						<div class="sidebar">
							<div class="widget widget_nav_menu  push-down-30">
								<div class="menu-services-menu-container">								
									<button type="submit" name="submitmes" value="Janeiro" class="btns btns-6 btns-6d">JANEIRO</button>
									<button type="submit" name="submitmes" value="Fevereiro" class="btns btns-6 btns-6d">FEVEREIRO</button>
									<button type="submit" name="submitmes" value="Março" class="btns btns-6 btns-6d">MARÇO</button>
									<button type="submit" name="submitmes" value="Abril" class="btns btns-6 btns-6d">ABRIL</button>
									<button type="submit" name="submitmes" value="Maio" class="btns btns-6 btns-6d">MAIO</button>
									<button type="submit" name="submitmes" value="Junho" class="btns btns-6 btns-6d">JUNHO</button>
									<button type="submit" name="submitmes" value="Julho" class="btns btns-6 btns-6d">JULHO</button>
									<button type="submit" name="submitmes" value="Agosto" class="btns btns-6 btns-6d">AGOSTO</button>
									<button type="submit" name="submitmes" value="Setembro" class="btns btns-6 btns-6d">SETEMBRO</button>
									<button type="submit" name="submitmes" value="Outubro" class="btns btns-6 btns-6d">OUTUBRO</button>
									<button type="submit" name="submitmes" value="Novembro" class="btns btns-6 btns-6d">NOVEMBRO</button>
									<button type="submit" name="submitmes" value="Dezembro" class="btns btns-6 btns-6d">DEZEMBRO</button>

								</div>
							</div>
							<div class="widget widget-brochure-box  push-down-30">
								<h4 class="sidebar__headings">Exportar</h4>
                                
								<a class="brochure-box" href="https://www.sejda.com/html-to-pdf?save-link=https://www.rccdivinopolis.com.br/agenda_pdf.php" target="_blank">
                                <!-- <a class="brochure-box" href="agenda_pdf.php" target="_blank"> -->
                                    <i class="fa fa-cloud-download-alt"></i>
									<h5 class="brochure-box__text">Download</h5>
								</a>
							</div>
                            <!-- 
							<div class="widget  widget-brochure-box  push-down-30">	
								<a class="brochure-box" href="#" target="_blank">
									<i class="fa  fa-file-word-o"></i>
									<h5 class="brochure-box__text">Download .DOC</h5>
								</a>
							</div>
                            	-->		
						</div>
					<!-- </div>	-->					
				</div>
				<div class="col-md-8">
					<?php 
				if (isset($_POST['submitmes'])) {	
							$MonthQuery = "";
							switch($_POST['submitmes']){
								case "Janeiro":
									$MonthQuery = "01";
									break;

								case "Fevereiro":
									$MonthQuery = "02";
									break;

								case "Março":
									$MonthQuery = "03";
									break;

								case "Abril":
									$MonthQuery = "04";
									break;

								case "Maio":
									$MonthQuery = "05";
									break;

								case "Junho":
									$MonthQuery = "06";
									break;

								case "Julho":
									$MonthQuery = "07";
									break;

								case "Agosto":
									$MonthQuery = "08";
									break;
								case "Setembro":
									$MonthQuery = "09";
									break;
								case "Outubro":
									$MonthQuery = "10";
									break;
								case "Novembro":
									$MonthQuery = "11";
									break;
								case "Dezembro":
									$MonthQuery = "12";
									break;

							}					
						
					// If $_POST['list'] is not empty
						if (!empty($_POST['submitmes'])) {
							
					?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MontSubmit." - ".$Year?></h4>	
						</div>
					<?php	
							$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
							$resultstbagendaevents = $Conn->connect()->query($SqlQuery);
							$numRows = $resultstbagendaevents->num_rows;
							if($numRows > 0){
								while($row_tbagendaevents = $resultstbagendaevents->fetch_assoc()){
									
									if($row_tbagendaevents['idtbtypeevent'] == "1" or $row_tbagendaevents['idtbtypeevent'] == "2" ){
									$idtbagendaevents = $row_tbagendaevents['idtbagendaevents'];
									$daydatetbagendaevents = new DateTime($row_tbagendaevents['datetbagendaevents']);	
									$idtbtypecolor = $row_tbagendaevents['idtbtypecolor'];
									$Conntbtypecolor = new ConnectionDB();
									$SqlQuerytbtypecolor = "SELECT * FROM tbtypecolor WHERE idtbtypecolor = '$idtbtypecolor'";
									$resultstbtypecolor = $Conntbtypecolor->connect()->query($SqlQuerytbtypecolor);
									while($row_tbtypecolor = $resultstbtypecolor->fetch_assoc()){
										$colortbtypecolor = $row_tbtypecolor['colortbtypecolor'];
										$nametbtypecolor = $row_tbtypecolor['nametbtypecolor'];
									}
									?>
									<figure class="crsl-item">
										<div class="feeddback-user">
											<div class="info-user">
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor; ?>; "></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background: <?php echo $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d') ;?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor; ?>;">
												<div class="content">
													<h3 class="title" style="font-size:150%;">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents']; ?>
														<i class="icon-quote fa fa-quote-right"></i>
													</h3>
													<span class="rating">
													</span>
													
													<?php
													$Conntbtypecolor = new ConnectionDB();
													$SqlQuerytbdayagendaevents = "SELECT * FROM tbdayagendaevents WHERE idtbagendaevents = '$idtbagendaevents'";
													$resultstbdayagendaevents = $Conntbtypecolor->connect()->query($SqlQuerytbdayagendaevents);
													$numRowstbdayagendaevents = $resultstbdayagendaevents->num_rows;
													if($numRowstbdayagendaevents == 0)
													{?>
														<div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
													<?php }
													while($row_tbdayagendaevents = $resultstbdayagendaevents->fetch_assoc()){
														$datestarttbdayagendaevents = new DateTime($row_tbdayagendaevents['datestarttbdayagendaevents']);
														$datelasttbdayagendaevents = new DateTime($row_tbdayagendaevents['datelasttbdayagendaevents']);
														$timestarttbdayagendaevents = new DateTime($row_tbdayagendaevents['timestarttbdayagendaevents']);
														$timelasttbdayagendaevents = new DateTime($row_tbdayagendaevents['timelasttbdayagendaevents']);
														$descritiontbdayagendaevents = $row_tbdayagendaevents['descritiontbdayagendaevents'];
														
														if(empty($descritiontbdayagendaevents)){
															
														?>
														<div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
													<?php }else{ ?>
														<div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents." - ".$nametbtypecolor;?>
															</h3>							
														</div>
													<?php } ?>
													<ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span> <?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span> <?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
													<?php } ?>
												</div>
											</div>
										</div>
									</figure>
							<?php } 
							}
						}
					}
				}
					else{
					?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year?></h4>	
						</div>
					<?php	
							$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$Month' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
							$resultstbagendaevents = $Conn->connect()->query($SqlQuery);
							$numRows = $resultstbagendaevents->num_rows;
							if($numRows > 0){
								while($row_tbagendaevents = $resultstbagendaevents->fetch_assoc()){
									if(($row_tbagendaevents['idtbtypeevent'] == "1") OR ($row_tbagendaevents['idtbtypeevent'] == "2") ){
									$idtbagendaevents = $row_tbagendaevents['idtbagendaevents'];
									$daydatetbagendaevents = new DateTime($row_tbagendaevents['datetbagendaevents']);	
									$idtbtypecolor = $row_tbagendaevents['idtbtypecolor'];
									$Conntbtypecolor = new ConnectionDB();
									$SqlQuerytbtypecolor = "SELECT * FROM tbtypecolor WHERE idtbtypecolor = '$idtbtypecolor'";
									$resultstbtypecolor = $Conntbtypecolor->connect()->query($SqlQuerytbtypecolor);
									while($row_tbtypecolor = $resultstbtypecolor->fetch_assoc()){
										$colortbtypecolor = $row_tbtypecolor['colortbtypecolor'];
										$nametbtypecolor = $row_tbtypecolor['nametbtypecolor'];
									}
									?>
									<figure class="crsl-item">
										<div class="feeddback-user">
											<div class="info-user">
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor; ?>; "></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background: <?php echo $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d') ;?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor; ?>;">
												<div class="content">
													<h3 class="title" style="font-size:150%;">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents']; ?>
														<i class="icon-quote fa fa-quote-right"></i>
													</h3>
													<span class="rating">
													</span>
													
													<?php
													$Conntbtypecolor = new ConnectionDB();
													$SqlQuerytbdayagendaevents = "SELECT * FROM tbdayagendaevents WHERE idtbagendaevents = '$idtbagendaevents'";
													$resultstbdayagendaevents = $Conntbtypecolor->connect()->query($SqlQuerytbdayagendaevents);
													$numRowstbdayagendaevents = $resultstbdayagendaevents->num_rows;
													if($numRowstbdayagendaevents == 0)
													{?>
														<div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
													<?php }
													while($row_tbdayagendaevents = $resultstbdayagendaevents->fetch_assoc()){
														$datestarttbdayagendaevents = new DateTime($row_tbdayagendaevents['datestarttbdayagendaevents']);
														$datelasttbdayagendaevents = new DateTime($row_tbdayagendaevents['datelasttbdayagendaevents']);
														$timestarttbdayagendaevents = new DateTime($row_tbdayagendaevents['timestarttbdayagendaevents']);
														$timelasttbdayagendaevents = new DateTime($row_tbdayagendaevents['timelasttbdayagendaevents']);
														$descritiontbdayagendaevents = $row_tbdayagendaevents['descritiontbdayagendaevents'];
														
														if(empty($descritiontbdayagendaevents)){
															
														?>
														<div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
													<?php }else{ ?>
														<div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents." - ".$nametbtypecolor;?>
															</h3>							
														</div>
													<?php } ?>
													<ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span> <?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span> <?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
													<?php } ?>
												</div>
											</div>
										</div>
									</figure>
							<?php } 
								}
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>
	</form>		
	
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