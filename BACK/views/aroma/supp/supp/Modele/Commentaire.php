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
        $sql = ' select * From commentaire'
                . ' where Description=?';
        $commentaires = $this->executerRequete($sql, array($idBillet));
        return $commentaires;
    }

    // Ajoute un commentaire dans la base
    public function ajouterCommentaire($auteur, $contenu, $idBillet) {
        $sql = 'insert into commentaire(date,auteur,contenu,Description)'
            . ' values(now(), ?, ?, ?)';
         // Récupère la date courante
        $this->executerRequete($sql, array( $auteur, $contenu, $idBillet));
    }
}