// bouton.addEventListener("click", function() {
//     element.setAttribute("wrapper2", element.getAttribute("wrapper2") + "wrapper2");
// }, true);


// On détermine l'ID de ton bouton
button = document.getElementById('main');

// Au clic, on lance une fonction
button.addEventListener('click', function(){

  document.getElementById('wrapper2').classList.add('wrapperAnime');
});
