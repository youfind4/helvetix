<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="Wir planen und realisieren innovative, zuverlässige IT-Lösungen, die Ihre Geschäftsprozesse
optimal unterstützen und zudem flexibel und kostensparend sind.">
  <meta name="keywords" content="ZAHLUNGSVERKEHR SCHWEIZ (ISO20022 &amp; SWIFT),DATA INTEGRITY,DATENMIGRATION,NEARSHORE &amp; OFFSHORE OUTSOURCING, TREASURY &amp; CASH MANAGEMENT, BUSINESS CONSULTING,PROJEKT MANAGEMENT,REQUIREMENT ENGINEERING, TESTING EXCELLENCE, SCHULUNGEN">
<title>HELVETIX Consulting</title>
<link rel="shortcut icon" href="img/favicon.ico" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="css/ResponsiveStyle.css"/>
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/CustomJs.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126465673-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126465673-1');
</script>
<script>
  $(document).ready(function() {
    $("#boxscroll").niceScroll({cursorborder:"#f5f5f5",cursorcolor:"#FFFFFF",boxzoom:true}); // First scrollable DIV

//Email Area
// Variable to hold request
var request;

// Bind to the submit event of our form
$("#form").submit(function(event){

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "http://signagehost.com/emailer.php",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        alert("Thank you for your message. We will contact you soon.");
        $inputs.prop("value", "");
    	$inputs.prop("disabled", false);
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){


        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

});
//End Email Area



    });




</script>
</head>
<body id="up">
	<div class="body_dark"></div>
	<div class="res_menu">
		<div class="relative">
			<div class="header">
				<div class="close"><img src="img/close.png" alt="close"/></div><!--close-->
				<!--<div class="res_menu_logo"><img src="img/res_menu_logo.jpg"/></div>--><!--res_menu_logo-->
			</div><!--header-->
			<!--<div class="close"><img src="img/menu-close.png" alt="close"/></div>--><!--close-->
			<div class="res_menu_cnt" id="">
				<ul class="level_1_ul" id="boxscroll">
					<li class="level_1_li"><a class="pagescroll" href="#about">Über uns</a></li>
					<li class="level_1_li"><a class="pagescroll" href="#expertise">Expertise</a></li>
					<li class="level_1_li"><a class="pagescroll" href="#referenzen">Referenzen</a></li>
					<li class="level_1_li ser"><a class="pagescroll mobsub" href="#services">Services</a>
						<ul class="level_2_ul">
							<li class="level_2_li"><a class="pagescroll" id="bm_1" href="#services">Business Consulting</a></li>
							<li class="level_2_li"><a class="pagescroll" id="bm_2" href="#services">Projekt Management</a></li>
							<li class="level_2_li"><a class="pagescroll" id="bm_3" href="#services">Requirement Engineering</a></li>
							<li class="level_2_li"><a class="pagescroll" id="bm_4" href="#services">SOFTWAREENTWICKLUNG</a></li>
							<li class="level_2_li"><a class="pagescroll" id="bm_5" href="#services">Testing Excellence</a></li>
							<li class="level_2_li"><a class="pagescroll" id="bm_6" href="#services">Schulungen</a></li>
						</ul>
					</li>
					<li class="level_1_li"><a class="pagescroll" href="#careers">Karriere</a></li>
					<li class="level_1_li"><a class="pagescroll" href="#contact">Kontakt</a></li>
				</ul>
			</div><!--res_menu_cnt-->
			<div class="footer">
				<!--<h3>Kontakt</h3>-->
				<ul>
					<li><a href="https://www.linkedin.com/company/helvetix-consulting/" target="_blank" ><img src="img/menu_ln.png" alt="Linkedin"/></a></li>
						<li><a href="https://www.xing.com/companies/helvetixconsultinggmbh?sc_o=da980_e" target="_blank"><img src="img/menu_xing.png" alt="Xing"/></a></li>
						<li><a href="https://twitter.com/HelvetixC" target="_blank"><img src="img/menu_twitter.png" alt="Twitter"/></a></li>
						<li><a href="https://www.facebook.com/helvetixconsulting/" target="_blank"><img src="img/menu_facebook.png" alt="Facebook"/></a></li>
				</ul>
			</div><!--footer-->
		</div><!--relative-->
	</div><!--res_menu-->
	<div class="home_screens">
		<div class="top_bar">
			<div class="wrapper">
				<div class="left_logo"><a href="#">
				<img src="img/Helvetix_Logo.svg" alt="helvetix logo"></a></div><!--left_logo-->
				<div class="lan"><a href="#">GR</a>|<a href="#" style="opacity:0.4">EN</a></div>
				<div class="b_menu_btn"><div class="b_icon"></div></div><!--b_menu_btn-->
			</div><!--wrapper-->
		</div><!--top_bar-->
		<div class="home_slider">
		<div class="owl-carousel owl-theme main-slider">
				<div class="item">
	            	<div class="slider_cnt">
	            		<div class="absolute">
	            			<div class="wrapper">
	            				<h1 class="blkTxt">Erfolg mit Schweizer Werten</h1>
	            				<p class="banner_para blkTxt">Innovation has nothing to do with how many R&D
