var colorMap1 = '#9e9e9e';
var colorMapBackground = '#f0f4c3';
var colorMapBuilding1 = '#dce775';
var colorMapBuilding2 = '#e6ee9c';


var styles = [

// hide store arounds 
  // { featureType: 'poi.business', stylers: [{visibility: 'off'}] },
  // { elementType: 'labels.icon', stylers: [{visibility: 'off'}] },

// change map colors
  { elementType: 'geometry', stylers: [{color: colorMapBackground}] },

  { elementType: 'labels.text.fill', stylers: [{color: '#616161'}] },
  { elementType: 'labels.text.stroke', stylers: [{color: colorMapBackground}] },

  { featureType: 'administrative.land_parcel', elementType: 'labels.text.fill', stylers: [{color: '#bdbdbd'}] },

  { featureType: 'poi', elementType: 'geometry', stylers: [{color: colorMapBuilding1}] },
  { featureType: 'poi', elementType: 'labels.text.fill', stylers: [{color: '#757575'}] },
  { featureType: 'poi.park', elementType: 'geometry', stylers: [{color: colorMapBuilding2}] },
  { featureType: 'poi.park', elementType: 'labels.text.fill', stylers: [{color: colorMap1}] },

  { featureType: 'road', elementType: 'geometry', stylers: [{color: '#ffffff'}] },
  { featureType: 'road.arterial', elementType: 'labels.text.fill', stylers: [{color: '#757575'}] },
  { featureType: 'road.highway', elementType: 'geometry', stylers: [{color: '#dadada'}] },
  { featureType: 'road.highway', elementType: 'labels.text.fill', stylers: [{color: '#616161'}] },
  { featureType: 'road.local', elementType: 'labels.text.fill', stylers: [{color: colorMap1}] },

  { featureType: 'transit.line', elementType: 'geometry', stylers: [{color: colorMapBuilding2}] },
  { featureType: 'transit.station', elementType: 'geometry', stylers: [{color: colorMapBuilding1}] },

  { featureType: 'water', elementType: 'geometry', stylers: [{color: '#c9c9c9'}] },
  { featureType: 'water', elementType: 'labels.text.fill', stylers: [{color: colorMap1}]}
];      

function initMap() {
  var latlng = new google.maps.LatLng(39.305, -76.617);

  var position = new google.maps.LatLng(43.655239, -79.380248);
  var positionMap = new google.maps.LatLng(43.655805, -79.380559);

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 17,
    center: positionMap
  });

  // map.setOptions({styles: styles['default']});
  map.setOptions({styles: styles});

  var marker = new google.maps.Marker({
    position: position,
    map: map,
    title: 'Aki Imamura',
    url: "https://www.google.ca/maps/place/Aki+Imamura+Hairstylist/@43.6552185,-79.3844401,16z/data=!4m8!1m2!2m1!1saki+!3m4!1s0x89d4cb34cc094ca7:0xc8794f493deb5022!8m2!3d43.6552089!4d-79.3800547"
  });

  google.maps.event.addListener(marker, 'click', function() {
    openUrl(this.url);
  });
}