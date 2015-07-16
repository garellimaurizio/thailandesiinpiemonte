<?php
	
	include('db.php');
	
	setlocale(LC_TIME, 'ita', 'it_IT.utf8');
	
	define("IMAGES", "Immagini");
	define("VIDEOS", "Video");
	
	
	$pages = array (
					"home" 			=> array (
												"description" => "Benvenuti sul sito dell’Associazione Thailandesi In Piemonte. Siamo un'associazione di cittadini thailandesi residenti in Piemonte. Fondata nel 2015 l'associazione ha l'obiettivo di fornire supporto ai nostri concittadini che si trovano in difficoltà e di diffondere la nostra cultura sul territorio italiano e viceversa. Abbiamo al momento XXX membri che partecipano attivamente alle nostre attività e condividono i loro interessi riguardo la cultura Thailandese."
											),
					"next_event"	=> array (
												"sectionTitle" => "PROSSIMAMENTE"
											),
					"past_events"	=> array (
												"category" => "Categoria",
												"readMore" => "Leggi"
											),
					"organization-chart"	=> array (
												"sectionTitle" => "ORGANIGRAMMA"
											),
					"about"			=> array (
												"sectionTitle" => "CHI SIAMO"
											),
					"events"		=> array (
												"sectionTitle" 	=> "EVENTI",
												"readMore" 		=> "continua a leggere"
											),
					"events_sidebar"		=> array (
												"events" 	=> "Manifestazioni",
												"category" 	=> "Categorie",
												"archive" 	=> "Archivio"
											),
					"images"		=> array (
												"sectionTitle" => "IMMAGINI"
											),
					"videos"			=> array (
												"sectionTitle" => "VIDEO"
											),
					"contacts"			=> array (
												"sectionTitle" 	=> "CONTATTI",
												"text" 			=> "Contattateci per qualsiasi informazione sull'associazione o sui nostri eventi, faremo il possibile per soddisfare le vostre richieste.",
												"phone" 		=> "Tel.:",
												"email" 		=> "Email:",
												"facebook"		=> "Facebook",
												"instagram"		=> "Instagram",
												"youtube"		=> "Youtube",
												"place"			=> "La nostra sede"
											),
					"footer"			=> array (
												"contactUs" 	=> "Contattaci",
												"followUs"		=> "Seguici"
											),
								
					);
	
		
	// Navigation Menu Items
	
	$navItems = array(
				
					"home" => array(
									"slug"	=> "index.php",
									"title"	=> "Home",
									"dropdown" => false
									),
				
					"about" => array(
									"slug"	=> array (
														array(
																"slug"	=> "about.php",
																"title"	=> "Chi siamo",
																"dropdown" => false
															),
														array(
																"slug"	=> "organization-chart.php",
																"title"	=> "Organigramma",
																"dropdown" => false
															),
														),
						
									"title"	=> "Su di noi",
									"dropdown" => true
									),
					
					"events" => array(
										"slug"	=> "events.php",
										"title"	=> "Eventi",
										"dropdown" => false
									),
					
					array(
						"slug"	=> "/",
						"title"	=> "navbar-brand",
						"dropdown" => false
					),

					"gallery" => array(
										"slug"	=> array (
															array(
																	"slug"	=> "images.php",
																	"title"	=> "Immagini",
																	"dropdown" => false
																),
															array(
																	"slug"	=> "videos.php",
																	"title"	=> "Video",
																	"dropdown" => false
																),
														),
										"title"	=> "Galleria",
										"dropdown" => true
										),
					
					"contacts" => array(
										"slug"	=> "contacts.php",
										"title"	=> "Contatti",
										"dropdown" => false
									),
				
				);
	
	
	$about = array(
						"intro1" 	=> "<p>L’Associazione Thailandesi In Piemonte è nata con lo scopo di aiutare cittadini thailandesi che vivono nella regione e che si trovano in situazione di necessità. Tra le attività complementari dell’associazione ci sono la promozione della cultura thailandese e dello scambio culturale con quella italiana.</p>",
						"intro2" 	=> "<p>L’attività promozionale si fonda sull’organizzazione di eventi a carattere didattico, divulgativo e ludico:</p>",
						"point1" 	=> "<li>Insegnamento della lingua thailandese agli italiani e viceversa per i thailandesi</li>",
						"point2" 	=> "<li>Dimostrazione ed insegnamento di arti e abilità tipiche thailandesi come per esempio: danza, cucina, scultura di verdura e frutta, massaggio thai e tanto altro ancora</li>",
						"point3" 	=> "<li>Celebrazione di feste nazionali thailandesi come per esempio il Songkran (Capodanno thailandese)</li>",
						"end" 	 	=> "<p>Vi aspettiamo numerosi per far parte della nostra Associazione Thailandesi in Piemonte!</p>",
						"img1"		=> "assets/img/massage.jpg",
						"imgAlt1"	=> "Due donne thailandesi mentre fanno un massaggio",
						"img2"		=> "assets/img/bimbe.jpg",
						"imgAlt2"	=> "Due bambine con abiti tradizionali thailandesi",
						"img3"		=> "assets/img/frutta.jpg",
						"imgAlt3"	=> "Cesto di frutta intagliata a forma di fiori",
						"img4"		=> "assets/img/danzatrice.jpg",
						"imgAlt4"	=> "Danzatrice in abiti tradizionali thailandesi",
					);
	
	$organizationChart = array(
									array(
						"name"		=> "Poonsap Wongnoi",
						"role"		=> "Presidente",
						"imgPath"	=> "assets/img/chairman.jpg", 
						"imgAlt"	=> "Poonsap Wongnoi"
					),

				array(
						"name"		=> "Nut Joyjuree",
						"role"		=> "Vice Presidente",
						"imgPath"	=> "assets/img/viceChairman.jpg", 
						"imgAlt"	=> "Nut Joyjuree"
					),

				array(
						"name"		=> "Narong Ayamuang",
						"role"		=> "Consulente",
						"imgPath"	=> "assets/img/advisor.jpg", 
						"imgAlt"	=> "Narong Ayamuang"
					),				
				
				array(
						"name"		=> "Sakdina Rak-U-Domkarn",
						"role"		=> "Consulente",
						"imgPath"	=> "assets/img/counselor1.jpg", 
						"imgAlt"	=> "Sakdina Rak-U-Domkarn"
					),	
					
				array(
						"name"		=> "Vassana Boonchuay",
						"role"		=> "Consulente",
						"imgPath"	=> "assets/img/counselor2.jpg", 
						"imgAlt"	=> "Vassana Boonchuay"
					),			
				
				array(
						"name"		=> "Narumon Na Nakorn",
						"role"		=> "Consulente",
						"imgPath"	=> "assets/img/counselor3.jpg", 
						"imgAlt"	=> "Narumon Na Nakorn"
					),	
					
				array(
						"name"		=> "Areeya Wanmontree",
						"role"		=> "Segretario",
						"imgPath"	=> "assets/img/secretary1.jpg", 
						"imgAlt"	=> "Areeya Wanmontree"
					),
					 
				array(
						"name"		=> "Worawan Wornwiset",
						"role"		=> "Segretario",
						"imgPath"	=> "assets/img/secretary2.jpg", 
						"imgAlt"	=> "Worawan Wornwiset"
					),
				
				array(
						"name"		=> "Ratree Jetsadasit",
						"role"		=> "Segretario",
						"imgPath"	=> "assets/img/secretary4.jpg", 
						"imgAlt"	=> "Ratree Jetsadasit"
					),
					
				array(
						"name"		=> "Chutima Kamjadphai",
						"role"		=> "Segretario",
						"imgPath"	=> "assets/img/secretary3.jpg", 
						"imgAlt"	=> "Chutima Kamjadphai"
					),
				
				array(
						"name"		=> "Somjai Parodi",
						"role"		=> "Pubbliche Relazioni e Comitato Informativo",
						"imgPath"	=> "assets/img/pr2.jpg", 
						"imgAlt"	=> "Somjai Parodi"
					),
				
				array(
						"name"		=> "Panjai. Chaijarus",
						"role"		=> "Pubbliche Relazioni e Comitato Informativo",
						"imgPath"	=> "assets/img/pr10.jpg", 
						"imgAlt"	=> "Panjai. Chaijarus"
					),
					
					array(
						"name"		=> "Marasri Augkanavittaya",
						"role"		=> "Pubbliche Relazioni e Comitato Informativo",
						"imgPath"	=> "assets/img/pr11.jpg", 
						"imgAlt"	=> "Marasri Augkanavittaya"
					),
					
				array(
						"name"		=> "Watcharaporn Siriwanna",
						"role"		=> "Pubbliche Relazioni e Comitato Informativo",
						"imgPath"	=> "assets/img/pr3.jpg", 
						"imgAlt"	=> "Watcharaporn Siriwanna"
					),

				array(
						"name"		=> "Darunee Chaisiri",
						"role"		=> "Pubbliche Relazioni e Comitato Informativo",
						"imgPath"	=> "assets/img/pr9.jpg", 
						"imgAlt"	=> "Darunee Chaisiri"
					),
					
				array(
						"name"		=> "Khomkham Boonwarn",
						"role"		=> "",
						"imgPath"	=> "assets/img/pr7.jpg", 
						"imgAlt"	=> "Khomkham Boonwarn"
					),

				array(
						"name"		=> "Pawena Aimsam-ang",
						"role"		=> "",
						"imgPath"	=> "assets/img/coordinator1.jpg", 
						"imgAlt"	=> "Pawena Aimsam-ang"
					),
				array(
						"name"		=> "Narinthorn Pabkuntod",
						"role"		=> "",
						"imgPath"	=> "assets/img/coordinator2.jpg", 
						"imgAlt"	=> "Narinthorn Pabkuntod"
					),
				array(
						"name"		=> "Bunpluk Phoprom",
						"role"		=> "",
						"imgPath"	=> "assets/img/recreation1.jpg", 
						"imgAlt"	=> "Bunpluk Phoprom"
					),
				array(
						"name"		=> "Sruangrat Kongsin",
						"role"		=> "",
						"imgPath"	=> "assets/img/recreation2.jpg", 
						"imgAlt"	=> "Sruangrat Kongsin"
					),
				
				array(
						"name"		=> "Tassanalai Kuansri",
						"role"		=> "",
						"imgPath"	=> "assets/img/recreation4.jpg", 
						"imgAlt"	=> "Tassanalai Kuansri"
					),
				
				array(
						"name"		=> "Duangduan Srivichai",
						"role"		=> "",
						"imgPath"	=> "assets/img/recreation5.jpg", 
						"imgAlt"	=> "Duangduan Srivichai"
					),
					
				array(
						"name"		=> "Thidarat Labutsri",
						"role"		=> "",
						"imgPath"	=> "assets/img/recreation6.jpg", 
						"imgAlt"	=> "Thidarat Labutsri"
					),	
				
				);
				
				
	$eventsCategory = array (
						"songkran"	=> "Songkran Festival", 
						"festival-oriente"	=> "Festival dell'Oriente",
						"carnevale"	=> "Carnevale",
						"consolato"	=> "Servizi Consolari",
						);
	
	$eventsType = array ("Feste", "Manifestazioni", "Meeting");
	
	$nextEvent = array (
								"slug"			=> "",
								"title"			=> "Festa Songkran 2015",
								"data"			=> date("jS F, Y", strtotime("26-04-2015")),
								"date"			=> "26-04-2015",
								"stringData"	=> "",
								"featuredImg"	=> "assets/img/songkran.jpg",
								"altImg"		=> "Membri dell'associazione che festeggiano il Songkran",
								"category"		=> $eventsType[0],
								"eventCategory"	=> $eventsCategory['songkran'],
								"place"			=> "<a href=\"https://www.google.it/maps/place/Via+Salerno,+55,+10152+Torino/@45.08539,7.6774786,17z/\">\"LAS VEGAS\" in Via Salerno 55 - Torino</a>",
								"text"			=> "<p>La festa del Songkran, il Capodanno Thailandese si terrà presso il locale \"LAS VEGAS\" in <a href=\"https://www.google.it/maps/place/Via+Salerno,+55,+10152+Torino/@45.08539,7.6774786,17z/\">Via Salerno 55 - Torino</a> dalle ore 10:30 alle ore 18:00.</p>
													<p>Un’occasione davvero speciale per far conoscere la cultura thailandese e la sua tradizione. <BR />
													Durante la giornata susseguiranno 5 eventi principali:</p>
													<ol>
														<li>Il benvenuto agli ospiti da parte della Presidente dell’Associazione;</li>
														<li>Cerimonia di apertura della festa versando l’acqua sull’immagine di Buddha come simbolo di purificazione</li>
														<li>Pranzo collettivo a base di piatti tipici thailandesi</li>
														<li>Sfilata di moda di vestiti tradizionali</li>
														<li>Danze thai</li>
													</ol>
													<p>I posti sono limitati.</p>
													<BR />
													<p>Per informazioni e prenotazioni:</p>
													<p>Tel.: ". MOBILE ."</p>
													<p>Email: ". EMAIL ."</p>
													<p>Facebook: <a href=\"".FACEBOOK."\" target=\"_blank\">Thailandesi in Piemonte</a></p>",
						);
	
	
	$events = array(
					"songkran-2015" => array(
						"slug"			=> "",
						"title"			=> "Songkran Capodanno Thailandese 2015",
						"data"			=> date("jS F, Y", strtotime("26-04-2015")),
						"date"			=> "26-04-2015",
						"stringData"	=> "26 APRILE 2015",
						"featuredImg"	=> "assets/img/songkran-2015_thumb.jpg",
						"eventImg"		=> "assets/img/songkran-2015.jpg",
						"altImg"		=> "",
						"category"		=> $eventsType[0],
						"eventCategory"	=> $eventsCategory['songkran'],
						"place"			=> "Torino",
						"imgFolder"		=> "assets/img/songkran-2015/",
						"videos"		=> array(),
						"excerpt"		=>	"Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor",
						"description"	=> "Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam quis risus eget urna mollis ornare vel eu leo."

					),

					"festival-oriente-2015" => array(
						"slug"			=> "",
						"title"			=> "Festival dell'Oriente 2015",
						"data"			=> date("jS F, Y", strtotime("20-03-2015")),
						"date"			=> "20-03-2015",
						"stringData"	=> "20-21-22 e 27-28-29 MARZO 2015",
						"featuredImg"	=> "assets/img/festival-2015.jpg",
						"eventImg"		=> "assets/img/festival-2015.jpg",
						"altImg"		=> "Logo della manifestazione",
						"category"		=> $eventsType[1],
						"eventCategory"	=> $eventsCategory['festival-oriente'],
						"place"			=> "Lingotto Fiere Torino",
						"imgFolder"		=> "assets/img/fo-2015/",
						"videos"		=> array(
												"https://www.youtube.com/embed/a8uYJoP05Ag",
												"https://www.youtube.com/embed/-f6x7a87Nno",
												"https://www.youtube.com/embed/H1kNr6_hbhg",
												"https://www.youtube.com/embed/uY8fCpZrugI",
												"https://www.youtube.com/embed/Ta9e2rtN494"
											),
						"excerpt"		=>	"Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor",
						"description"	=> "Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam quis risus eget urna mollis ornare vel eu leo."
					),
					
					"carnevale-2015" => array(
						"slug"			=> "",
						"title"			=> "La battaglia delle arance 2015",
						"data"			=> date("jS F, Y", strtotime("15-02-2015")),
						"date"			=> "15-02-2015",
						"stringData"	=> "15 FEBBRAIO 2015",
						"featuredImg"	=> "assets/img/carnevale-2015_thumb.jpg",
						"eventImg"		=> "assets/img/carnevale-2015.jpg",
						"altImg"		=> "",
						"category"		=> $eventsType[0],
						"eventCategory"	=> $eventsCategory['carnevale'],
						"place"			=> "Ivrea",
						"imgFolder"		=> "assets/img/carnevale-2015/",
						"videos"		=> array(
												"https://www.youtube.com/embed/ZcoySjg_FSU"
											),
						"excerpt"		=>	"Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor",
						"description"	=> "Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam quis risus eget urna mollis ornare vel eu leo."

					),

					"consolato-torino-2015" => array(
						"slug"			=> "",
						"title"			=> "Servizi Consolari in movimento 2015",
						"data"			=> date("jS F, Y", strtotime("31-01-2015")),
						"date"			=> "31-01-2015",
						"stringData"	=> "31 GENNAIO e 01 FEBBRAIO 2015",
						"featuredImg"	=> "assets/img/consolato-2015_thumb.jpg",
						"eventImg"		=> "assets/img/consolato-2015.jpg",
						"altImg"		=> "",
						"category"		=> $eventsType[2],
						"eventCategory"	=> $eventsCategory['consolato'],
						"place"			=> "Torino",
						"imgFolder"		=> "assets/img/consolato-torino-2015/",
						"videos"		=> array(
												"https://www.youtube.com/embed/QgiHPo4pMNg"
											),
						"excerpt"		=>	"Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor",
						"description"	=> "Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam quis risus eget urna mollis ornare vel eu leo."

					),

				);

?>