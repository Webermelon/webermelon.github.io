let map;

var the_zoom = 7.9;
if (window.innerWidth <= 935) {
  the_zoom = 6.8;
}

map = new L.Map("map", {
  zoomSnap: 0.1,
  zoom: the_zoom,
  setView: true,
  center: new L.latLng(48.750297, 19.670027),
  // center: new L.latLng(start_loc),
  zoomControl: false,
  dragging: false,
  tap: false,
}); //set center from first location

map.touchZoom.disable();
map.doubleClickZoom.disable();
map.scrollWheelZoom.disable();
map.boxZoom.disable();
map.keyboard.disable();

// var imageUrl = './images/map-bg.png';
let original_layer = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
var imageUrl = "images/Group.png";
var imageUrl = "./images/map-update-geodata.png";

var mapBounds = map.getBounds();
var myNewLayer = L.imageOverlay(imageUrl, mapBounds);
map.addLayer(myNewLayer);

function style(feature) {
  return {
    fillColor: "#fff",
    weight: 2,
    opacity: 1,
    color: "white",
    dashArray: "3",
    fillOpacity: 1,
  };
}

function generate_marker(marker_array) {
  var markersLayer = new L.LayerGroup(); //layer contain searched elements
  map.addLayer(markersLayer);

  // custom marker icon===>
  var customIcon = L.icon({
    iconUrl: "./images/marker-v2.png",
    iconSize: [50, 50], // set the size of the icon
    iconAnchor: [16, 50], // point of the icon that corresponds to marker's location
    popupAnchor: [0, -50], // point from which the popup should open relative to the iconAnchor
  });

  /// start custom new marker =======>>>>>>>>>>
  let name = marker_array["názov_obce"];
  let lat = marker_array["latitude"];
  let long = marker_array["longitude"];
  let temp_loc = [lat, long];
  let marker_array_marker = new L.Marker(new L.latLng(temp_loc), {
    title: name,
  });

  marker_array_marker.setIcon(customIcon);

  markersLayer.addLayer(marker_array_marker);
}
