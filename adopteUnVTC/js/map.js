var Mulhouse = {lat: 47.7467, lng: 7.3389275};// La localisation de Mulhouse
var carte = new google.maps.Map( document.getElementById('map'), {zoom: 8, center: Mulhouse});// La carte, centrée sur Mulhouse

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