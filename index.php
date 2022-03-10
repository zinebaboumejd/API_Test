<?php
try{
if(!empty($_GET['demande'])){
   $url = explode("/",filter_var($_GET['demande'],FILTER_SANITIZE_URL));
  // print_r($url);
  switch($url[0]){
    case "formation": echo "formation";
      break;
     case "formations": echo "formations";
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