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
