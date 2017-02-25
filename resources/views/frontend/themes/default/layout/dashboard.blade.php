@extends('frontend.themes.default.layout.plane')



@section('body.script')
<script type="text/javascript">

	// mobile menu
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

	// mobile menu expand (need Duc's help! to re-write)
    $(window).on('resize', function ()
    {
        if ($(window).width() > 480)
        {
            $('body').removeClass('body--mobile-nav-open');
        }
    });

    // collapable
    $('.global-nav__mobile-top-level-expansion-link').click(function(e) {
	  	e.preventDefault();
	  
	    var $this = $(this);
	    $this.toggleClass('is-open');
	  
	    if ($this.next().hasClass('show')) {
	        $this.next().removeClass('show');
	        $this.next().slideUp(350);
	    } else {
	        $this.parent().parent().find('li .global-nav__mobile-second-level').removeClass('show');

	        $this.parent().parent().find('li .global-nav__mobile-second-level').slideUp(350);
	        $this.next().toggleClass('show');
	        $this.next().slideToggle(350);
	    }
	});

</script>
@stop