<?php
class spectacleManager{
  private $db;

  public function __construct($db){
    $this->db = $db;
  }
  public function listerSpectacles(){
    $listeSpectacles = array();
    $sql = 'SELECT id_spectacle, titre_spectacle, note_haut_spectacle, note_bas_spectacle, description, image_spectacle FROM spectacle ORDER BY id_spectacle DESC';
    $requete = $this->db->prepare($sql);
    $requete->execute();

    while($spectacle = $requete->fetch(PDO::FETCH_OBJ)){
        $listeSpectacles[] = new Spectacle($spectacle);
    }

    $requete->closeCursor();
    return $listeSpectacles;
  }

  public function ajouterSpectacle($spectacle){
    $sql = 'INSERT INTO spectacle(titre_spectacle, note_haut_spectacle, description, note_bas_spectacle, image_spectacle) VALUES (:titre, :noteHaut, :description, :noteBas, :img)';
    $requete = $this->db->prepare($sql);

    $requete->bindValue(':titre', $spectacle->getSpec_titre());
    $requete->bindValue(':noteHaut', $spectacle->getSpec_note_haut());
    $requete->bindValue(':description', $spectacle->getSpec_description());
    $requete->bindValue(':noteBas', $spectacle->getSpec_note_bas());
    $requete->bindValue(':img', $spectacle->getSpec_img());
    return $requete->execute();
  }

  public function supprimerSpectacle($spectacle){
    $sql = 'DELETE FROM spectacle WHERE id_spectacle = :spectacle';
    $requete = $this->db->prepare($sql);

    $requete->bindValue(':spectacle', $spectacle);
    return $requete->execute();
  }
}


?>
