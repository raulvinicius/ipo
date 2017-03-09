$(document).ready(function() {

	$( window ).scroll(function() 
	{

		flutuaUrgencia();

		setTimeout(showInAnimation,400);
		toggleFixedMenu();
		igualaAlturaBlocoCurso();

		if ( $('.pagina-curso').length > 0 )
		{
			btInscricaoFlutuante();
		}

		dimensionaGaleriaEscola();

		if( $( window ).scrollTop() > 5 )
		{
			if (window.innerWidth > 1280) 
			{
				$('.site-header').not('.area-aluno').height(96);
			}
			else if ( window.innerWidth > 480 && window.innerWidth <= 1280 )
			{
				$('.site-header').not('.area-aluno').height(80);
			}
			else
			{
				$('.site-header').not('.area-aluno').removeAttr('style')
			}
		}
		else
		{
			$('.site-header').removeAttr('style');
		}

		//TRATAMENTO
		if ( $('.pagina-tratamento').length > 0 )
			flutuaBtnMarcar();

	});
	$( window ).trigger('scroll');

	$( window ).resize(function(e) 
	{

		swapImages();

		//escolhe a altura inicial do menu dependendo da largura da tela
		if (window.innerWidth > 1280) 
		{
			siteHeaderH = 120
		}
		else if ( window.innerWidth > 480 && window.innerWidth <= 1280 )
		{
			siteHeaderH = 90
		}
		else
		{
			siteHeaderH = 'auto';
		}


		if($('#wrap-urgencia').length > 0)
		{
			//fecha o menu "urgencia" (e ajusta as setas do carrosel) se a viewport é menor que 1024
			if( window.innerWidth <= 1024 || Math.max( $('html').scrollTop(), $('body').scrollTop() ) >= topUrgencia )
			{
				$('#wrap-urgencia.aberto')
					.removeClass('aberto')
					.addClass('fechado');

				$('.pagina-clinica #seta-dir, .pagina-clinica #seta-esq')
					.css('bottom', '75px');
			}
			else
			{
				$('#wrap-urgencia.fechado')
					.removeClass('fechado')
					.addClass('aberto');

				$('.pagina-clinica #seta-dir, .pagina-clinica #seta-esq')
					.css('bottom', '50px');
			}

			//atualiza a variáveis que guardam a altura e posição do menu "urgencia"
			if (window.innerWidth <= 568)
			{
				hUrgenciaFechado = $('#wrap-urgencia.fechado').height() / 2 || 48;
			}
			else
			{
				hUrgenciaFechado = $('#wrap-urgencia.fechado').height() || 48;
			}
			topUrgenciaFechado = $('.tratamentos').offset().top - hUrgenciaFechado - $('.site-header').height();
		}



		if( $('.pagina-tratamento .descricao #tgt-descricao').length > 0 )
		{
			if( hInicialNome == undefined )
			{
				hInicialNome = $('.pagina-tratamento .nome').outerHeight();
			}
			nivelaAlturaNomeTratamento();
		}

		if( $('.pagina-escola .cursos').length > 0 )
		{
			var arH = [];
			$('.pagina-escola .cursos li').each(function(index, el) 
			{
				arH.push( $(el).height() + parseInt( $(el).css('margin-top') ) );
			});
			var biggestH = Math.max.apply(Math, arH);
			$('.pagina-escola .cursos').height( Math.max( $(window).innerHeight(), biggestH + 50 ) )
		}

		igualaAlturaBlocoCurso();
		igualaAltura([$('.pagina-clinica .sobre #texto'), $('.pagina-clinica .sobre #desde')], 568);

		if( $('.pagina-home #foto').length > 0 )
		{
			$('.pagina-home #foto').height( $('.pagina-home .col-intro').height() )
		}

		dimensionaGaleriaEscola();


		if ( $('.pagina-clinica').length > 0 ) 
		{
			var hHero = $('.pagina-clinica .hero').outerHeight();

			if( $(window).innerWidth() > 1024 )
			{
				$('.pagina-clinica .hero').outerHeight( $(window).innerHeight() - $('.pagina-clinica .tratamentos #wrap-tratamentos').outerHeight() - $('header').height() - 50 );
			}
			else
			{
				$('.pagina-clinica .hero').outerHeight( $(window).innerHeight() * 0.55 );
			}

			$('.pagina-clinica .hero figure').find('img').each(function(){
				var imgClass = ($(this).closest('figure').width()/$(this).closest('figure').height() > 1.4) ? 'wide' : 'tall';
				$(this).closest('figure').removeClass('wide tall').addClass(imgClass);

				if ( $(this).closest('figure').hasClass('tall') ) 
				{
					var offset = ($(this).width() - $(this).closest('figure').width()) / 2;
					$(this).css({
						'margin-left': '-' + offset + 'px',
						'margin-top': '0px'
					})
				}
				else
				{
					var offset = ($(this).height() - $(this).closest('figure').height()) / 2;
					$(this).css({
						'margin-top': '-' + offset + 'px',
						'margin-left': '0px'
					})
				}
			})
			
		};

		//TRATAMENTO
		if ( $('.pagina-tratamento').length > 0 )
			flutuaBtnMarcar();


	});
	$( window ).trigger('resize');

	// activePage( 'nav #links' );


	$('.pagina-home a.escola').on('click', ('escola'), gravaTipoSite);


	//-----------------MASONRY-----------------//
/*
	var grid = $('.grid').masonry({
	  // options
	  itemSelector: '.grid-item',
	  columnWidth: '.grid-item'
	});

	function callMasonry ()
	{
		grid.masonry();
	}
	
	setInterval( callMasonry, 2000 );
*/
	//-----------------MASONRY-----------------//


	//-----------------CAROUSEL ESCOLA-----------------//



	if ( $('.humano-carousel ul li').length > 1 ) 
	{
		initIntervalCarousel();
	}
	else
	{
		$('.humano-carousel .seta').hide();
		$('.humano-carousel #contador').hide();
	}

	$('.humano-carousel ul li:first-child').addClass('highlight')
		.css('z-index', '1');

	$('.humano-carousel button#seta-esq').on('click', function()
	{
		passaCarousel('tras');
		clearInterval(intervalCarousel);
		initIntervalCarousel();
	})
	$('.humano-carousel button#seta-dir').on('click', function()
	{
		passaCarousel('frente');
		clearInterval(intervalCarousel);
		initIntervalCarousel();
	})


	//-----------------CAROUSEL ESCOLA-----------------//






	//-----------------HOME CLINICA-----------------//


	if( $('.pagina-clinica').length > 0 )
	{
		$('#wrap-urgencia #descola').on('click', function(event) {
			event.preventDefault();

			$(this)
				.closest('#wrap-urgencia')
				.removeAttr('style')
				.removeClass('colado')
				.addClass('descolado')
		});
	}


	//-----------------HOME CLINICA-----------------//






	//-----------------TRATAMENTO-----------------//

	if( $('.pagina-tratamento .descricao #tgt-descricao').length > 0 )
	{
		if(hInicialNome == undefined)
		{
			hInicialNome = $('.pagina-tratamento .nome').outerHeight()
		}

		tiAlturaNomeTratamento = setInterval(function()
		{

			nivelaAlturaNomeTratamento();

		}, 200);

	}

	//-----------------TRATAMENTO-----------------//







	// TEMP
	if( $('section.home').length > 0 )
	{
		$('header#esconde').hide();
		$('.fase-01').hide();
	}




	//PARALAXES
	$('.bg-parallax').each(function(){
		var $obj = $(this);

		$(window).scroll(function() {
			var yPos = -($(window).scrollTop() / $obj.data('speed')); 
	 
			var bgpos = '50% '+ yPos + 'px';
	 
			$obj.css('background-position', bgpos );
	 
		}); 
	});





	aplicaLang();

	$( '#bt-open-menu' ).on('click', toggleMenu);
	$( '#show-form, #show-form2' ).on('click', showSubsForm );
	$( '#hide-form, #cancelar, #close-form' ).on('click', hideSubsForm );

	$( 'body' ).on( 'click', 'button.dead', function(){ return false; } );
	
	if( $( '#map-canvas' ).length > 0 )
	{
		initializeMap();
	}


	$('.segredo').remove();


	//incluindo o nono dígito
	var maskBehavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '00 00000 0000' : '00 0000 00009';
	}

	options = {
		onKeyPress: function(val, e, field, options) {
			field.mask(maskBehavior.apply({}, arguments), options);
		},
		placeholder: "(__) ____ ____"
	};
	 
	$('.celular').mask(maskBehavior, options);

	$( '.telefone' ).mask('(00) 0000 0000', {placeholder: "(__) ____ ____"});
	$( '.data' ).mask('00/00/0000', {placeholder: "__/__/____"});
	$( '.cep' ).mask('00000-000', {placeholder: "_____-___"});
	$( '.zip' ).mask('00000', {placeholder: "_____"});
	$( '.cpf' ).mask('000.000.000-00', {placeholder: "000.000.000-00"});


	$('form.js').submit(function(e){return false;e.preventDefault();});

	$('form.contato input[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form').validate({
				submitHandler: function(form)
				{

					$(form).find('#success').hide();
					$(form).find('#error').hide();
					$(form).find('.form-text').hide();
					$(form).find('fieldset').hide();
					$(form).find('.form-text').hide();
					$(form).find('input[type=submit]').hide();

					$(form).find('#process').show();

					$(form).ajaxSubmit({
						type: 'post',
						success: contatoOk
					});

				}, 
				rules: {
					nm: {
						required: true
					},
					ml: {
						email: true,
						required: true
					},
					msgm: {
						required: true
					}
				},
				messages: {
					nm: {
						required: 'Campo obrigatório'
					},
					ml: {
						email: 'E-mail inválido',
						required: 'Campo obrigatório'
					},
					msgm: {
						required: 'Deixe sua mensagem'
					}
				}
			});
		}
	)



