<!-- Global site tag (gtag.js) - Google Analytics -->
<div id="map2" style="width: 100%;"></div>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136598713-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-136598713-1');
</script>

<style>
    #map2 {
        height: 400px;
    }
</style>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmu-UkTcheWni6_HMOKYU9x3AYP571e5s&callback=initMap"></script>
<script>
    function initMap() {
        var uluru = {
            lat: 6.232093,
            lng: -75.602029
        };
        var map = new google.maps.Map(document.getElementById('map2'), {
            zoom: 15,
            center: uluru
        });

        var contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<div id="bodyContent">' +
            '<img src="images/BELEN-FACAHDA.png" style="  width: 200px;" />' +
            '</div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });

        infowindow.open(map, marker);


    }
</script>