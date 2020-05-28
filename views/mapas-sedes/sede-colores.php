<div id="map1" style="width: 100%;"></div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136598713-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());
	
	gtag('config', 'UA-136598713-1');
	</script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmu-UkTcheWni6_HMOKYU9x3AYP571e5s&callback=initMap"></script>
<style>
	#map1 {
		height: 400px;
	}
</style>
<script>
	function initMap() {
		var uluru = {
			lat: 6.261122,
			lng: -75.585932
		};
		
		var map = new google.maps.Map(document.getElementById('map1'), {
			zoom: 15,
			center: uluru
		});
		
		var contentString = '<div id="content">' +
		'<div id="siteNotice">' +
		'</div>' +
			'<div id="bodyContent">' +
			'<img src="images/COLORES-FACHADA.png" style="  width: 200px;"  />' +
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

	};
</script>