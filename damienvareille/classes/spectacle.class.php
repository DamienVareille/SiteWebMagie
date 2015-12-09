<?php
class Spectacle{
  private $spec_id;
  private $spec_titre;
  private $spec_note_haut;
  private $spec_note_bas;
  private $spec_description;
  private $spec_img;

  public function __construct($valeurs = array()){
    if(!empty($valeurs))
      $this->affecte($valeurs);
  }

  public function getSpec_id(){
		return $this->spec_id;
	}

	public function setSpec_id($spec_id){
		$this->spec_id = $spec_id;
	}

	public function getSpec_titre(){
		return $this->spec_titre;
	}

	public function setSpec_titre($spec_titre){
		$this->spec_titre = $spec_titre;
	}

	public function getSpec_note_haut(){
		return $this->spec_note_haut;
	}

	public function setSpec_note_haut($spec_note_haut){
		$this->spec_note_haut = $spec_note_haut;
	}

	public function getSpec_note_bas(){
		return $this->spec_note_bas;
	}

	public function setSpec_note_bas($spec_note_bas){
		$this->spec_note_bas = $spec_note_bas;
	}

	public function getSpec_description(){
		return $this->spec_description;
	}

	public function setSpec_description($spec_description){
		$this->spec_description = $spec_description;
	}

	public function getSpec_img(){
		return $this->spec_img;
	}

	public function setSpec_img($spec_img){
		$this->spec_img = $spec_img;
	}

  public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){

      switch ($attribut){
        case 'id_spectacle' : $this->setSpec_id($valeur);
        break;
        case 'titre_spectacle' : $this->setSpec_titre($valeur);
        break;
        case 'note_haut_spectacle' : $this->setSpec_note_haut($valeur);
        break;
        case 'note_bas_spectacle' : $this->setSpec_note_bas($valeur);
        break;
        case 'description' : $this->setSpec_description($valeur);
        break;
        case 'image_spectacle' : $this->setSpec_img($valeur);
        break;
      }
    }
  }
}
?>
