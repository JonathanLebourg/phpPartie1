<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ExoPhp3 - Partie1</title>
        <!--lien bootstrap, googlefont et feuille de style css-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="style.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>ExoPhp3 - Partie1</h1>
            <p>Créer une variable <b>km</b>. L'initialiser à 1. Afficher son contenu.
                <br />Changer sa valeur par 3. Afficher son contenu.
                <br />Changer sa valeur par 125. Afficher son contenu.</p>
        <div class="container"> 
        <?php
//        décalaration de la variable et affichage
        $km = 1;
        echo $km;
//        changement de la variable et affichage (2fois)
        $km = 3;
        echo ' ';
        echo $km;
        $km = 125;
        echo ' ';
        echo $km;
        ?>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
