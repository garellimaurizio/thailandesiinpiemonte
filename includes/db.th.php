<?php
	
	include('db.php');
	
	setlocale(LC_TIME, 'th', 'th_TH.utf8');
	
	define("IMAGES", "รูปภาพ");
	define("VIDEOS", "คลิป");
	
	
	$pages = array (
					"home" 			=> array (
												"description" => "Benvenuti sul sito dell’Associazione Thailandesi In Piemonte. Siamo un'associazione di cittadini thailandesi residenti in Piemonte. Fondata nel 2015 l'associazione ha l'obiettivo di fornire supporto ai nostri concittadini che si trovano in difficoltà e di diffondere la nostra cultura sul territorio italiano e viceversa. Abbiamo al momento XXX membri che partecipano attivamente alle nostre attività e condividono i loro interessi riguardo la cultura Thailandese."
											),
					"next_event"	=> array (
												"sectionTitle" => "อีเว้นท์หน้า"
											),
					"past_events"	=> array (
												"category" => "หมวดหมู่",
												"readMore" => "อ่านต่อ"
											),
					"organization-chart"	=> array (
												"sectionTitle" => "ผังค์องค์กร"
											),
					"about"			=> array (
												"sectionTitle" => "เกี่ยวกับเรา"
											),
					"events"		=> array (
												"sectionTitle" 	=> "อีเว้นท์",
												"readMore" 		=> "อ่านต่อ"
											),
					"events_sidebar"		=> array (
												"events" 	=> "เหตุการณ์ต่างๆ",
												"category" 	=> "หมวดหมู่",
												"archive" 	=> "archive"
											),
					"images"		=> array (
												"sectionTitle" => "รูปภาพ"
											),
					"videos"			=> array (
												"sectionTitle" => "คลิป"
											),
					"contacts"			=> array (
												"sectionTitle" 	=> "ติดต่อเรา",
												"text" 			=> "Contattateci per qualsiasi informazione sull'associazione o sui nostri eventi, faremo il possibile per soddisfare le vostre richieste.",
												"phone" 		=> "Tel.:",
												"email" 		=> "Email:",
												"facebook"		=> "Facebook",
												"instagram"		=> "Instagram",
												"youtube"		=> "Youtube",
												"place"			=> "ที่ตั้งชมรมฯ"
											),
					"footer"			=> array (
												"contactUs" 	=> "ติดต่อเรา",
												"followUs"		=> "ช่องทางการติอตาม"
											),
								
					);
	
		
	// Navigation Menu Items
	
	$navItems = array(
				
					"home" => array(
									"slug"	=> "index.php",
									"title"	=> "หน้าหลัก",
									"dropdown" => false
									),
				
					"about" => array(
									"slug"	=> array (
														array(
																"slug"	=> "about.php",
																"title"	=> "เกี่ยวกับเรา",
																"dropdown" => false
															),
														array(
																"slug"	=> "organization-chart.php",
																"title"	=> "ผังองค์กร",
																"dropdown" => false
															),
														),
						
									"title"	=> "เกี่ยวกับเรา",
									"dropdown" => true
									),
					
					"events" => array(
										"slug"	=> "events.php",
										"title"	=> "อีเว้นท์",
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
																	"title"	=> "รูปภาพ",
																	"dropdown" => false
																),
															array(
																	"slug"	=> "videos.php",
																	"title"	=> "คลิป",
																	"dropdown" => false
																),
														),
										"title"	=> "แกลเลอรี่",
										"dropdown" => true
										),
					
					"contacts" => array(
										"slug"	=> "contacts.php",
										"title"	=> "ติดต่อเรา",
										"dropdown" => false
									),
				
				);
	
	$about = array(
						"intro1" 	=> "<h5 class=\"subtitle\">ความเป็นมาโดยสังเขป</h5><p>ในแคว้นปิเอมอนเตมีคนไทยเข้ามาพำนักอาศัยอยู่เป็นจำนวนมากพอสมควรเข้ามาหลายรูปแบบ เช่น มาเพื่อการศึกษา ทำงาน สมรสกับชาวอิตาเลียน และเมื่อปี พ.ศ.2555 ได้มีกลุ่มคนไทยได้รวมตัวกันจัดงานสงกรานต์ขึ้นเมื่อเดือนเมษายน งานลอยกระทง และกิจกรรมอื่นๆเรื่อยมา การรวมกลุ่มในการจัดกิจกรรมดังกล่าวทำให้คนไทยได้รู้จักกัน พบปะพูดคุยแลกเปลี่ยนความรู้และประสบการณ์กันมากขึ้นจากการพูดคุยกันมีคนไทยจำนวนไม่น้อยที่ประสบปัญหาในการใช้ชีวิตในสังคมอิตาเลียน เช่น ปัญหาครอบครัว ปัญหาความเป็นอยู่ การดูแลสุขภาพ การว่าจ้างงาน เนื่องจากขาดความรู้ความเข้าใจด้านภาษา วัฒนธรรม กฎหมาย ส่งผลให้ทางกลุ่มคนไทยเกิดความคิดที่จะต้องผนึกกำลังของคนไทยในแคว้นปิเอมอนเต เพื่อให้ความร่วมมือและช่วยเหลือเพื่อนคนไทยในการแก้ปัญหาต่าง ๆ แลกเปลี่ยนความรู้ความคิดเห็นและประสบการณ์ในการดำรงชีวิตและเพื่อประสานงานกับหน่วยงานภาครัฐบาลและเอกชนทั้งในประเทศอิตาลีและประเทศไทย จึงได้มีการรวมตัวของคนไทยจัดตั้ง “ชมรมชาวไทยในในปิเอมอนเตอิตาลี” ขึ้น โดยได้รับความร่วมมือจากสถานเอกอัครราชทูตไทย ณ กรุงโรมโดยประกาศการตั้งชมรมชาวไทยในปิเอมอนเตอิตาลีอย่างเป็นทางการเมื่อวันที่ 22 พฤศจิกายน 2557</p>",
						"intro2" 	=> "<h5 class=\"subtitle\">โครงการและกิจกรรม</h5>",
						"point11" 	=> "<li>โครงการให้ความรู้ด้านกฎหมายระหว่างประเทศ จากสำนักงานอัยการสูงสุด เดินทางมาให้ความรู้กับคนไทยใน แคว้นปิเอมอนเต ณ เมืองตูริน  เมื่อวันที่ 22 พฤศจิกายน 2557</li>",
						"point22" 	=> "<li>ประสานงานและต้อนรับคณะกงสุลสัญจร ณ เมืองตูริน ระหว่างวันที่ 31 มกราคม 2558 – 1 กุมภาพันธ์ 2558 </li>",
						"point33" 	=> "<li>ให้คำปรึกษาปัญหาด้านต่าง ๆโดยการพูดคุย ผ่านทางเฟสบุ๊ค และ/หรือช่องทางอื่นตามความเหมาะสม</li>",
						"point44" 	=> "<li>จัดกิจกรรมตามเทศกาลต่าง ๆ เช่น วันเฉลิมพระชนพรรษา วันสงกรานต์ วันลอยกระทง วันปีใหม่ ฯลฯ</li>",
						"point55" 	=> "<li>แนะนำโรงเรียนสอนภาษาอิตาเลียนขั้นพื้นฐาน</li>",
						"point66" 	=> "<li>โครงการอื่น ๆ ในอนาคตเมื่อชมรมฯมีความพร้อมและโอกาสที่เหมาะสม เช่น สอนภาษาไทยให้เด็ก ๆ หรือ ผู้สนใจ, สอนภาษาอิตาเลียนเบื้องต้นให้คนไทยที่มาใหม่ก่อนเข้าเรียนจากโรงเรียน, สอนรำไทย, สอนทำอาหาร ไทย ฯลฯ</li>",
						
						"intro3" 	=> "<h5 class=\"subtitle\">การดำเนินการ</h5><p>การดำเนินงานของชมรมฯ จะต้องไม่ขัดต่อกฎหมาย ศีลธรรมอันดีงาม และไม่เป็นไปเพื่อพรรคการเมืองใดการเมืองหนึ่ง หรือเพื่อลัทธิศาสนาใด ไม่แสวงหาผลประโยชน์และกำไร หรือหาผลประโยชน์มาแบ่งปันกันระหว่างสมาชิก ไม่สะสมเงินรายได้ โดยจะนำเงินรายได้บางส่วนไปเป็นค่าอาหารกลางวันแก่เด็กยากจน ทั้งนี้ทางชมรมฯมองเห็นความสำคัญของเด็ก เพราะเด็กคืออนาคตของชาติ หรือการกุศลอื่น ๆ ตามความเหมาะสม “แบ่งปัน ช่วยเหลือเกื้อกูลซึ่งกันและกัน”</p>",
						"intro4" 	=> "<h5 class=\"subtitle\">สมาชิกชมรมฯ</h5><p>คนไทย หรือบุคคลอื่นที่สนใจ สมัครเป็นสมาชิกชมรมฯโดยเสียค่าธรรมเนียมคนละ 5 ยูโร/ปี สมัครเป็นสมาชิกชมรมฯได้ที่ ".EMAIL."</p>",
						
#						"end" 	 	=> "Vi aspettiamo numerosi per far parte della nostra Associazione Thailandesi in Piemonte!",

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
						"name"		=> "คุณพูนทรัพย์  วงศ์น้อย",
						"role"		=> "ประธานชมรมฯ",
						"imgPath"	=> "assets/img/chairman.jpg", 
						"imgAlt"	=> "คุุณพูนทรัพย์  วงศ์น้อย"
					),

				array(
						"name"		=> "คุณณัฐ  จ้อยจุฬี",
						"role"		=> "รองประธานชมรมฯ ",
						"imgPath"	=> "assets/img/viceChairman.jpg", 
						"imgAlt"	=> "คุณณัฐ  จ้อยจุฬี"
					),

				array(
						"name"		=> "คุณณรงค์  อาญาเมือง",
						"role"		=> "ที่ปรึกษา",
						"imgPath"	=> "assets/img/advisor.jpg", 
						"imgAlt"	=> "คุณณรงค์  อาญาเมือง"
					),	
					
				array(
						"name"		=> "คุณศักดินา รักษ์อุดมการณ์",
						"role"		=> "ที่ปรึกษา",
						"imgPath"	=> "assets/img/counselor1.jpg", 
						"imgAlt"	=> "คุณศักดินา รักษ์อุดมการณ์"
					),
					
				array(
						"name"		=> "คุณวาสนา บุญช่วย",
						"role"		=> "ที่ปรึกษา,กิจกรรมสันทนาการ สถานที่ อาหารและเครื่องดื่ม",
						"imgPath"	=> "assets/img/counselor2.jpg", 
						"imgAlt"	=> "คุณวาสนา บุญช่วย"
					),	
					
				array(
						"name"		=> "คุณนฤมล ณ นคร",
						"role"		=> "ที่ปรึกษา",
						"imgPath"	=> "assets/img/counselor3.jpg", 
						"imgAlt"	=> "คุณนฤมล ณ นคร"
					),	
					
				array(
						"name"		=> "คุณอารียา  วานมนตรี ",
						"role"		=> "เลขานุการและเหรัญญิก",
						"imgPath"	=> "assets/img/secretary1.jpg", 
						"imgAlt"	=> "คุณอารียา  วานมนตรี"
					),
					 
				array(
						"name"		=> "คุณวรวัลย์  วรวิเศษ",
						"role"		=> "เลขานุการและเหรัญญิก",
						"imgPath"	=> "assets/img/secretary2.jpg", 
						"imgAlt"	=> "คุณวรวัลย์  วรวิเศษ"
					),
				array(
						"name"		=> "คุณราตรี เจษฏาสิทธิ์",
						"role"		=> "เลขานุการและเหรัญญิก",
						"imgPath"	=> "assets/img/secretary4.jpg", 
						"imgAlt"	=> "คุณราตรี เจษฏาสิทธิ์"
					),
				array(
						"name"		=> "คุณชุติมา  กำจัดภัย",
						"role"		=> "เลขานุการและเหรัญญิก,กิจกรรมสันทนาการ สถานที่ อาหารและเครื่องดื่ม",
						"imgPath"	=> "assets/img/secretary3.jpg", 
						"imgAlt"	=> "คุณชุติมา  กำจัดภัย"
					),
			
				array(
						"name"		=> "คุณสมใจ  ปาโรดิ",
						"role"		=> "ประชาสัมพันธ์และสารสนเทศ,กิจกรรมสันทนาการ สถานที่ อาหารและเครื่องดื่ม",
						"imgPath"	=> "assets/img/pr2.jpg", 
						"imgAlt"	=> "คุณสมใจ  ปาโรดิ"
					),
				array(
						"name"		=> "คุณปานใจ ไชยจรัส",
						"role"		=> "ประชาสัมพันธ์และสารสนเทศ",
						"imgPath"	=> "assets/img/pr10.jpg", 
						"imgAlt"	=> "คุณปานใจ ไชยจรัส"
					),
				array(
						"name"		=> "คุณมารศรี อังคณาวิทยา",
						"role"		=> "ประชาสัมพันธ์และสารสนเทศ",
						"imgPath"	=> "assets/img/pr11.jpg", 
						"imgAlt"	=> "คุณมารศรี อังคณาวิทยา"
					),
				array(
						"name"		=> "คุณัชราภรณ์  ศิริวรรณา",
						"role"		=> "ประชาสัมพันธ์และสารสนเทศ",
						"imgPath"	=> "assets/img/pr3.jpg", 
						"imgAlt"	=> "คุณวัราภรณ์  ศิริวรรณา"
					),

				array(
						"name"		=> "คุณดารุณี  ไชยศิริ",
						"role"		=> "ประชาสัมพันธ์และสารสนเทศ",
						"imgPath"	=> "assets/img/pr9.jpg", 
						"imgAlt"	=> "คุณดารุณี  ไชยศิริ"
					),
					
				array(
						"name"		=> "คุณคมขำ  บุญหวาน",
						"role"		=> "กิจกรรมสันทนาการ สถานที่ อาหารและเครื่องดื่ม",
						"imgPath"	=> "assets/img/pr7.jpg", 
						"imgAlt"	=> "คุณคมขำ  บุญหวาน"
					),

				array(
						"name"		=> "คุณปวีณา  เอี่ยมสำอางค์ ",
						"role"		=> "กิจกรรมสันทนาการ สถานที่ อาหารและเครื่องดื่ม",
						"imgPath"	=> "assets/img/coordinator1.jpg", 
						"imgAlt"	=> "คุณปวีณา  เอี่ยมสำอางค์"
					),
				array(
						"name"		=> "คุณนรินธร  เพบขุนทด",
						"role"		=> "กิจกรรมสันทนาการ สถานที่ อาหารและเครื่องดื่ม",
						"imgPath"	=> "assets/img/coordinator2.jpg", 
						"imgAlt"	=> "คุณนรินธร  เพบขุนทด"
					),
				array(
						"name"		=> "คุณบุญปลูก  โพธิ์พรม",
						"role"		=> "กิจกรรมสันทนาการ สถานที่ อาหารและเครื่องดื่ม ",
						"imgPath"	=> "assets/img/recreation1.jpg", 
						"imgAlt"	=> "คุณบุญปลูก  โพธิ์พรม"
					),
				array(
						"name"		=> "คุณสรวงรัตน์  กองสิน",
						"role"		=> "กิจกรรมสันทนาการ สถานที่ อาหารและเครื่องดื่ม ",
						"imgPath"	=> "assets/img/recreation2.jpg", 
						"imgAlt"	=> "คุณสรวงรัตน์  กองสิน"
					),
				
				array(
						"name"		=> "คุณทัศนาลัย  ขวัญศรี",
						"role"		=> "กิจกรรมสันทนาการ สถานที่ อาหารและเครื่องดื่ม ",
						"imgPath"	=> "assets/img/recreation4.jpg", 
						"imgAlt"	=> "คุณทัศนาลัย  ขวัญศรี"
					),
				
				array(
						"name"		=> "คุณดวงเดือน ศรีวิชัย",
						"role"		=> "กิจกรรมสันทนาการ สถานที่ อาหารและเครื่องดื่ม",
						"imgPath"	=> "assets/img/recreation5.jpg", 
						"imgAlt"	=> "คุณดวงเดือน ศรีวิชัย"
					),
				array(
						"name"		=> "คุณธิดารัตน์ หล่าบุตรศรี",
						"role"		=> "กิจกรรมสันทนาการ สถานที่ อาหารและเครื่องดื่ม",
						"imgPath"	=> "assets/img/recreation6.jpg", 
						"imgAlt"	=> ""
					),
			
				);
				
				
	$eventsCategory = array (
						"songkran"	=> "สืบสานประเพณีสงกรานต์", 
						"festival-oriente"	=> "Festival dell'Oriente",
						"carnevale"	=> "เทศกาลสนุกสนาน",
						"expo"	=> "Expo",
						);
	
