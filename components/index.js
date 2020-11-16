Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@DuncanPro64 
googlemaps
/
js-samples
30
332507
Code
Issues
3
Pull requests
2
Actions
Security
Insights
js-samples/dist/samples/add-map/index.js /
@jpoehnelt
jpoehnelt fix: add region tags for add-map sample (#356)
Latest commit 4a2a166 on Oct 16
 History
 2 contributors
@jpoehnelt@dependabot
Executable File  21 lines (21 sloc)  602 Bytes
  
// [START maps_add_map]
// Initialize and add the map
function initMap() {
  // [START maps_add_map_instantiate_map]
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.036 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // [END maps_add_map_instantiate_map]
  // [START maps_add_map_instantiate_marker]
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
  // [END maps_add_map_instantiate_marker]
}
// [END maps_add_map]
© 2020 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