$('form.inscricao input[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form').validate({
				submitHandler: function(form)
				{

					$(form).find('#success').hide();
					$(form).find('#aviso-campos').hide();
					$(form).find('#error').hide();
					$(form).find('fieldset').hide();
					$(form).find('#wrap-bts').hide();

					$(form).find('#success').find('#email').text( $(form).find('#ml').val() );

					$(form).find('#process').show();

					$(form).ajaxSubmit({
						type: 'post',
						success: inscricaoOk
					});

				}, 
				rules: {
					nm: {
					    required: true
					},
					nmcrch: {
					    required: true
					},
					nscmnt: {
					    required: true
					},
					sx: {
					    required: true
					},
					ml: {
						email: true,
					    required: true
					},
					cpf: {
					    required: true
					},
					ndrc: {
					    required: true
					},
					brr: {
					    required: true
					},
					cdd: {
					    required: true
					},
					std: {
					    required: true
					},
					cp: {
					    required: true
					},
					srnm: {
					    required: true
					},
					snh: {
					    required: true
					},
				    snh2: {
						equalTo: "#snh"
					},
					ndrccmrcl: {
					    required: true
					},
					brrcmrcl: {
					    required: true
					},
					cddcmrcl: {
					    required: true
					},
					stdcmrcl: {
					    required: true
					},
					cpcmrcl: {
					    required: true
					},
					tlfn: {
					    required: true
					},
					tlfncmrcl: {
					    required: true
					},
					cddnvrsdd: {
					    required: true
					},
					nvlfrmc: {
					    required: true
					},
					rfrmc: {
					    required: true
					}
				},
				messages: {
					nm: {
					    required: "Campo obrigatório"
					},
					nmcrch: {
					    required: "Campo obrigatório"
					},
					nscmnt: {
					    required: "Campo obrigatório"
					},
					sx: {
					    required: "Campo obrigatório"
					},
					ml: {
						email: "E-mail Inválido",
					    required: "Campo obrigatório"
					},
					cpf: {
					    required: "Campo obrigatório"
					},
					ndrc: {
					    required: "Campo obrigatório"
					},
					brr: {
					    required: "Campo obrigatório"
					},
					cdd: {
					    required: "Campo obrigatório"
					},
					std: {
					    required: "Campo obrigatório"
					},
					cp: {
					    required: "Campo obrigatório"
					},
					srnm: {
					    required: "Campo obrigatório"
					},
					snh: {
					    required: "Campo obrigatório"
					},
					snh2: {
					    equalTo: "Digite a mesma senha"
					},
					ndrccmrcl: {
					    required: "Campo obrigatório"
					},
					brrcmrcl: {
					    required: "Campo obrigatório"
					},
					cddcmrcl: {
					    required: "Campo obrigatório"
					},
					stdcmrcl: {
					    required: "Campo obrigatório"
					},
					cpcmrcl: {
					    required: "Campo obrigatório"
					},
					tlfn: {
					    required: "Campo obrigatório"
					},
					tlfncmrcl: {
					    required: "Campo obrigatório"
					},
					cddnvrsdd: {
					    required: "Campo obrigatório"
					},
					nvlfrmc: {
					    required: "Campo obrigatório"
					},
					rfrmc: {
					    required: "Campo obrigatório"
					}
				},
				errorPlacement: function(error, element) {
					if (element.attr("name") == "sx")
				        error.insertAfter( "#field-sexo .errorMsg" );
					else if (element.attr("name") == "nvlfrmc")
				        error.insertAfter( "#field-nivel .errorMsg" );
				    else
				        error.insertBefore( element );
				}
			});
		}
	)

