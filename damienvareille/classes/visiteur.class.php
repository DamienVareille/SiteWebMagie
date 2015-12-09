<?php

public class Visiteur{
  private $vis_id;
  private $vis_nom;
  private $vis_prenom;
  private $vis_mail;
  private $vis_tel;
  private $vis_objet_message;
  private $vis_message;

  public function __construct($valeurs = array()){
    $this->affecte($valeurs);
  }
  public function getVis_id(){
		return $this->vis_id;
	}

	public function setVis_id($vis_id){
		$this->vis_id = $vis_id;
	}

	public function getVis_nom(){
		return $this->vis_nom;
	}

	public function setVis_nom($vis_nom){
		$this->vis_nom = $vis_nom;
	}

	public function getVis_prenom(){
		return $this->vis_prenom;
	}

	public function setVis_prenom($vis_prenom){
		$this->vis_prenom = $vis_prenom;
	}

	public function getVis_mail(){
		return $this->vis_mail;
	}

	public function setVis_mail($vis_mail){
		$this->vis_mail = $vis_mail;
	}

	public function getVis_tel(){
		return $this->vis_tel;
	}

	public function setVis_tel($vis_tel){
		$this->vis_tel = $vis_tel;
	}

	public function getVis_objet_message(){
		return $this->vis_objet_message;
	}

	public function setVis_objet_message($vis_objet_message){
		$this->vis_objet_message = $vis_objet_message;
	}

	public function getVis_message(){
		return $this->vis_message;
	}

	public function setVis_message($vis_message){
		$this->vis_message = $vis_message;
	}


  public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){

      switch ($attribut){
        case 'id_visiteur' : $this->setVis_id($valeur);
        break;
        case 'nom' : $this->setVis_nom($valeur);
        break;
        case 'prenom' : $this->setVis_prenom($valeur);
        break;
        case 'mail' : $this->setVis_mail($valeur);
        break;
        case 'tel' : $this->setVis_tel($valeur);
        break;
        case 'objet_message' : $this->setVis_objet_message($valeur);
        break;
        case 'message' : $this->setVis_message($valeur);
        break;
      }
    }
  }
}

?>
