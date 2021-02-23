<!DOCTYPE html>
<html>
<head>
  <title>Dorty</title>
  <meta charset="utf-8">
</head>
<body onload="liste_tv()" onload="top_tv()">

  <h1>Ajout d'une TV</h1>
  <div>
    <input type="text" name="modele" placeholder="modele*" id="modele">
    <input type="text" name="marque" placeholder="marque*" id="marque">
    <input type="text" name="taille_ecran" placeholder="taille de l'écran*" id="taille_ecran">
    <input type="text" name="resolution" placeholder="resolution*" id="resolution">
    <input type="text" name="prix" placeholder="prix*" id="prix">
    <input type="text" name="quantité" placeholder="quantité*" id="quantité">
    <button onclick="add_tv()">Ajouter une TV</button>
  </div>

  <h1>Liste des bouteille</h1>
  <div id="liste">

  </div>

  <h1>Top 5 bouteille</h1>
  <div id="top">

  </div>


<script type="text/javascript" src="dorty.js"></script>
</body>
</html>
