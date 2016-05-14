(function ($) {
    $(document).ready(function(){
        $('.carousel').slick({
            autoplay: true,
            centerMode: true,
            centerPadding: '10px',
            slidesToShow: 1
        });
    });

    var key = 'AIzaSyDmXGedMBxA9o4UaXa9vQowIqQvKD1A4dg',
        address = '8324 st james ave elmhurst, ny';
    var geoUrl = 'https://maps.googleapis.com/maps/api/geocode/json?address=' + encodeURI(address) + '&key=' + key;
    console.log(geoUrl);
    $.ajax({
        url: geoUrl,
        success: function(data) {
            //do something
        }
    });
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
    /*function initialize() {
      var mapProp = {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:15,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    google.maps.event.addDomListener(window, 'load', initialize);*/
})(jQuery);