dollars you have. […] It’s not about money. It’s about the people you have, how you’re led, and how much you get it.”
</p>
<p class="banner_para blkTxt">Steve Jobs, Apple Gründer<br/>(* 24. Februar 1955; † 5. Oktober 2011)</p>
	            				<!--<a href="#">Mehr</a>-->
	            			</div><!--wrapper-->
	            		</div><!--absolute-->
	            		<img src="img/banner_1.jpg" alt="image slider"/>
	            	</div><!--slider_cnt-->
	            </div><!--item-->

	            <div class="item">
	            	<div class="slider_cnt">
	            		<div class="absolute">
	            			<div class="wrapper">
	            				<h1 class="blkTxt">Expertise</h1>
	            				<ul class="banner_ul">
	            					<li class="banner_li single_line">Banking</li>
	            					<li class="banner_li">Nearshore & Offshore<br/>Outsourcing</li>
	            					<li class="banner_li single_line">Data Integrity</li>
	            				</ul>
	            				<a style="margin-top: 20px;" class="pagescroll" href="#expertise"><img src="img/Mehr_button.svg" alt="image slider"/></a>
	            			</div><!--wrapper-->
	            		</div><!--absolute-->
	            		<img src="img/home_7.jpg" alt="image slider"/>
	            	</div><!--slider_cnt-->
	            </div><!--item-->



	            <div class="item">
	            	<div class="slider_cnt">
	            		<div class="absolute">
	            			<div class="wrapper">
	            				<h1 class="blkTxt">Business Consulting</h1>
	            				<p class="banner_para blkTxt">Welche Bedürfnisse haben meine Kundinnen und 
Kunden? Diese Frage steht im Zentrum jedes unternehmerischen Handelns. Als Business Consultant stellen wir die Analyse der Geschäftstätigkeit in den Mittelpunkt.</p>
	            				<a href="#services" class="pagescroll" id="b_1"><img src="img/Mehr_button.svg" alt="image slider"/></a>
	            			</div><!--wrapper-->
	            		</div><!--absolute-->
	            		<img src="img/home_1.jpg" alt="image slider"/>
	            	</div><!--slider_cnt-->
	            </div><!--item-->
	            <div class="item">
	            	<div class="slider_cnt">
	            		<div class="absolute">
	            			<div class="wrapper">
	            				<h1 class="whiteTxt ">Projekt Management</h1>
	            				<p class="banner_para whiteTxt ">Wir unterstützen Sie optimal bei der erfolgreichen
Realisierung Ihrer Projekte. Unsere erfahrenen Projekt Manager übernehmen die professionelle Beratung, Planung, Leitung, Kontrolle und Dokumentation Ihres Projekts.</p>
	            				<a href="#services" class="pagescroll" id="b_2"><img src="img/Mehr_button.svg" alt="image slider"/></a>
	            			</div><!--wrapper-->
	            		</div><!--absolute-->
	            		<img src="img/home_2.jpg" alt="image slider"/>
	            	</div><!--slider_cnt-->
	            </div><!--item-->
	            <div class="item">
	            	<div class="slider_cnt">
	            		<div class="absolute">
	            			<div class="wrapper">
	            				<h1 class="whiteTxt">Requirement Engineering</h1>
	            				<p class="banner_para whiteTxt">Im Requirements Engineering unterstützen wir Sie bei
den grundlegenden Vorgehensansätze der klassischen und agilen Welt und stellen die das Dokumentieren, Verwalten und Prüfen von Anforderungen sicher.</p>
	            				<a href="#services" class="pagescroll" id="b_3"><img src="img/Mehr_button.svg" alt="image slider"/></a>
	            			</div><!--wrapper-->
	            		</div><!--absolute-->
	            		<img src="img/home_5.jpg" alt="image slider"/>
	            	</div><!--slider_cnt-->
	            </div><!--item-->
	            <div class="item">
	            	<div class="slider_cnt">
	            		<div class="absolute">
	            			<div class="wrapper">
	            				<h1 class="whiteTxt">Softwareentwicklung</h1>
	            				<p class="banner_para whiteTxt">Wir beraten Sie, wir konzipieren und programmieren für Sie, und wir begleiten Sie sowohl bei der Einführung als auch beim weiteren Einsatz der Software.</p>
	            				<a href="#services" class="pagescroll" id="b_4"><img src="img/Mehr_button.svg" alt="image slider"/></a>
	            			</div><!--wrapper-->
	            		</div><!--absolute-->
	            		<img src="img/home_3.jpg" alt="image slider"/>
	            	</div><!--slider_cnt-->
	            </div><!--item-->
	            <div class="item">
	            	<div class="slider_cnt">
	            		<div class="absolute">
	            			<div class="wrapper">
	            				<h1 class="blkTxt">Testing Excellence</h1>
	            				<p class="banner_para blkTxt">Im Rahmen des jeweiligen Projekts erstellen wir Testkonzepte, Testfälle und koordinieren das Testing.</p>
	            				<a href="#services" class="pagescroll" id="b_5"><img src="img/Mehr_button.svg" alt="image slider"/></a>
	            			</div><!--wrapper-->
	            		</div><!--absolute-->
	            		<img src="img/home_4.jpg" alt="image slider"/>
	            	</div><!--slider_cnt-->
	            </div><!--item-->
	            <div class="item">
	            	<div class="slider_cnt">
	            		<div class="absolute">
	            			<div class="wrapper">
	            				<h1 class="whiteTxt">Schulungen</h1>
	            				<p class="banner_para whiteTxt">Im Rahmen des jeweiligen Projekts erstellen wir
Schulungsunterlagen und führen Schulungen auch selber durch. Wir bieten im Projekt-Umfeld sowohl Trainings für Ihr Projektteam im Rahmen der Projektvorbereitung sowie Anwenderschulungen an.</p>
	            				<a href="#services" class="pagescroll" id="b_6"><img src="img/Mehr_button.svg" alt="image slider"/></a>
	            			</div><!--wrapper-->
	            		</div><!--absolute-->
	            		<img src="img/home_6.jpg" alt="image slider"/>
	            	</div><!--slider_cnt-->
	            </div><!--item-->

	            


          </div><!--owl-carousel-->
          <div class="banner_logo"><img src="img/banner_logo.png" alt="image slider"/></div><!--banner_logo-->
		</div><!--home_slider-->
		
	</div><!--home_screens-->
	<header>
		<div class="logo"><a href="#">
		<img src="img/Helvetix_Logo.svg" alt="">