$('form.confirma-email input[type="submit"]').bind('click', 
		function()
		{
			$(this).closest('form').validate({
				submitHandler: function(form)
				{

					$(form).find('#success').hide();
					$(form).find('#error').hide();
					$(form).find('fieldset').hide();

					$(form).find('#process').show();

					$(form).ajaxSubmit({
						type: 'post',
						success: confirmacaoOk
					});

				}
			});
		}
	)

	$('.alert button').bind('click', function()
	{
		$(this).closest('.alert').hide();
	})



}); //end $(document).ready









var siteHeaderH = $('.site-header').height();







function contatoOk (data)
{
/*
	console.log($(this));
	console.log(data);
*/

	$('#contato #process').hide();
	$('#contato #aviso-campos').hide();
	$('#contato form fieldset').show();
	$('#contato form .form-text').show();
	$('#contato form input[type=submit]').show();


	if( data == 'sucesso')
	{
		$('#contato form #success').show();
		$('#contato form')[0].reset();
	}
	else
	{
		$('#contato form #error').show();
	}

}

function inscricaoOk (data)
{
	/*
	console.log($(this));
	console.log(data);
	*/

	$('form.inscricao #process').hide();

	if( data == 'sucesso')
	{
		$('form.inscricao #success').show();
		$('form.inscricao')[0].reset();
	}
	else
	{
		$('form.inscricao fieldset').show();
		$('form.inscricao #wrap-bts').show();
	}

}

