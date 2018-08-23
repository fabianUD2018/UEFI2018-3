$(function() {

    function initMap() {

        var location = new google.maps.LatLng(4.628237, -74.065976);

        var mapCanvas = document.getElementById('map');
        var mapOptions = {
            center: location,
            zoom: 16,
            panControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        var markerImage = '../img/star.png';

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: markerImage
        });

        var contentString = '<div class="info-window">' +
            '<h3><center><font color="#235D80">UEFI</font></center></h3>' +
            '<div class="info-content">' +
            '<p><center>La Unidad de Extensión Facultad de IngenierÍa de la Universidad Distrital Francisco José de Caldas se encuentra ubicada en el edificio Alejandro suarez Copete en el tercer piso.</center></p>' +
            '</div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 400
        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });


    }

    google.maps.event.addDomListener(window, 'load', initMap);
});