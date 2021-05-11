<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
    <title>Document</title>
    <style>
        #mapid{
            height: 100%;
        }
    </style>
</head>
<body>
    <div id="mapid"></div>
</body>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

<script>
    var mymap = L.map('mapid').setView([-5.3844655,105.2496746], 15);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);

    var marker = L.marker([-5.3844655,105.2496746]).addTo(mymap);
    var circle = L.circle([-5.392,105.2496], {
    color: 'orange',
    fillColor: 'orange',
    fillOpacity: 0.5,
    radius: 500
    }).addTo(mymap);

    var polygon = L.polygon([
        [-5.38287, 105.233439],
        [-5.388593, 105.233225],
        [-5.38885, 105.235928],
        [-5.384109, 105.236056]
    ]).addTo(mymap);
    polygon.bindPopup("Jalan Purnawirawan");

    var polygon = L.polygon([
        [-5.383425, 105.281404],
        [-5.382942, 105.277973],
        [-5.384074, 105.277694],
        [-5.384181, 105.271452],
        [-5.384779, 105.270787],
        [-5.386444, 105.270594],
        [-5.385804, 105.267826],
        [-5.38638, 105.267376],
        [-5.386551, 105.266968],
        [-5.390374, 105.273082],
        [-5.389989, 105.274948],
        [-5.391228, 105.277029],
        [-5.391591, 105.281233]
    ]).addTo(mymap);

    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    }
    mymap.on('click', onMapClick);

    marker.bindPopup("<b>Selamat Datang</b><br>dirumahku").openPopup();
    circle.bindPopup("komplek panglima polim");
    polygon.bindPopup("Wilayah way halim");
</script>
</html>