function confirmacaoOk (data)
{
	/*
	console.log($(this));
	console.log(data);
	*/

	$('form.confirma-email #process').hide();

	if( data == 'sucesso')
	{
		$('form.confirma-email #success').show();
		$('form.confirma-email')[0].reset();
	}
	else
	{
		$('form.confirma-email #error').show().delay(2500).hide(0);
		$('form.confirma-email fieldset').delay(2500).show(0);
	}

}

function URLize (s) 
{
    var r=s.toLowerCase();
    r = r.replace(new RegExp(/\s/g),"");
    r = r.replace(new RegExp(/[àáâãäå]/g),"a");
    r = r.replace(new RegExp(/æ/g),"ae");
    r = r.replace(new RegExp(/ç/g),"c");
    r = r.replace(new RegExp(/[èéêë]/g),"e");
    r = r.replace(new RegExp(/[ìíîï]/g),"i");
    r = r.replace(new RegExp(/ñ/g),"n");                
    r = r.replace(new RegExp(/[òóôõö]/g),"o");
    r = r.replace(new RegExp(/œ/g),"oe");
    r = r.replace(new RegExp(/[ùúûü]/g),"u");
    r = r.replace(new RegExp(/[ýÿ]/g),"y");
    r = r.replace(new RegExp(/\W/g),"");
    return r;
};

