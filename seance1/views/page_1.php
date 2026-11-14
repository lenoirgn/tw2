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
            <?= n_parag(10, "je suis etudiant.") ?>
        </section>

    </body>
    
</html>