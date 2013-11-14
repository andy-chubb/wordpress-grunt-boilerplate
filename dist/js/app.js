(function($) {


  


     var APP = (function() {


          return {
               init : function() {




               },

               placeholder_support : function(){

					if(!Modernizr.input.placeholder){

							 $('[placeholder]').focus(function() {
							   var input = $(this);
							   if (input.val() == input.attr('placeholder')) {
							  input.val('');
							  input.removeClass('placeholder');
							   }
							 }).blur(function() {
							   var input = $(this);
							   if (input.val() == '' || input.val() == input.attr('placeholder')) {
							  input.addClass('placeholder');
							  input.val(input.attr('placeholder'));
							   }
							 }).blur();
							 $('[placeholder]').parents('form').submit(function() {
							   $(this).find('[placeholder]').each(function() {
							  var input = $(this);
							  if (input.val() == input.attr('placeholder')) {
							    input.val('');
							  }
							   })
							 });
					}
				}

          };
     })();


   $(document).ready(function(jQuery) {
          APP.init();
          APP.placeholder_support();


    });



	$(document).ready(function() {
		
		var msie6 = $.browser == 'msie' && $.browser.version < 7;
		if (!msie6) {
			var header_height = $('#masthead').height();
			$(window).scroll(function (event) {
				var y = $(this).scrollTop();
				if (y >= header_height) {
					//$('#masthead').slideDown('swing');
					$('#masthead').addClass('stuck');
				} else {
					//$('#masthead').slideUp('swing', function() {
						$('#masthead').removeClass('stuck');
					//});
				}
			});
		}

	});




})(jQuery);