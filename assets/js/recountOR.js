jQuery(document).ready(function($) {
	$('.recountOR').on('change', function(e) {
		e.preventDefault();
		var wa = parseFloat($('input[data-name="wa"]').val());
		if (isNaN(wa)) var wa = 0;

		var wb = parseFloat($('input[data-name="wb"]').val());
		if (isNaN(wb)) var wb = 0;

		var w0 = parseFloat($('input[data-name="w0"]').val());
		if (isNaN(w0)) var w0 = 0;

		var a1 = parseFloat($('[data-name="a1"]').text());
		var a2 = parseFloat($('[data-name="a2"]').text());
		var a3 = parseFloat($('[data-name="a3"]').text());
		var a4 = parseFloat($('[data-name="a4"]').text());
		
		var b1 = parseFloat($('[data-name="b1"]').text());
		var b2 = parseFloat($('[data-name="b2"]').text());
		var b3 = parseFloat($('[data-name="b3"]').text());
		var b4 = parseFloat($('[data-name="b4"]').text());
		
		var $v1 = $('[data-name="v1"]');
		var $v2 = $('[data-name="v2"]');
		var $v3 = $('[data-name="v3"]');
		var $v4 = $('[data-name="v4"]');

		var v1 = (wa * a1) + (wb * b1) - w0; 
		var v2 = (wa * a2) + (wb * b2) - w0; 
		var v3 = (wa * a3) + (wb * b3) - w0; 
		var v4 = (wa * a4) + (wb * b4) - w0; 

	    $v1.text(v1.toFixed(1));
	    $v2.text(v2.toFixed(1));
	    $v3.text(v3.toFixed(1));
	    $v4.text(v4.toFixed(1));

	    // Y
	    var $y1 = $('[data-name="y1"]');
		var $y2 = $('[data-name="y2"]');
		var $y3 = $('[data-name="y3"]');
		var $y4 = $('[data-name="y4"]');
		var $Y = $('[data-name="Y"]');

	    var v1 = parseFloat($('[data-name="v1"]').text()); 
	    var v2 = parseFloat($('[data-name="v2"]').text()); 
	    var v3 = parseFloat($('[data-name="v3"]').text()); 
		var v4 = parseFloat($('[data-name="v4"]').text()); 

		$y1.text(v1 < 0 ? 0 : 1);
		$y2.text(v2 < 0 ? 0 : 1);
		$y3.text(v3 < 0 ? 0 : 1);
		$y4.text(v4 < 0 ? 0 : 1);

		var y1 = parseFloat($('[data-name="y1"]').text());
		var y2 = parseFloat($('[data-name="y2"]').text());
		var y3 = parseFloat($('[data-name="y3"]').text());
		var y4 = parseFloat($('[data-name="y4"]').text());

		var y1or = parseFloat($('[data-name="y1or"]').text());
		var y2or = parseFloat($('[data-name="y2or"]').text());
		var y3or = parseFloat($('[data-name="y3or"]').text());
		var y4or = parseFloat($('[data-name="y4or"]').text());

		if (y1 === y1or) {
			$y1.parent('td').removeClass('btn-danger').addClass('btn-success');
		} else {
			$y1.parent('td').removeClass('btn-success').addClass('btn-danger');
		}
		if (y2 === y2or) {
			$y2.parent('td').removeClass('btn-danger').addClass('btn-success');
		} else {
			$y2.parent('td').removeClass('btn-success').addClass('btn-danger');
		}
		if (y3 === y3or) {
			$y3.parent('td').removeClass('btn-danger').addClass('btn-success');
		} else {
			$y3.parent('td').removeClass('btn-success').addClass('btn-danger');
		}
		if (y4 === y4or) {
			$y4.parent('td').removeClass('btn-danger').addClass('btn-success');
		} else {
			$y4.parent('td').removeClass('btn-success').addClass('btn-danger');
		}
		if (y1 === y1or && y2 === y2or && y3 === y3or && y4 === y4or) {
			$Y.removeClass('btn-danger').addClass('btn-success');
		} else {
			$Y.removeClass('btn-success').addClass('btn-danger');
		}

	});

	$('button[data-name="hint"]').on('click', function(e) {
		e.preventDefault();
		var $wa = $('input[data-name="wa"]');
		var $wb = $('input[data-name="wb"]');
		var $w0 = $('input[data-name="w0"]');

		$wa.val(1.5).trigger('change');
		$wb.val(1.5).trigger('change');
		$w0.val(1).trigger('change');
	});

	$('button[data-name="reset"]').on('click', function(e) {
		e.preventDefault();
		var $wa = $('input[data-name="wa"]');
		var $wb = $('input[data-name="wb"]');
		var $w0 = $('input[data-name="w0"]');

		$wa.val(0.0).trigger('change');
		$wb.val(0.0).trigger('change');
		$w0.val(0.0).trigger('change');

		var $y1 = $('[data-name="y1"]');
		$y1.text(1);
		var $y2 = $('[data-name="y2"]');
		$y2.text(0);
		var $y3 = $('[data-name="y3"]');
		$y3.text(0);
		var $y4 = $('[data-name="y4"]');
		$y4.text(0);
		var $Y = $('[data-name="Y"]');

		$y1.parent('td').removeClass('btn-success').addClass('btn-danger');
		$y2.parent('td').removeClass('btn-success').addClass('btn-danger');
		$y3.parent('td').removeClass('btn-success').addClass('btn-danger');
		$y4.parent('td').removeClass('btn-success').addClass('btn-danger');
		$Y.removeClass('btn-success').addClass('btn-danger');
	});
});