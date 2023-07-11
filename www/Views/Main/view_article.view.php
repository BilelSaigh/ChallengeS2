<?php
// Récupérer tous les articles
$articles = $this->articleModel->getAllArticles($sort,$search);

// Créer un tableau pour stocker les commentaires par article
$commentsByArticle = [];

// Récupérer les commentaires pour chaque article
foreach ($articles as $article) {
    $comments = $this->commentModel->getCommentsByArticleId($article['id']);
    $commentsByArticle[$article['id']] = $comments;
}
?>

<!-- Formulaire de tri des articles -->
<form action="" method="GET">
    <select name="sort">
        <option value="asc" <?= ($sort === 'asc') ? 'selected' : '' ?>>Plus récent</option>
        <option value="desc" <?= ($sort === 'desc') ? 'selected' : '' ?>>Plus ancien</option>
    </select>
    <input type="submit" value="Trier">
</form>

<!-- Formulaire de recherche -->
<form action="" method="GET">
    <input type="text" name="search" placeholder="Rechercher..." value="<?= $search ?>">
    <input type="hidden" name="sort" value="<?= $sort ?>">
    <input type="submit" value="Rechercher">
</form>

<?php if (!empty($articles)): ?>
    <!-- Boucle à travers les articles -->
    <?php foreach ($articles as $article): ?>
        <div class="article">
            <h2><?= $article['title'] ?></h2>
            <p>Date de création : <?= date_format(date_create($article['created_at']), 'Y-m-d H:i:s') ?></p>
            <p>Auteur : <?= $article['firstname'] ?> <?= $article['lastname'] ?></p>
            <p><?= $article['content'] ?></p>

            <h3>Commentaires :</h3>
            <?php if (!empty($commentsByArticle[$article['id']])): ?>
                <button class="accordion">Afficher les commentaires</button>
                <div class="panel" style="display:none;">
                    <?php foreach ($commentsByArticle[$article['id']] as $comment): ?>
                        <div class="comment">
                            <p>Contenu : <?= $comment['comment'] ?></p>
                            <p>Date : <?= date_format(date_create($comment['created_at']), 'Y-m-d H:i:s') ?></p>
                            <form action="/article/report-comment" method="POST">
                                <input type="hidden" name="comment_id" value="<?= $comment['id'] ?>">
                                <button type="submit">Signaler</button>
                            </form>
                            <hr>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php else: ?>
                <p>Aucun commentaire.</p>
            <?php endif ?>

            <!-- Formulaire de création de commentaire -->
            <form action="/article/add-comment" method="POST">
                <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                <input type="text" name="comment" placeholder="Votre commentaire">
                <button type="submit">Commenter</button>
            </form>
        </div>

        <hr>
    <?php endforeach ?>
<?php else: ?>
        <p>Aucun article trouvé.</p>
<?php endif ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.accordion').click(function() {
            $(this).toggleClass('active');
            $(this).next('.panel').slideToggle();
        });
    });
</script>
