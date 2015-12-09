<?php

public class Media{
  private $media_id;
  private $media_lien;

  public function __construct($valeurs = array()){
    $this->affecte($valeurs);
  }

  public function getMedia_id(){
		return $this->media_id;
	}

	public function setMedia_id($media_id){
		$this->media_id = $media_id;
	}

	public function getMedia_lien(){
		return $this->media_lien;
	}

	public function setMedia_lien($media_lien){
		$this->media_lien = $media_lien;
	}

  public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){

      switch ($attribut){
        case 'media_id' : $this->setMedia_id($valeur);
        break;
        case 'media_lien' : $this->setMedia_lien($valeur);
        break;
      }
    }
  }
}
?>
