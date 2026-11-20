<?php
    function elementBuilder(string $elementType, string $content, string $elementClass="") : string {
		if ($elementClass != "") {
			return "<".$elementType." class=\"".$elementClass."\">".$content."</".$elementType.">";
		}
    return "<".$elementType.">".$content."</".$elementType.">";
	}

    function authorsToHTML(string $authors) : string {
    	$names = explode(" - ", $authors);
    return "<span>".implode("</span> <span>", $names)."</span>";
	}

	function coverToHTML(string $fileName) : string{
		return "<img src=\"couvertures/".$fileName."\" alt=\"image de couverture\" />";
    }
	function propertyToHTML(string $propName, string $propValue) : string {
		if ($propName == "titre") {
			return "<h2 class=\"titre\">".$propValue."</h2>";
		} else if ($propName == "couverture") {
			return "<div class=\"couverture\">".coverToHTML($propValue)."</div>";
		} else if ($propName == "auteurs") {
			return "<div class=\"auteurs\">".authorsToHTML($propValue)."</div>";
		} else if ($propName == "annee") {
			return "<time class=\"année\">".$propValue."</time>";
		} else {
			return "<div class=\"".$propName."\">".$propValue."</div>";
		}
	}
	function bookToHTML(array $book) : string {
		$res = "<article class=\"livre\">";
		$res .= propertyToHTML("couverture", $book["couverture"]);
		$res .= "<div class=\"description\">";
		
		foreach ($book as $propName => $propValue) {
			if ($propName != "couverture") {
				$res .= propertyToHTML($propName, $propValue);
			}
		}

		return $res."</div></article>";
	}

    function libraryToHTML(BookReader $reader): string {

        $html = "";

        while (($book = $reader->readBook()) !== null) {
            $html .= bookToHTML($book);
        }

        return $html;
 }

    
?>
