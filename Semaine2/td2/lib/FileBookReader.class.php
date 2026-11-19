<?php
class FileBookReader implements BookReader{
	
	private $file; // file resource
	
	function __construct(string $fileName){
		$this->file = fopen($fileName,'r');
	}
	

	


	public function readBook(): ?array {

        $livre=[];
		while($ligne=fgets($this->file)!=false){
			$ligne=trim($ligne);
			if ($ligne==""){
				if (count($ligne)>0){
				return $livre;
			}
			}else{
				if (strpos($ligne, ":") === false) {
                    throw new Exception("Ligne incorrecte : " . $ligne);
                }
				$position=strpos($ligne,":");
				$cle=trim(substr($ligne,0,$position));
				$valeur=trim(substr($ligne,$position + 1));

				$livre[$cle] = $valeur;
			}

			if (count($livre) > 0) {
            return $livre;
        }
			
		return null;

		}
	}


	public function elementBuilder(string $elementType, string $content, string $elementClass="") : string {
		if ($elementClass != "") {
			return "<".$elementType." class=\"".$elementClass."\">".$content."</".$elementType.">";
		}
    return "<".$elementType.">".$content."</".$elementType.">";
	}

	public function authorsToHTML(string $authors) : string {
    	$names = explode(" - ", $authors);
    return "<span>".implode("</span> <span>", $names)."</span>";
	}

	public function coverToHTML(string $fileName) : string{
		return "<img src=\"couvertures/".$fileName. " alt=\"image de couverture\" />";
	}

	public function propertyToHTML(string $propName, string $propValue) : string {
		$res = "";

		if ($propName == "titre") {
			$res = "<h2 class=\"titre\">".$propValue."</h2>";
		} else if ($propName == "couverture") {
			$res = "<div class=\"couverture\">".$this->coverToHTML($propValue)."</div>";
		} else if ($propName == "auteurs") {
			$res = "<div class=\"auteurs\">".$this->authorsToHTML($propValue)."</div>";
		} else if ($propName == "annee") {
			$res = "<time>".$propValue."</time>";
		} else {
			$res = "<div>".$propValue."</div>";
		}

		return $res;
    }
	 
	public function bookToHTML(array $book) : string{
		
	}


}
	


?>
