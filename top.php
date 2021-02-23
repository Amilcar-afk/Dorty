<?php
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=dorty', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  }
  catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
?>

<?php
  $req = $bdd->prepare('SELECT id, modele, marque, taille_ecran, resolution, prix, quantité FROM tv ORDER BY quantité ASC');
  $req->execute();
  $res = $req->fetchAll(PDO::FETCH_ASSOC);

  foreach ($res as $key => $value) {
    echo'<br><label> id: ' . $res[$key]['id'] . '</label><br>';
    echo'<label> modele: ' . $res[$key]['modele'] . '</label><br>';
    echo'<label> marque: ' . $res[$key]['marque'] . '</label><br>';
    echo'<label> taille:   ' . $res[$key]['taille_ecran'] . '</label><br>';
    echo'<label> resolution:   ' . $res[$key]['resolution'] . '</label><br>';
    echo'<label> prix:   ' . $res[$key]['prix'] . '</label><br>';
    echo'<label> quantité:   ' . $res[$key]['quantité'] . '</label><br>';
    echo'<button onclick="remove_tv(' . $res[$key]['id'] . ')">DELETE</button><br>';

  }
?>
