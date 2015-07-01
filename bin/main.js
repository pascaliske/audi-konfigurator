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
// selfload function
$(function() {

	// check username value
	$('#wrapper form .left').bind('change paste keyup', function() {
		if($(this).val().length > 0) {
			$('#wrapper form .right').addClass('visible');
		} else {
			$('#wrapper form .right').removeClass('visible');
		}
	});
	$('#wrapper form .right').bind('change paste keyup', function() {
		if($(this).val().length > 0) {
			$('#wrapper form .submit').addClass('visible');
		} else {
			$('#wrapper form .submit').removeClass('visible');
		}
	});
});
/* http://nanobar.micronube.com/  ||  https://github.com/jacoborus/nanobar/    MIT LICENSE */
var Nanobar = (function () {

	'use strict';
	var addCss, Bar, Nanobar, move, place, init,
		// container styles
		cssCont = {
			width: '100%',
			height: '4px',
			zIndex: 9999,
			top : '0'
		},
		// bar styles
		cssBar = {
			width:0,
			height: '100%',
			clear: 'both',
			transition: 'height .3s'
		};


	// add `css` to `el` element
	addCss = function (el, css ) {
		var i;
		for (i in css) {
			el.style[i] = css[i];
		}
		el.style.float = 'left';
	};

	// animation loop
	move = function () {
		var self = this,
			dist = this.width - this.here;

		if (dist < 0.1 && dist > -0.1) {
			place.call( this, this.here );
			this.moving = false;
			// fade out bar if complete
			/*if (this.width == 100) {
				this.el.style.height = 0;
				setTimeout( function () {
					self.cont.el.removeChild( self.el );
				}, 300);
			}*/
		} else {
			place.call( this, this.width - (dist/4) );
			setTimeout( function () {
				self.go();
			}, 16);
		}
	};

	// set bar width
	place = function (num) {
		this.width = num;
		this.el.style.width = this.width + '%';
	};

	// create and insert bar in DOM and this.bars array
	init = function () {
		var bar = new Bar( this );
		this.bars.unshift( bar );
	};

	Bar = function ( cont ) {
		// create progress element
		this.el = document.createElement( 'div' );
		this.el.style.backgroundColor = cont.opts.bg;
		this.width = 0;
		this.here = 0;
		this.moving = false;
		this.cont = cont;
		addCss( this.el, cssBar);
		cont.el.appendChild( this.el );
	};

	Bar.prototype.go = function (num) {
		if (num) {
			this.here = num;
			if (!this.moving) {
				this.moving = true;
				move.call( this );
			}
		} else if (this.moving) {
			move.call( this );
		}
	};


	Nanobar = function (opt) {

		var opts = this.opts = opt || {},
			el;

		// set options
		opts.bg = opts.bg || '#000';
		this.bars = [];


		// create bar container
		el = this.el = document.createElement( 'div' );
		// append style
		addCss( this.el, cssCont);
		if (opts.id) {
			el.id = opts.id;
		}
		// set CSS position
		el.style.position = !opts.target ? 'fixed' : 'relative';

		// insert container
		if (!opts.target) {
			document.getElementsByTagName( 'body' )[0].appendChild( el );
		} else {
			opts.target.insertBefore( el, opts.target.firstChild);
		}

		init.call( this );
	};


	Nanobar.prototype.go = function (p) {
		// expand bar
		this.bars[0].go( p );

		// create new bar at progress end
		if (p == 100) {
			init.call( this );
		}
	};

	return Nanobar;
})();
//# sourceMappingURL=main.js.map