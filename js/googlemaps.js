/* Iniciador del mapa */  
function initMap() {
                        var panama = {lat: 8.981312, lng: -79.521658}; /*Posicion inicial, puse calle 50  */
                        var map = new google.maps.Map(document.getElementById('map'), {
                          zoom: 15, /* Zoom o que tan cerca estara el mapa de la posicion pedida*/
                          mapTypeId: google.maps.MapTypeId.ROADMAP,    
                          center: panama
                        });
                        var marker = new google.maps.Marker({
                          position: panama,
                          draggable:true, /*Opcion que permite arrastrar el marcador */ 
                          map: map
                        });

   }

/*Supuestamente funcion del mapa que permite elegir algo del mapa y ponerlo en los input  */
google.maps.event.addListener(marker, 'dragend', function(evt) {   
    
        var latLng = new google.maps.LatLng(lat,lng);
         document.getElementById('lat').value = evt.latLng.lat().toFixed(3); //latitude
         document.getElementById('lng').value = evt.latLng.lng().toFixed(3) //longitude

    });