</a></div><!--logo-->
		<nav>
			<ul>
				<li><a href="#about" class="pagescroll about_menu">Über uns</a></li>
				<li><a class="active pagescroll expertise_menu" href="#expertise">Expertise</a></li>
				<li><a class="pagescroll referenzen_menu" href="#referenzen">Referenzen</a></li>
				<li><a class="pagescroll services_menu" href="#services">Services</a></li>
				<li><a class="pagescroll careers_menu" href="#careers">Karriere</a></li>
				<li><a class="pagescroll contact_menu" href="#contact">Kontakt</a></li>
			</ul>
		</nav>
		
	</header>
	<section>
		<div class="about_us" id="about">
			<div class="wrapper">

				<div class="about_tab" id="">
			<div class="wrapper">
				<ul class="tab-ul">
					<li class="active" tab_head="ab_one">
						<a>Unsere VISION</a>
					</li>
					<li tab_head="ab_two">
						<a>Unsere Mission</a>
					</li>
					<li tab_head="ab_three">
						<a>Unsere Werte</a>
					</li>


				</ul>
				<div class="tab_container">
					<div class="tab_cnt active"  id="ab_one">
						<h2>Unsere Vision</h2>
						<div class="res_tab">
							<div class="left_image">
								<img src="img/about_1.jpg" alt="images"/>
							</div><!--left_image-->
							<div class="right">
								<h3>Unsere Vision</h3>
								<p>Wir tragen ein Stück Schweizer Innovation in die globale Welt und träumen von einer Zukunft ohne Muda’s (japanische Wort für eine sinnlose Tätigkeit oder Verschwendung).</p>
								<p><b>Wie wollen wir dies erreichen?</b><br/>
Wir analysieren die Probleme unserer Kunden und zeigen ihnen Lösungsmöglichkeiten auf, welche ihr Leben nachhaltig vereinfachen. Dabei streben wir als neutrale Partner kreative und moderne Lösung an, welche einen Mehrwert generieren.</p>
								<p><b>Was bieten wir an?</b><br/>
Haben Sie ein Problem und wissen nicht wie dieses zu lösen ist? Möchten Sie Ihre Prozesse von einer unabhängigen Stelle überprüfen lassen? Fehlen Ihnen die Ressourcen für die Umsetzung des Vorhabens? Gerne helfen wir Ihnen als Experten als Teil ihres Teams oder übernehmen die Verantwortung des Projektes gesamt.</p>

							</div><!--right-->
						</div><!--res_tab-->
					</div><!--tab_cnt-->

					<div class="tab_cnt"  id="ab_two">
						<h2>Unsere Mission</h2>
						<div class="res_tab">
							<div class="left_image">
								<img src="img/about_2.jpg" alt="images"/>
							</div><!--left_image-->
							<div class="right">
								<h3>Unsere Mission</h3>
								<p>Gemeinsam mit unseren Partnern entwickeln und realisieren wir innovative Lösungen, welche die Geschäftsprozesse optimieren und Ihren Produkten einen Wettbewerbsvorteil ermöglichen.
Dank unserer Unabhängigkeit haben wir Spielraum für unkonventionelle Ideen. Die pragmatische Umsetzung und unser visionäres Denken wird von unseren Partnern sehr geschätzt. Damit auch wir uns stetig verbessern können, reflektieren wir unsere Arbeit kritisch.
</p>
							</div><!--right-->
						</div><!--res_tab-->
					</div><!--tab_cnt-->


					<div class="tab_cnt"  id="ab_three">
						<h2>Unsere Werte</h2>
						<div class="res_tab">
							<div class="left_image">
								<img src="img/about_3.jpg" alt="images"/>
							</div><!--left_image-->
							<div class="right">
								<h3>Unsere Werte</h3>
								<p>Zuverlässigkeit, Stabilität und Nachhaltigkeit sind Werte, welche unverzichtbar für hochstehende, zukunftssichere Lösungen sind. Auf diese Schweizer Tugenden setzt HELVETIX Consulting.<br/>
