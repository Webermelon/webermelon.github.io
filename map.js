let jsonFilePath = "updated_data.json";
let marker_array;
fetch(jsonFilePath)
  .then((response) => response.json())
  .then((jsonObject) => {
    console.log(jsonObject);
    marker_array = jsonObject;
    initiate_map(marker_array);
  })
  .catch((error) => {
    console.error("Error reading or parsing JSON:", error);
  });

let map;

function initiate_map(marker_array) {
  let start_loc = [marker_array[0].latitude, marker_array[0].longitude];
  // console.log(start_loc);

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
    tap: false
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
  // map.addLayer(new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer


  //overlay
  var osm;
  let bound_info;

  // $.getJSON('https://cdn.jsdelivr.net/gh/johan/world.geo.json@34c96bba/countries/SVK.geo.json').then(function (geoJSON) {
  // 	osm = new L.TileLayer.BoundaryCanvas("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  // 		boundary: geoJSON,
  // 		attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors, SK shape <a href="https://github.com/johan/world.geo.json">johan/word.geo.json</a>'
  // 	});
  // 	map.addLayer(osm);
  // 	var SKLAYER = L.geoJSON(geoJSON);
  // 	bound_info = SKLAYER.getBounds();
  // 	map.fitBounds(SKLAYER.getBounds());
  // });

  function style(feature) {
    return {
        fillColor: "#fff",
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 1
    };
}

L.geoJson(statesData, {style: style}).addTo(map);

  // $.getJSON(imageUrl).then(function (geoJSON) {
  //   osm = new L.TileLayer.BoundaryCanvas(imageUrl, {
  //     boundary: imageUrl,
  //     attribution:
  //       '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors, SK shape <a href="https://github.com/johan/world.geo.json">johan/word.geo.json</a>',
  //   });
  //   map.addLayer(osm);
  //   var SKLAYER = L.geoJSON(imageUrl);
  //   bound_info = SKLAYER.getBounds();
  //   map.fitBounds(SKLAYER.getBounds());
  // });

//   generate_marker (marker_array)

  // function map_update_view(lat_long_array){

  //     map.setView(lat_long_array, 12);
  // };
}

function generate_marker(marker_array) {
  var markersLayer = new L.LayerGroup(); //layer contain searched elements

  console.log(marker_array);

  map.addLayer(markersLayer);

  // var controlSearch = new L.Control.Search({
  //     position: 'topright',
  //     layer: markersLayer,
  //     initial: false,
  //     zoom: 12,
  //     marker: false
  // });

  // map.addControl(controlSearch);

  // custom marker icon===>
  var customIcon = L.icon({
    iconUrl: "./images/marker-v2.png",
    iconSize: [50, 50], // set the size of the icon
    iconAnchor: [16, 50], // point of the icon that corresponds to marker's location
    popupAnchor: [0, -50], // point from which the popup should open relative to the iconAnchor
  });
  // end custom marker icon===>

  /// start custom new marker =======>>>>>>>>>>
//   for (f in marker_array) {
    console.log(marker_array["latitude"]);
    let name = marker_array["názov obce"];
    let lat = marker_array["latitude"];
    let long = marker_array["longitude"];
    let temp_loc = [lat, long];
    let marker_array_marker = new L.Marker(new L.latLng(temp_loc), {
      title: name,
    });

    marker_array_marker.setIcon(customIcon);
    // let tem_string = `Village name: ${name} <br> 'Mg: ${marker_array.Mg} <br> Ca: ${marker_array[f].Ca} <br> Pomer: '${marker_array[f].Pomer} <br>`;
    // marker_array_marker.bindPopup(tem_string);
    markersLayer.addLayer(marker_array_marker);
//   }
  console.log("marker should be placed ");
}