function pluralize (s, p, n)
{
	if( n != 1)
	{
		return p;
	}
	else
	{
		return s;
	}
}

function initializeMap()
{
		// var myLatLng = new google.maps.LatLng( -15.7868812,-47.88424 );
		var myLatLng = {lat: -15.7868812, lng: -47.88424};


		var mapCanvas = document.getElementById( 'map-canvas' );

		var styles = [
		  {
		    "elementType": "labels.text",
		    "stylers": [
		      { "visibility": "on" },
		      { "color": "#8f8f9f" }
		    ]
		  },{
		    "elementType": "labels.text.stroke",
		    "stylers": [
		      { "color": "#ffffff" }
		    ]
		  },{
		    "featureType": "landscape",
		    "stylers": [
		      { "color": "#f1ece6" }
		    ]
		  },{
		    "featureType": "road",
		    "stylers": [
		      { "color": "#ffffff" }
		    ]
		  },{
		    "featureType": "transit",
		    "stylers": [
		      { "color": "#e4cdb2" }
		    ]
		  },{
		    "featureType": "water",
		    "stylers": [
		      { "color": "#e4cdb2" }
		    ]
		  },{
		    "featureType": "poi.park",
		    "stylers": [
		      { "color": "#e4cdb2" }
		    ]
		  },{
		    "featureType": "poi",
		    "stylers": [
		      { "color": "#e4cdb2" }
		    ]
		  },{
		    "featureType": "poi",
		    "elementType": "labels.text",
		    "stylers": [
		      { "color": "#8f8f9f" }
		    ]
		  },{
		    "featureType": "poi",
		    "elementType": "labels.text.stroke",
		    "stylers": [
		      { "color": "#ffffff" }
		    ]
		  },{
		  }
		]

		var mapOptions = {
			center: myLatLng,
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			backgroundColor: 'b0b0b2',
			scrollwheel: false,
			draggable: false,
			disableDoubleClickZoom: true,
			disableDefaultUI: true,
			streetViewControl: false
		}

		var map = new google.maps.Map( mapCanvas, mapOptions );
		map.setOptions({styles: styles});

		var image = templateUrl + 'img/ipo-maps-marker.png';
		var marker = new google.maps.Marker({
		    position: myLatLng,
		    map: map,
		    icon: image
		});

		map.panBy(0, 150);
}

function showInAnimation () 
{

	$('.hided').each(function()
	{
		if( $( window ).scrollTop() + ( $( window ).height() * 0.8 ) > $(this).offset().top - 300 )
		{
			$(this).addClass('appeared').removeClass('hided');
		}
	})
}

function aplicaLang ()
{
	$('#idiomas li').removeClass('atual');
	$('a[lang|=' + lang + ']').closest('li').addClass('atual');
}

function toggleMenu ()
{
	if ( $('nav.open').length > 0 )
	{
		$('nav.open').removeClass('open');
	}
	else
	{
		$(this).closest('nav').addClass('open');
	}
}

function showSubsForm (id, curso, email)
{
	if(id)
	{
		$('form.inscricao #crs').val(id);
	}

	if(curso)
	{
		$('.form-inscricao .titulo h2 span').text(curso);
		$('.form-inscricao #success #curso').text(curso);
	}

	if(email)
	{
		$('.form-inscricao #success #email').text(email);
	}

	$('form.inscricao fieldset').show();
	$('form.inscricao #wrap-bts').show();
	$('form.inscricao #aviso-campos').show();
	$('form.inscricao #success').hide();
	$('form.inscricao #prossess').hide();

	$('.form-inscricao').show();
}

function hideSubsForm ()
{
	$('form.inscricao fieldset').show();
	$('form.inscricao #wrap-bts').show();
	$('form.inscricao #aviso-campos').hide();
	$('form.inscricao #success').hide();
	$('form.inscricao #prossess').hide();

	$('form.inscricao')[0].reset();

	$('.form-inscricao').hide();
}

