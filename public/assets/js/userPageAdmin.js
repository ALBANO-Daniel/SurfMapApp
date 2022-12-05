// START SETUP MATERIALIZE CSS ====================================


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

// END SETUP MATERIALIZE CSS ==============================================


// function GetFromUrl(param) {
// 	var vars = {};
// 	window.location.href.replace( location.hash, '' ).replace( 
// 		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
// 		function( m, key, value ) { // callback
// 			vars[key] = value !== undefined ? value : '';
// 		}
// 	);

// 	if ( param ) {
// 		return vars[param] ? vars[param] : null;	
// 	}
// 	return vars;
// }


// // RECOVER $_GET FROM URL TO {OBJECT} 
// var spot = GetFromUrl(),
//     id = spot['id'],
//     lo = spot['lo'],
//     la = spot['la'];


// MAP SETUP 
var map = L.map('map').setView([47.10901836882738,-2.03192323395804], 5);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map); 

// Icon options
var iconOptions = {
    iconUrl: '/public/assets/img/icons/wave1.png',
    iconSize: [25, 25]
 }
 
 // Creating a custom icon
 var customIcon = L.icon(iconOptions);
// Options for the marker
var markerOptions = {
    // title: "MyLocation",
    // clickable: true,
    // draggable: true,
    icon: customIcon
 }
// ----------------------------------------

var popup = L.popup();

function modalInputText(e) {
    console.log(e.latlng);
}

var exists = 0;
function onMapClick(e) {
    // pins += L.marker([e.latlng]).addTo(map);
    // popup
        // .setLatLng(e.latlng)
        // .setContent("<a id=\"addSpotPin\"class=\"waves-effect waves-light btn-small btn text-white \">add new spot here</a>")
        // .openOn(map);
    
    // spotAdd = document.getElementById("addSpotPin");
    if(exists == 0){
      spotMarker = new L.marker(e.latlng).addTo(map);
      exists += 1;
    }
    // spotAdd.onclick = () => {
        spotMarker.setLatLng(e.latlng);
        // spotMarker.addTo(map);
        // modalInputText(e);
        // popup.close(); 
    // }
    refreshInputs(e.latlng);
}

map.on('click', onMapClick);

function makeMap(latitude, longitude) {
    L.marker([latitude, longitude]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
}

// refresh inputs value for positioned pin 
function refreshInputs(e){
    console.log(e);
    latitude.value = e.lat;
    longitude.value = e.lng;
}