<?php
require_once(PATH_MODELS.'LinksDAO.php');
require_once(PATH_ENTITY.'Links.php');
$linksDAO = new LinksDAO();

if(isset($_GET['q'])){
  $shortcut = htmlspecialchars($_GET['q']);

  $link = $linksDAO->getLinkByShortcut($shortcut);
  if($link == null){
    header('location: ../?error=URL_INVALIDE');
    exit();
  }
  header('location: '.$link->getUrl());
  exit();
}

if(isset($_POST['url'])){
  $url = $_POST['url'];

  if(!filter_var($url, FILTER_VALIDATE_URL)){
    header('location: ../?error=URL_INVALIDE');
    exit();
  }

  $shortcut = crypt($url, rand());

  $link = $linksDAO->getLinkByUrl($url);
  if($link != null){
    header('location: ../?short='.$link->getShortcut());
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
if(isset($_GET['short'])){
  $short = htmlspecialchars($_GET['short']);
  $alert = choixAlert('SHORT', $short);
}
require_once(PATH_VIEWS.'accueil.php');
