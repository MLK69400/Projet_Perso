
// On détermine l'ID de ton bouton
button = document.getElementById('main');

// Au clic, on lance une fonction
button.addEventListener('click', function(){

  document.getElementById('wrapper2').classList.add('wrapperAnime');
  setTimeout(function(){ location.replace("accueil.php"); }, 2000);


});
