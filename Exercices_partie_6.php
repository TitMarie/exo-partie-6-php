<?php

// exercice 1

if (isset($_GET['lastname']) AND isset($_GET['firstname'])) {
    echo "Le nom utilisateur est : " . $_GET['firstname'] . " " . $_GET['lastname'];
} else {
    echo "try again !";
}

echo "<br>";

// exercice 2

if (!isset($_GET['age'])) {
    echo "Tu n'as pas renseigné ton âge !";
} else {
    echo "Tu as " . $_GET['age'];
}

echo "<br>";

// exercice 3

if (isset($_GET['startDate']) AND isset($_GET['endDate'])) {
    echo "Voici vos dates de début : " . $_GET['startDate'] . " et vos date de fin : " . $_GET['endDate'];
} else {
    echo "ça m'énerve !!";
}

echo "<br>";

// exercice 4

if (isset($_GET['language']) AND isset($_GET['server'])) {
    echo "Tu as utilisé le " . $_GET['language'] . " pour avoir accès au server " . $_GET['server'];
} else {
    echo "toutes celles qui portent la frange à la Kate Moss !!";
}

echo "<br>";

// exercice 5

if (isset($_GET['week'])) {
    echo "nous somme la semaine " . $_GET['week'];
} else {
    echo "ça m'énerve !!";
}

echo "<br>";

// exercice 6

if (isset($_GET['building']) AND isset($_GET['room'])) {
    echo "Votre chambre est dans le batiment " . $_GET['building'] . ", numéro " . $_GET['room'];
} else {
    echo "toutes celles qui porte du taille 34 !!";
}


?>
