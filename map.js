var map;

function initMap(){
    var Versailles = {
        lat: 48.8035403,
        lng:2.1266886
    }
    map = new google.maps.Map(document.getElementById('map'),{
        center: Versailles,
        zoom: 8
    });
}

google.maps.event.addDomListener(window,'load',initMap);

var defaultBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(46.2, 2.2));

var input = document.getElementById('map');
var options = {
  bounds: map.getBounds(),
  types: ['address']
};

autocomplete = new google.maps.places.Autocomplete(input, options);



var input = document.getElementById('arr');
map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

var autocomplete = new google.maps.places.Autocomplete(input, options);