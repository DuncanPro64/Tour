downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
  var xml = data.responseXML;
  var markers = xml.documentElement.getElementsByTagName('marker');
  Array.prototype.forEach.call(markers, function(markerElem) {
    var id = markerElem.getAttribute('id');
    var name = markerElem.getAttribute('name');
    var address = markerElem.getAttribute('address');
    var type = markerElem.getAttribute('type');
    var point = new google.maps.LatLng(
        parseFloat(markerElem.getAttribute('lat')),
        parseFloat(markerElem.getAttribute('lng')));

    var infowincontent = document.createElement('div');
    var strong = document.createElement('strong');
    strong.textContent = name
    infowincontent.appendChild(strong);
    infowincontent.appendChild(document.createElement('br'));

    var text = document.createElement('text');
    text.textContent = address
    infowincontent.appendChild(text);
    var icon = customLabel[type] || {};
    var marker = new google.maps.Marker({
      map: map,
      position: point,
      label: icon.label
    });


Creating custom markers
The code below shows you how to add custom labels for your markers by first creating an associative array. This associates your labels with the marker type strings: restaurant or bar. This makes the labels easy to reference when you create markers from the XML file.

var customLabel = {
  restaurant: {
    label: 'R'
  },
  bar: {
    label: 'B'
  }
};