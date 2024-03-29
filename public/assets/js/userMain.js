// TABS INIT 
document.addEventListener('DOMContentLoaded', function() {
  var el = document.querySelectorAll('.tabs');
  var instance = M.Tabs.init(el);
});

// CHARACTER COUNTER
// console.log(Calendar);
document.addEventListener('DOMContentLoaded', function() {  // run this only after page loads
    const counter = document.getElementById('');
    // const counter = document.querySelectorAll("input#user,input#email,input#password");   // all input tags with id user
    M.CharacterCounter.init(counter);
}); 

// SELECT INIT  
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });

  
// js for the preview image upload 
uploadedProfileImg.onchange = evt => {
    const [file] = uploadedProfileImg.files
    if (file) {
      showProfileImg.src = URL.createObjectURL(file);
    }
  }

