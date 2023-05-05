<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Calcul.php" method="post">
        <h1>Programme de calcul des moyennes</h1>
        <h3>Remplissez correctement tout les champs</h3>
        Mathématiques : <input type="decimal" name="maths" required>
        Français : <input type="decimal" name="franc" required><br>
        EPS : <input type="decimal" name="EPS" required>
        Hist-Géo : <input type="decimal" name="Hist_geo" required><br>
        Espagnol : <input type="decimal" name="espagnol" required><br>
        Anglais : <input type="decimal" name="anglais" required><br>
        Philosophie : <input type="decimal" name="philo" required><br>
        SVT : <input type="decimal" name="svt"><br>
        Physique-chimie : <input type="decimal" name="phys" required><br>
        Bureautique : <input type="decimal" name="Bureautique" required><br>
        <input type="submit" value="Valider">
    </form>
</body>
</html>