// COLLAPSIBLE INIT 
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
  });


  
// ARTICLE IMAGE PREVIEW 
uploadedArticleImg.onchange = () => {
  const [file] = uploadedArticleImg.files
  if (file) {
    showArticleImg.src = URL.createObjectURL(file);
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

