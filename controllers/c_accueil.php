<?php
require_once(PATH_MODELS.'LinksDAO.php');
require_once(PATH_ENTITY.'Links.php');
$linksDAO = new LinksDAO();

if(isset($_POST['url'])){
  $url = $_POST['url'];

  if(!filter_var($url, FILTER_VALIDATE_URL)){
    header('location: ../?error=URL_INVALIDE');
    exit();
  }

  $shortcut = crypt($url, time());

  $nbUrl = $linksDAO->getNbUrl($url);
  if($nbUrl != 0){
    header('location: ../?error=URL_UTILISEE');
    exit();
  }

  $link = new Links(null, $url, $shortcut);
  $linksDAO->newLink($link);
  header('location: ../?short='.$shortcut);
}

if(isset($_GET['error'])){
  $error = htmlspecialchars($_GET['error']);
  $alert = choixAlert($error);
}
require_once(PATH_VIEWS.'accueil.php');
