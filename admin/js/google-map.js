jQuery(document).ready(function($){

    var map;
    var marker;
    var myLatlng = new google.maps.LatLng(37.4224764,-122.0842499);
    var geocoder = new google.maps.Geocoder();
    var infowindow = new google.maps.InfoWindow();
    function initialize(){
        var mapOptions = {
            zoom: 18,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById("google-map"), mapOptions);

        marker = new google.maps.Marker({
            map: map,
            position: myLatlng,
            draggable: true
        });


//Need an effictive API KEY
        geocoder.geocode({'latLng': myLatlng }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    $('#latitude,#longitude').show();
                    $('#address').val(results[0].formatted_address);
                    $('#latitude').val(marker.getPosition().lat());
                    $('#longitude').val(marker.getPosition().lng());

                    $('#street_num').val(results[0].address_components[0].long_name); //Street Number
                    $('#route').val(results[0].address_components[1].long_name); //Street Name
                    $('#locality').val(results[0].address_components[2].long_name); //Street Name
                    $('#admin-area-1').val(results[0].address_components[4].long_name); //District
                    $('#country').val(results[0].address_components[5].long_name); //country
                    $('#post-code').val(results[0].address_components[6].long_name); //post code



                    infowindow.setContent(results[0].formatted_address);
                    infowindow.open(map, marker);
                    console.log(results[0]);
                }
            }
        });

        google.maps.event.addListener(marker, 'dragend', function() {

            geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {    //Need an effictive API KEY
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        $('#address').val(results[0].formatted_address);
                        $('#latitude').val(marker.getPosition().lat());
                        $('#longitude').val(marker.getPosition().lng());


                        $('#street_num').val(results[0].address_components[0].long_name); //Street Number
                        $('#route').val(results[0].address_components[1].long_name); //Street Name
                        $('#locality').val(results[0].address_components[2].long_name); //Street Name
                        $('#admin-area-1').val(results[0].address_components[4].long_name); //District
                        $('#country').val(results[0].address_components[5].long_name); //country
                        $('#post-code').val(results[0].address_components[6].long_name); //post code



                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    }
                }
            });
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
});