Dank unserer Erfolge profitieren unsere Partner von erprobtem Know-how, ausgewiesener Expertise in diversen Branchen und durchdachten, bedürfnisorientierten Lösungen. Dabei streben wir nach einem Ziel: zufriedene Partner.</p>
							</div><!--right-->
						</div><!--res_tab-->
					</div><!--tab_cnt-->

				</div><!--tab_container-->
			</div><!--wrapper-->
		</div><!--about_tab-->


			</div><!--wrapper-->
		</div><!--about_us-->
				
		<div class="s_bar">
			<div class="wrapper">
				
				<div class="sm "><a href="https://www.google.com/maps/place/HELVETIX+Consulting+GmbH/@47.477967,8.3020393,17z/data=!3m1!4b1!4m5!3m4!1s0x47906d2acabd6c7f:0x243c9c0f9c78cb13!8m2!3d47.477967!4d8.304228"><img src="img/sm-1.png" alt="Address"></a></div>
				<div class="sm "><a href="mailto:info@helvetix.com"><img src="img/sm-2.png" alt="Email"></a></div>
				<div class="sm "><a href="tel:+41 56 209 02 72"><img src="img/sm-3.png" alt="Telephone"></a></div>
				<div class="sm "><a href="https://www.facebook.com/helvetixconsulting/" target="_blank"><img src="img/sm-fb.png" alt="Facebook"></a></div>
				<div class="sm "><a href="https://twitter.com/HelvetixC" target="_blank"><img src="img/sm-4.png" alt="Twitter"></a></div>
				<div class="sm "><a href="https://www.xing.com/companies/helvetixconsultinggmbh?sc_o=da980_e" target="_blank"><img src="img/sm-5.png" alt="Xing"></a></div>
				<div class="sm "><a href="https://www.linkedin.com/company/helvetix-consulting/" target="_blank"><img src="img/sm-6.png" alt="LinkedIn"></a></div>
				<!--<p class="sp">Unsere Socialmedia-Kanäle</p>-->
			</div><!--wrapper-->
		</div><!--s_bar-->


		<div class="expertise" id="expertise">
			<div class="sec_banner">
			</div><!--sec_banner-->
			<div class="full_width expertise_cnt">
				<div class="wrapper">
					<h2 class="sec_heading">Expertise</h2>
					<ul class="colm-3">
						<li class="colm-3-li">
							<div class="image Element_Animation_2"><img src="img/banking.png" alt="Banking"></div>
							<h3 class="Element_Animation_2">Banking</h3>
							<p class="Element_Animation_2">Wie das künftige Geschäftsmodell von Banken aussieht, wird neben dem stetig steigenden Wettbewerbs- und Kostendruck unter anderem von einem Faktor bestimmt: von der Digitalisierung (Digital Banking). Die fortschreitende Digitalisierung eröffnet rasante neue Anwendungsbereiche und Geschäftsmodelle.</p>
							
							<div class="full_width" id="morecnt">
							<p class="Element_Animation_2">Im Fokus steht die Digitalisierung und ihr Einfluss auf das traditionelle Bankgeschäft. Die immer komplexer werdenden regulatorischen Rahmenbedingungen müssen systematisch analysiert und mit einem Ausblick zukünftige Trends evaluiert werden.</p>
							<p class="Element_Animation_2">Als Know-How Träger im Bereich Banking unterstützen wir Sie bei den Themen wie Harmonisierung Zahlungsverkehr ISO20022, SWIFT, Treasury & Cash Management und Kernbanktransformation.</p>
							</div>
							<div class="morebtn_div">
							<a  class="more">Mehr</a></div>
						</li>
						<li class="colm-3-li">
							<div class="image Element_Animation_2"><img src="img/shore.png" alt="Banking"></div>
							<h3 class="Element_Animation_2">Outsourcing Service</h3>
							<p class="Element_Animation_2">Wenn eine Firma stark wächst und immer neue Aufgabenfelder entstehen, hat das Management zwei Möglichkeiten: Entweder sie stellen entsprechendes Personal ein oder sie lagern die Arbeit aus. Outsourcing bedeutet für viele Unternehmen in erster Linie eines: Das Einsparen von Kosten und Zeit.</p>
							
							<div class="full_width" id="morecnt">
							<p class="Element_Animation_2">Jedoch gibt es noch mehr Faktoren für den Aufbau einer Outsourcing-Strategie als niedrige Arbeitskosten oder die geografische Lage. Vor der Entscheidung, ob die Contact-Center- Dienstleistungen nach Osteuropa, Asien oder hier in der Schweiz ausgelagert werden, sollten Sie zunächst die Vorteile und Risiken von jedem Standort prüfen.</p>
							<p class="Element_Animation_2">Wir begleiten und unterstützten Outsourcing-Projekte. Unter anderem konnten wir für eine internationale Grossbank eine Nearshore und eine Offshore Delivery Center aufbauen, sowie eines der bedeutendsten Outsourcing-Projekte der Schweizer Finanzindustrie einführen.</p>
							</div>
							<div class="morebtn_div"><a  class="more">Mehr</a></div>
						</li>
						<li class="colm-3-li">
							<div class="image Element_Animation_2"><img src="img/ERP_Icon_aktiv.svg" alt="Banking"></div>
							<h3 class="Element_Animation_2">Enterprise Resource Planning(ERP)</h3>
							<p class="Element_Animation_2">Mit der Globalisierung und Automatisierung von Prozessen müssen Daten weltweit abrufbar sein. Nebst einem lückenlosen Berechtigungskonzept spielt die Datenintegrität einen entscheidenden Faktor. Im Büro können wir unsere Arbeitskollegen mit den eigenen Augen sehen und wissen somit, dass die erhaltenen Informationen von der gewünschten Person stammen. Arbeiten Personen im Ausland, wird die Überprüfung der Integrität bereits schwieriger. Wir können zwar mittels Login und Passwort den Zugang einschränken, aber nicht ausschliessen, dass diese Informationen von Dritten gestohlen werden.</p>
							
							<div class="full_width" id="morecnt">
							<p class="Element_Animation_2">Die Datenintegrität ist aber nicht nur auf Menschen beschränkt. Es werden mit IoT (Internet of Things) immer mehr Geräte mit dem Internet verbunden. Die Daten von Sensoren und Maschinen haben keinen Wert, wenn nicht garantiert ist, dass die Daten effektiv vom entsprechenden Gerät versendet und nicht verändert wurden. Je mehr Automatisierung praktiziert wird, desto grösser ist der Schaden, der durch gefälschte Daten verursacht werden kann.</p>
							<p class="Element_Animation_2">Wir helfen Ihnen Ihre Quellen abzusichern, damit Sie sich auf die erhaltenen Daten verlassen können.</p>
							</div>
							<div class="morebtn_div"><a  class="more">Mehr</a></div>
						</li>
					</ul>
				</div><!--wrapper-->
			</div><!--full_width-->
		</div><!--expertise-->
		<div class="referenzen" id="referenzen">
			<div class="wrapper">
				<h2 class="sec_heading">Referenzen</h2>
				<div class="full_width">
					<ul class="colm-3">
						<li class="colm-3-li Element_Animation_2">
							<h3>Zahlungsverkehr Schweiz (ISO20022 & SWIFT)</h3>
							<p>Im Rahmen der Umstellung des Schweizerischen Zahlungsverkehr auf den international Standard ISO20022 unterstützen wir mehrere nationale wie internationale Finanzinstitute mit unserem fundierten Know-how. Dies sowohl an der Schnittstelle Kunde-Bank als auch im Interbankenbereich. Wir bieten fachliche, methodische und technische Beratung bei der Modernisierung und Standardisierung der Zahlungsverkehrsprozesse um die Transaktionen kostengünstig abzuwickeln.</p>
						</li>
						<li class="colm-3-li Element_Animation_2">
							<h3>DATA INTEGRITY</h3>
							<p>Bei zentralen Projekten haben wir Anforderungen zur
	Integrität bzw. Konsistenz, für Datenbanken mit buchhalterischen Daten, umgesetzt.
	</p>
	<p>Ausserdem haben wir bereits diverse Lösungen im Bereich 
	Datenintegrität für unsere Kunden entwickelt und nutzen dabei unter anderem die Blockchain-Technologie.
	</p>
						</li>
						
					</ul>
				</div><!--full_width-->
				<div class="full_width second_line">
					<ul class="colm-3">
						<li class="colm-3-li Element_Animation_2">
							<h3>Nearshore & Offshore Outsourcing Projekte</h3>
							<p>Für eine internationale Grossbank durften wir eine Nearshore und eine Offshore Delivery Center aufbauen. Dazu zählten Tätigkeiten wie:</p>
							<ul>
								<li>Internationales Projektmanagement</li>
								<li>Koordination zwischen den involvierten Stakeholdern & Konfliktmanagement</li>
								<li>Sicherstellung von kundeninternen Prozessen</li>
								<li>Schulung und Coaching der Mitarbeitenden</li>
								<li>Staffing in den Delivery Centern</li>
							</ul>
						</li>
						<li class="colm-3-li Element_Animation_2">
							<h3>Datenmigration</h3>
							<p>Bei der Einführung von BaNCS (Kernbanktransformation) für den Bereich Zahlungsverkehr (Credit & Debit Transfer) haben wir funktionale & nicht-funktionale Anforderungen definiert und komplexe Probleme mit einfachverständlichen Grafiken (e.g. UML-Modelle, etc.) heruntergebrochen.</p>
							<p>Ausserdem haben wir bei einem Kundenprojekt diverse Kontogruppen aus dem alten Kernbanksystem ins SAP DM überführt. Mit der Überführung konnten neue Funktionalitäten implementiert und die Prozesse optimiert werden.</p>
						</li>
						
						<li class="colm-3-li Element_Animation_2">
							<h3>Treasury & Cash Management</h3>
							<p>In Zusammenhang mit der AVALOQ-Einführung (Kernbanktransformation) für den Bereich Treasury & Cash Management haben wir die Business Analyse und Qualitätssicherung von diversen AVALOQ-Modulen sichergestellt.</p>
						</li>
					</ul>
				</div><!--full_width-->
			</div><!--wrapper-->
		</div><!--referenzen-->
		<div class="services" id="services">
			<div class="wrapper">
				<h2 class="sec_heading">Services</h2>
				<ul class="tab-ul">
					<li class="active" tab_head="one">
						<a>Business Consulting</a>
					</li>
					<li tab_head="two">
						<a>PROJEKT MANAGEMENT</a>
					</li>
					<li tab_head="three">
						<a>Requirement Engineering</a>
					</li>
					<li tab_head="four">
						<a>SOFTWARE-<br/>ENTWICKLUNG</a>
					</li>
					<li tab_head="five">
						<a>TESTING EXCELLENCE</a>
					</li>
					<li tab_head="six">
						<a class="spcl_padding">SCHULUNGEN</a>
					</li>

				</ul>
				<div class="tab_container">
					<div class="tab_cnt active"  id="one">
						<h2>Business Consulting</h2>
						<div class="res_tab">
							<div class="left_image">
								<img src="img/business_consulting.png" alt="images"/>
							</div><!--left_image-->
							<div class="right">
								<h3>Business Consulting</h3>
								<p>Beeinflusst von inneren und äusseren Faktoren, wie etwa Marktveränderungen oder Regulatorien stehen laufend richtungsweisende Entscheidungen an.</p>
								<p>Welche Bedürfnisse haben unsere Partnerinnen und Partner? Diese Frage steht im Zentrum unseres unternehmerischen Handelns. Als Business Consultant stellen wir die Analyse der Geschäftstätigkeit in den Mittelpunkt.</p>
								<p>Wir unterstützen unsere Partnerinnen und Partner in der Entwicklung der Optimierung der Geschäftsprozessen und bei der Umsetzung innovativen Geschäftsideen.</p>

							</div><!--right-->
						</div><!--res_tab-->
					</div><!--tab_cnt-->

					<div class="tab_cnt"  id="two">
						<h2>Projekt Management</h2>
						<div class="res_tab">
							<div class="left_image">
								<img src="img/project_management.png" alt="images"/>
							</div><!--left_image-->
							<div class="right">
								<h3>Projekt Management</h3>
								<p>Agile und klassische Methoden gehören zu den beliebtesten Modellen, die Unternehmen für die Prozessorganisation in der Software-Entwicklung verwenden. Bevor Sie sich für den einen oder anderen Ansatz entscheiden, sollten sich Unternehmen über die Vorteile der jeweiligen Methode im Klaren sein.</p>
								<p>Wir begleiten Sie optimal bei der erfolgreichen Realisierung Ihrer Projekte und räumen allfällige Hindernisse aus dem Weg. Unsere erfahrenen Projektmanager übernehmen die professionelle Beratung, Planung, Leitung, Kontrolle und Dokumentation Ihres Projekts.</p>
								<p>Das Hauptaugenmerk liegt dabei auf der Sicherstellung des Projektfortschritts und die Generierung eines Mehrwerts für Sie und Ihren Kunden. Wir beziehen alle Beteiligten mit ein, kommunizieren lückenlos und übernehmen gerne die Verantwortung für die Erreichung der Projektziele.</p>
							</div><!--right-->
						</div><!--res_tab-->
					</div><!--tab_cnt-->


					<div class="tab_cnt"  id="three">
						<h2>Requirement Engineering</h2>
						<div class="res_tab">
							<div class="left_image">
								<img src="img/requirement_engineering.png" alt="images"/>
							</div><!--left_image-->
							<div class="right">
								<h3>Requirement Engineering</h3>
								<p>Für das Requirements Engineering, wie auch für die Softwareentwicklung, gilt: Es ist ein Erfolgsfaktor. Die Anforderungen bezüglich Innovation und Sicherheit nehmen stetig zu. Klare und vollständige Anforderungsspezifikationen sind daher ausschlaggebend.</p>
								<p>Das Zusammenführen von unterschiedlichen Stakeholder-Meinungen, wie auch das Fokussieren auf wesentliche Bereiche, müssen systematisch erfolgen. Im Requirements Engineering unterstützen wir Sie bei den grundlegenden Vorgehensansätze der klassischen und agilen Welt und stellen das Dokumentieren, Verwalten und Prüfen von Anforderungen sicher.</p>
							</div><!--right-->
						</div><!--res_tab-->
					</div><!--tab_cnt-->

					<div class="tab_cnt"  id="four">
						<h2>Software entwicklung</h2>
						<div class="res_tab">
							<div class="left_image">
								<img src="img/software.png" alt="images"/>
							</div><!--left_image-->
							<div class="right">
								<h3>Softwareentwicklung</h3>
								<p>Dank unserer langjährigen Tätigkeit können wir auf ein breites Netzwerk aus renommierten nationalen und internationalen Software-Partner zurückgreifen. Somit bieten wir dem Kunden alle wesentlichen Elemente eines Software Development Cycles als Service an. Wir vernetzen unserer Kunden mit der passenden Lösung, sodass eine Win-Win Situation in einer perfekten Symbiose entstehen kann.</p>
								<p>Haben Sie gerade keine Kapazität für ein wichtiges Projekt? Wir können Sie bei Ihnen vor Ort unterstützen, oder auch die komplette Entwicklung abnehmen. Selbst in der agilen Entwicklung treten immer wieder unerwartete Hindernisse auf. Budgetüberschreitungen oder Verzug sind wichtige Indikatoren, dass eine Reflexion sinnvoll ist.</p>
							</div><!--right-->
						</div><!--res_tab-->
					</div><!--tab_cnt-->

					<div class="tab_cnt"  id="five">
						<h2>Testing Excellence</h2>
						<div class="res_tab">
							<div class="left_image">
								<img src="img/testing_excelence.png" alt="images"/>
							</div><!--left_image-->
							<div class="right">
								<h3>Testing Excellence</h3>
								<p>Nach dem Test ist vor dem Test. Diese sind elementare Bestandteile von IT-Projekten, wobei der Begriff "IT-Projekt" weit gefasst ist. Er umfasst die typische Softwareentwicklung ebenso wie Implementierungen, z.B. die Einführung von Standardsoftware wie SAP, Rollouts, Migrationen sowie Infrastrukturprojekte, wie z.B. den Aufbau von Netzen oder Rechenzentren.</p>
								<p>Um den Aufwand für das Testing gering zu halten, verwenden viele Unternehmen standardisierte Testverfahren. Allerdings sind IT-Projekte oft so unterschiedlich, dass Standards den individuellen Gegebenheiten nicht gerecht werden.</p>
								<p>Im Rahmen des jeweiligen Projekts erstellen wir Testkonzepte, Testfälle und koordinieren das Testing.</p>
							</div><!--right-->
						</div><!--res_tab-->
					</div><!--tab_cnt-->

					<div class="tab_cnt"  id="six">
						<h2>Schulungen</h2>
						<div class="res_tab">
							<div class="left_image">
								<img src="img/Training.png" alt="images"/>
							</div><!--left_image-->
							<div class="right">
								<h3>Schulungen</h3>
								<p>Im Rahmen des jeweiligen Projekts erstellen wir Schulungsunterlagen und führen Schulungen auch selber durch. Wir bieten im Projekt-Umfeld sowohl Trainings für Ihr Projektteam im Rahmen der Projektvorbereitung sowie Anwenderschulungen an.</p>
								<p>Nebst dem Schulungsangebot sind wir ausserdem Lehrbeauftragte für Masterstudiengängen an diversen Schweizer Hochschulen für das Thema „Internationales Projektmanagement“.</p>
							</div><!--right-->
						</div><!--res_tab-->
					</div><!--tab_cnt-->

					


				</div><!--tab_container-->
			</div><!--wrapper-->
		</div><!--services-->
		<div class="careers" id="careers">
			<div class="sec_banner">
			</div><!--sec_banner-->
			<div class="full_width career_cnt">
				<div class="wrapper">
					<h2 class="sec_heading">Karriere</h2>
					<div class="left Element_Animation_2">
						<p>Ein Grossteil unserer Zeit unseres Lebens verbringen wir im Büro. Da lohnt es sich, hin und wieder die Frage zu stellen:
Kann ich mich mit dem, was ich tue, wirklich identifizieren?</p>

						<h3 class="special_heading">Wir sind der Meinung: <br/><span>Bei uns kannst Du es!</span></h3>
						<p>Bei uns hast du die Chance Geschichte zu schreiben und die Welt zu verändern. Als eines der spannendsten Beratungsunternehmen sind wir von einer dynamischen Atmosphäre mit professionellem Umfeld geprägt.</p>
						<p>Flache Hierarchien und kurze Kommunikationswege sorgen dafür,  dass wir fokussiert arbeiten können. Wir suchen laufend interessante Persönlichkeiten, welche sich in unserem Team entwickeln möchten.</p>
						<p>Haben wir dein Interesse geweckt, dann sende uns deine Bewerbung an: <a href="mailto:info@helvetix.com">info@helvetix.com</a> </p>
						
					</div><!--left-->
					<div class="right Element_Animation_2">
						<h2 class="c-right">Ausserdem bieten wir:</h2>
						<ul class="career_ul">
							<li><div class="images"><img src="img/career/1.png"/></div><p>Flexible Arbeitszeiten</p></li>
							<li><div class="images"><img src="img/career/2.png"/></div><p>Sports & Events</p></li>
							<li><div class="images"><img src="img/career/3.png"/></div><p>Networking</p></li>
							<li><div class="images"><img src="img/career/4.png"/></div><p class="special_line_height">Anspruchsvolles Arbeitsumfeld</p></li>
							<!--<li><div class="images"><img src="img/career/5.png"/></div><p>Mitarbeiterrabatte</p></li>-->
							<li><div class="images"><img src="img/career/6.png"/></div><p>Essen</p></li>
							<li><div class="images"><img src="img/career/7.png"/></div><p>Hardware</p></li>
							<li><div class="images"><img src="img/career/8.png"/></div><p>Jobticket</p></li>
							<li><div class="images"><img src="img/career/9.png"/></div><p>Vertrauensarbeitszeit</p></li>
						</ul>
						
					</div><!--right-->
				</div><!--wrapper-->
			</div><!--full_width-->
		</div><!--careers-->
		<div class="contact" id="contact">
			<div class="sec_banner">
			</div><!--sec_banner-->
			<div class="full_width expertise_cnt">
				<div class="wrapper">
					<h2 class="sec_heading">Kontakt</h2>
						<p class="subtxt">Wenn Sie Fragen haben oder weitere Informationen benötigen, dann erreichen Sie uns am besten unter:</p>
					<div class="left">

						<ul>
						<li><div class="image Element_Animation_3"><a href="https://www.google.com/maps/place/HELVETIX+Consulting+GmbH/@47.477967,8.3020393,17z/data=!3m1!4b1!4m5!3m4!1s0x47906d2acabd6c7f:0x243c9c0f9c78cb13!8m2!3d47.477967!4d8.304228"><img src="img/c_location.png" alt="location"/></div><p>Bruggerstrasse 56A, CH-5400 Baden</a></p></li>
						<li><div class="image Element_Animation_3"><a href="tel:+41 56 209 02 72"><img src="img/c_phone.png" alt="Phone"/></div><p>+41 56 209 02 72</p></a></li>
						<li><div class="image Element_Animation_3"><a href="mailto:info@helvetix.com"><img src="img/c_mail.png" alt="mail"/></a></div><p>info@helvetix.com</p></a></li>
					</ul>
					
					<p class="sm_heading">&nbsp;</p>
					<ul class="social_m">
						<li><a href="https://www.linkedin.com/company/helvetix-consulting/" target="_blank" ><img src="img/sm-6.png" alt="Linkedin"/></a></li>
						<li><a href="https://www.xing.com/companies/helvetixconsultinggmbh?sc_o=da980_e" target="_blank"><img src="img/sm-5.png" alt="Xing"/></a></li>
						<li><a href="https://twitter.com/HelvetixC" target="_blank"><img src="img/sm-4.png" alt="Twitter"/></a></li>
						<li><a href="https://www.facebook.com/helvetixconsulting/" target="_blank"><img src="img/sm-fb.png" alt="Facebook"/></a></li>
					</ul>
					</div><!--left-->
					
					<div class="right">
						<div class="form_bg Element_Animation_2">
							<!--Contact-->
							<form action="contactus_email.php" method="post" name="contact" id="contact" onsubmit="javascript: return CheckcomntactForm(document.contact);">
							
							
							<!--<form id="form" method="post" action="emailer.php"> -->
							<ul>
								<!--<li><input type="text" class="InputTxt" name="txtName" placeholder="Vorname, Name" /></li>
										<input type="text" class="InputTxt" name="txtFrom" placeholder="E-Mail" />
										<input type="hidden" name="To" value="chinjujohny99@gmail.com" />
										<input type="text" class="InputTxt" name="txtPhone" placeholder="TELEFON" />
										<textarea class="txtArea" name="txtMsg" rows="4" placeholder="ihre Nachricht"></textarea>
								-->
								
								<?php if(!empty($form['error'])) { ?>
										<li><?php echo $form['error'];?></li>
								<?php } ?>
								
								<li><input name="name" id="name" onfocus="if(this.value=='VORNAME, NAME*')this.value = ''" onblur="if(this.value=='')this.value='VORNAME, NAME*';" value="<?php echo (!empty($form['name']))? trim($form['name']):'';?>" class="InputTxt" maxlength="75" placeholder="VORNAME, NAME*"   /> </li>
								<li>
									
									<input name="email" id="email" onfocus="if(this.value=='E-MAIL*')this.value = ''" onblur="if(this.value=='')this.value='E-MAIL*';" value="<?php echo (!empty($form['email']))? trim($form['email']):'';?>" class="InputTxt" maxlength="125" placeholder="E-MAIL*" />
								</li>
								<li>
								<input name="phone" id="phone" onfocus="if(this.value=='TELEFON*')this.value = ''" onblur="if(this.value=='')this.value='TELEFON*';" value="<?php echo (!empty($form['phone']))? trim($form['phone']):'';?>" class="InputTxt" maxlength="75" placeholder="TELEFON*" />
								
								</li>
								<li><textarea name="comment" rows="4" placeholder="IHRE NACHRICHT*" class="txtArea" onfocus="if(this.value=='IHRE NACHRICHT*')this.value = ''" onblur="if(this.value=='')this.value='IHRE NACHRICHT*';"  ><?php echo (!empty($form['comment']))? $form['comment']:'';?></textarea></li>
								<li>
									<div class="inline">Kontaktieren Sie mich </div>
									<div class="inline">
					                    <input class="styled-checkbox" name="ch_email" id="styled-checkbox-1" type="checkbox" value="yes">
					                    <label for="styled-checkbox-1">Per E-Mail</label>
					                </div><!--inline-->
					                <div class="inline">
					                    <input class="styled-checkbox" name="ch_phone" id="styled-checkbox-2" type="checkbox" value="yes">
					                    <label for="styled-checkbox-2">Per TELEFON</label>
					                </div><!--inline-->
					            </li>
							</ul>
							<button class="btn" type="submit"></button>
							</form>
							<!--End-->

						</div><!--form_bg-->
					</div><!--right-->
				</div><!--wrapper-->
			</div><!--full_width-->
		</div><!--contact-->
	</section>
	
	<div class="newfooter">
		<div class="wrapper">
			<h2 class="pd-b-20">Impressum</h2>
			<ul class="main_ul">
				<li class="main_li">
					<div class="sec">
						<h3>HELVETIX Consulting GmbH</h3>
						<p>Bruggerstrasse 56A<br/>5400 Baden</p>
					</div><!--sec-->
					<div class="sec">
						<h3>Büroanschrift</h3>
						<p>Bruggerstrasse 56A<br/>5400 Baden</p>
					</div><!--sec-->
					<div class="sec">
						<p>Telefon: +41 56 209 02 72<br/>Mail: info@helvetix.com</p>
					</div><!--sec-->
				</li><!--main_li-->
				<li class="main_li">
					<div class="sec">
						<h3>Geschäftsführung</h3>
						<p>Praveen Nellissery</p>
					</div><!--sec-->
					<div class="sec">
						<h3>Handelsregister-Nummer</h3>
						<p>CH-170.4.012.866-6</p>
					</div><!--sec-->
					<div class="sec">
						<h3>Unternehmens-Identifikationsnummer (UID)</h3>
						<p>CHE-199.068.154</p>
					</div><!--sec-->
				</li><!--main_li-->
				<li class="main_li">
					<div class="sec">
						<h3>Presse</h3>
						<p>info@helvetix.com</p>
					</div><!--sec-->
					<div class="sec">
						<h3>Bildnachweis</h3>
						<p>Einige Icons und Bilder auf dieser Website unterliegen dem Copyright des folgenden Designer:</p>
						<p>© designed by marczwahlen@mac.com</p>
					</div><!--sec-->
					<div class="sec">
						<h3>Konzept & Design</h3>
						<p>Marc Zwahlen<br/>marczwahlen@mac.com</p>
					</div><!--sec-->
					<div class="sec">
						<h3>Programmierung</h3>
						<p>Youfind4.com<br/>info@youfind4.com</p>
					</div><!--sec-->
				</li><!--main_li-->
			</ul>

			<div class="full_width pdf_div">
				<div class="half_width">
					<div class="icon"><a href="img/Datenschutzerklärung.pdf" target="_blank"><img src="img/pdf_icon.png" alt="pdf"/></a></div>
					<p class="txt">Datenschutzerklärung </p>
				</div><!--half_width-->
				<div class="half_width">
					<div class="icon"><a href="img/Allgemeine-Geschäftsbedingungen-(AGB).pdf" target="_blank"><img src="img/pdf_icon.png" alt="pdf"/></a></div>
					<p class="txt">Allgemeine Geschäftsbedingungen (AGB)</p>
				</div><!--half_width-->
			</div><!--full_width-->
			<!--<div class="pdf_link"><a href="img/Datenschutzerklärung.pdf" target="_blank"><img src="img/pdf_icon.png" alt="pdf"/></a></div>-->
			<h2>Haftung für Inhalte</h2>
			<p class="main_txt">Die Inhalte unserer Seiten wurden mit grösster Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen. Als Diensteanbieter sind wir gemäss § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p>

			<h2 class="m-top">Haftung für Links</h2>
			<p class="main_txt">Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstösse überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p>

			<h2 class="m-top">Urheberrecht</h2>
			<p class="main_txt m-bottom">Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung ausserhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>
		</div><!--wrapper-->
		<div class="s_bar">
			<div class="wrapper">
				<div class="sm "><a href="https://www.google.com/maps/place/HELVETIX+Consulting+GmbH/@47.477967,8.3020393,17z/data=!3m1!4b1!4m5!3m4!1s0x47906d2acabd6c7f:0x243c9c0f9c78cb13!8m2!3d47.477967!4d8.304228"><img src="img/sm-1.png" alt="Address"></a></div>
				<div class="sm "><a href="mailto:info@helvetix.com"><img src="img/sm-2.png" alt="Email"></a></div>
				<div class="sm "><a href="tel:+41 56 209 02 72"><img src="img/sm-3.png" alt="Telephone"></a></div>
				<div class="sm "><a href="https://www.facebook.com/helvetixconsulting/" target="_blank"><img src="img/sm-fb.png" alt="Facebook"></a></div>
				<div class="sm "><a href="https://twitter.com/HelvetixC" target="_blank"><img src="img/sm-4.png" alt="Twitter"></a></div>
				<div class="sm "><a href="https://www.xing.com/companies/helvetixconsultinggmbh?sc_o=da980_e" target="_blank"><img src="img/sm-5.png" alt="Xing"></a></div>
				<div class="sm "><a href="https://www.linkedin.com/company/helvetix-consulting/" target="_blank"><img src="img/sm-6.png" alt="LinkedIn"></a></div>
				<!--<p class="sp">Unsere Socialmedia-Kanäle</p>-->
			</div><!--wrapper-->
		</div><!--s_bar-->
	</div><!--newfooter-->

	<div class="cookie_full active">
		<button class="btn">OK,<br/>verstanden</button>
		<p class="txt">Website Tutor nutzt Cookies, um bestmögliche Funktionalität bieten zu können. <a class="link" target="_blank" href="img/Datenschutzerklärung.pdf">Mehr Infos</a></p>
	</div><!--cookie_full-->
</body>
<script>
	jQuery(document).ready(function($) {
		$('.main-slider').owlCarousel({
                items: 1,
                animateOut: 'fadeOut',
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout:16000,
                dots: false,
                nav: true,
                navigationText: ["<img src='img/left-arrow.png'>","<img src='img/right-arrow.png'>"],

              });
		});
</script>
<style>
/*.tab_cnt{display:none !important;}
.tab_cnt.active{ display:block !important;}*/

</style>

</html>
<?php

if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
     echo '<script type="text/javascript">'; 
echo 'alert("Vielen Dank für die Kontaktaufnahme. Unsere Mitarbeiter werden Ihre Anfrage so bald wie möglich beantworten.");'; 

echo '</script>';
}

 ?>