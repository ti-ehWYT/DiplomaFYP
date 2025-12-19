    var locations = [
      ['Name:King Kong <p> Address: 5, Jalan Mahkota 6, Bandar Mahkota Cheras, 43200 Kajang, Selangor, Malaysia</p><p>Description: Need foods</p><p>Phone No.: 012-888-0002</p>', 3.043700,101.784600, 4],
      ['Name: Dura Ian <p> Address: Genting Highlands, 69000 Genting Highlands, Pahang</p><p>Description: Need a shelter for 3 people.. me, my wife and my daughter..thank you</p><p>Phone No.: 0122121121</p>', 3.423600,101.791600, 2],
      ['Name: Ping Pong <p> Address: Persiaran Korporat KLIA, 64000 Sepang, Selangor</p><p>Description: No income.. need food.. allergic to peanut..thank you</p><p>Phone No.: 0122222222</p>', 2.741300,101.701500, 1],
    ];

let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: new google.maps.LatLng(4.1093195,109.45547499999998),
    zoom: 6.7,
  });


var infowindow = new google.maps.InfoWindow();

var marker, i;
    
    for (i = 0; i < locations.length; i++) {  
      const iconBase =
      "http://maps.google.com/mapfiles/kml/pal5/";
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        icon: iconBase + "icon13.png",
        map: map
      });

      
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));



    }
}