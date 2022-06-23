<?php

require_once 'Modele/Article.php';
require_once 'Modele/Commentaire.php';
require_once 'Vue/Vue.php';

class ControleurArticle {

    private $article;
    private $commentaire;

    public function __construct() {
        $this->article = new Article();
        $this->commentaire = new Commentaire();
    }

    // Affiche les détails sur un Article
    public function Article($idArticle) {
        $article = $this->article->getArticle($idArticle);
        $commentaires = $this->commentaire->getCommentaires($idArticle);
        $vue = new Vue("Article");
        $vue->generer(array('Article' => $article, 'commentaires' => $commentaires));
    }

    // Ajoute un commentaire à un Article
    public function commenter($auteur, $contenu, $idArticle) {
        // Sauvegarde du commentaire
        $this->commentaire->ajouterCommentaire($auteur, $contenu, $idArticle);
        // Actualisation de l'affichage du Article
        $this->article($idArticle);
    }

      // Ajoute Article
    //   public function addArticle($titre ,$texte, $auteur , $date_publication) {
    //     // Sauvegarde du commentaire
    //     $this->article->addingArticle( $titre ,$texte, $auteur , $date_publication);
    //     // Actualisation de l'affichage du Article
    //     // $this->Article($idArticle);//  Ajoute un article dans la base
 public function addArticle( $titre ,$texte, $auteur , $date_publication) {

    $sql = 'insert into articles(titre,  texte, auteur,date_publication)'
        . ' values(?, ?, ?, ?)';
       
     $this->executerRequete($sql, array( $titre ,$texte, $auteur , $date_publication));}
    
    public function addingArticle($titre,$texte,$auteur,$date_publication){
        $this->article->addArticle( $titre ,$texte, $auteur , $date_publication) ;
        
    }
//  Ajoute un article dans la base

// public function addArticle( $titre ,$texte, $auteur , $date_publication) {

//     $sql = 'insert into articles(titre,  texte, auteur,date_publication)'

//         . ' values(?, ?, ?, ?)';

//     $this->executerRequete($sql, array($idArticle, $titre ,$texte, $auteur , $date_publication));

// }
 }