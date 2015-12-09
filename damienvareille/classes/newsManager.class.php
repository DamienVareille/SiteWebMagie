<?php
class NewsManager{
  private $db;

  public function __construct($db){
    $this->db = $db;
  }

  public function listerNews(){
    $newsTab = array();
    $sql = 'SELECT id_news, titre_news, date_news, description_news FROM news';
    $requete = $this->db->prepare($sql);
    $requete->execute();

    while($news = $requete->fetch(PDO::FETCH_OBJ)){
        $newsTab[] = new News($news);
    }

    $requete->closeCursor();
    return $newsTab;
  }

  public function getNews($idNews){
    $sql = 'SELECT id_news, titre_news, date_news, description_news FROM news WHERE id_news = :idNews';
    $requete = $this->db->prepare($sql);
    $requete->bindValue(':idNews', $idNews);
    $requete->execute();

    $news = $requete->fetch(PDO::FETCH_OBJ);
    $resu = new News($news);

    $requete->closeCursor();
    return $resu;
  }
}

?>
