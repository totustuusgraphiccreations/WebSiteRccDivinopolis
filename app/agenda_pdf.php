<?php
include_once("../class/ConnectionDB.class.php");
header("Content-Type: text/html; charset=UTF-8",true);
$Year = date("Y");
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<title>Agenda Diocesana | Renovação Carismática Católica - Diocese Divinópolis</title>
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
	
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/isotope.js"></script>
	<script type="text/javascript" src="../js/imagesloaded.js"></script>
	<script type="text/javascript" src="../js/modernizr.custom.24530.js"></script>
	<!--<script type='text/javascript' src='../js/jquery.themepunch.essential.min.js'></script>-->
	<script type="text/javascript">
   		function mySubmit(){
   		var subtext = document.getElementById("filtercalendar").submit() == "EXTRAS";	
		}
	</script>

</head>
<body class="home page">
<!--
<div class="container">
    <div class="row">
		<div class="spacer"></div>
        <div class="widget widget-brochure-box  push-down-30">
			<h4 class="sidebar__headings">Exportar</h4>
		</div>
        <div class="widget widget-brochure-box  push-down-30">		
				<div style="padding:8px">
					<script language="javascript" src="//doc2pdf.pdf24.org/js/doc2pdfBox.js"></script>
					<form id="mail_form" style="margin:0px; padding:0px;" method="POST" enctype="multipart/form-data" accept-charset="UTF-8" onsubmit="return new pdf24Doc2PDFForm(this).onSubmit();">						
						<input name="documentURL" type="text" value="https://www.rccdivinopolis.com.br/agenda_pdf.php" style=" display: none; width:98%;  margin-bottom:10px;"><br>
					<!--	<input class="brochure-box" style="border:none;" type="submit" name="submitBtn" value="Download .PDF"> --
						<a class="brochure-box" id="submitBtn" name="submitBtn"  href="#" onClick="document.getElementById('mail_form').submit();">
							<i class="fa  fa-file-pdf"></i>
							<h5 class="brochure-box__text">Download .PDF</h5>
						</a>
					</form>		
				</div>
		</div>
		
        <!--
		<div class="widget  widget-brochure-box  push-down-30 col-md-3">	
			<a class="brochure-box" href="#" target="_blank">
				<i class="fa  fa-file-word-o"></i>
				<h5 class="brochure-box__text">Download .DOC</h5>
			</a>
		</div>	
		<div class="widget  widget-brochure-box  push-down-30 col-md-3">	
			<a class="brochure-box" href="#" target="_blank">
				<i class="fa  fa-print"></i>
				<h5 class="brochure-box__text">IMPRIMIR</h5>
			</a>
		</div>
        --
       
    </div>
