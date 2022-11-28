// COLLAPSIBLE INIT 
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
  });


  
// js for the preview image upload 
uploadedArticleImg.onchange = () => {
  const [file] = uploadedArticleImg.files
  if (file) {
    showArticleImg.src = URL.createObjectURL(file);
  }
}


// TABS INIT 
document.addEventListener('DOMContentLoaded', function() {
  var el = document.querySelectorAll('.tabs');
  var instance = M.Tabs.init(el);
});

