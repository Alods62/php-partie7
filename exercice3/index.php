<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 7</title>

</head>

<body>
    
    <h1>Exercice 3 - Form</h1>
    
    <form action="user.php" method="get"> <!-- action est la page vers laquelle on va envoyer les données du formulaire, et ici avec la méthode GET (donc infos dans l'URL) -->
        <p>Nom</p>
        <input type="text" name="lastName" />
        <p>Prénom</p>
        <input type="text" name="firstName" />
        
        <input type="submit" value="Valider" />
    </form>
    
</body>
</html>