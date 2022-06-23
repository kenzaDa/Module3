<?php

require_once 'Modele/Modele.php';

class Commentaire extends Modele {

// Renvoie la liste des commentaires associés à un article
    public function getCommentaires($idArticle) {
        $sql = 'select  id,  texte,'
                . ' auteur, date_publication ,article_id  from commentaires'
                . ' where article_id=?';
        $commentaires = $this->executerRequete($sql, array($idArticle));
        return $commentaires;
    }

    // Ajoute un commentaire dans la base
    public function ajouterCommentaire($auteur, $texte, $idArticle) {
        $sql = 'insert into commentaires(id,  texte, auteur ,article_id)'
            . ' values(?, ?, ?, ?)';
        $date = date(DATE_W3C);  // Récupère la date courante
        $this->executerRequete($sql, array($date, $auteur, $texte, $idArticle));
    }
}