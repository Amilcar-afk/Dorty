<?php
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=dorty', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  }
  catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
?>
<?php
  $req = $bdd->prepare('DELETE FROM tv WHERE id = ?');
  $req->execute(array($_GET['tv']));
  $res = $req->fetchAll(PDO::FETCH_ASSOC);
?>
