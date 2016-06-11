(function ($) {
  var variable = etc;
  $.ajax ({
  	url: 'http://local.wangrealestate.us/estates?page=' + variable,
  	success: function(data, othervariable) {
  		console.log(data.key);
  	}
  });
})(jQuery);