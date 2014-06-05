$('input, select').parent().addClass('border');
$('legend').addClass('border');

$('.datetime').datetimepicker({
	dateFormat: 'dd-mm-yy',
	timeFormat: 'HH:mm'});

$('.date').datepicker({
	dateFormat: 'dd-mm-yy'});

 $("table").tablesorter();
 
 CKEDITOR.replace('editor');