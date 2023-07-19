<!DOCTYPE html>
<html>
<head>
    <title>Liste des commentaires</title>
</head>
<body>
    <h1>Liste des commentaires</h1>

    <a href="index.php?action=create">Ajouter un commentaire</a>

    <?php if (empty($comments)): ?>
        <p>Aucun commentaire trouvé.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($comments as $comment): ?>
                <li>
                    <strong><?= $comment['author'] ?>:</strong>
                    <?= $comment['content'] ?>
                    <a href="index.php?action=edit&id=<?= $comment['id'] ?>">Modifier</a>
                    <a href="index.php?action=delete&id=<?= $comment['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?')">Supprimer</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
