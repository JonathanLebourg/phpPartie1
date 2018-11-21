<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>ExoPhp8 - Partie1</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="style.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>ExoPhp8 - Partie1</h1>
            <p>Créer 3 variables.
                <br />Dans la première mettre le résultat de l'opération 3 + 4.
                <br />Dans la deuxième mettre le résultat de l'opération 5 * 20.
                <br />Dans la troisième mettre le résultat de l'opération 45 / 5.
                <br />Afficher le contenu des variables.</p>
        </div>
        <div class="container"> 
        <?php
        $result1 = 3+4;
        $result2 = 5*20;
        $result3 = 45 / 5;
        echo "3 + 4 donne " . $result1 . " et 5 * 20 donne " . $result2 . " et 45 / 5 donne " . $result3;
        ?>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html><?php

