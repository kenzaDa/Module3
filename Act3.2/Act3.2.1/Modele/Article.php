<?php

require_once 'Modele/Modele.php';


class Article extends Modele {

    /** Renvoie la liste des articles du blog
     * 
     * @return PDOStatement La liste des articles
     */
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
 public function addingArticle($idArticle, $titre ,$texte, $auteur , $date_publication) {
    $sql = 'insert into articles(id, titre,  texte, auteur,date_publication)'
        . ' values(?, ?, ?, ?,?)';
    $this->executerRequete($sql, array($idArticle, $titre ,$texte, $auteur , $date_publication));
}




}
    // public function deleteArticle($id){
    //     $sqlQuery = 'DELETE FROM articles WHERE id=:id';
    //     $deleteArticle = $this->db->prepare($sqlQuery);
    //     $deleteArticle->execute([
    //        'id' => $id
    //     ]);
    // }

    // public function addArticle($titre,$text,$auteur,$date_publication){
    //     $sqlQuery = 'INSERT INTO articles(titre, texte, auteur, date_publication) VALUES (:titre, :texte, :auteur, :date_publication)';
    //     $insertArticle = $this->db->prepare($sqlQuery);
    //     $insertArticle->execute([
    //         'titre' => $titre,
    //         'texte' => $text,
    //         'auteur' => $auteur,
    //         'date_publication' => $date_publication, 
    //     ]);
    // }

