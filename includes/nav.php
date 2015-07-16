	<?php
		
		$i = 0;
		$lastID = "";
		$last_index = count($navItems) - 1;

		foreach ($navItems as $item) {
			
			if ($i == $last_index)
			{
				$lastID=" id=\"last-div\"";
			}
			
			if ($item[dropdown])
			{
				$dropdownList = array();
				$dropdownList[0] = "<li class=\"dropdown\">";
				$dropdownList[1] = "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">$item[title] <span class=\"caret\"></span></a>";
				$dropdownList[2] = "<ul class=\"dropdown-menu\" role=\"menu\">";
				foreach ($item[slug] as $dropdownItem) {
					
					$uri = substr($dropdownItem[slug], 0, strpos($dropdownItem[slug], "."));//Estrae il nome del file dal db ed elimina l'estensione
					$active = echoActiveClassIfRequestMatches($uri);
					$dropdownList[] = "<li" . $active . "><a href=\"$dropdownItem[slug]\"$lastID>$dropdownItem[title]</a></li>";
					
					//After mark active che subclass go back and mark active also parent
					if ($active != '')
						$dropdownList[0] = "<li class=\"active dropdown\">";
				}
				$dropdownList[] = "</ul>";
				$dropdownList[] = "</li>";

				foreach ($dropdownList as $printLine) {
					echo $printLine;
				}

			}
			else
			{
				if($item[title] == "navbar-brand")
				{
					echo "<li><a class=\"navbar-brand hidden-xs\" href=\"/\">".BRAND."</a></li>";
				}
				else
				{
					$uri = substr($item[slug], 0, strpos($item[slug], "."));//Estrae il nome del file dal db ed elimina l'estensione
					
					echo "<li" . echoActiveClassIfRequestMatches($uri) . "><a href=\"$item[slug]\"$lastID>$item[title]</a></li>";
					
				}
			}
			$i++;
		}
		
	?>
	
	<?php
		
		function echoActiveClassIfRequestMatches($requestUri) {
    	
	    	$current_file_name = basename($_SERVER['PHP_SELF'], ".php");
			if ($current_file_name == $requestUri) {       
		        return ' class="active"';
			}
	        
		}
	?>
