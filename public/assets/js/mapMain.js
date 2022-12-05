returnToHomeButton.onclick = function(){
    document.location.href = "/home"
    // document.location.href = "../../../index.php"
}
var map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map); 

// PINS
L.marker([51.4, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();

var markerOne = L.marker([51.6, -0.09]).addTo(map);

var popup = L.popup();

var pins = [];

function modalInputText() {
    console.log(pins);
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
    modalInputText();
    popup.close();

}
}


map.on('click', onMapClick);



function makeMap(latitude, longitude) {
    L.marker([latitude, longitude]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
}