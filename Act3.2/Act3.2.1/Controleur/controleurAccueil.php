<?php

require_once 'Modele/Article.php';
require_once 'Vue/Vue.php';

class ControleurAccueil {

    private $article;

    public function __construct() {
        $this->article = new Article();
    }

// Affiche la liste de tous les articles du blog
    public function accueil() {
        $articles = $this->article->getArticles();
        $vue = new Vue("Accueil");
        $vue->generer(array('articles' => $articles));
    }

}