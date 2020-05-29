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