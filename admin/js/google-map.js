jQuery(document).ready(function ($) {

    $("#submit").on('click', function () {
        // document.getElementById('mapid').innerHTML = "<div id='theMap' style='width: 100%; height: 100%;'></div>";
        $("#mapid").html("<div id='theMap' style='width: 100%; height: 100%;'></div>");
        var latitude;
        var longitude;

        var street_no = $("#street-no").val();
        var road = $("#road").val();
        var village = $('#village').val();
        var city = $('#city').val()
        var country = $("#country").val();
        var postalcode = $("#post").val();


        var address = {
            road: road,
            country: country,
            city: city,
            village: village,
            postalcode: postalcode,
            street: street_no

        };
        var rawData = $.get('https://nominatim.openstreetmap.org/?format=json&addressdetails=1&format=json&limit=1', address, function (data) {
            console.log(data)
            latitude = data[0].lat;
            longitude = data[0].lon;
            console.log(data[0]);
            console.log("Latitude: " + latitude + " Longitude: " + longitude);

            var mymap = L.map('theMap').setView([latitude, longitude], 15);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
                maxZoom: 20

            }).addTo(mymap);

            var marker = L.marker([latitude, longitude], {draggable: true}).addTo(mymap);


            // marker Drag
            marker.on('dragend', function (event) {
                var marker = event.target;
                var result = marker.getLatLng();
                var lat = result.lat; //Latitude of the current marker postition
                var lng = result.lng; //Lnogitude of the current market postition
                var latLgn = {
                    format: "jsonv2",
                    lat: lat,
                    lon: lng
                };

                var revGeoCode = $.get('https://nominatim.openstreetmap.org/reverse?format=jsonv2', latLgn, function (data) {

                    myAdd = data.address;
                    console.log(myAdd);

                    let country = myAdd.country;
                    console.log(country);
                    $("#country").val(country);


                    let city = myAdd.city;
                    console.log(city);
                    $("#city").val(city);

                    let postcode = myAdd.postcode;
                    console.log(postcode);
                    $("#post").val(postcode);

                    let road = myAdd.road;
                    console.log(road);
                    $('#street-no').val(road);

                    let neighbourhood = myAdd.neighbourhood;
                    console.log(neighbourhood);
                    $("#village").val(neighbourhood);

                    let state = myAdd.state;
                    console.log(state);
                    $("#state").val(state);


                });

            });

        });
    });


});