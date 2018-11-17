<?php

function choixAlert($message)
{
  $alert = array();
  switch($message)
  {
    case 'URL_INVALIDE' :
      $alert['messageAlert'] = MESSAGE_URL_I;
      break;
    case 'URL_UTILISEE' :
      $alert['messageAlert'] = MESSAGE_URL_U;
      break;
    default :
      $alert['messageAlert'] = MESSAGE_ERREUR;
  }
  return $alert;
}
