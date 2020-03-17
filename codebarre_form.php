<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>TP CODE BARRE</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

<section class = container>
<h1>GENEREZ VOTRE CODE-BARRE</h1>

<form action="codebarre.php" method="GET">
    <div>
        <label id="codebarre" for="codebarre"></label>
        <input id="codebarre" name="codebarre" type="number" placeholder="Entrez les 4 premiers chiffres"/>
    </div>
    <div>
        <label id="codebarre2" for="codebarre2"></label>
        <input id="codebarre2" name="codebarre2" type="number" placeholder="Entrez les 4 derniers chiffres"/>
    </div>
    <div>
        <input id="generer" name="generer" type="submit" value="Générer"/>
    </div>
</form>
</section>
</body>
</html>