<?php

require_once 'Modele/Modele.php';

include_once('../singleton/singleton.php');
class Article extends Modele {

    /** Renvoie la liste des articles du blog
     * 
     * @return PDOStatement La liste des articles
     */
    public static $conn;
    public function getArticles() {
        $sql = 'select id, titre ,texte,auteur,date_publication from articles'
                . ' order by id desc';
        $articles = $this->executerRequete($sql);
        return $articles;
    }

    /** Renvoie les informations sur un article
     * 
     * @param int $id L'identifiant du article
     * @return array Le article
     * @throws Exception Si l'identifiant du article est inconnu
     */
    public function getArticle($idArticle) {
        $sql = 'select id, titre ,texte,auteur,date_publication from articles'
                . ' where id=?';
        $article = $this->executerRequete($sql, array($idArticle));
        if ($article->rowCount() > 0)
            return $article->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun article ne correspond à l'identifiant '$idArticle'");
    }

//  Ajoute un article dans la base
 public function addArticle( $titre ,$texte, $auteur , $date_publication) {

    $sql = 'insert into articles(titre,  texte, auteur,date_publication)'
        . ' values(?, ?, ?, ?)';
       
     $this->executerRequete($sql, array( $titre ,$texte, $auteur , $date_publication));
    
}


   // SINGLETON      
   public static function getDbSing(){
    if (is_null(self::$conn)) {
        try
        {
            self::$conn = new PDO('mysql:host=localhost;dbname=databasekenza;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        { 
            die('Erreur : ' . $e->getMessage());
        }
    }
    return self::$conn;
}
  public function getArticleSing(){
    $articlesStatement =self::$conn->prepare('SELECT * FROM articles');
    $articlesStatement->execute();
    $articles = $articlesStatement->fetchAll();
    $this->article = $articles;
    return $this->article;
 
}

  public function ajouterArticleSing($titre, $text, $auteur, $date_publication) {

    $articlesStatement = self::$conn->prepare('INSERT INTO articles(titre, texte, auteur, date_publication) Values (:titre, :texte, :auteur, :date_publication) ');
    $articlesStatement->execute([
      'titre' => $titre,
      'texte' => $texte,
      'auteur' => $auteur,
      'date_publication' => $date_publication, 
  ]);
  }
}






}
    