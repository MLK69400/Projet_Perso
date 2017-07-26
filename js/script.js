
window.onload = function() { document.body.className = ''; };
window.ontouchmove = function() { return false; };
window.onorientationchange = function() { document.body.scrollTop = 0; };

// On détermine l'ID de ton bouton
var button = document.getElementById('identite');

// Au clic, on lance une fonction
button.addEventListener('click', function(){

  document.getElementById('wrapper').classList.add('wrapperAnime');
  // setTimeout(function(){ location.replace("accueil.php"); }, 2000);
  document.getElementById('menu').style.display='block';


});
