
function GetFromUrl(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}


// RECOVER $_GET FROM URL TO {OBJECT} 
var spot = GetFromUrl(),
    id = spot['id'],
    lo = spot['lo'],
    name = spot['name'],
    la = spot['la'];


// MAP SETUP 
var map = L.map('map').setView([spot.la,spot.lo], 13);

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


// CREATE SPOT PIN 
L.marker([spot.la , spot.lo], markerOptions).addTo(map)
    .bindPopup(spot.name.replaceAll('%20', ' '))
    .openPopup();

// WIP WIP WIP 
// CHANGE THE GET URL to just ID, and fetch json with id