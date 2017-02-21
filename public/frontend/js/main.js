/*
* @Author: KEN
* @Date:   2017-02-17 15:21:14
* @Last Modified by:   KEN
* @Last Modified time: 2017-02-17 15:34:07
*/

$(function() {
	$('#sort_horizontal').change(function() {
		location.href = window.location.pathname+'?sort='+$(this).val();
	});
});