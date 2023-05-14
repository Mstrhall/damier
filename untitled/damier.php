<?php
function damier(int $x, int $y, string $couleur_premiere_case){
    $moduloX = $x % 2; // calcul de si la coordonnée de X est paire ou impaire, si elle est paire la variable vaut 0 sinon elle vaut 1
    $moduloY = $y % 2; // calcul de si la coordonnée de Y est paire ou impaire, si elle est paire la variable vaut 0 sinon elle vaut 1
    if ($couleur_premiere_case == "blanc"){
        $couleur2 = "noir"; // incrémentation de la seconde couleur du damier
    }
    else{
        $couleur2 = "blanc"; // incrémentation de la seconde couleur du damier
    }
    // condition de si X est pair
    if ($moduloX == 0){
        // condition de si X est pair et Y est pair
        if($moduloY == 0){
            echo "la couleur de la case du damier à ces coordonnées est ", $couleur_premiere_case;
        }
        //condition si X est pair et Y est impair
        else{
            echo "la couleur de la case du damier à ces coordonnées est ", $couleur2;
        }
    }
    // condition de si X est impair
    else {
        //condition de si X est impair et Y est pair
        if($moduloY == 0){
            echo "la couleur de la case du damier à ces coordonnées est ", $couleur2;
        }
        //condition de si X est impair et Y est impair
        else{
            echo "la couleur de la case du damier à ces coordonnées est ", $couleur_premiere_case;
        }
    }
}
