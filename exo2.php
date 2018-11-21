<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ExoPhp2 - Partie1</title>
        <!--lien bootstrap, googlefont et feuille de style css-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="style.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>ExoPhp2 - Partie1</h1>
            <p>Créer trois variables <b>lastname</b> , <b>firstname</b> et <b>age</b> et les initialiser avec les valeurs de votre choix. 
                <br /><b>Attention</b> age est de type entier.
                <br />Afficher leur contenu.</p></div>
        <div class="container"> 
        <?php
//        déclaration des variables
        $lastname = 'Norris';
        $firstname = 'Chuck';
        $age = '69';
//        affichage des variables dans une phrase grace aux echo
        echo 'je m appelle ';
        echo $firstname;
        echo ' ';
        echo $lastname;
        echo ' et j ai ';
        echo $age;
        echo ' ans';
        ?>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
