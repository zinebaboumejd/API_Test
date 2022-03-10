<?php
require_once("./api.php");
try{
if(!empty($_GET['demande'])){
   $url = explode("/",filter_var($_GET['demande'],FILTER_SANITIZE_URL));
  // print_r($url);
  switch($url[0]){
    case "formations":
         if(empty($url[1])){
           getFormation();
         }else{
          getFormationByCategorie($url[1]);
         }
      break;
     case "formation": 
      if(!empty($url[1])){
      getFormationById($url[1]);
      }else{
        throw new Exception("Enter un numero de formation");
      }
      break; 
      default :  throw new Exception("la domanede n'est pas valide");
  }
}else{
    throw new Exception("problème de récupération de donnéer.");
}
}catch(Exception $e){
  $erreur=[
      "message" => $e->getMessage(),
      "code"=>  $e->getCode()  
  ];
  print_r($erreur);
}