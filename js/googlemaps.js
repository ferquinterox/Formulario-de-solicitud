   function initMap() {
                        var panama = {lat: 8.981312, lng: -79.521658};
                        var map = new google.maps.Map(document.getElementById('map'), {
                          zoom: 15,
                          mapTypeId: google.maps.MapTypeId.ROADMAP,    
                          center: panama
                        });
                        var marker = new google.maps.Marker({
                          position: panama,
                          draggable:true,
                          map: map
                        });

   }
google.maps.event.addListener(marker, 'dragend', function(evt) {   
    
        var latLng = new google.maps.LatLng(lat,lng);
         document.getElementById('lat').value = evt.latLng.lat().toFixed(3); //latitude
         document.getElementById('lng').value = evt.latLng.lng().toFixed(3) //longitude

    });