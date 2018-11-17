<?php
require_once(PATH_ENTITY.'Links.php');
require_once('DAO.php');
class LinksDAO extends DAO{

  public function getNbUrl($url){
    $requete = "SELECT COUNT(*) AS X FROM links WHERE url = ?";
    $donnees = array($url);
    $res = $this->queryRow($requete, $donnees);
    if($res){
      return $res['X'];
    }
    else return null;
  }

  public function newLink($link){
    $requete = "INSERT INTO links(url, shortcut) VALUES(?, ?)";
    $donnees = array($link->getUrl(), $link->getShortcut());
    $res = $this->queryInsert($requete, $donnees);
    if($res == false){
      return false;
    } else {
      return true;
    }
  }
}
?>
