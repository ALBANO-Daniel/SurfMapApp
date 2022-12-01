// COLLAPSIBLE INIT 
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
  });


  
// NEWS IMAGE PREVIEW 
uploadedNewsImg.onchange = () => {
  const [file] = uploadedNewsImg.files
  if (file) {
    showNewsImg.src = URL.createObjectURL(file);
  }
}
// SPOT IMAGE PREVIEW
uploadedSpotImg.onchange = () => {
  const [file] = uploadedSpotImg.files
  if (file) {
    showSpotImg.src = URL.createObjectURL(file);
  }
}

// TABS INIT 
document.addEventListener('DOMContentLoaded', function() {
  var el = document.querySelectorAll('.tabs');
  var instance = M.Tabs.init(el);
});

