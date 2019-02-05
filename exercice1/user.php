<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 7</title>

</head>

<body>
     
        
    <h1>Exercice 1 - User</h1>

    <?php
    
    $firstNameRegex = '/^[A-Z]{1}[a-zéèêëàâäïî]+([-][A-Z]{1}[a-zéèêëàâäïî]+)?$/';
    $lastNameRegex = '/^[A-Z]{1}[a-z]+([ ][A-Z]{1}[a-z]+)?/';
    
    if(!empty($_GET['lastName']) && !empty($_GET['firstName']) && preg_match($lastNameRegex, $_GET['lastName']) && preg_match($firstNameRegex, $_GET['firstName']))/* on vérifie si les champs sont remplis et si ils sont corrects via la regex */
    {
    ?>
    
        <p>Bonjour, <?php echo $_GET['lastName'] . ' ' . $_GET['firstName'] ; ?></p>
   
    <?php
    }
    else
    {
    ?>
        <p>Veuilez compléter le formulaire</p>
    <?php
    }
    ?>
    <a href="index.php">Retour au formulaire</a>
    
    
</body>
</html>