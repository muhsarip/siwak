(function ( $, x5engine ) {
	var x = x5engine,
		s = x.settings,
		p = s.currentPath,
		b = x.boot;

	s.siteId = '0C7282E74D7C50A9A7805F4D75CE9B80';
	s.islocal = true;
	s.version = '13-0-1-16';
	b.push(function () {
		x.setupDateTime();
		x.imAccess.showLogout();
		x.utils.autoHeight();
		x.cart.ui.updateWidget();
		x.imGrid.init();
	});
	s.menu = {
		verticalScroll: true,
	};
	b.push(function () {
		x.menu({
			target: '#imMnMn',
			verticalScroll: true,
			showCurrent: false,
			showLogoOnScroll: false,
			menuHeight: 62,
			menuWidth: 120,
			submenuHeight: 22,
			submenuWidth: 160,
			opacity: 0.8,
			fullWidthScroll: false,
			type: 'singleColumn',
			effect: 'fade'
		});
	});
	b.push(function () { x.utils.imPreloadImages([p + 'menu/hor_main.png',p + 'menu/hor_main_h.png',p + 'menu/hor_main_c.png',p + 'menu/ver_main.png',p + 'menu/ver_main_h.png',p + 'menu/ver_main_c.png', p + 'res/imLoad.gif', p + 'res/imClose.png']); });

	// ShowBox
	$.extend(s.imShowBox, {
		"effect": "custom", "customEffect": "generic animated fadeIn",
		'shadow' : '',
		'background' : '#000000',
		'borderWidth' : {
			'top': 1,
			'right': 1,
			'bottom': 1,
			'left': 1
		},
		buttonRight: {
			url: p + 'res/b01_r.png',
			position: {
				x: -12,
				y: 0
			}
		},
		buttonLeft: {
			url: p + 'res/b01_l.png',
			position: {
				x: -12,
				y: 0
			}
		},
		'borderRadius' : '5px 5px 5px 5px',
		'borderColor' : '#000000 #000000 #000000 #000000',
		'textColor' : '#000000',
		'fontFamily' : 'Tahoma',
		'fontStyle' : 'normal',
		'fontWeight' : 'normal',
		'fontSize' : '9pt',
		'textAlignment' : 'left',
		'boxColor' : '#FFFFFF',
		'opacity' : 0.7,
		'radialBg' : true // Works only in Mozilla Firefox and Google Chrome
	});

	// PopUp
	$.extend(s.imPopUp, {
		'effect' : 'websitex5.bl.templates.showboxanimation',
		'width' : 500,
		'shadow' : '',
		'background' : '#000000',
		'borderRadius' : 10,
		'textColor' : '#000000',
		'boxColor' : '#FFFFFF',
		'opacity' : 0.7
	});

	// Tip
	$.extend(s.imTip, {
		'borderRadius' : 1,
		'arrow' : true,
		'position' : 'bottom',
		'effect' : 'none',
		'showTail' : true
	});

	// PageToTop
	$.extend(s.imPageToTop, {
		'imageFile' : 'style/page-to-top.png'
	});

	// Captcha
	b.push(function () {
		x5engine.captcha.instance = new x5engine.captcha.x5captcha({
			"offlineCodes": {
				"0": { letter: 'A', path: 'captcha/imcpa_7ja.gif'},
				"1": { letter: 'X', path: 'captcha/imcpa_ryv.gif'},
				"2": { letter: '7', path: 'captcha/imcpa_8yv.gif'},
				"3": { letter: 'W', path: 'captcha/imcpa_haw.gif'},
				"4": { letter: 'D', path: 'captcha/imcpa_gus.gif'},
				"5": { letter: '8', path: 'captcha/imcpa_3pr.gif'},
				"6": { letter: '2', path: 'captcha/imcpa_vg4.gif'},
				"7": { letter: '4', path: 'captcha/imcpa_k6a.gif'},
				"8": { letter: 'C', path: 'captcha/imcpa_van.gif'},
				"9": { letter: 'F', path: 'captcha/imcpa_nrg.gif'}
			}
		});
	}, false, 'first');

	// BreakPoints
	s.breakPoints.push({ "hash": "71b14e2b2a5121661fb7ddae017bdbf6", "name": "Desktop", "start": "max", "end": 960, "fluid": false});
	s.breakPoints.push({ "hash": "d2f9bff7f63c0d6b7c7d55510409c19b", "name": "Breakpoint 1", "start": 959, "end": 720, "fluid": false});
	s.breakPoints.push({ "hash": "72e5146e7d399bc2f8a12127e43469f1", "name": "Mobile", "start": 719, "end": 480, "fluid": false});
	s.breakPoints.push({ "hash": "5ecdcca63de80fd3d4fbb36295d22b7d", "name": "Mobile Fluid", "start": 479, "end": 0, "fluid": true});

	b.push(function () { x.cookielaw.activateScripts() });

	s.loaded = true;
})( _jq, x5engine );
