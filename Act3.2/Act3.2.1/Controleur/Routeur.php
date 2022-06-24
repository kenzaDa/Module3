<?php

require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurArticle.php';
require_once 'Vue/Vue.php';
class Routeur {

    private $ctrlAccueil;
    private $ctrlarticle;

    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlarticle = new ControleurArticle();
        
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                echo 'msg';
                if ($_GET['action'] == 'article') {
                    $idarticle = intval($this->getParametre($_GET, 'id'));
                    if ($idarticle != 0) {
                        $this->ctrlarticle->article($idarticle);
                    }
                    else
                        throw new Exception("Identifiant de article non valide");
                }
                else if ($_GET['action'] == 'commenter') {
                    $auteur = $this->getParametre($_POST, 'auteur');
                    $texte = $this->getParametre($_POST, 'texte');
                    $idarticle = $this->getParametre($_POST, 'id');
                    $this->ctrlarticle->commenter($auteur, $texte, $idarticle);
                }
                else if ($_GET['action'] == 'add'){
                    echo 'msg';
                    $titre = $this->getParametre($_POST, 'titre');
                    $texte = $this->getParametre($_POST, 'texte');
                    $auteur = $this->getParametre($_POST, 'auteur');
                    $date_publication = $this->getParametre($_POST, 'date_publication');
                    //  $idArticle = $this->getParametre($_POST, 'id');
                    $this->ctrlarticle->addArticle( $titre ,$texte, $auteur , $date_publication);
                }


                // else if ( isset($_GET['add'])) {
                //     $this->ctrlarticle->addArticle($_POST['titre'],$_POST['texte'],$_POST['auteur'],$_POST['date_publication']);
                // }
                else
                    throw new Exception("Action non valide");
            }
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            }
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

}