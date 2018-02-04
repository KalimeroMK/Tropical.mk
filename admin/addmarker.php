<?php require_once 'header.php'; ?>

<script type="text/javascript">
    //<![CDATA[

    var customIcons = {
        patepis: {
            icon: 'http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_red.png'
        },
        preportaza: {
            icon: 'http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_yellow.png'
        },
        reportaza: {
            icon: 'http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_black.png'
        },
        fotoreportaza: {
            icon: 'http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_purple.png'
        },
        dokumentaren: {
            icon: 'http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_green.png'
        }
        
        
        
        
        
        
        
    };
    function load() {
        var map = new google.maps.Map(document.getElementById("map"), {
            center: new google.maps.LatLng(41.594905, 21.604614),
            zoom: 8,
            mapTypeId: 'roadmap'
        });


        var infoWindow = new google.maps.InfoWindow;

        // Change this depending on the name of your PHP file
        downloadUrl("phpsqlajax_genxml.php", function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName("marker");
            for (var i = 0; i < markers.length; i++) {
                var name = markers[i].getAttribute("name");
                var id = markers[i].getAttribute("id");
                var type = markers[i].getAttribute("type");
                var point = new google.maps.LatLng(
                        parseFloat(markers[i].getAttribute("lat")),
                        parseFloat(markers[i].getAttribute("lng")));
                var html = "<div id=\"infowindow\"><b>" + name + "</b> <br/><a href=\"viewarticle.php?id=" + id + "\">Прегледај</a></div>";
                var icon = customIcons[type] || {};
                var marker = new google.maps.Marker({
                    map: map,
                    position: point,
                    animation: google.maps.Animation.DROP,
                    draggable: false,
                    icon: icon.icon,
                });
                bindInfoWindow(marker, map, infoWindow, html);
            }
        });
        google.maps.event.addListener(marker, 'click', toggleBounce);
    }



    function bindInfoWindow(marker, map, infoWindow, html) {
        google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
        });
    }

    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;
        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                request.onreadystatechange = doNothing;
                callback(request, request.status);
            }
        };
        request.open('GET', url, true);
        request.send(null);
    }

    function doNothing() {
    }

    //]]>

</script>

<div class="clearfix"><br /></div>
<div class="container">
    <div id="map"></div>


    <div class="clearfix"><br /></div>

    <a href="addmap.php" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"> </span> Додади Маркер</a>
    <a href="pregled.php" class="btn btn-warning"><span class="glyphicon glyphicon-cloud-download"> </span> Преглед</a>

</div>


<?php require_once 'footer.php'; ?>