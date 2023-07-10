<?php
$sort = isset($_GET['sort']) ? $_GET['sort'] : '';

// Récupérer tous les articles
$articles = $this->articleModel->getAllArticles($sort);

// Créer un tableau pour stocker les commentaires par article
$commentsByArticle = [];

// Récupérer les commentaires pour chaque article
foreach ($articles as $article) {
    $comments = $this->commentModel->getCommentsByArticleId($article['id']);
    $commentsByArticle[$article['id']] = $comments;
}
?>

<form action="" method="GET">
    <select name="sort">
        <option value="asc" <?php echo ($sort === 'asc') ? 'selected' : ''; ?>>Plus récent</option>
        <option value="desc" <?php echo ($sort === 'desc') ? 'selected' : ''; ?>>Plus ancien</option>
    </select>
    <input type="submit" value="Trier">
</form>

<form action="" method="GET">
    <input type="text" name="search" placeholder="Rechercher...">
    <input type="hidden" name="sort" value="<?= isset($_GET['sort']) ? $_GET['sort'] : 'desc' ?>">
    <input type="submit" value="Rechercher">
</form>

<?php if (!empty($articles)): ?>
    <!-- Boucle à travers les articles -->
    <?php foreach ($articles as $article): ?>
        <h2><?= $article['title']; ?></h2>
        <p>Date de création : <?= date_format(date_create($article['created_at']), 'Y-m-d H:i:s'); ?></p>
        <p>Auteur : <?= $article['firstname']; ?> <?= $article['lastname']; ?></p>
        <p><?= $article['content']; ?></p>

        <h3>Commentaires :</h3>
        <?php if (!empty($commentsByArticle[$article['id']])): ?>
            <ul>
                <?php foreach ($commentsByArticle[$article['id']] as $comment): ?>
                    <li><?= $comment['comment']; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Aucun commentaire.</p>
        <?php endif; ?>

        <!-- Formulaire de création de commentaire -->
        <form action="/article/add-comment" method="POST">
            <input type="hidden" name="article_id" value="<?= $article['id']; ?>">
            <input type="text" name="comment" placeholder="Votre commentaire">
            <button type="submit">Commenter</button>
        </form>

        <hr>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun article trouvé.</p>
<?php endif; ?>
