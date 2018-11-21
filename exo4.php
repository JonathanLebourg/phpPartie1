<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>ExoPhp4 - Partie1</title>
    <!--lien bootstrap, googlefont et feuille de style css-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="style.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>ExoPhp4 - Partie1</h1>
            <p>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
               <br />Les afficher.</p>
        <div class="container"> 
        <?php
//        variable string (chaine de caractere)
        $string = "salut";
        echo $string;
//        variable int (nombre entier)
        $int = 3;
        echo ' ';
        echo $int;
//        variable float (nombre décimal)
        $float = 1.25;
        echo ' ';
        echo $float;
//        variable booleen (true ou false)
        $bool = true;
        echo ' ';
        echo $bool;
        ?>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
