<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Premier exercice PHP</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="iniPHP.css" />
    </head>
    <body>
        <header>
            <h1>Premier exercice PHP</h1>
            <h2>Réalisé par <span class="nom">Sow Mamadou Radjaye</span></h2>
        </header>
        <!-- section résultat. Créer une section pour chaque question -->
        <section>
            <h2>Question <?= $num_quest++ ?></h2>
            <p>Nous sommes le <?= date('d / m / Y') ?></p>
        </section>

        <section>
            <h2>Résultat de la fonction</h2>
            <?= afficheVar(10, "Bonjour") ?>
        </section>

        <section>
            <h2>Résultat de la fonction des paragraphes</h2>
            <?= n_parag("je suis etudiant.",10) ?>
        </section>

        <section>
            <h2>1. Table de multiplication de 5</h2>
<?php
echo tableMultiplication(5);
?>

<h2>2. Toutes les tables de multiplication</h2>
<?php
echo tablesMultiplications();
?>

<h2>3. Tableau des multiplications</h2>
<?php
echo tableauMult();
?>

<h2>4. Fonction parag</h2>
<?php
echo parag("Bonjour + Comment allez-vous + Au revoir");
?>

<h2>5. Fonction enSpan</h2>
<?php
echo enSpan("Bonjour-Mamadou-Test");
?>
        </section>

    </body>
    
</html>