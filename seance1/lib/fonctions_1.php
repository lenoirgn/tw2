<?php
//  créer les fonctions ici 
function afficheVar(int $n, string $s): string {
    return "$n vaut " . $n . " et $s " . $s;
}

function n_parag(string $texte, int $n): string {
    $resultat = "";

    for ($i = 0; $i < $n; $i++) {
        $resultat .= "<p>" . $texte . "</p>";
    }

    return $resultat;
}

/**
 * Génère un paragraphe contenant les i premiers caractères du texte.
 *
 * @param string $texte Le texte initial.
 * @param int $i Le nombre de caractères à conserver.
 * @return string Le code HTML du paragraphe.
 */
function paragrapheTronque(string $texte, int $i): string {
    return "<p>" . substr($texte, 0, $i) . "</p>";
}


/**
 * Génère des paragraphes en supprimant progressivement
 * le dernier caractère du texte.
 *
 * @param string $texte Le texte initial.
 * @return string Le code HTML des paragraphes.
 */
function diminue(string $texte): string {
    $resultat = "";

    for ($i = strlen($texte); $i >= 0; $i--) {
        $resultat .= paragrapheTronque($texte, $i);
    }

    return $resultat;
}



/**
 * Génère des paragraphes en supprimant progressivement
 * le dernier caractère du texte.
 *
 * @param string $texte Le texte initial.
 * @return string Le code HTML des paragraphes.
 */
function diminueVersionListe(string $texte): string {
    $resultat = "";

    for ($i = strlen($texte); $i >= 0; $i--) {
        $resultat .= "<li>". substr($texte,0,$i)."</li>";
    }

    return "<ul>".$resultat."</ul>";
}

function multiplication(int $n, int $p):string{
    return "<li>".$n ."*".$p."=".$n*$p."</li>".;
}

function tableMultiplication(int $n):{
    $res= "";
    for ($i=1;$i<10;$i++){
        $res.=multiplication($n,$i);

    }
    return "<ul>".$res."</ul>"
}
function tablesMultiplications():{
    $res= "";
    for ($i=1;$i<10;$i++){
        $res.=tableMultiplication($i);

    }
    return "<ul>".$res."</ul>"
}

function ligneEntete():string{
    $res="<tr><th>*</th>";
    for ($i=1;$i<10;$i++){
        $res.="<th>".$i."</th>";
    }
    return $res."</tr>";
}
function ligneTable(int $i):string{
    $res="<tr><th>".$i."</th>";
    for ($j=1;$j<10;$j++){
        $res.="<td>".$i*$j"</td>";
    }
    return $res."</tr>";
}

function tableauMult():string {
    $res="<table id="multiplications">";
    $res.=ligneEntete();
    for ($j=1;$j<10;$j++){
        $res.=ligneTable($j);
    }
    return $res."</table>";
} 


function parag(string $texte ):string {
    $res=""
    $tabTexte=explode("+",$texte);
    foreach($tabTexte as $t){
        $res.="<p>".trim(t)."</p>";

    }
    return $res;
}

function enSpan($s) :string {
    $res=""
    $tabTexte=explode("-",$s);
    foreach($tabTexte as $t){
        $res.="<span>".trim(t)."</span>";

    }
    return $res;

?>