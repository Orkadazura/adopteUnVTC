var Versaille = {lat: 48.8, lng: 2.1333};// La localisation de Mulhouse
var carte = new google.maps.Map( document.getElementById('map'), {zoom: 8, center: Versaille});// La carte, centrée sur Mulhouse

$.getJSON(
    "coordonnees.json",
    function (data) {console.log(data);
        for (const pos of data) {
            let positionGeo = {
                lat: pos.lat,
                lng: pos.lng
            };
            let marker = new google.maps.Marker({
                position: positionGeo,
                map: carte,
                icon: {
                    url: "icons/" + pos.color + "-icon.png"
                }
            });
          marker.addListener("click", function(){document.getElementById("name").innerHTML= pos.name;});
        }
        
        carte.setCenter(data[0]);
    }
);