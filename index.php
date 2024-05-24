
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Test</title>
</head>
<body>
    <h1>Formulaire de Test</h1>
    <form action="save_data.php" method="post">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
