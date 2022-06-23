<?php $this->titre = "Mon Blog - " . $Article['titre']; ?>

<article>
    <header>
        <h1 class="titreArticle"><?= $Article['titre'] ?></h1>
        <time><?= $Article['date_publication'] ?></time>
    </header>
    <p><?= $Article['texte'] ?></p>
</article>
<hr />
<header>
    <h1 id="titreReponses">Réponses à <?= $Article['titre'] ?></h1>
</header>
<?php foreach ($commentaires as $commentaire): ?>
    <p><?= $commentaire['auteur'] ?> dit :</p>
    <p><?= $commentaire['texte'] ?></p>
<?php endforeach; ?>
<hr />
<form method="post" action="index.php?action=commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtCommentaire" name="texte" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $Article['id'] ?>" />
    <input type="submit" value="Commenter" />
</form>