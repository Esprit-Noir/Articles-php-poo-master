<h1><?= $article['title'] ?></h1>
<small>Ecrit le <?= $article['created_at'] ?></small>
<p><?= $article['introduction'] ?></p>
<hr>
<?= $article['content'] ?>

<?php if (count($commentaires) === 0) : ?>
    <h2>Il n'y a pas encore de commentaires pour cet article ... SOYEZ LE PREMIER ! :D</h2>
<?php else : ?>
    <h2>Il y a déjà <?= count($commentaires) ?> réactions : </h2>
    <?php foreach ($commentaires as $commentaire) : ?>
        <h3>Commentaire de <?= $commentaire['author'] ?></h3>
        <small>Le <?= $commentaire['created_at'] ?></small>
        <blockquote>
            <em><?= $commentaire['content'] ?></em>
        </blockquote>
        <a href="delete-comment.php?id=<?= $commentaire['id'] ?>" onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer ce commentaire ?!`)">Supprimer</a>
    <?php endforeach ?>
<?php endif ?>

<div class="col-md-6">
    <form action="save-comment.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nom" class="col-form-label">Vous voulez réagir ? N'hésitez pas les bros !</label>
            <div class="input-group">
                <input class="form-control" type="text" name="author" placeholder="Votre pseudo !">
                <input class="form-control" type="hidden" name="article_id" value="<?= $article_id ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="Votre commentaire ..."></textarea>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-warning form-control">Commenter !</button>
        </div>
    </form>
</div>