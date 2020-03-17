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
        <input id="codebarre" name="codebarre" type="number" />
    </div>
    <div>
        <input id="generer" name="generer" type="submit" value="Générer"/>
    </div>
</form>
</section>
</body>
</html>