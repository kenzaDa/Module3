<?php $this->titre = "Mon Blog"; ?>

<?php foreach ($articles as $article):
    ?>
    <article>
        <header>
            <a href="<?= "index.php?action=article&id=" . $article['id'] ?>">
                <h1 class="titreArticle"><?= $article['titre'] ?></h1>
            </a>
            <time><?= $article['date_publication'] ?></time>
        </header>
        <p><?= $article['texte'] ?></p>
    </article>
    <hr />
<?php endforeach; ?>