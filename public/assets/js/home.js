document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems);
  });

// carousel main
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, {
      // duration: 100,  // autoscroll milisec
      // padding:  // btw images
      // shift: 150, // pading of centered img
      // dist: -300 // zoom of centered img
      // fullWidth: true
    });
  });

  toaster = document.getElementById('toaster');
  setTimeout(function(){
    toaster.innerHTML = '';
  },2000);
