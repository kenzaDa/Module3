<?php

require_once 'Modele/Article.php';
require_once 'Modele/Commentaire.php';
require_once 'Vue/Vue.php';

class ControleurArticle {

    private $Article;
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
        $this->Article($idArticle);
    }

      // Ajoute Article
    //   public function addArticle($titre ,$texte, $auteur , $date_publication) {
    //     // Sauvegarde du commentaire
    //     $this->article->addingArticle( $titre ,$texte, $auteur , $date_publication);
    //     // Actualisation de l'affichage du Article
    //     // $this->Article($idArticle);
    
    public function addArticle($titre,$texte,$auteur,$date_publication){
        $sqlQuery = 'INSERT INTO articles(titre, texte, auteur, date_publication) VALUES (:titre, :texte, :auteur, :date_publication)';
        $insertArticle = $this->db->prepare($sqlQuery);
        $insertArticle->execute([
            'titre' => $titre,
            'texte' => $texte,
            'auteur' => $auteur,
            'date_publication' => $date_publication, 
        ]);
    }

}