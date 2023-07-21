<!-- Views/addComment.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un commentaire</title>
</head>
<body>
    <h1>Ajouter un commentaire</h1>
    <?php if (!empty($errors)): ?>
        <div class="error">
            <?php foreach ($errors as $error): ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="/admin/comments/add" method="post">
        <label for="content">Contenu du commentaire:</label><br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Ajouter le commentaire">
    </form>
</body>
</html>