</div>
-->
		<div id="HTMLtoPDF()" class="boxed-container">
					<div class="main-title">
						<div class="container">
							<h1 class="main-title__primary">AGENDA DIOCESANA</h1>
							<h3 class="main-title__secondary"><strong>Calendário <?php echo $Year;?></strong> com os <strong>Feriados Nacionais</strong>, Datas Comemorativas e Eventos da Renovação Carismática Católica - Diocese Divinópolis.</h3>
						</div>
					</div>					
					<div class="master-container">
						<div class="container">
							<div class="row">		
								<div class="col-xs-12">
						<div class="spacer"></div>
                        <?php
						$MonthExtense = "Janeiro";
						$MonthQuery = "01";
                        ?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year;?></h4>	
						</div>
                        <?php
						$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
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
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor;?>;"></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background:<?php echo  $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d');?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor;?>;">
												<div class="content">
													<h3 class="title">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents'];?>
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
													{
													?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                    <?php
													}
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
                                                        <?php
													}else{
														?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents;?> - <?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                        <?php
													}
													?><ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span><?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span><?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
                                                        <?php
												}
												?></div>
											</div>
										</div>
									</figure>
                        <?php

								}
							}
						}
						?>
                        <div class="spacer"></div>
                        <?php
						$MonthExtense ="Fevereiro";
						$MonthQuery = "02";
                        ?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year;?></h4>	
						</div>
                        <?php
						$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
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
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor;?>;"></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background:<?php echo  $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d');?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor;?>;">
												<div class="content">
													<h3 class="title">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents'];?>
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
													{
													?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                    <?php
													}
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
                                                        <?php
													}else{
														?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents;?> - <?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                        <?php
													}
													?><ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span><?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span><?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
                                                        <?php
												}
												?></div>
											</div>
										</div>
									</figure>
                        <?php

								}
							}
						}
						?>
                        <div class="spacer"></div>
                        <?php
						$MonthExtense ="Março";
						$MonthQuery = "03";
                        ?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year;?></h4>	
						</div>
                        <?php
						$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
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
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor;?>;"></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background:<?php echo  $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d');?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor;?>;">
												<div class="content">
													<h3 class="title">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents'];?>
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
													{
													?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                    <?php
													}
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
                                                        <?php
													}else{
														?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents;?> - <?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                        <?php
													}
													?><ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span><?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span><?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
                                                        <?php
												}
												?></div>
											</div>
										</div>
									</figure>
                        <?php

								}
							}
						}
						?>
                        <div class="spacer"></div>
                        <?php
						$MonthExtense ="Abril";
						$MonthQuery = "04";
                        ?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year;?></h4>	
						</div>
                        <?php
						$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
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
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor;?>;"></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background:<?php echo  $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d');?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor;?>;">
												<div class="content">
													<h3 class="title">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents'];?>
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
													{
													?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                    <?php
													}
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
                                                        <?php
													}else{
														?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents;?> - <?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                        <?php
													}
													?><ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span><?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span><?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
                                                        <?php
												}
												?></div>
											</div>
										</div>
									</figure>
                        <?php

								}
							}
						}
						?>
                        <div class="spacer"></div>
                        <?php
						$MonthExtense ="Maio";
						$MonthQuery = "05";
                        ?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year;?></h4>	
						</div>
                        <?php
						$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
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
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor;?>;"></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background:<?php echo  $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d');?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor;?>;">
												<div class="content">
													<h3 class="title">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents'];?>
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
													{
													?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                    <?php
													}
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
                                                        <?php
													}else{
														?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents;?> - <?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                        <?php
													}
													?><ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span><?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span><?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
                                                        <?php
												}
												?></div>
											</div>
										</div>
									</figure>
                        <?php

								}
							}
						}
						?>
                        <div class="spacer"></div>
                        <?php
						$MonthExtense ="Junho";
						$MonthQuery = "06";
                        ?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year;?></h4>	
						</div>
                        <?php
						$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
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
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor;?>;"></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background:<?php echo  $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d');?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor;?>;">
												<div class="content">
													<h3 class="title">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents'];?>
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
													{
													?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                    <?php
													}
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
                                                        <?php
													}else{
														?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents;?> - <?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                        <?php
													}
													?><ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span><?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span><?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
                                                        <?php
												}
												?></div>
											</div>
										</div>
									</figure>
                        <?php

								}
							}
						}
						?>
                        <div class="spacer"></div>
                        <?php
						$MonthExtense ="Julho";
						$MonthQuery = "07";
                        ?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year;?></h4>	
						</div>
                        <?php
						$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
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
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor;?>;"></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background:<?php echo  $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d');?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor;?>;">
												<div class="content">
													<h3 class="title">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents'];?>
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
													{
													?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                    <?php
													}
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
                                                        <?php
													}else{
														?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents;?> - <?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                        <?php
													}
													?><ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span><?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span><?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
                                                        <?php
												}
												?></div>
											</div>
										</div>
									</figure>
                        <?php

								}
							}
						}
						?>
                        <div class="spacer"></div>
                        <?php
						$MonthExtense ="Agosto";
						$MonthQuery = "08";
                        ?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year;?></h4>	
						</div>
                        <?php
						$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
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
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor;?>;"></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background:<?php echo  $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d');?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor;?>;">
												<div class="content">
													<h3 class="title">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents'];?>
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
													{
													?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                    <?php
													}
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
                                                        <?php
													}else{
														?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents;?> - <?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                        <?php
													}
													?><ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span><?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span><?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
                                                        <?php
												}
												?></div>
											</div>
										</div>
									</figure>
                        <?php

								}
							}
						}
						?>
                        <div class="spacer"></div>
                        <?php
						$MonthExtense ="Setembro";
						$MonthQuery = "09";
                        ?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year;?></h4>	
						</div>
                        <?php
						$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
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
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor;?>;"></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background:<?php echo  $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d');?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor;?>;">
												<div class="content">
													<h3 class="title">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents'];?>
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
													{
													?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                    <?php
													}
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
                                                        <?php
													}else{
														?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents;?> - <?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                        <?php
													}
													?><ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span><?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span><?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
                                                        <?php
												}
												?></div>
											</div>
										</div>
									</figure>
                        <?php

								}
							}
						}
						?>
                        <div class="spacer"></div>
                        <?php
						$MonthExtense ="Outubro";
						$MonthQuery = "10";
                        ?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year;?></h4>	
						</div>
                        <?php
						$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
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
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor;?>;"></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background:<?php echo  $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d');?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor;?>;">
												<div class="content">
													<h3 class="title">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents'];?>
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
													{
													?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                    <?php
													}
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
                                                        <?php
													}else{
														?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents;?> - <?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                        <?php
													}
													?><ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span><?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span><?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
                                                        <?php
												}
												?></div>
											</div>
										</div>
									</figure>
                        <?php

								}
							}
						}
						?>
                        <div class="spacer"></div>
                        <?php
						$MonthExtense ="Novembro";
						$MonthQuery = "11";
                        ?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year;?></h4>	
						</div>
                        <?php
						$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
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
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor;?>;"></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background:<?php echo  $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d');?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor;?>;">
												<div class="content">
													<h3 class="title">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents'];?>
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
													{
													?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                    <?php
													}
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
                                                        <?php
													}else{
														?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents;?> - <?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                        <?php
													}
													?><ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span><?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span><?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
                                                        <?php
												}
												?></div>
											</div>
										</div>
									</figure>
                        <?php

								}
							}
						}
						?>
                        <div class="spacer"></div>
                        <?php
						$MonthExtense ="Dezembro";
						$MonthQuery = "12";	
                        ?>
						<div class="widget widget-brochure-box  push-down-30">
							<h4 class="sidebar__headings" Style="font-size:32px; text-transform: capitalize;"><?php echo $MonthExtense." - ".$Year;?></h4>	
						</div>
                        <?php
						$Conn = new ConnectionDB();
							$SqlQuery = "SELECT * FROM tbagendaevents WHERE Month(datetbagendaevents) = '$MonthQuery' AND Year(datetbagendaevents) = '$Year' ORDER BY Day(datetbagendaevents) ASC";
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
												<i class="fa fa-caret-left fa-3x" style="color:<?php echo $colortbtypecolor;?>;"></i>
													<div class="avatar" style="border-color:#FFFFFF;">
														<strong style="display:block;color:#ffffff;font-size:3em;padding:10px;background:<?php echo  $colortbtypecolor;?>;"><?php echo $daydatetbagendaevents->format('d');?></strong>
													</div>
											</div>
											<div class="message" style="border-left: 5px solid <?php echo $colortbtypecolor;?>;">
												<div class="content">
													<h3 class="title">
														<i class="icon-quote fa fa-quote-left"></i>
															<?php echo $row_tbagendaevents['titletbagendaevents'];?>
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
													{
													?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                    <?php
													}
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
                                                        <?php
													}else{
														?>
                                                        <div class="section-title line-style no-margin">
															<h3 class="title">
																<?php echo $descritiontbdayagendaevents;?> - <?php echo $nametbtypecolor;?>
															</h3>							
														</div>
                                                        <?php
													}
													?><ul class="profile">
														
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Iniciando no dia: </span> <?php echo $datestarttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li class="disabled">
															<i class="icon fa fa-calendar-alt"></i>
															<span>Terminando no dia: </span><?php echo $datelasttbdayagendaevents->format('d/m/Y');?>
														</li>
														<li>
															<i class="icon fa fa-clock"></i>
															<span>Horário: </span><?php echo $timestarttbdayagendaevents->format('H:i')." Às ".$timelasttbdayagendaevents->format('H:i');?>
														</li>
													</ul>
                                                        <?php
												}
												?></div>
											</div>
										</div>
									</figure>
                        <?php

								}
							}
						}
						?>
                        <div class="spacer"></div>
                    </div>
			</div>
		</div>
	</div>	
</div>

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