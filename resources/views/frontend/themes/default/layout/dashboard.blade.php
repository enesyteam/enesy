@extends('frontend.themes.default.layout.plane')



@section('body.script')
<script type="text/javascript">
	$(document).on('click', '.global-nav__mobile-toggle-link', function (e) {
		$('body').toggleClass('body--mobile-nav-open');
	});

	$('input.global-nav__search-terms.tt-input').focus( function() {
  		$('body').toggleClass('overlay-is-show');
  		$('span.tt-dropdown-menu').show();
	});

	$('input.global-nav__search-terms.tt-input').blur( function() {
	  	$('body').toggleClass('overlay-is-show');
	  	$('span.tt-dropdown-menu').hide();
	});
</script>
@stop