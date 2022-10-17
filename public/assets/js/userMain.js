// TABS INIT 
//   var instance = M.Tabs.init(el, options);



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