function insertEmailOnSuccess (curso, email)
{
	if(email)
	{
		$('.form-inscricao #success #email').text(email);
	}
}

function activePage (menu)
{
	var href = location.pathname;
	
	if( href.substr(-1) == '/' )
		href = href.slice(0, -1);
	
	href = href.split('/').slice(-1)[0];

	$(menu + ' a').removeClass('active');
	$(menu + ' a[href$="'+ href +'"]').addClass('active');
}

function toggleFixedMenu ()
{
	if ( $( window ).scrollTop() > 21 )
	{
		// $('header').addClass('fixed');
		// $('.pagina').css('margin-top', '99px')
	}
	else
	{
		// $('header').removeClass('fixed');
		// $('.pagina').css('margin-top', '0')
	}
}

function igualaAlturaBlocoCurso ()
{
	if( $(window).innerWidth() > 991 )
	{
		$('.bloco-curso').each(function(index, el) {
			var max = Math.max( $(el).find('.title-bloco').outerHeight(), $(el).find('.texto-bloco').outerHeight() );
			$(el).find('.title-bloco').outerHeight( max );
			$(el).find('.texto-bloco').outerHeight( max );
		});
	}
	else
	{
		$('.bloco-curso').each(function(index, el) {
			$(el).find('.title-bloco').outerHeight( 'auto' );
			$(el).find('.texto-bloco').outerHeight( 'auto' );
		});
	}
}

function btInscricaoFlutuante ()
{
	// console.log($('.pagina-curso .apresentacao .show-form').offset());
	// console.log($('.pagina-curso .apresentacao .show-form').scrollTop());
	// console.log($(document).scrollTop());
	// if( $(document).scrollTop() > 490 )
	// {
	// 	$('.pagina-curso .apresentacao .show-form').css('position', 'fixed');
	// }
	// else
	// {

	// }
}

var iCarousel = 0,
	qtdCarousel = $('.humano-carousel ul li').length,
	timeCarousel = 8000,
	spaceScorerCarousel = $('.humano-carousel #contador').height(),
	intervalCarousel;

function initIntervalCarousel ()
{
	intervalCarousel = setInterval(function()
	{
		passaCarousel('frente');
	}, timeCarousel);

	$('.humano-carousel #contador').width( spaceScorerCarousel * qtdCarousel + 'px' );
	$('.humano-carousel #contador #marca')
	.css({
		'left': ( (iCarousel * spaceScorerCarousel) + 5 ) + 'px',
		'right': ( (qtdCarousel * spaceScorerCarousel) - 5 - ( iCarousel * spaceScorerCarousel ) - 6 ) + 'px'
	})


}

function passaCarousel (direcao)
{
	$('.humano-carousel ul li.highlight').removeClass('highlight');

	if(direcao == 'frente')
	{
		if(iCarousel < qtdCarousel - 1)
		{
			iCarousel++;
		}
		else
		{
			iCarousel = 0;
		}
	}
	else
	{
		if(iCarousel > 0)
		{
			iCarousel--;
		}
		else
		{
			iCarousel = qtdCarousel - 1;
		}
	}

	//CONTADOR

	$('.humano-carousel #contador #marca')
	.css({
		'left': ( (iCarousel * spaceScorerCarousel) + 5 ) + 'px',
		'right': ( (qtdCarousel * spaceScorerCarousel) - 5 - ( iCarousel * spaceScorerCarousel ) - 6 ) + 'px'
	})


	setTimeout(function ()
	{

		$('.humano-carousel ul li').css('z-index', '-1');
		$('.humano-carousel ul li[data-i="' + ( iCarousel ) + '"]')
			.addClass('highlight')
			.css('z-index', '1');

		
	}, 300)

}

