// selfload function
$(function() {
	console.log('site loaded');

	// scroll function
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if(scroll > 60) {
			$('#sidebar .price').addClass('scroll');
		} else {
			$('#sidebar .price').removeClass('scroll');
		}
	});

	// click functions
	

	// progress visualisation
	// calculate percent per step value
	var progress = ($('#header .steps li').index($('#header .steps .current'))+1)*(100/($('#header .steps li').size()));
	
	// init loading bars
	var progressbar = new Nanobar({
		bg: 'white',
		target: document.getElementById('progressbar')
	}).go(progress);
	var steps = new Nanobar({
		bg: 'white',
		target: document.getElementById('header')
	}).go(progress);

	// output rounded percent value to sidebar
	$('#sidebar .progress p').html(Math.floor(progress)+'<span>%</span>');
});