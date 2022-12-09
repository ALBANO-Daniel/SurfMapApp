// MAP SETUP 
var map = L.map('map').setView([47.10901836882738,-2.03192323395804], 6);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map); 

// Icon options
var iconOptions = {
    iconUrl: '/public/assets/img/icons/wave1.png',
    iconSize: [30, 30]
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

 fetch('/config/spots.json')
 .then((response) => response.json())
 .then((data) => {
    data.forEach(spot => {
        L.marker([spot.latitude, spot.longitude],markerOptions).addTo(map)
        .bindPopup(`${spot.name}<br> <a href="/mapsingle?id=${spot.id_spots}&la=${spot.latitude}&lo=${spot.longitude}&name=${spot.name}">regarder</a>`)
        .openPopup();
    });
  });


// spots = JSON.parse(url("/config/spots.json"));

 /// WIP WIP WIP

// var popup = L.popup();

// var pins = [];

// function modalInputText(e) {
//     console.log(e.latlng);
// }


// function onMapClick(e) {
//    L.marker([e.latlng]).addTo(map);
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
