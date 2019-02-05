<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 7</title>

</head>

<body>
    
    <h1>Exercice 5 - Form</h1>
    
    <form action="user.php" method="post" id="user"> <!-- action est la page vers laquelle on va envoyer les données du formulaire, et ici avec la méthode POST -->
        
        <p>Genre</p>
        
        <select name="gender" form="user">
            <option value="M.">M.</option>
            <option value="Mme">Mme</option>
        </select>
        
        <label for='lastName'>Nom</label>
        <input type="text" id='lastName' name="lastName" />
        
        <label for='firstName'>Prénom :</label>
        <input type="text" id='lastName' name="firstName" />
         
        <input type="submit" value="Valider" />
    </form>
    
</body>
</html>