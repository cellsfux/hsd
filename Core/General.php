<?php

const URLROOT='http://localhost/sylvain/Public/';

const KEYToken = 'Your_token_Here';

const WEB_NAME='Hesed Sarl';



/**
 * Fonction saluer
 */
function Saluer() {
  $heure = date('H');
  if ($heure >= 5 && $heure < 12) {
      echo "Bonjour";
  } else if ($heure >= 12 && $heure < 18) {
      echo "Bon après-midi";
  } else {
      echo "Bonsoir";
  }
}



function URLGenerator(){
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $url = "https"; 
  else
    $url = "http"; 
    
  // Ajoutez // à l'URL.
  $url .= "://"; 
    
  // Ajoutez l'hôte (nom de domaine, ip) à l'URL.
  $url .= $_SERVER['HTTP_HOST']; 
    
  // Ajouter l'emplacement de la ressource demandée à l'URL
  $url .= $_SERVER['REQUEST_URI']; 
      
  return $url; 
}



/**
 * Re tourner un age a partir d'une date
 */
function Age($date_naissance)
{
$am = explode('-', $date_naissance);
$an = explode('-', date('Y/m/d'));
if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
return $an[2] - $am[2] - 1;
}


