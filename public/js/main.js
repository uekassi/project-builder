$( function () {
	$('#form_for_task_builder').hide();
	$('.show-form').click(function() {
		$('#form_for_task_builder').show();
		$('.top-menu').hide();
		$('.task-container').hide();
	});
	$('.close').click(function() {
		$('#form_for_task_builder').hide();
		$('.top-menu').show();
		$('.task-container').show();		
	});
})