<?php 

	define("BRAND", "TIP");
	define("EMAIL", "<script language=\"JavaScript\">
						var username = \"thai.in.piemonte.italy\";
						var hostname = \"gmail.com\";
						var linktext = username + \"@\" + hostname ;
						document.write(\"<a href='\" + \"mail\" + \"to:\" + username + \"@\" + hostname + \"'>\" + linktext + \"</a>\");
					</script>
					<NOSCRIPT>
						<em>Indirizzo Email protetto da JavaScript.<BR>Abilitate JavaScript per poterci contattare.</em>
					</NOSCRIPT>");
	define ("MOBILE", "<span itemprop=\"telephone\"><a href=\"tel:+393934199870\">393.41.99.870</a></span>");
	define ("MOBILETHAI", "<span itemprop=\"telephone\"><a href=\"tel:+393662657224\">366.26.57.224</a></span>");
	define ("PHONE", "<span itemprop=\"telephone\"><a href=\"tel:+390118221913\">011.82.21.913</a></span>");
	
	define ("FACEBOOK", "https://www.facebook.com/pages/Thailandesi-in-Piemonte/796129990424306");
	define ("INSTAGRAM", "https://instagram.com/thailandesiinpiemonte/");
	define ("YOUTUBE", "https://www.youtube.com/channel/UCUBi8lp0WEtynSJ5zyLQCCw");
	
	
	// Strip bad characters function
	// Learn more about preg_replace: http://php.net/manual/en/function.preg-replace.php
	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
		return $output;
	}
	
	
	function getImages($dir)
	{
		# Path to image folder
		$imageFolder = $dir;
		# Show only these file types from the image folder
		$imageTypes = '{*.jpg,*.JPG,*.jpeg,*.JPEG,*.png,*.PNG,*.gif,*.GIF}';
	
		# Add images to array
		$images = glob($imageFolder . $imageTypes, GLOB_BRACE);
	
		# Sort images by name
		$sortedImages = $images;
		natsort($sortedImages);
		
		$imageData = array (); //Array of pair image full name - image thumbnail
		$imagesList = array (); //List of all pair images
		$i = 0;

		foreach ($sortedImages as $image) {
			
	    	# Get the name of the image, stripped from image folder path
			$name = substr($image, strlen($imageFolder));

			//If the name of image contain the substring "thumb" is a "thumbnail"
			if (strpos($name, "thumb") == true) {
				$imageData['thumb'] = $name;
			}
			else {
				$imageData['imgFull'] = $name;
			}
			$i++;
			
			// If a pair is formed then save it to the $imageList array
			if ( $i == 2) {
				$i = 0;
				$imagesList [] = $imageData;
			}
		}

		return $imagesList;
	}
	
	function getThaiMonth($month)
	{
		switch($month) 
		{ 
		    case "01" : 
		        $monthName = "มกราคม";
		        break;
		    case "02" : 
		        $monthName = "กุมภาพันธ์";
		        break;
		    case "03" : 
		        $monthName = "มีนาคม";
		        break;
		    case "04" : 
		        $monthName = "เมษายน";
		        break;
		    case "05" : 
		        $monthName = "พฤษภาคม";
		        break;
		    case "06" : 
		        $monthName = "มิถุนายน";
		        break;
		    case "07" : 
		        $monthName = "กรกฎาคม";
		        break;
		    case "08" : 
		        $monthName = "สิงหาคม";
		        break;
		    case "09" : 
		        $monthName = "กันยายน";
		        break;
		    case "10" : 
		        $monthName = "ตุลาคม";
		        break;
		    case "11" : 
		        $monthName = "พฤศจิกายน";
		        break;
		    case "12" : 
		        $monthName = "ธันวาคม";
		        break;
		} 
		
		return $monthName;
	}
	
	
	function getThaiDay($day)
	{
		switch($day) 
		{ 
		    case "Sunday" : 
		        $dayName = "วันอาทิตย์";
		        break;
		    case "Monday" : 
		        $dayName = "วันจันทร์";
		        break;
		    case "Tuesday" : 
		        $dayName = "วันอังคาร";
		        break;
		    case "Wednesday" : 
		        $dayName = "วันพุธ";
		        break;
		    case "Thursday" : 
		        $dayName = "วันพฤหัสบดี";
		        break;
		    case "Friday" : 
		        $dayName = "วันศุกร์";
		        break;
		    case "Saturday" : 
		        $dayName = "วันเสาร์";
		        break;
		} 
		
		return $dayName;
	}
	
	function getThaiYear($gregorianYear){
		return 543+$gregorianYear;
	}

	
?>