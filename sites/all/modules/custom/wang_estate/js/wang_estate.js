(function ($) {
  $(document).ready(function(){
    $('.carousel-list').slick({
      autoplay: true,
      arrows: false,
      slidesToShow: 1,
      focusOnSelect: true,
      dots: true
    });
  });

  function initialize() {
    var thisMap = document.getElementById("googleMap"),
      thisLat = thisMap.getAttribute('data-lat'),
      thisLon = thisMap.getAttribute('data-lng'),
    thisCenter = new google.maps.LatLng(thisLat,thisLon);
    var mapProp = { 
      center: thisCenter,
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
      var marker = new google.maps.Marker({
      position: thisCenter
    });
      marker.setMap(map);
  };
  google.maps.event.addDomListener(window, 'load', initialize);
})(jQuery);
