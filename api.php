<?php
function getFormation(){
//echo "liste de formation";
$pdo=getConnexion();
$req="SELECT f.id , f.libelle,f.description,f.image ,c.libelle as cateigorie FROM formation f INNER JOIN categorie c on f.categorie_id=c.id";
$stmt=$pdo->prepare($req);
$stmt->execute();
$formations=$stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();
sendJSON($formations);
}
function getFormationByCategorie($categorie){
    echo "list de categorie";
}
function getFormationById($id){
    echo "list by id";
}
function getConnexion(){
    return new PDO("mysql:host=localhost;dbname=fh2prog;charchat=utf_8","root","");
}