<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 9 exercice 3</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <div align="center">
                        <h1 align="center">PHP Partie 9 exercice 3</h1>
                        <h3 align="center">Exercice 3</h3>
                        <p class="text">Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)</p>
                        Bonus : Le faire en français.</p>

                        <?php
                        date_default_timezone_set('Europe/Paris');
// --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
                        setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); // OK
// strftime("jourEnLettres jour moisEnLettres annee") de la date courante
                        echo "Nous sommes le : <b>", strftime("%A %d %B %Y");"</b>"
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

