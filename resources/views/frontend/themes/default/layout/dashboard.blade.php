@extends('frontend.themes.default.layout.plane')



@section('body.script')
<script type="text/javascript">

    this.$body = $("body");
    
    this.$mobile_nav	= this.$('.global-nav__mobile');

	// mobile menu
	$(document).on('click', '.global-nav__mobile-toggle-link', function (e) {
		$body.toggleClass('body--mobile-nav-open');
	});

	// search box input => fadeout body when seach focus (Cong)
	$('input.global-nav__search-terms.tt-input').focus( function() {
  		$body.toggleClass('overlay-is-show');
  		if($('input.global-nav__search-terms.tt-input').val())
  		$('span.tt-dropdown-menu').show();
	});

	$('input.global-nav__search-terms.tt-input').blur( function() {
	  	$body.toggleClass('overlay-is-show');
	});

	// demo seach by Cong
	var timerid;    
	$('input.global-nav__search-terms.tt-input').on("input",function(e){
	    var value = $(this).val();
	    if($(this).data("lastval")!= value){

	        $(this).data("lastval",value);        
	        clearTimeout(timerid);

	        timerid = setTimeout(function() {
	            //change action
	            if(value && value.length > 2){
	            	$('span.tt-dropdown-menu').show();

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

    // collapable mobile menu => need Duc help!!!!!!!!!!!
    //	How to remove is-open in global-nav__mobile-top-level-expansion-link????? FUCK
    $('.global-nav__mobile-top-level-expansion-link').click(function(e) {
	    e.preventDefault();

	    var $this = $(this);
	    $this.toggleClass('is-open');

	    if ($this.next().hasClass('show')) {
	        $this.next().removeClass('show');
	        $this.next().slideUp(350);
	        // need Duc remove class is-open of other items
	        // code here!!
	    } else {
	        $this.parent().parent().find('li .global-nav__mobile-second-level').removeClass('show').slideUp(350);

	        $this.next().toggleClass('show');
	        $this.next().slideToggle(350);
	    }
	}), (this), $(window).on("resize", function(e) {
	    return function() {
	        return e._onResize()
	    }
	}(this)), this.$pageContent = $(".page-content"), this.$body = $("body"), _isOpen = function() {
	    return this.$body.hasClass("body--mobile-nav-open")
	}, _adjustContentHeight = function() {
	    return this._isOpen() ? this.$pageContent.height($(window).height() - 75) : this.$pageContent.css("height", "auto")
	}, _onResize = function() {
	    return this._adjustContentHeight();//, this.$mobile_nav.is(":visible") ? void 0 : this._close()
	}, _close = function() {
	    return this.$body.removeClass("body--mobile-nav-open")
	}

</script>
@stop