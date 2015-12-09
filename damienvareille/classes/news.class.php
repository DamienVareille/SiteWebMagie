<?php

class News{
  private $news_id;
  private $news_date;
  private $news_titre;
  private $news_description;

  public function __construct($valeurs = array()){
    $this->affecte($valeurs);
  }

  public function getNews_id(){
		return $this->news_id;
	}

	public function setNews_id($news_id){
		$this->news_id = $news_id;
	}

	public function getNews_date(){
		return $this->news_date;
	}

	public function setNews_date($news_date){
		$this->news_date = $news_date;
	}

	public function getNews_titre(){
		return $this->news_titre;
	}

	public function setNews_titre($news_titre){
		$this->news_titre = $news_titre;
	}

	public function getNews_description(){
		return $this->news_description;
	}

	public function setNews_description($news_description){
		$this->news_description = $news_description;
	}

  public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){

      switch ($attribut){
        case 'id_news' : $this->setNews_id($valeur);
        break;
        case 'titre_news' : $this->setNews_titre($valeur);
        break;
        case 'date_news' : $this->setNews_date($valeur);
        break;
        case 'description_news' : $this->setNews_description($valeur);
        break;
      }
    }
  }


}

?>
