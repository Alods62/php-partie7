<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 7</title>

</head>

<body>
    
    <h1>Exercice 4 - Form</h1>
    
    <form action="user.php" method="post"> <!-- action est la page vers laquelle on va envoyer les données du formulaire, et ici avec la méthode POST -->
        <p>Nom</p>
        <input type="text" name="lastName" />
        <p>Prénom</p>
        <input type="text" name="firstName" />
        <br />
        <input type="submit" value="Valider" />
    </form>
    
</body>
</html>