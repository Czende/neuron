jQuery(document).ready(function($) {
	$('button[data-name="hint"]').on('click', function(e) {
		e.preventDefault();
		alert('Opravdu lze aplikovat XOR? :)');
	});
});