function swapBgCasesHome () 
{
	if ( $(window).width() >= 1260 ) 
	{
		$('.pagina-escola .cursos ul li').each(function(i, el)
		{
			$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '.jpg)');
		});
	}
	else if ( $(window).width() >= 992 && $(window).width() < 1260 )
	{
		$('.pagina-escola .cursos ul li').each(function(i, el)
		{
			$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '-992.jpg)');
			$(el).css('background-size', 'cover');
		});
	}
	else if ( $(window).width() >= 530 && $(window).width() < 991 ) 
	{

		if ( getOrientation() == "v" )
		{
			$('.pagina-escola .cursos ul li').each(function(i, el)
			{
				$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '-530.jpg)');
				$(el).css('background-size', 'cover');
			});
		}
		else
		{

			if ( $(window).height() >= 370 )
			{

				$('.pagina-escola .cursos ul li').each(function(i, el)
				{
					$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '-530-h.jpg)');
					$(el).css('background-size', 'cover');
				});

			} 
			else
			{
				$('.pagina-escola .cursos ul li').each(function(i, el)
				{
					$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '-480-h.jpg)');
					$(el).css('background-size', 'cover');
				});
			}

		}

	}
	else if ( $(window).width() < 530 )
	{
		if ( getOrientation() == "v" )
		{
			$('.pagina-escola .cursos ul li').each(function(i, el)
			{
				$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '-320.jpg)');
				$(el).css('background-size', 'cover');
			});
		}
		else
		{
			$('.pagina-escola .cursos ul li').each(function(i, el)
			{
				$(el).css('background-image', 'url(' + templateUrl + 'img/' + $(el).attr("data-img") + '-480-h.jpg)');
				$(el).css('background-size', 'cover');
			});
		}
	};
}

function gravaTipoSite (tipo)
{

	Cookies.set("tipo_ipo", tipo, {
		expires	: 15,
		path    : '/'

	});

}

function trocaMenuPara(e)
{
	$('header nav #links').removeClass('lockd');
	
	if(e == 'clinica')
	{
		$('header nav #versao-menu #link-clinica').removeClass('esconde');
		$('header nav #versao-menu #link-escola').addClass('esconde');
		$('header nav #links.menu-escola').addClass('hiddden');
		$('header nav #links.menu-clinica').removeClass('hiddden');
	}
	else
	{
		$('header nav #versao-menu #link-clinica').addClass('esconde');
		$('header nav #versao-menu #link-escola').removeClass('esconde');
		$('header nav #links.menu-escola').removeClass('hiddden');
		$('header nav #links.menu-clinica').addClass('hiddden');
	}

}

function dimensionaGaleriaEscola()
{
	if($('.pagina-a-escola').length > 0)
	{
		var arH = [];
		var menorH;
		$('.pagina-a-escola .galeria ul li img').each(function() {
			arH.push( $(this).height() );
		});
		menorH = Math.min.apply(Math, arH);


		$('.pagina-a-escola .galeria').outerHeight( $(window).innerHeight() - $('.pagina-a-escola .galeria').offset().top + $(window).scrollTop() )
		$('.pagina-a-escola .galeria').css('max-height', ( Math.min( $(window).innerHeight() - $('header').height(), menorH ) )+'px')
	}

}

function igualaAltura (arElementos, minW)
{
	minW = (minW != undefined) ? minW : 0;

	if($(window).innerWidth() >= minW)
	{
		var arH = [];
		for (var i = 0; i < arElementos.length; i++) 
		{
			arH.push(arElementos[i].css('height', 'auto').height());
		};
		var maior = Math.max.apply(Math, arH);
		
		for (var i = 0; i < arElementos.length; i++) 
		{
			arElementos[i].height( maior );
		};
	}
}

function enviaDuvida(email)
{
}

function swapImages () 
{
	var breakpoint = checkBreakpoint();

	$('img').each(function(index, el) {
		var breakpointImg = $(this).attr('data-img-' + breakpoint);
		if ( breakpointImg )
		{
			$(this).attr('src', breakpointImg);
		}
		else
		{	
			$(this).attr('src', $(this).attr('data-img'));
		}
	});
}

function checkBreakpoint ()
{

	if( window.innerWidth < 768 )
	{
		return 'xs';
	}
	else if( window.innerWidth >= 768 && window.innerWidth < 992 )
	{
		return 'sm';
	}
	else if( window.innerWidth >= 992 && window.innerWidth < 1200 )
	{
		return 'md';
	}
	else if( window.innerWidth >= 1200 )
	{
		return 'lg';
	}

}

