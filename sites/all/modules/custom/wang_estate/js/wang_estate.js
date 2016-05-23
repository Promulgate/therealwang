(function ($) {
    $(document).ready(function(){
        $('.carousel-list').slick({
            autoplay: true,
            //Hong's a wizard,
            dots: true,
            arrows: false,
            slidesToShow: 1
        });
    });


    function initialize() {
var stuff = document.getElementById("googleMap"),
    ab = stuff.getAttribute('data-lat'),
    cd = stuff.getAttribute('data-lng'),
    thisCenter = new google.maps.LatLng(ab,cd);
      var mapProp = { 
        center:thisCenter,
        zoom:15,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker=new google.maps.Marker ({
        position:thisCenter
      });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
})(jQuery);

/*
    var key = 'AIzaSyBpK9J6q5IWEygekxYrmLbqx-UUOotNJ_A',
        address = '8324 st james ave elmhurst, ny';
    var geoUrl = 'https://maps.googleapis.com/maps/api/geocode/json?address=' + encodeURI(address) + '&key=' + key;
    console.log(geoUrl);

    $.ajax({
        url: geoUrl,
        success: function(data) {
            //do something
        }
    });
*/

/*
    var geocoder, map;

    function codeAddress(address) {
        geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            '8243 st james ave elmhurst': address
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var myOptions = {
                    zoom: 8,
                    center: results[0].geometry.location,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                map = new google.maps.Map(document.getElementById("googleMap"), myOptions);

                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            }
        });
    }
*/