/***************************************************
==================== JS INDEX ======================
****************************************************
01. PreLoader Js
02. Mobile Menu Js
03. Sidebar Js
04. Cart Toggle Js
05. Search Js
06. Sticky Header Js
07. Data Background Js
08. Testimonial Slider Js
09. Slider Js (Home 3)
10. Brand Js
11. Tesimonial Js
12. Course Slider Js
13. Masonary Js
14. Wow Js
15. Data width Js
16. Cart Quantity Js
17. Show Login Toggle Js
18. Show Coupon Toggle Js
19. Create An Account Toggle Js
20. Shipping Box Toggle Js
21. Counter Js
22. Parallax Js
23. InHover Active Js

****************************************************/

(function ($) {
	"use strict";

	var windowOn = $(window);
	////////////////////////////////////////////////////
	// 01. PreLoader Js
	function loader() {
		$(window).on('load', function () {
			$('#ctn-preloader').addClass('loaded');
			$("#loading").fadeOut(500);
			// Una vez haya terminado el preloader aparezca el scroll

			if ($('#ctn-preloader').hasClass('loaded')) {
				// Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
				$('#preloader').delay(900).queue(function () {
					$(this).remove();
				});
			}
		});
	}
	loader();



	////////////////////////////////////////////////////
	// 02. Mobile Menu Js
	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "1199",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});


	////////////////////////////////////////////////////
	// 03. Sidebar Js
	$("#sidebar-toggle").on("click", function () {
		$(".sidebar__area").addClass("sidebar-opened");
		$(".body-overlay").addClass("opened");
	});
	$(".sidebar__close-btn").on("click", function () {
		$(".sidebar__area").removeClass("sidebar-opened");
		$(".body-overlay").removeClass("opened");
	});


	////////////////////////////////////////////////////
	// 04. Cart Toggle Js
	$(".cart-toggle-btn").on("click", function () {
		$(".cartmini__wrapper").addClass("opened");
		$(".body-overlay").addClass("opened");
	});
	$(".cartmini__close-btn").on("click", function () {
		$(".cartmini__wrapper").removeClass("opened");
		$(".body-overlay").removeClass("opened");
	});
	$(".body-overlay").on("click", function () {
		$(".cartmini__wrapper").removeClass("opened");
		$(".sidebar__area").removeClass("sidebar-opened");
		$(".header__search-3").removeClass("search-opened");
		$(".body-overlay").removeClass("opened");
	});


	////////////////////////////////////////////////////
	// 05. Search Js
	$(".search-toggle").on("click", function () {
		$(".header__search-3").addClass("search-opened");
		$(".body-overlay").addClass("opened");
	});
	$(".header__search-3-btn-close").on("click", function () {
		$(".header__search-3").removeClass("search-opened");
		$(".body-overlay").removeClass("opened");
	});


	////////////////////////////////////////////////////
	// 06. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 100) {
			$("#header-sticky").removeClass("sticky");
		} else {
			$("#header-sticky").addClass("sticky");
		}
	});

	////////////////////////////////////////////////////
	// 07. Data Background Js
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});


	////////////////////////////////////////////////////
	// 08. Testimonial Slider Js
	var swiper = new Swiper('.testimonial__slider', {
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});



	////////////////////////////////////////////////////
	// 09. Slider Js (Home 3)
	var galleryThumbs = new Swiper('.slider__nav', {
		spaceBetween: 0,
		slidesPerView: 4,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,

	});
	var galleryTop = new Swiper('.slider__wrapper', {
		spaceBetween: 0,
		effect: 'fade',
		loop: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		thumbs: {
			swiper: galleryThumbs
		}
	});


	////////////////////////////////////////////////////
	// 10. Brand Js
	var swiper = new Swiper('.brand__slider', {
		slidesPerView: 6,
		spaceBetween: 30,
		loop: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 6,
			},
			'992': {
				slidesPerView: 5,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});


	////////////////////////////////////////////////////
	// 11. Tesimonial Js
	var tesimonialThumb = new Swiper('.testimonial-nav', {
		spaceBetween: 20,
		slidesPerView: 3,
		loop: true,
		freeMode: true,
		loopedSlides: 3, //looped slides should be the same
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		centeredSlides: true,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
	var testimonialText = new Swiper('.testimonial-text', {
		spaceBetween: 0,
		loop: true,
		loopedSlides: 5, //looped slides should be the same
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		thumbs: {
			swiper: tesimonialThumb,
		},
	});

	////////////////////////////////////////////////////
	// 12. Course Slider Js
	var swiper = new Swiper('.course__slider', {
		spaceBetween: 30,
		slidesPerView: 2,
		breakpoints: {
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	});

	////////////////////////////////////////////////////
	// 13. Masonary Js
	$('.grid').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: '.grid-item',
			}
		});


		// filter items on button click
		$('.masonary-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});

		//for menu active class
		$('.masonary-menu button').on('click', function (event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});

	});


	////////////////////////////////////////////////////
	// 14. Wow Js
	new WOW().init();

	////////////////////////////////////////////////////
	// 15. Data width Js
	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});


	////////////////////////////////////////////////////
	// 16. Cart Quantity Js
	$('.cart-minus').click(function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});
	$('.cart-plus').click(function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});




	////////////////////////////////////////////////////
	// 17. Show Login Toggle Js
	$('#showlogin').on('click', function () {
		$('#checkout-login').slideToggle(900);
	});

	////////////////////////////////////////////////////
	// 18. Show Coupon Toggle Js
	$('#showcoupon').on('click', function () {
		$('#checkout_coupon').slideToggle(900);
	});

	////////////////////////////////////////////////////
	// 19. Create An Account Toggle Js
	$('#cbox').on('click', function () {
		$('#cbox_info').slideToggle(900);
	});

	////////////////////////////////////////////////////
	// 20. Shipping Box Toggle Js
	$('#ship-box').on('click', function () {
		$('#ship-box-info').slideToggle(1000);
	});

	////////////////////////////////////////////////////
	// 21. Counter Js
	new PureCounter();
	new PureCounter({
		filesizing: true,
		selector: ".filesizecount",
		pulse: 2,
	});

	////////////////////////////////////////////////////
	// 22. Parallax Js
	if ($('.scene').length > 0) {
		$('.scene').parallax({
			scalarX: 10.0,
			scalarY: 15.0,
		});
	};

	////////////////////////////////////////////////////
	// 23. InHover Active Js
	$('.hover__active').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.hover__active').removeClass('active');
	});

	////////////////////////////////////////////////////
	// 24. Pilares Flip-Box Js
	var swiper = new Swiper('.flip__slider', {
		slidesPerView: 3,
		spaceBetween: 30,
		loop: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	////////////////////////////////////////////////////
	// 25. Accordeon Primeros Puestos
	document.addEventListener('DOMContentLoaded', () => {
		const accordions = document.querySelectorAll('.accordions__item');

		accordions.forEach(el => {
			el.addEventListener('click', (e) => {
				const self = e.currentTarget;
				const control = self.querySelector('.accordions__control');
				const content = self.querySelector('.accordions__content');

				self.classList.toggle('open');

				if (self.classList.contains('open')) {
					control.setAttribute('aria-expanded', true);
					content.setAttribute('aria-hidden', false);
					content.style.maxHeight = content.scrollHeight + 'px';
				} else {
					control.setAttribute('aria-expanded', false);
					content.setAttribute('aria-hidden', true);
					content.style.maxHeight = null;
				}
			});
		});
	})


	document.addEventListener("scroll", function () {
		const button = document.querySelector('.progress-wrap');
		const sections = document.querySelectorAll('.white-bg, .grey-bg');
		const buttonRect = button.getBoundingClientRect();
		let onLightSection = false;

		sections.forEach(section => {
			const rect = section.getBoundingClientRect();
			if (
				buttonRect.bottom > rect.top &&
				buttonRect.top < rect.bottom
			) {
				onLightSection = true;
			}
		});

		if (onLightSection) {
			button.classList.add('dark-arrow');
		} else {
			button.classList.remove('dark-arrow');
		}
	});

	////////////////////////////////////////////////////
	/*Materialice*/
	const subjectObject = {
		"Arequipa": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Breña": {
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Callao": {
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Chanchamayo": {
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Chiclayo": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Chorrillos": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Comas": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Huancayo": {
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"La Molina": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Los Olivos": {
			"Inicial": [],
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Maranga": {
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Marsano": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Ñaña": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Piura": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Pro": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Roma": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Salamanca": {
			"Inicial": [],
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Salaverry": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"San Isidro": {
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"San Juan de Lurigancho": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Santa Anita": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Trujillo": {
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		/*
		"Trujillo Santa Maria": {
		  "Primaria - 1er Grado": [],
		  "Primaria - 2do Grado": [],
		  "Primaria - 3ro Grado": [],
		  "Primaria - 4to Grado": [],
		  "Primaria - 5to Grado": [],
		  "Primaria - 6to Grado": [],
		  "Secundaria - 1er Año": [],
		  "Secundaria - 2do Año": [],
		  "Secundaria - 3ro Año": [],
		  "Secundaria - 4to Año": [],
		  "Secundaria - 5to Año": [] 
		},*/
		"Villa El Salvador": {
			"Inicial": [],
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
		"Villa Maria del Triunfo": {
			"Inicial": [],
			"Primaria - 1er Grado": [],
			"Primaria - 2do Grado": [],
			"Primaria - 3ro Grado": [],
			"Primaria - 4to Grado": [],
			"Primaria - 5to Grado": [],
			"Primaria - 6to Grado": [],
			"Secundaria - 1er Año": [],
			"Secundaria - 2do Año": [],
			"Secundaria - 3ro Año": [],
			"Secundaria - 4to Año": [],
			"Secundaria - 5to Año": []
		},
	}

	function fillDropdown(dropdownId, options) {
		const field = document.getElementById(dropdownId);
		const trigger = field.querySelector('.dropdown-trigger');
		const menu = field.querySelector('.dropdown-menu');
		const hiddenInput = field.querySelector('input[type="hidden"]');

		// Limpiar menú
		menu.innerHTML = '';

		options.forEach(opt => {
			const li = document.createElement('li');
			li.textContent = opt;
			li.dataset.value = opt;
			li.addEventListener('click', () => {
				trigger.textContent = opt;
				hiddenInput.value = opt;
				menu.style.display = 'none';
				trigger.classList.remove('active');
				field.classList.add('active');

				// Si este dropdown es sede, resetear grado
				if (dropdownId === 'dropdownSede') {
					// Vaciar dropdownGrado
					fillDropdown('dropdownGrado', []);
					document.getElementById('dropdownGrado').classList.remove('active');
					document.querySelector('#dropdownGrado .dropdown-trigger').textContent = document.querySelector('#dropdownGrado .dropdown-trigger').dataset.placeholder;
					document.querySelector('#dropdownGrado input[type="hidden"]').value = '';
				}
			});
			menu.appendChild(li);
		});
	}

	document.addEventListener('DOMContentLoaded', () => {
		const sedeField = document.getElementById('dropdownSede');
		const sedeTrigger = sedeField.querySelector('.dropdown-trigger');
		const sedeMenu = sedeField.querySelector('.dropdown-menu');

		sedeTrigger.addEventListener('click', e => {
			e.stopPropagation();
			sedeMenu.style.display = sedeMenu.style.display === 'block' ? 'none' : 'block';
			sedeTrigger.classList.toggle('active');
		});

		const gradoField = document.getElementById('dropdownGrado');
		const gradoTrigger = gradoField.querySelector('.dropdown-trigger');
		const gradoMenu = gradoField.querySelector('.dropdown-menu');

		gradoTrigger.addEventListener('click', e => {
			e.stopPropagation();
			gradoMenu.style.display = gradoMenu.style.display === 'block' ? 'none' : 'block';
			gradoTrigger.classList.toggle('active');
		});

		// Inicializar sede con keys de subjectObject
		fillDropdown('dropdownSede', Object.keys(subjectObject));

		// Cuando se selecciona sede, llenar grados según selección
		document.getElementById('dropdownSede').querySelectorAll('li').forEach(li => {
			li.addEventListener('click', () => {
				const selectedSede = li.dataset.value;
				if (selectedSede && subjectObject[selectedSede]) {
					fillDropdown('dropdownGrado', Object.keys(subjectObject[selectedSede]));
				} else {
					fillDropdown('dropdownGrado', []);
				}
			});
		});

		// Cerrar dropdowns al hacer clic fuera
		document.addEventListener('click', () => {
			document.querySelectorAll('.dropdown-menu').forEach(menu => menu.style.display = 'none');
			document.querySelectorAll('.dropdown-trigger').forEach(trigger => trigger.classList.remove('active'));
		});
	});


	document.addEventListener('DOMContentLoaded', function () {
		const sedeDropdown = document.getElementById('dropdownSede');
		const gradoDropdown = document.getElementById('dropdownGrado');

		sedeDropdown.addEventListener('click', function () {
			sedeDropdown.classList.add('active');
		});

		gradoDropdown.addEventListener('click', function () {
			gradoDropdown.classList.add('active');
		});

		// (Opcional) Si ya tienen valor, mostrar label
		if (document.getElementById('sede').value) {
			sedeDropdown.classList.add('active');
		}
		if (document.getElementById('grado').value) {
			gradoDropdown.classList.add('active');
		}
	});
	////////////////////////////////////////////////////


	//////////////////////////////////////////////////////////
	/**POP UP TERMINOS */
  // Mostrar el modal
  // Obtener elementos
document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('myModal');
  const btn = document.getElementById('myBtn');
  const closeBtn = document.getElementById('closeBtn');
 	const acceptBtn = document.getElementById('acceptModal');


  // Abrir modal al hacer click en términos y condiciones
  btn.addEventListener('click', () => {
    modal.style.display = 'block';
  });

  // Cerrar modal al hacer click en la "X"
  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
  });
  
    acceptBtn.addEventListener('click', function () {
    modal.style.display = 'none';
  });

  // Cerrar modal al hacer click fuera del contenido
  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });
});



  document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll('.sistema__thumb img');
    let current = 0;

    setInterval(() => {
      images[current].classList.remove('active');
      current = (current + 1) % images.length;
      images[current].classList.add('active');
    }, 3000);
  });


    document.getElementById('goTopBtn').addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });


})(jQuery);