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

// MAP SETUP ==================================================================
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
var markerOptions = {
    icon: customIcon
}

// refresh input's value for the positioned pin values.
function refreshInputs(latlng){
  console.log(latlng);
  latitude.value = latlng.lat;
  longitude.value = latlng.lng;
}

function onMapClick(e) {
    if(typeof spotMarker == "undefined") spotMarker = new L.marker(e.latlng, markerOptions).addTo(map);
    else spotMarker.setLatLng(e.latlng);
    // change the values of longitude and latitude form inputs
    refreshInputs(e.latlng);
}

map.on('click', onMapClick);
