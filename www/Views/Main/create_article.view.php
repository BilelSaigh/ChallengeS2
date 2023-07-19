<!DOCTYPE html>
<html>
<head>
    <title>Créer un article</title>
</head>
<body>
    <h1>Créer un article</h1>
    <form method="POST" action="">
        <label for="title">Titre:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="user_id">ID de l'utilisateur:</label>
        <input type="text" name="user_id" id="user_id" required>
        <br>
        <label for="content">Contenu:</label>
        <textarea name="content" id="content" required></textarea>
        <br>
        <input type="submit" value="Créer">
    </form>
</body>
</html>
