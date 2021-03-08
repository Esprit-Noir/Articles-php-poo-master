<h1>Nos Articles</h1>
<?php foreach ($articles as $article) : ?>
    <h2><?= $article['title'] ?></h2>
    <small>Ecrit le <?= $article['created_at'] ?></small>
    <p><?= $article['introduction'] ?></p>
    <a href="article.php?id=<?= $article['id'] ?>">Lire la suite</a>
    <a class="text-danger" href="delete-article.php?id=<?= $article['id'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet article ?!`)"> Supprimer</a>
<?php endforeach ?>