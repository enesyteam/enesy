@extends('frontend.themes.default.layout.plane')



@section('body.script')
<script type="text/javascript">
	$(document).on('click', '.global-nav__mobile-toggle-link', function (e) {
		$('body').toggleClass('body--mobile-nav-open');
	});

	$('input.global-nav__search-terms.tt-input').focus( function() {
  		$('body').toggleClass('overlay-is-show');
  		if($('input.global-nav__search-terms.tt-input').val())
  		$('span.tt-dropdown-menu').show();
	});

	$('input.global-nav__search-terms.tt-input').blur( function() {
	  	$('body').toggleClass('overlay-is-show');
	  	//$('span.tt-dropdown-menu').hide();
	});

	// demo seach
	var timerid;    
	$('input.global-nav__search-terms.tt-input').on("input",function(e){
	    var value = $(this).val();
	    if($(this).data("lastval")!= value){

	        $(this).data("lastval",value);        
	        clearTimeout(timerid);

	        $('span.tt-dropdown-menu div.loading-icon').show();

	        timerid = setTimeout(function() {
	            //change action
	            if(value && value.length > 2){
	            	$('span.tt-dropdown-menu').show();
	            	// change text header
	            	var content = "Khóa học ".concat(value);
	            	// clear last results
	            	$('span.tt-dropdown-menu ul.search-items').html('');
	            	// append new results
	            	// simulate for 5 results
	            	for (i = 0; i < 6; i++) { 
					    $('span.tt-dropdown-menu ul.search-items').append('<li> <a href="#">'.concat(content).concat('</a></li>'));
					}
	            }
	            else
	            	$('span.tt-dropdown-menu').hide();
	            
	        },500);
	        
	    };
	});
</script>
@stop