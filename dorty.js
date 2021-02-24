
function add_tv(){
  const modele_input = document.getElementById('modele');
  const marque_input = document.getElementById('marque');
  const taille_ecran_input = document.getElementById('taille_ecran');
  const resolution_input = document.getElementById('resolution');
  const prix_input = document.getElementById('prix');
  const quantite_input = document.getElementById('quantité');

  const mod = modele_input.value;
  const marque = marque_input.value;
  const ecran = taille_ecran_input.value;
  const res = resolution_input.value;
  const prix = prix_input.value;
  const quant = quantite_input.value;


  let request = new XMLHttpRequest();

  request.open('POST', 'add_tv.php', true);

  request.onreadystatechange = function(){
    if (request.readyState === 4) {
      console.log(request.responseText);
    }
  }

  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(`modele=${mod}&marque=${marque}&ecran=${ecran}&resolution=${res}&prix=${prix}&quantité=${quant}`);

}

function liste_tv(){
  const div = document.getElementById('liste');

  let request = new XMLHttpRequest();
  request.open('GET', 'liste.php', true);

  request.onreadystatechange = function(){
    if(request.readyState === 4 && request.status === 200){
      div.innerHTML = request.responseText;
    }
  };

  request.send();
}

function remove_tv(id_tv){
  let request = new XMLHttpRequest();

  request.open('DELETE', 'delete.php?tv=' + id_tv, true);

  request.onreadystatechange = function(){
    if(request.readyState === 4){
      console.log('ok supp');
    }
  };
  request.send();
}

function top_tv(){
  const div = document.getElementById('top');
  let request = new XMLHttpRequest();

  request.open('GET', 'top.php', true);

  request.onreadystatechange = function(){
    if(request.readyState === 4){
      console.log('ok top');
      div.innerHTML = request.responseText;
    }
  };
  request.send();
}
