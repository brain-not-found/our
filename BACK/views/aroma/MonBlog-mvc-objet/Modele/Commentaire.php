<?php

require_once 'Modele.php';
/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Baptiste Pesquet
 */
class Commentaire extends Modele {

// Renvoie la liste des commentaires associés à un billet
    public function getCommentaires($idBillet) {
        $sql = ' select * From t_commentaire'
                . ' where Nomduproduit=?';
        $commentaires = $this->executerRequete($sql, array($idBillet));
        return $commentaires;
    }

    // Ajoute un commentaire dans la base
    public function ajouterCommentaire($auteur,$contenu,$idBillet) {
        $sql = 'insert into t_commentaire(COM_DATE,COM_AUTEUR,COM_CONTENU,Nomduproduit)'
            . ' values(now(), ?, ?, ?)';
         // Récupère la date courante
        $this->executerRequete($sql, array($auteur,$contenu,$idBillet));
    }
}