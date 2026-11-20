<?php
class FileBookReader implements BookReader{
	
	private $file; // file resource
	
	function __construct(string $fileName){
		$this->file = fopen($fileName,'r');
	}
	

	


	public function readBook(): ?array {

        $livre=[];
		while (($ligne = fgets($this->file)) !== false){
			$ligne=trim($ligne);
			if ($ligne==""){
				if (count($livre)>0){
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

			
		}

		if (count($livre) > 0) {
            return $livre;
        }
			
		return null;

	}


}


?>