#	$eventsType = array ("งานเฉลิมฉลอง", "การแสดง", "พบปะพูดคุย");
	$eventsType = array ("งานเฉลิมฉลอง", "การแสดง", "พบปะพูดคุย");
	
	$nextEvent = array (
								"slug"			=> "",
								"title"			=> "ขอเชิญร่วมงาน ร่วมสืบสานประเพณีสงกรานต์ 2558",
								"data"			=> date("jS F, Y", strtotime("26-04-2558")),
								"date"			=> "26-04-2558",
								"stringData"	=> "",
								"featuredImg"	=> "assets/img/songkran.jpg",
								"altImg"		=> "Group of people gently sprinkled water on each other Songkran Festival",
								"category"		=> $eventsType[0],
								"eventCategory"	=> $eventsCategory['songkran'],
								"place"			=> "<a href=\"https://www.google.it/maps/place/Via+Salerno,+55,+10152+Torino/@45.08539,7.6774786,17z/\">\"LAS VEGAS\" in Via Salerno 55 - Torino</a>",
								"text"			=> "<p>เวลา 10.30 – 18.00 น. สถานที่ \"LAS VEGAS\" <a href=\"https://www.google.it/maps/place/Via+Salerno,+55,+10152+Torino/@45.08539,7.6774786,17z/\">Via Salerno 55 - Torino</a></p>
<p>เพื่อเป็นการสืบสานและอนุรักษ์ประเพณีที่ดีงามให้คงอยู่สืบไปโดยภายในงานมีการ จัดกิจกรรมดังนี้</p>
													<ol>
														<li>ประธานในพิธีกล่าวเปิดงาน</li>
														<li>สรงน้ำพระพุทธรูป รดน้ำดำหัวเพื่อความ เป็นศิริมงคล</li>
														<li>รับประทานอาหารร่วมกัน</li>
														<li>การประกวดเทพีสงกรานต์รุ่นเล็กและรุ่น  ใหญ่</li>
														<li>การเดินแฟชั่นโชว์ชุดไทย</li>
													</ol>
													<BR />
													<p>ที่นั่งมีจำนวนจำกัด.</p>
													<p>สอบถามข้อมูลเพิ่มเติมและสำรองที่นั่งได้ที่เบอร์:</p>
													<p>Tel.: ". MOBILETHAI."</p>
													<p>Email: ". EMAIL ."</p>
													<p>Facebook: <a href=\"".FACEBOOK."\" target=\"_blank\">Thailandesi in Piemonte</a></p>",
						);
		
	$events =	array(
					"expo-2015" => array(
						"slug"			=> "",
						"title"			=> "ร่วมงาน Expo Milano 2015",
						"data"			=> date("jS F, Y", strtotime("31-05-2558")),
						"date"			=> "31-05-2558",
						"stringData"	=> "31 พฤษภาคม 2558",
						"featuredImg"	=> "assets/img/expo-2015_thumb.jpg",
						"eventImg"		=> "assets/img/expo-2015.jpg",
						"altImg"		=> "",
						"category"		=> $eventsType[1],
						"eventCategory"	=> $eventsCategory['expo'],
						"place"			=> "Milano",
						"imgFolder"		=> "assets/img/expo-2015/",
						"videos"		=> array(),
						"excerpt"		=>	"ชมรมชาวไทยในแคว้นปิเอมอนเต อิตาลี ได้รับโอกาสให้ไปแสดงการรำไทย ในงาน Expo Milano 2015 เมื่อวันที่ 31 พฤษภาคม 2558 ณ เมือง Rho, Milano ประเทศอิตาลี ",
						"description"	=> "<p>ชมรมชาวไทยในแคว้นปิเอมอนเต อิตาลี ได้รับโอกาสให้ไปแสดงการรำไทย ในงาน Expo Milano 2015 เมื่อวันที่ 31 พฤษภาคม 2558 ณ เมือง Rho, Milano ประเทศอิตาลี จุดประสงค์สำคัญของชมรมฯที่ไปร่วมงาน Expoในครั้งนี้เพื่อเผยแพร่ศิลปะวัฒนธรรมไทยจากกลุ่มแม่บ้านชมรมชาวไทยแคว้นปิเอมอนเต อิตาลี  ทางชมรมฯได้ทำการแสดงรำไทย 2 ชุด คือ </p><p>1.รำรวมใจไทย 4 ภาค   รำโดย  คุณบุญปลูก  โพธิ์พรม  คุณชุติมา  กำจัดภัย   คุณวรวัลย์  วรวิเศษ  คุณนรินธร  เพบขุนทด  คุณสรวงรัตน์  กองสิน  คุณธัญลักษ์  แก้วกล้า  คุณรัตนา  ทองละมุล  และ คุณดาราวดี  พิบูลย์</p><p>2.รำสาวกันตรึม รำโดย  คุณบุญปลูก  โพธิ์พรม  คุณชุติมา  กำจัดภัย   คุณวรวัลย์  วรวิเศษ  คุณนรินธร เพบขุนทด คุณสรวงรัตน์  กองสิน คุณธัญลักษ์  แก้วกล้า  คุณรัตนา  ทองละมุล  และ คุณดาราวดี  พิบูลย์  </p><p>ซึ่งการแสดงทั้ง 2 ชุด ได้รับความสนใจจากทางผู้ชมที่เข้ามาเยี่ยมชมเป็นอย่างมาก อีกทั้งได้ให้ผู้ชมมาร่วมรำอีก1เพลงอย่างสนุกสนาน ชมรมฯได้รับการต้อนจากคณะผู้รับผิดชอบ Thai Pavilionอย่างอบอุ่นและเป็นมิตรที่ดีด้วยรอยยิ้ม  ชมรมฯรู้สึกเป็นเกียรติอย่างยิ่งที่ได้มีส่วนร่วมในการแสดงในงาน Expo ในครั้งนี้</p><p>คุณสาธิต มณีผาย ผู้อำนวยการอาคารแสดงประเทศไทย (Pavilion Director) ได้มอบเข็มกลัดพญานาคแก่สมาชิกทุกคนของชมรมฯที่มาร่วมงานในวันนั้น   และอาหารไทยพร้อมเครื่องดื่มผลไม้ไทย นอกจากนั้น คุณสาธิต  มณีผาย ยังได้กล่าวถึงความประทับใจกับการแสดงทั้งสองชุด โดยเฉพาะอย่างยิ่งชุดรวมใจไทยสี่ภาคทำให้คุณสาธิต  มณีผาย รู้สึกปราบปลื้มตื้นตันใจเป็นอย่างมาก  ซึ่งสอดคล้องกับวัตถุประสงค์ของ Thai Pavilion ที่ตั้งไว้  เพื่อเทอดพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัวให้ชาวไทยและชาวต่างชาติได้รับทราบ</p><p>กิจกรรมครั้งนี้ถือเป็นประสบการณ์ที่มีคุณค่าอีกกิจกรรมหนึ่งของชมรมฯ  และเหนือสิ่งอื่นใดคือความสมัคคีของสมาชิกในชมรมฯที่ให้ความร่วมมือและเป็นน้ำหนึ่งใจเดียวกัน ทำให้งานครั้งนี้สำเร็จลุล่วงไปด้วยดี</p><p>ชมรมฯใคร่ขอขอบพระคุณ คุณโอฬาร พิทักษ์ (ท่านอธิบดีส่งเสริมการเกษตร)  คุณสมพงษ์  นิ่มเชื้อ  อัครราชทูต (ฝ่ายเกษตร) สำนักงานที่ปรึกษาการเกษตรต่างประเทศ ประจำกรุงโรม คุณสาธิต มณีผาย ผู้อำนวยการอาคารแสดงประเทศไทย (Pavilion Director) คุณธาวิน ธารากุลทิพย์ (ผู้จัดการอาคารแสดงไทย Pavilion Manager) และทีมงานใน Thai Pavilion ทุก ๆ ท่าน  ที่ให้โอกาสชมรมฯได้เข้าร่วมกิจกรรมในครั้งนี้ </p>"
					),
					"songkran-2015" => array(
						"slug"			=> "",
						"title"			=> "สืบสานประเพณีสงกรานต์ 2558",
						"data"			=> date("jS F, Y", strtotime("26-04-2558")),
						"date"			=> "26-04-2558",
						"stringData"	=> "26 เมษายน 2558",
						"featuredImg"	=> "assets/img/songkran-2015_thumb.jpg",
						"eventImg"		=> "assets/img/songkran-2015.jpg",
						"altImg"		=> "",
						"category"		=> $eventsType[0],
						"eventCategory"	=> $eventsCategory['songkran'],
						"place"			=> "Torino",
						"imgFolder"		=> "assets/img/songkran-2015/",
						"videos"		=> array(),
						"excerpt"		=>	"ชมรมชาวไทยแคว้นปิเอมอนเต ขอนำเสนอภาพบรรยากาศและภาพผู้ให้เกียรติมาร่วมงานสงกรานต์หรือวันขึ้นปีใหม่ไทยที่ได้จัดขึ้นไปแล้วเมื่อวันที่ 26 เมษายนที่ผ่านมา ",
						"description"	=> "<p>ชมรมชาวไทยแคว้นปิเอมอนเต ขอนำเสนอภาพบรรยากาศและภาพผู้ให้เกียรติมาร่วมงานสงกรานต์หรือวันขึ้นปีใหม่ไทยที่ได้จัดขึ้นไปแล้วเมื่อวันที่ 26 เมษายนที่ผ่านมา</p><p>ช่วงเช้าแขกที่มาร่วมงานเริ่มทยอยเข้ามาในงาน กันตั้งแต่ 9 โมงกว่า ทำบุญ ตักบาตร รับศีล รับพรจากพระสงฆ์ แล้วก็เริ่มรับประทานอาหารเที่ยงที่ทุกคนเตรียมมาทานร่วมกันอย่างเอร็ดอร่อย บ้างก็พูดคุย ทักทาย สอบถามสารทุกข์สุขดิบกันอย่างเป็นกันเอง เป็นบรรยากาศอบอุ่นเมื่อพี่น้องชาวไทยในต่างแดนได้มาเจอกัน</p><p>ตามด้วยกิจกรรมที่ทางชมรมจัดขึ้น ไม่ว่าจะเป็นการฟ้อนรำ จับฉลากหางบัตรเข้างานเพื่อให้ผู้ร่วมงานได้มีส่วนร่วมลุ้นรางวัลหมายเลขหางบัตรของตนเอง การประกวดหนูน้อยสงกรานต์และนางสงกรานต์ประจำปี 2558 อีกทั้งกิจกรรมการร่วมเต้นรำหน้าเวที ซึ่งเป็นบรรยากาศสนุกสนานทั้งชาวไทยและชางอิตาเลี่ยนที่มาร่วมงานกันถ้วนหน้า</p><p>และในการนี้ทางชมรมฯขอขอบพระคุณท่านกงสุลกิตติมศักดิ์ ประจำเมืองตูริน Dr.Achille Benazzo ที่ให้เกียรติมาร่วมถ่ายรูปกับพวกเราชาวชมรมฯในงานนี้ด้วย</p><p>จุดมุ่งหมายของการจัดงานของชมรมชาวไทยแคว้นปิเอมอนเตครั้งนี้เพื่อสืบสานเผยแพร่ประเพณีไทยให้สืบต่อไป รวมทั้งสร้างความสามัคคีการรวมตัวปรองดองกันในกลุ่มพี่น้องคนไทยในแคว้นปิเอมอนเตและบริเวณใกล้เคียงได้มีการจัดกิจกรรมต่อกันเพื่อคนไทย และได้รำลึกในบ้านเกิดของตนเอง</p><p>ทางชมรมหวังว่า จะได้รับโอกาสและความร่วมมือ ร่วมใจของพี่น้องชาวไทยในโอกาสอื่นๆ สืบไป ขอบคุณค่ะ</p>"

					),

					"festival-oriente-2015" => array(
						"slug"			=> "festival-oriente-2015.php",
						"title"			=> "Festival dell'Oriente 2015",
						"data"			=> date("jS F, Y", strtotime("20-03-2558")),
						"date"			=> "20-03-2558",
						"stringData"	=> "20-21-22 e 27-28-29 มีนาคม 2558",
						"featuredImg"	=> "assets/img/festival-2015.jpg",
						"eventImg"		=> "assets/img/festival-2015.jpg",
						"altImg"		=> "",
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
						"excerpt"		=>	"งาน Festival dell'Oriente เป็นงานแสดงศิลปวัฒนธรรมของหลายชาติในกลุ่มประเทศเอเซีย อาทิเช่น ญี่ปุ่น อินเดีย เกาหลีใต้ จีน พม่า อินโดนีเซีย และไทย โดยในงานจะมีกิจกรรมและบูธขายของจากหลายประเทศในเอเซีย รวมทั้งบูธขายอาหาร ของตกแต่งเฟอร์นิเจอร์และเครื่องประดับ เป็นต้น",
						"description"			=> "งาน Festival dell'Oriente เป็นงานแสดงศิลปวัฒนธรรมของหลายชาติในกลุ่มประเทศเอเซีย อาทิเช่น ญี่ปุ่น อินเดีย เกาหลีใต้ จีน พม่า อินโดนีเซีย และไทย โดยในงานจะมีกิจกรรมและบูธขายของจากหลายประเทศในเอเซีย รวมทั้งบูธขายอาหาร ของตกแต่งเฟอร์นิเจอร์และเครื่องประดับ เป็นต้น</p><p>ในปี 2557-2558 Festival dell'Oriente ได้จัดกิจกรรมและการแสดงเผยแพร่ศิลปวัฒนธรรมไทยในหลายเมืองสำคัญๆในอิตาลี อาทิเช่น มิลาน โรม เฟอร์ราร่า ปาโดว่า มีผู้เข้าร่วมงานเป็นจำนวนมากทุกเมืองที่จัดแสดงประมาณ 5,000 คน/สัปดาห์</p><p>ชมรมชาวไทยในปิเอมอนเตได้รับเกียรติให้เข้าร่วมกิจกรรมเผยแพร่ศิลปะวัฒนธรรมไทย ในงานมหกรรมสินค้าอุปโภคบริโภคของประเทศต่างๆเอเชีย ภายใต้ชืี่องาน Festival dell' oriente ที่ Lingotto Fiere, Torino, Italy. งานนี้จะจัดขึ้นระหว่างวันที่ 20-22 และ 27-29 เดือนมีนาคม และเพิ่งจะจัดขึ้นเป็นครั้งแรกที่ Torino</p><p>โดยเฉพาะศาลาไทย ที่ทางชมรมชาวไทยในแคว้นปิเอมอนเตได้ภูมิใจนำเสนอ นับว่าเป็นที่สนใจและดึงดูดสายตาของแขกที่มาเที่ยวชมงานเป็นอย่างมาก และนอกจากจะมีศาลาไทยที่ตั้งสวยโดดเด่นเป็นสง่าแล้ว ทางชมรมยังได้จัดให้มีการแสดงด้านหน้าศาลาสับเปลี่ยนหมุนเวียนกัน ไม่ว่าจะเป็นการร่ายรำไทยในชุดต่างๆ ศิลปะการรำแม่ไม้มวยไทยการต่อสู้มวยไทย อีกกิจกรรมหนึ่งที่ได้รับความสนใจไม่แพ้กันคือจุดให้ความรู้และให้บริการการนวดแผนไทย ซึ่งทางชมรมเราก็ได้ผู้ที่มีความรู้ความสามารถเฉพาะด้านมาให้ความรู้และบริการกับผู้ที่สนใจ นอกจากนี้ยังมีการแสดงนาฏศิลป์ไทยจากสมาคมสวัสดีรำไทย และมีการออกบูธอาหารไทย จากประเทศเยอรมันนี โดยความร่วมมือของพี่น้องชาวไทยจากสวัสดีลอมบาร์เดีย พร้อมทั้งมีการโชว์การแกะสลักผลไม้ การจัดทำดอกไม้ประดิษฐ์แบบไทย เป็นต้น"
					),

					"carnevale-2015" => array(
						"slug"			=> "",
						"title"			=> "เทศกาลปาส้ม 2558",
						"data"			=> date("jS F, Y", strtotime("15-02-2558")),
						"date"			=> "15-02-2558",
						"stringData"	=> "15-กุมภาพันธ์-2558",
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
						"excerpt"		=>	"ทางชมรมชาวไทยในแคว้นปิเอมอนเต ประเทศอิตาลี ได้เก็บภาพบรรยากาศงานเทศกาลปาส้ม หรือที่รู้จักกันในชื่อเทศกาล La battaglia delle arance ที่เมือง Ivrea ในแคว้นปิเอมอนเต ประเทศอิตาลี มาให้ชมกันค่ะ",
						"description"	=> "<p>ทางชมรมชาวไทยในแคว้นปิเอมอนเต ประเทศอิตาลี ได้เก็บภาพบรรยากาศงานเทศกาลปาส้ม หรือที่รู้จักกันในชื่อเทศกาล La battaglia delle arance ที่เมือง Ivrea ในแคว้นปิเอมอนเต ประเทศอิตาลี มาให้ชมกันค่ะ ชมรมฯมีวัตถุประสงค์เพื่อจะนำเสนอข้อมูลและข่าวสารต่าง ๆ ทั้งในเขตปิเอมอนเต ประเทศอิตาลี และข้อมูลข่าวสารเกี่ยวกับประเทศไทยให้พี่น้องคนไทย และชาวอิตาลี ได้รู้จักและเข้าใจความเป็นไทยและวิถีชีวิตความเป็นอยู่ของคนอิตาลีในแคว้นปิเอมอนเตกันมากขึ้น โดยแนะนำกิจกรรมและงานเทศกาล และสถานที่สำคัญต่าง ๆ ของแต่ละเมืองในแคว้นปิเอมอนเต โดยกิจกรรมแรกคือ เทศกาลปาส้ม (Carnevale dell’aracia) ที่เมือง Ivreaวันที่ 15 กุมภาพันธ์ 2558 โดยได้รับเกียรติจาก คุณสมจิต  ปานะโปย เป็นแขกรับเชิญเล่าประวัติความเป็นมาและพาเที่ยมชมเทศกาลดังกล่าว</p><p>ประวัติ ที่มาของเทศกาลงานปาส้ม (La battaglia delle arance) </p><p>เทศกาลงานปาส้ม (La battaglia delle arance) เทศกาลนี้จัดขึ้นทุกเดือนกุมภาพันธ์ กำเนิดขึ้นเมื่อหลายศตวรรษก่อน จากการที่ชาวเมืองลุกขึ้นต่อต้านผู้ปกครองนครในขณะนั้น โดยการจับมาตัดศีรษะ ส่วนองครักษ์ทั้งหลายก็ถูกขว้างก้อนหินใส่จนเสียชีวิต แต่ปัจจุบัน เทศกาลนี้หันมาใช้ส้มซึ่งเป็นสัญลักษณ์แทนก้อนหิน เพื่อบรรเทาปัญหาผลผลิตส้มล้นตลาด เทศกาลปาส้มเป็นเทศกาลต่อสู้ด้วยผลไม้ที่ใหญ่ที่สุดในอิตาลีซึ่งจัดขึ้นที่เมือง Ivrea    แคว้น        ปิเอมอนเต ทางตอนเหนือของประเทศอิตาลี ในงานเทศกาลนี้จะประกอบไปด้วยผู้คนที่เข้ามาร่วมงานกว่า 3,000 คน จะมีผู้บังคับม้าให้ลากรถเกวียนที่บรรทุกกลุ่มอาสาสมัครใส่ชุดนวมและหมวกป้องกัน  มาอยู่กลางเมือง แล้วปาส้มระหว่างคนบนรถเกวียนกับคนที่ยืนอยู่ด้านล่างกัน อย่างอลหม่าน เทศกาลนี้มีที่มาจากการที่ชาวเมืองทำการต่อต้านท่านเคาท์ผู้ปกครอง เมืองในช่วงราวคริสต์ศตวรรษที่ 12 ที่มักข่มเหงชาวเมืองด้วยการลักพาตัวหญิงสาวสามัญชน ที่กำลังจะแต่งงานให้ไปเป็นนางสนมของตนเอง จนกระทั่งวันหนึ่งท่านเคาท์ได้ไปลักพาตัว Violetta ลูกสาวเจ้าของโรงโม่ข้าวไป ด้วยความกล้าหาญของ Violetta เธอจึงต่อสู้และสามารถตัดศรีษะของท่านเคาท์นำมาประจาน ทำให้ชาวเมืองต่างยินดี แต่เมื่อทหารทราบข่าวจึงรีบไปจับตัว Violetta ทำให้ชาวเมืองต่างช่วยกันปาหินใส่ทหารเหล่านั้น จนกระทั่งเหตุการณ์ดังกล่าวกลายมาเป็นประเพณีที่ทำกันทุกๆปี เพื่อรำลึกถึงความกล้าหาญของ Violettaที่ได้นำอิสรภาพมาสู่ชาวเมือง โดยในแต่ละปีก่อนถึงงานเทศกาล จะมีการคัดเลือกสาวงามเพื่อให้มารับบทเป็น Violettaและมีการจัดหาอาสาสมัครให้ขึ้นไปบนรถเกวียนเพื่อเป็นตัวแทนทหารท่านเคาท์ </p><p>เครดิตที่มาของงานปาส้ม จาก ฉันรักแปล</p>"

					),

					"consolato-torino-2015" => array(
						"slug"			=> "",
						"title"			=> "งานกงสุลสัญจรและพบปะพี่น้องชาวไทยในแคว้น­ปิเอมอนเต 2558",
						"data"			=> date("jS F, Y", strtotime("31-01-2558")),
						"date"			=> "31-01-2558",
						"stringData"	=> "31 มกราคม - 1 กุมภาพันธ์ 2558",
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
						"excerpt"		=>	"โครงการกงสุลสัญจร โดยสถานเอกอัครราชทูตไทย ประจำกรุงโรม ได้จัดโครงการกงสุลสัญจร ระหว่างวันที่ 31 มกราคม -1กุมภาพันธ์ 2558 ณ เมืองตูริน ",
						"description"	=> "โครงการกงสุลสัญจร โดยสถานเอกอัครราชทูตไทย ประจำกรุงโรม ได้จัดโครงการกงสุลสัญจร ระหว่างวันที่ 31 มกราคม -1กุมภาพันธ์ 2558 ณ เมืองตูริน </p><p>โดยมีการให้บริการด้านการทำหนังสือเดินทาง บัตรประจำตัวประชาชน สูติบัตร ยื่นคำร้องขอใช้สิทธิ์เลือกตั้งนอกราชอาณาจักร และให้คำปรึกษาในเรื่องต่าง ๆ แก่คนไทยที่มาขอรับบริการ และได้จัดให้มีการบรรยายและตอบปัญหาของ notaio Dr.Davide Le Voci และ “วิธีเสริมสร้างคุณค่าให้แก่หญิงไทยในอิตาลี” จากวิทยากรคนไทยที่มีความรู้และประสบการณ์จากแคว้นปิเอมอนเต  ทางชมรมฯได้ทำหน้าที่ประชาสัมพันธ์ให้คนไทยในแคว้นปิเอมอนเต และละแวกใกล้เคียงได้รับทราบกิจกรรมดังกล่าว และมีโอกาสได้ต้อนรับพบปะคณะจากสถานเอกอัครราชทูต เป็นการสร้างความเข้าใจที่ดีระหว่างหน่วยงานราชการกับประชาชน พร้อมทั้งให้ความรู้และแนะนำการดำเนินชีวิตอย่างถูกต้องในต่างประเทศ นอกจากนี้ยังได้ติดต่อประสานงานให้ความร่วมมือในการติดต่อกับคนไทยที่มาใช้บริการ  และอำนวยความสะดวกด้านต่าง ๆ ให้กับคณะกงสุล"

					),
				
				);

?>