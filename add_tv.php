<?php
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=dorty', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  }
  catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
?>

<?php
  if(isset($_POST['modele']) && !empty($_POST['modele']) &&
    isset($_POST['marque']) && !empty($_POST['marque']) &&
    isset($_POST['ecran']) && !empty($_POST['ecran']) &&
    isset($_POST['resolution']) && !empty($_POST['resolution']) &&
    isset($_POST['prix']) && !empty($_POST['prix']) &&
    isset($_POST['quantité']) && !empty($_POST['quantité']) &&
    ){

    $req = $bdd->prepare('INSERT INTO tv (modele, marque, taille_ecran, resolution, prix, quantité) VALUES (?,?,?,?,?,?)');
    $req->execute(array(
      $_POST['modele'],
      $_POST['marque'],
      $_POST['ecran'],
      $_POST['resolution'],
      $_POST['prix'],
      $_POST['quantité']
    ));
    echo 'ok';
  }
?>
