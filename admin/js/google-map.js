jQuery(document).ready(function ($) {

    $("#submit").on('click', function () {

        $("#mapid").html("<div id='theMap' style='width: 100%; height: 100%;'></div>");
        var latitude;
        var longitude;


        var road = $("#road").val();
        var village = $('#village').val();
        var city = $('#city').val();
        var country = $("#country").val();
        var postalcode = $("#post-code").val();


        var address = {
            road: road,
            country: country,
            city: city,
            village: village,
            postalcode: postalcode,

        };

        // Calling geocoding API of OSM
        $.get('https://nominatim.openstreetmap.org/?format=json&addressdetails=1&format=json&limit=1', address, function (data) {

            latitude = data[0].lat;
            longitude = data[0].lon;
            console.log(data[0]);
            console.log("Latitude: " + latitude + " Longitude: " + longitude);

            // Adding Map
            var mymap = L.map('theMap').setView([latitude, longitude], 14);

            // Adding BaseLayer and Attribution to Map
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
                maxZoom: 20
            }).addTo(mymap);

            // Adding Marker Object
            var marker = L.marker([latitude, longitude], {draggable: true}).addTo(mymap);


            // Catching Marker on drag Event
            marker.on('dragend', function (event) {
                var marker = event.target;
                var result = marker.getLatLng();
                var lat = result.lat; //Latitude of the current marker postition
                var lng = result.lng; //Lnogitude of the current market postition

                $("#latitude").val(lat);
                $("#longitude").val(lng);


                var latLgn = {
                    format: "jsonv2",
                    lat: lat,
                    lon: lng
                };

                // Calling Reverse Geocoding API of OSM
                $.get('https://nominatim.openstreetmap.org/reverse?format=jsonv2', latLgn, function (data) {

                    myAdd = data.address;


                    let country = myAdd.country;

                    $("#country").val(country);


                    let city = myAdd.city;

                    $("#city").val(city);

                    let postcode = myAdd.postcode;

                    $("#post-code").val(postcode);

                    let road = myAdd.road;

                    $('#road').val(road);

                    let neighbourhood = myAdd.neighbourhood;

                    $("#village").val(neighbourhood);

                    let state = myAdd.state;

                    $("#state").val(state);



                });

            });

        });
    });


});