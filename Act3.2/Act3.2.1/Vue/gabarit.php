<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style/style.css" />
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 class="titreBlog">Les articles disponibles</h1></a>
                <p>Vous trouverez les articles ici :</p>
            </header>
            <div id="contenu">
                <?= $contenu ?>
            </div> <!-- #contenu -->
           
        </div> <!-- #global -->
        <main class=" container content"> 
        <a href="index.php"><h1 class="titre">Ici vous pouvez postez un article</h1></a>
         <br><br>
        <form action="index.php" method="post">    
        <input type="hidden" name="id" value=<?php echo uniqid() ?>>  
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" id="exampleFormControlInput1" placeholder="Titre de l'article">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Texte </label>
            <textarea class="form-control" name="texte" id="exampleFormControlTextarea1" rows="3" placeholder="Texte de l'article"></textarea>
        </div> 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Auteur</label>
            <input type="text" name="auteur" class="form-control" id="exampleFormControlInput1" placeholder="Auteur de l'article">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date de publication</label>
            <input type="date" name="date_publication" class="form-control" id="exampleFormControlInput1">
        </div>
        <button type="submit" name="add" class="btn btn-primary" >Publier</button>
    </form>
    </main>

    <footer id="piedBlog">
            &copy; 2022 Mon Bloc, Inc
            </footer>


    </body>
</html>