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

 /// WIP WIP WIP

// var popup = L.popup();

// var pins = [];

// function modalInputText(e) {
//     console.log(e.latlng);
// }


// function onMapClick(e) {
//     // pins += L.marker([e.latlng]).addTo(map);
//     popup
//         .setLatLng(e.latlng)
//         .setContent("<button id=\"spotAdd\">add new spot here</button>")
//         .openOn(map);
    
//     spotAdd = document.getElementById("spotAdd");
//     spotAdd.onclick = () => {
//         pins = new L.marker(e.latlng).addTo(map).bindPopup('SUrfSpot');
//         modalInputText(e);
//         popup.close();
//     }
// }


// map.on('click', onMapClick);



// function makeMap(latitude, longitude) {
//     L.marker([latitude, longitude]).addTo(map)
//     .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
//     .openPopup();
// }