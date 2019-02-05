<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 7</title>

</head>

<body>
    
    <h1>Exercice 1 - Form</h1>
    
    <form action='user.php' method='get'> <!-- action est la page vers laquelle on va envoyer les données du formulaire, et ici avec la méthode GET (donc infos dans l'URL) -->
        <label for='lastName'>Nom : </label>
        <input type='text' id='lastName' name='lastName' />
        <label for='firstName'>Prénom :</label>
        <input type='text' id='firstName' name='firstName' />
        
        <input type='submit' value='Valider' />
    </form>
    
</body>
</html>