var hInicialNome;
var tiAlturaNomeTratamento;
function nivelaAlturaNomeTratamento ()
{
	if( $('.pagina-tratamento .descricao').outerHeight() > hInicialNome )
	{
		$('.pagina-tratamento .nome').outerHeight( $('.pagina-tratamento .descricao').outerHeight() );
	}
	else
	{
		$('.pagina-tratamento .nome').outerHeight( hInicialNome );
	}
	clearInterval(tiAlturaNomeTratamento);
}

var tBtnTratamento;
var maxWindowTopTratamento;
function flutuaBtnMarcar()
{
	tBtnTratamento = $(window).height() + $(window).scrollTop() - ( $('.wrap-button').outerHeight() * 2 ) - 15;
	maxWindowTopTratamento = ( parseInt($('.pagina.pagina-tratamento').css('margin-top')) + $('.pagina-tratamento .nome').outerHeight() - $(window).innerHeight() ) - 5;
	if($(window).scrollTop() < 184)
	{
		$('.pagina-tratamento .wrap-button').css({
			position: 'relative',
			left: 'auto',
			bottom: 'auto',
			top: 'auto'
		});
	}
	else 
	{
		if ( $(window).scrollTop() > maxWindowTopTratamento )
		{
			$('.pagina-tratamento .wrap-button').css({
				position: 'absolute',
				left: '13px',
				bottom: '30px',
				top: 'auto'
			});
		}
		else
		{
			$('.pagina-tratamento .wrap-button').css({
				position: 'absolute',
				left: '13px',
				bottom: 'auto',
				top: tBtnTratamento + 'px'
			});
		}
	}
}

var topUrgencia = 0;
var topUrgenciaFechado = 0;
var hUrgencia = Math.max($('#wrap-urgencia.aberto').height(), 359);
var hUrgenciaFechado = $('#wrap-urgencia.fechado #urgencia').height() || 48;
function flutuaUrgencia()
{
	if( $('#wrap-urgencia').length > 0 && window.innerWidth > 1024 )
	{


		topUrgencia = Math.max($('.tratamentos').offset().top - hUrgencia - $('.site-header').height() - 20, 1);

		if( Math.max( $('html').scrollTop(), $('body').scrollTop() ) >= topUrgencia )
		{
			console.log(hUrgenciaFechado)
			console.log(topUrgenciaFechado)

			$('#wrap-urgencia')
				.removeClass('aberto')
				.addClass('fechado');
				

			$('.pagina-clinica #seta-dir, .pagina-clinica #seta-esq')
				.css('bottom', '75px');
		}
		
		if( Math.max( $('html').scrollTop(), $('body').scrollTop() ) < topUrgencia )
		{
			$('#wrap-urgencia')
				.removeClass('fechado')
				.addClass('aberto');

			$('.pagina-clinica #seta-dir, .pagina-clinica #seta-esq')
				.css('bottom', '50px');
		}
	}

	if( $('#wrap-urgencia.fechado').length > 0 	)
	{
		if (hUrgenciaFechado == null)
			hUrgenciaFechado = $('#wrap-urgencia.fechado').height() || 48;

		topUrgenciaFechado = $('.tratamentos').offset().top - hUrgenciaFechado - $('.site-header').height();


		if( Math.max( $('html').scrollTop(), $('body').scrollTop() ) >= topUrgenciaFechado )
		{
			//só flutua o menu se ele não tiver a classe "descolado"
			if( $('#wrap-urgencia.descolado').length == 0 || ( $('#wrap-urgencia.descolado').length > 0 && window.innerWidth > 568 ) )
			{
				$('#wrap-urgencia.fechado')
					.addClass('colado')
					.css({
						position: 'fixed',
						'margin-top': '0',
						top: $('.site-header').height() + 'px'
					})
			}
		}
		else
		{
			$('#wrap-urgencia.fechado')
				.removeClass('colado')
				.removeAttr('style');
		}

	}
	else
	{
		$('#wrap-urgencia').removeAttr('style');
	}

}
