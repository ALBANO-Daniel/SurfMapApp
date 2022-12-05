// MAP SETUP 
var map = L.map('map').setView([47.10901836882738,-2.03192323395804], 6);

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
// SPOTS LIST -------------------------------------------

// bretignole sur mer 
L.marker([46.613533524493164, -1.8614124152482938], markerOptions).addTo(map)
    .bindPopup('Bretignole sur Mer <br> <a href="/mapsingle?id=1&la=46.613533524493164&lo=-1.8614124152482938">spot view</a>')
    .openPopup();

// roche longue 
L.marker([43.493835108466754, -1.5554160063572378], markerOptions).addTo(map)
    .bindPopup('Roche longue <br> <a href="/mapsingle?id=2&la=46.613533524493164&lo=-1.8614124152482938">spot view</a>')
    .openPopup();

// Pointe du Raz 
L.marker([48.03933357473801, -4.740638759276391], markerOptions).addTo(map)
    .bindPopup('Roche longue <br> <a href="/mapsingle?id=2&la=46.613533524493164&lo=-1.8614124152482938">spot view</a>')
    .openPopup();

// ----------------------------------------------------




var popup = L.popup();

var pins = [];

function modalInputText(e) {
    console.log(e.latlng);
}


function onMapClick(e) {
    // pins += L.marker([e.latlng]).addTo(map);
    popup
        .setLatLng(e.latlng)
        .setContent("<button id=\"spotAdd\">add new spot here</button>")
        .openOn(map);
    
    spotAdd = document.getElementById("spotAdd");
    spotAdd.onclick = () => {
        pins = new L.marker(e.latlng).addTo(map).bindPopup('SUrfSpot');
        modalInputText(e);
        popup.close();
    }
}


map.on('click', onMapClick);



function makeMap(latitude, longitude) {
    L.marker([latitude, longitude]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
}