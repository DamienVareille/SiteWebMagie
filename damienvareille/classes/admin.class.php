<?php
class Admin{
  private $id_admin;
  private $nom_admin;
  private $prenom_admin;
  private $login_admin;
  private $pwd_admin;

  public function __construct($valeurs = array()){
    $this->affecte($valeurs);
  }

  public function getId_admin(){
    return $this->id_admin;
  }

  public function setId_admin($id_admin){
    $this->id_admin = $id_admin;
  }

  public function getNom_admin(){
    return $this->nom_admin;
  }

  public function setNom_admin($nom_admin){
    $this->nom_admin = $nom_admin;
  }

  public function getPrenom_admin(){
    return $this->prenom_admin;
  }

  public function setPrenom_admin($prenom_admin){
    $this->prenom_admin = $prenom_admin;
  }

  public function getLogin_admin(){
    return $this->login_admin;
  }

  public function setLogin_admin($login_admin){
    $this->login_admin = $login_admin;
  }

  public function getPwd_admin(){
    return $this->pwd;
  }

  public function setPwd_admin($pwd){
    $this->pwd = $pwd;
  }

  public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){

      switch ($attribut){
        case 'id_admin' : $this->setId_admin($valeur);
        break;
        case 'nom_admin' : $this->setNom_admin($valeur);
        break;
        case 'prenom_admin' : $this->setNom_admin($valeur);
        break;
        case 'login_admin' : $this->setLogin_admin($valeur);
        break;
        case 'pwd_admin' : $this->setPwd_admin($valeur);
        break;
      }
    }
  }
}
?>
