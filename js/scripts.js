// Mobile Nav
var $menu = $('#nav'),
	  $menulink = $('.menu-link'),
	  $menuTrigger = $('.menu-item-has-children > a');

$menulink.click(function(e) {
	e.preventDefault();
	$menulink.toggleClass('active');
	$menu.toggleClass('active');
});

$menuTrigger.click(function(e) {
	e.preventDefault();
	var $this = $(this);
	$this.toggleClass('active').next('ul').toggleClass('active');
});

// Hero Slider
$('.slider').bxSlider({
	mode: 'fade',
	auto: true,
	pager: false,
	controls: false
});