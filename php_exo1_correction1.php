<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices d'Algo</title>
</head>

<body>

<?php
echo "<h1>Exercices d'Algo :</h1><hr>";
$a = 5;
$b = 10;
echo "(pour a = $a et b = $b)";


// exo 1
echo "<br><h5>Exercice 1 : M'afficher le resultat le plus grand :</h5>";
if ($a > $b) {
    $result1 = "$a est plus grand que $b";
    $result2 = "$b est plus petit que $a";
}
elseif ($a == $b) {
    $result1 = "$a est égale à $b (pas de plus grand)";
    $result2 = "$a est égale à $b (pas de plus petit)";
}
elseif ($a < $b) { //correction
    $result1 = "$b est plus grand que $a";
    $result2 = "$a est plus petit que $b";
}
else {
    $result1 = $result2 = "Erreur de frappe"; //correction
}
echo "$result1";
echo " (".max($a, $b).")"; //correction


// exo 2
echo "<br><h5>Exercice 2 : M'afficher le resultat le plus petit :</h5>";
echo "$result2";


// exo 3
echo "<br><h5>Exercice 3 : Echanger le contenu de la variable a et b :</h5>";
echo "Avant: a = $a et b = $b<br>";
$z = 0; //correction
$z = $a;
$a = $b;
$b = $z;
echo "Après: a = $a et b = $b";


// exo 4
echo "<br><h5>Exercice 4 : Additionner la variable a et b :</h5>";
$result4 = $a+$b;
echo "a + b est égale à $result4";


// exo 5
echo "<br><h5>Exercice 5 : Afficher un nombre aléatoire entre 1 et 100 :</h5>";
$result5 = rand (1, 100);
echo "$result5 est un nombre aléatoire entre 1 et 100";


// exo 6
echo "<br><h5>Exercice 6 : Afficher un nombre aléatoire entre 5 et 10 :</h5>";
$result6 = rand (5, 10);
echo "$result6 est un nombre aléatoire entre 5 et 10";


// exo 7
echo "<br><h5>Exercice 7 : Faire une fonction Addition :</h5>";
function add($x, $y) {
    $val = $x+$y; //correction
    //echo "a + b est égale à $result7";
    return $val; //correction
}
$result7 = add($a, $b); //correction
echo "a + b est égale à $result7"; //correction



// exo 8
echo "<br><h5>Exercice 8 : Générer un chiffre aléatoire entre 1 et 100, \"je suis nul si x < 50\" sinon \"je suis bon\"  :</h5>";
echo "($result5 est le nombre aléatoire (entre 1 et 100) généré à la question 5)<br>";
if ($result5 < 50){
    $result7 = '"Je suis nul"';
}
else {
    $result7 = '"Je suis bon"';
}
echo "Donc $result7 !";


// exo 9
echo "<br><h5>Exercice 9 : Faire une fonction qui prend en paramètre x (nombre aléatoire entre 0 et 5), si x==1 alors afficher AAAA, si x==2 alors afficher BBBB, si x==3 alors afficher CCCC, si x==4 alors afficher DDDD, sinon je suis une perruche :</h5>";
$nbal = rand (0, 5);
function exo9($x) {
    if ($x == 1) {
        echo "AAAA";
    }
    elseif ($x == 2) {
        echo "BBBB";
    }
    elseif ($x == 3) {
        echo  "CCCC";
    }
    elseif ($x == 4) {
        echo  "DDDD";
    }
    else {
        echo  "Je suis une peruche";
    }
}
echo $nbal." : ";
exo9($nbal);


// exo 9bis
echo "<br><h5>Exercice 9 bis : Faire la question 10 avec l'utilisation d'un switch Case :</h5>";
function exo9bis($x) {
    switch ($x) {
        case 1:
            echo "AAAA";
            break;
        case 2:
            echo "BBBB";
            break;
        case 3:
            echo  "CCCC";
            break;
        case 4:
            echo  "DDDD";
            break;
        default:
            echo  "Je suis une peruche";
    }
}
echo $nbal." : ";
exo9bis($nbal);


// exo 10
echo "<br><h5>Exercice 10 : Générer 10 valeur aléatoire, et afficher les :</h5>";
for ($i = 0; $i < 10; $i++) {
    echo rand (0, 100).", ";
}


// exo 11
echo "<br><h5>Exercice 11 : Ajouter 10 valeur aléatoire dans un tableau :</h5>";
for ($i = 0; $i < 10; $i++) {
    $aleatoire[$i] = rand (0, 100);
    echo $aleatoire[$i].", ";
}


// exo 12
echo "<br><h5>Exercice 12 : Parcourir ce tableau et afficher l'addition de tous ces résultats :</h5>";
foreach ($aleatoire as $val) {
    $result12 += $val;
}
echo "Le résultat de l'addition de tous ces résultats est $result12";











?>





    
</body>
</html>