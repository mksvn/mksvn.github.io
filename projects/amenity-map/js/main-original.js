/* Remove gesture cue after first map click */

var mapDiv = document.getElementById('map').addEventListener("mousedown", hideGesture);
var mobileScreen = document.body.addEventListener("touchend", hideGesture);

var isMapClicked = false;

function hideGesture() {
  if(isMapClicked === false){
    document.getElementsByClassName('gesture-cue')[0].style.opacity = "0";
    mapDiv.removeEventListener('mousedown', hideGesture);
    mapDiv.removeEventListener('touchend', hideGesture);
  }
  isMapClicked = true;
}

/* Expand Map and Collapse Content*/
document.getElementById('expandMap').addEventListener("click", expandMap);

function expandMap(){
  var mapDiv = document.getElementById('map');
  var gradientDiv = document.getElementsByClassName('gradient')[0];

  mapDiv.classList.toggle("map-expanded");
  gradientDiv.classList.toggle("move-down");

  if (mapDiv.classList.contains("map-expanded")) {
    this.innerHTML = "<i class='fas fa-chevron-up'></i>";

  } else {
    this.innerHTML = "<i class='fas fa-chevron-down'></i>";
  }
}

/* Toggle Markers */
document.getElementById('nav-dining').addEventListener("mouseup", toggleMarkers);
document.getElementById('nav-retail').addEventListener("mouseup", toggleMarkers);
document.getElementById('nav-services').addEventListener("mouseup", toggleMarkers);

var dining = document.getElementById('dining-markers');
var retail = document.getElementById('retail-markers');
var services = document.getElementById('services-markers');

function toggleMarkers() {
  var id = this.id;
  if (id=="nav-dining") {
    dining.style.opacity = "1";
    retail.style.opacity = "0";
    services.style.opacity = "0";
  } else if (id=="nav-retail") {
    dining.style.opacity = "0";
    retail.style.opacity = "1";
    services.style.opacity = "0";
  } else {
    dining.style.opacity = "0";
    retail.style.opacity = "0";
    services.style.opacity = "1";
  }
};

/* Tippy Pt. 1 - Text */
// Dining
const text_nobu = document.querySelector('#nobu');
const text_morton = document.querySelector('#morton');
const text_piera = document.querySelector('#piera');
const text_watermark = document.querySelector('#watermark');
const text_capital = document.querySelector('#capital');
const text_lappart = document.querySelector('#lappart');
// Shopping
const text_target = document.querySelector('#target');
const text_downtown = document.querySelector('#downtown');
const text_tj = document.querySelector('#tj');
const text_seaport = document.querySelector('#seaport');
const text_duane = document.querySelector('#duane');
const text_brook = document.querySelector('#brook');
// Shopping
const text_stock = document.querySelector('#stock');
const text_dmv = document.querySelector('#dmv');
const text_battery = document.querySelector('#battery');
const text_cityhall = document.querySelector('#cityhall');
const text_hospital = document.querySelector('#hospital');
const text_wtc = document.querySelector('#wtc');

let textTooltip = [
  text_nobu, text_morton, text_piera,
  text_watermark, text_capital, text_lappart,
  text_target, text_downtown, text_tj,
  text_seaport, text_duane, text_brook,
  text_stock, text_dmv, text_battery,
  text_cityhall, text_hospital, text_wtc
];

/* Tippy Pt. 2 - Markers */
// Dining
const marker_nobu = document.querySelector('#marker-nobu > span');
const marker_morton = document.querySelector('#marker-morton > span');
const marker_piera = document.querySelector('#marker-piera > span');
const marker_watermark = document.querySelector('#marker-watermark > span');
const marker_capital = document.querySelector('#marker-capital > span');
const marker_lappart = document.querySelector('#marker-lappart > span');
// Shopping
const marker_target = document.querySelector('#marker-target > span');
const marker_downtown = document.querySelector('#marker-downtown > span');
const marker_tj = document.querySelector('#marker-tj > span');
const marker_seaport = document.querySelector('#marker-seaport > span');
const marker_duane = document.querySelector('#marker-duane > span');
const marker_brook = document.querySelector('#marker-brook > span');
// Services
const marker_stock = document.querySelector('#marker-stock > span');
const marker_dmv = document.querySelector('#marker-dmv > span');
const marker_battery = document.querySelector('#marker-battery > span');
const marker_cityhall = document.querySelector('#marker-cityhall > span');
const marker_hospital = document.querySelector('#marker-hospital > span');
const marker_wtc = document.querySelector('#marker-wtc > span');

let markerTooltip = [
  marker_nobu, marker_morton, marker_piera,
  marker_watermark, marker_capital, marker_lappart,
  marker_target, marker_downtown, marker_tj,
  marker_seaport, marker_duane, marker_brook,
  marker_stock, marker_dmv, marker_battery,
  marker_cityhall, marker_hospital, marker_wtc
];

/* Tippy Pt. 3 - Create corresponding text and marker tooltips */
for (var i = 0; i < textTooltip.length; i++) {
  tippy(markerTooltip[i], {
    // text tooltip
    content: textTooltip[i].innerHTML,
    triggerTarget: textTooltip[i]
  });
  tippy("#"+markerTooltip[i].parentElement.id, {
    // marker tooltip
    content: textTooltip[i].innerHTML
  });
}
