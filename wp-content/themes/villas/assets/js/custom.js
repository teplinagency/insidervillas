jQuery(function($) {
	$('.main_area > li').on('click', function() {
		$(this).toggleClass('active');
		var submenu = $(this).find('.sub_main_area');
		if(submenu.is(":visible")) submenu.fadeOut(300);
		else submenu.fadeIn(300);
	})
	
	
	
	$(document).click((event) => {
		if (!$(event.target).closest('.search__body').length) {
			$('.search_list, .s-range').removeClass('active');
		}   
	});

	
	$('.load-more-testimonials').on('click', function() {
		var btn = $(this),
			btn_text = btn.text(),
			wrapper = $('.testimonials__body'),
			page = Number(wrapper.find('#page').val()),
			maxpages = Number(wrapper.find('#max-pages').val()),
			post_type = wrapper.find('#post_type').val(),
			data = {
				'action': 'loadmore',
				'post_type': post_type,
				'term': Number(wrapper.find('#area_tax').val()),	
				'per_page': Number(wrapper.find('#per_page').val()),	
				'page' : page,
			};

		if(maxpages > page) {
			$.ajax( {
				url:'/wp-admin/admin-ajax.php',
				data:data,
				type:'POST',
				dataType: 'json',
				beforeSend: function( xhr ){
					btn.text('Loading...');
				},
				success:function(data){
					if( data ) {
						$('#response').append( data.html );
						wrapper.find('#page').val(page+1);
						btn.text(btn_text);
						if(maxpages == (page+1)) btn.hide();
						
					}
				}
			});
		}
		
		return false;
	});
	
	
	
	$(".select_areas").selectize({
		create: true,
		onChange:function(value) {
			
		}
	});
	
	/*$('.select_areas').on('change', function() {
		var tax = $(this).val(),
			btn = $('.load-more-testimonials'),
			wrapper = $('.testimonials__body'),
			page = Number(wrapper.find('#page').val()),
			maxpages = Number(wrapper.find('#max-pages').val()),
			post_type = wrapper.find('#post_type').val(),
			data = {
				'action': 'filter_by_area',
				'post_type': post_type,
				'term': tax,	
				'per_page': Number(wrapper.find('#per_page').val()),	
				'page' : page,
			};
		

		$('#area_tax').val(tax);
		$('#page').val(1);

		$.ajax( {
			url:'/wp-admin/admin-ajax.php',
			data:data,
			type:'POST',
			dataType: 'json',
			beforeSend: function( xhr ){},
			success:function(data){
				if( data ) {
					$('#response').html( data.html );
					$('#max-pages').val(data.maxpages);
					if(data.maxpages == 1) btn.hide();
					else btn.show();
				}
			}
		});	
	});
	*/
	$('.select_areas').on('change', function() {
		var tax = $(this).val();
		$('.testimonials__item').hide();
		$('.testimonials__item.testimonial_area_'+tax).fadeIn(300);
	});
	
	
	/*All Villas page*/
	$('.filter-item__body input[type="checkbox"]').each(function() {
		$(this).on('click', function() {
			var input = $(this);
			$(this).parents('.filter-item__body').find('input[type="checkbox"]').removeClass('checked');
			
			if($(this).is(':checked')) $(this).addClass('checked');	
			else $(this).removeClass('checked');	
			
			$(this).parents('.filter-item__body').find('input:not(.checked)').prop('checked', false);
			
			if($(this).parents('.filter-item__body').find('input:checked').length == 0) {
				$(this).parents('.filter-item').find('.title span').text('');
			}
			else {
				var p = $(this).parents('.filter-item');
				
				if(p.hasClass('filter-bedrooms')) {
					$('#bedrooms').val(input.data('bedrooms'));
					$('.search__block.search__rooms .text').text(input.data('bedrooms'));
					var type = 'bedrooms';

				} 
				else if(p.hasClass('filter-bathrooms')) var type = 'bathrooms';
				else if(p.hasClass('filter-areas')) {
					$('#area').val(input.data('term-id'));
					$('.search__block.search__areas .text').text(input.data('area'));
					var type = 'area';
				}
				
				
				
				$(this).parents('.filter-item').find('.title span').text($(this).data(type));
			}
		});
	});
	
	$('.input-number-decrement').on('click', function() {
		var min_value = $('#guests').prop('min');
		var cur_value = Number($('#guests').val());
		var decr_value = cur_value - 1;
		
		if(cur_value == 0 || decr_value < min_value) cur_value = '';
		else cur_value = decr_value;
		
		if(!cur_value) $('#guests').val(0);	
		else $('#guests').val(cur_value);	
		$('.filter-guests .title span').text(cur_value);
	});
	$('.input-number-increment').on('click', function() {
		var min_value = $('#guests').prop('min');
		var max_value = $('#guests').prop('max');
		var cur_value = Number($('#guests').val());
		var incr_value = cur_value + 1;
		
		if(cur_value == 0) cur_value = min_value;
		else if(incr_value > max_value) return false;
		else cur_value = incr_value;
		
		$('#guests').val(cur_value);
		$('.filter-guests .title span').text(cur_value);
	});
	
	function get_filter_data($task) {
		var guests = Number($('#guests').val()),
			area = Number($('input[name="area"]:checked').data('term-id')),
			bedrooms = Number($('input[name="bedrooms"]:checked').data('bedrooms')),
			bathrooms = Number($('input[name="bathrooms"]:checked').data('bathrooms')),
			price_min = Number($('#min-price').text()),
			price_max = Number($('#max-price').text()),
			order = $('.villas_order select').val(),
			page = $('#page').val(),
			per_page = $('#per_page').val(),
			maxpages = $('#max-pages').val();
		
		
		
		if(!area) area = '';
		if(!bedrooms) bedrooms = '';
		if(!bathrooms) bathrooms = '';


		var data = {
			'action': 'filter_villas',
			'area' : area,
			'price_min' : price_min,
			'price_max' : price_max,
			'guests' : guests,
			'bedrooms' : bedrooms,
			'bathrooms' : bathrooms,
			'orderby' : order,
			'page' : page,
			'per_page' : per_page,
			'maxpages' : maxpages,
			'task' : $task
		};
		
		return data;
	}
	
	
	function load_filter_data($type) {
		var data = get_filter_data($type);
		var btn = $('.load-more');
		$.ajax( {
			url:'/wp-admin/admin-ajax.php',
			data:data,
			type:'POST',
			dataType: 'json',
			beforeSend: function( xhr ){},
			success:function(data){
				if( data ) {
					//$('#response').html( data );
					if($type == 'filter') $('#response').html( data.html );
					else if($type == 'loadmore') $('#response').append( data.html );
						
					$('.num span').html( data.count );
					$('#max-pages').val(data.maxpages);
					$('#page').val(data.nextpage);
					
					if(data.count == 0 || data.maxpages == 1 || data.maxpages == data.nextpage) btn.hide();
					else btn.show();
					
					if($(window).width() < 900) {
						$('.products__body .left').fadeOut(300);
					}
				}
			}
		});
	}
	

	
	$('.filter__villas_btn').on('click', function() {
		load_filter_data('filter');
	});
	
	/*$('.villas_order select').on('change', function() {
		load_filter_data('filter');
	});*/
	
	$(".select.villas_order select").selectize({
		create: true,
		onChange:function(value) {
			load_filter_data('filter');
		}
	});
	
	$('.load-more').on('click', function(e) {
		e.preventDefault();
		load_filter_data('loadmore');
	});
	
	$('.clear, .clerr').on('click', function() {
		setTimeout(function() {
			load_filter_data('filter');
		}, 500);
	});
	
	
	/*Open contact modal to Menu item*/
	let contact_menu_item = $('.contact__menu_link a');
	contact_menu_item.attr('href', 'javascript:;');
	contact_menu_item.attr('data-fancybox', '');
	contact_menu_item.attr('data-src', '#contact');
	
	
	//Other things
	$('body').on('keyup change', '.wpcf7-not-valid', function() {
		$(this).removeClass('wpcf7-not-valid');
	});
	
	
	/*User REGISTER*/
	/*$('body').on('submit', '#sign_up_form', function(e) {	
		e.preventDefault();
		var form = $(this);

		var html = '<div class="register_answer">';
			html += '<h3 class="specialist-info__title specialist-info__title--modal">Registration was successful.</h3>';
			html += '<p>An email has been sent to your mailbox with your registration information. Use it in case you forget your login and password.</p>';
			html += '<svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M99 50C99 77.062 77.062 99 50 99C22.938 99 1 77.062 1 50C1 22.938 22.938 1 50 1C77.062 1 99 22.938 99 50Z" fill="white" stroke="#0CA41B" stroke-width="2"/><path fill-rule="evenodd" clip-rule="evenodd" d="M26.7587 47.6347C27.305 47.2126 28.09 47.3132 28.5121 47.8595L44.1084 68.043C44.5306 68.5893 44.4299 69.3743 43.8837 69.7964C43.3374 70.2185 42.5524 70.1179 42.1302 69.5716L26.5339 49.3881C26.1118 48.8419 26.2124 48.0568 26.7587 47.6347Z" fill="#0CA41B"/><path fill-rule="evenodd" clip-rule="evenodd" d="M73.2466 30.2072C73.7908 30.632 73.8876 31.4175 73.4629 31.9617L44.1051 69.5764C43.6803 70.1206 42.8948 70.2175 42.3506 69.7927C41.8064 69.3679 41.7095 68.5824 42.1343 68.0382L71.4921 30.4235C71.9168 29.8793 72.7023 29.7825 73.2466 30.2072Z" fill="#0CA41B"/></svg>';
		html += '</div>';
		
		var check_req = true;		
		form.find('input[required]').each(function() {
			if($(this).val() == '') {
				$(this).addClass('required');
				check_req = false;
			}
		})
		
		if(check_req) {		
			$.ajax({
				url:'/wp-admin/admin-ajax.php?action=user_register',
				data:form.serialize(),
				type:'POST',
				dataType: 'json',
				beforeSend:function(xhr){ },
				success:function(data){
					if(data.error == 0) {					
						$('#sign-up .modal__right .txt').html(html);
						setTimeout(function() {
							window.location.href=window.location.href;
						},1500)
					}
					else {
						$('.register_form').prepend('<div class="error__msg">'+data.msg+'</div>');
					} 
				}
			});		
		}
	});*/
	
	/*User LOGIN*/
	/*$('body').on('submit', '#loginform', function(e) {	
		e.preventDefault();
		var form = $(this);

		var html =  '<div class="register_answer">';
			html += '<h3 class="specialist-info__title specialist-info__title--modal">You are successfully logged in!</h3>';
			html += '<svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M99 50C99 77.062 77.062 99 50 99C22.938 99 1 77.062 1 50C1 22.938 22.938 1 50 1C77.062 1 99 22.938 99 50Z" fill="white" stroke="#0CA41B" stroke-width="2"/><path fill-rule="evenodd" clip-rule="evenodd" d="M26.7587 47.6347C27.305 47.2126 28.09 47.3132 28.5121 47.8595L44.1084 68.043C44.5306 68.5893 44.4299 69.3743 43.8837 69.7964C43.3374 70.2185 42.5524 70.1179 42.1302 69.5716L26.5339 49.3881C26.1118 48.8419 26.2124 48.0568 26.7587 47.6347Z" fill="#0CA41B"/><path fill-rule="evenodd" clip-rule="evenodd" d="M73.2466 30.2072C73.7908 30.632 73.8876 31.4175 73.4629 31.9617L44.1051 69.5764C43.6803 70.1206 42.8948 70.2175 42.3506 69.7927C41.8064 69.3679 41.7095 68.5824 42.1343 68.0382L71.4921 30.4235C71.9168 29.8793 72.7023 29.7825 73.2466 30.2072Z" fill="#0CA41B"/></svg>';
		html += '</div>';
		
		var check_req = true;		
		form.find('input[required]').each(function() {
			if($(this).val() == '') {
				$(this).addClass('required');
				check_req = false;
			}
		})
		
		if(check_req) {		
			$.ajax({
				url:'/wp-admin/admin-ajax.php?action=user_login', 
				data:form.serialize(), 
				type:'POST', 
				dataType: 'json',
				beforeSend:function(xhr){ },
				success:function(data){
					if(data.error == 0) {
						//$('.signin_form .contact_form__title, #loginform, .error__msg').hide();
						$('#login .modal__right .txt').html(html);
						setTimeout(function() {
							window.location.href=window.location.href;
						},1500)
					}
					else {
						$('#loginform').prepend('<div class="error__msg">'+data.msg+'</div>');
					} 
				}
			});		
		}
	});*/
	
	
	$('form input[required]').on('keyup change', function() {
		$(this).removeClass('required');
	});
	
	
	/*NewsLetter*/
	if ( Cookies.get("newsletter_popup") == null ) {
		setTimeout(function(){
			$(".newsletter_open_popup").trigger('click');
			Cookies.set("newsletter_popup", "1", { expires:1, path: '/' });
		}, 8000);
	}
	
	var wpcf7Elm1 = document.querySelector( '#wpcf7-f868-o3' );
	if( wpcf7Elm1 != null ) {
		wpcf7Elm1.addEventListener( 'wpcf7mailsent', function( event ) {
			$('#newslatter form').html('<div style="text-align:center;"><svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M99 50C99 77.062 77.062 99 50 99C22.938 99 1 77.062 1 50C1 22.938 22.938 1 50 1C77.062 1 99 22.938 99 50Z" fill="white" stroke="#0CA41B" stroke-width="2"/><path fill-rule="evenodd" clip-rule="evenodd" d="M26.7587 47.6347C27.305 47.2126 28.09 47.3132 28.5121 47.8595L44.1084 68.043C44.5306 68.5893 44.4299 69.3743 43.8837 69.7964C43.3374 70.2185 42.5524 70.1179 42.1302 69.5716L26.5339 49.3881C26.1118 48.8419 26.2124 48.0568 26.7587 47.6347Z" fill="#0CA41B"/><path fill-rule="evenodd" clip-rule="evenodd" d="M73.2466 30.2072C73.7908 30.632 73.8876 31.4175 73.4629 31.9617L44.1051 69.5764C43.6803 70.1206 42.8948 70.2175 42.3506 69.7927C41.8064 69.3679 41.7095 68.5824 42.1343 68.0382L71.4921 30.4235C71.9168 29.8793 72.7023 29.7825 73.2466 30.2072Z" fill="#0CA41B"/></svg></div>');
		}, false );
	}
	
	
	
	/*Request Villa*/
	const airDatepickerEn = {
        days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        today: 'Today',
        clear: 'Clear',
        dateFormat: 'dd/MM/yyyy',
        timeFormat: 'hh:mm aa',
        firstDay: 0
    };
    const airDatepickerAll = document.querySelectorAll('.date-input');
    let airDatepickerArray = [];
    airDatepickerAll.forEach(function(item, i) {
        airDatepickerArray[i] = new AirDatepicker(item, {
            // autoClose: true,
            position:'top center',
            locale: airDatepickerEn
        });
    });
	
	new AirDatepicker('#search-date', {
		inline: true,
		locale: airDatepickerEn,
		multipleDates:2,
		dateFormat: 'MMM d',
		onSelect({date, formattedDate}) {
			if(formattedDate.length == 2) {
				var dates = formattedDate.join('&nbsp;-&nbsp;');
				$('#search-date').parent('.search__block').find('.text').html(dates);
				$('#date_start').val(Date.parse(date[0]));
				$('#date_end').val(Date.parse(date[1]));
			}
			else {
				$('#search-date').parent('.search__block').find('.text').html(formattedDate);
			}
		}
	});
	
	
	
	$('body').on('click','#search-date .air-datepicker-cell', function() {
		if($('#search-date .air-datepicker-cell.-selected-').length == 2) {
			var fe = $('#search-date .air-datepicker-cell.-selected-').eq(0);
			var le = $('#search-date .air-datepicker-cell.-selected-').eq(1);
			fe.addClass('fe');
			le.addClass('le');
			var el = fe.nextUntil('#search-date .air-datepicker-cell.-selected-', 'div');
			el.each(function() {
				$(this).addClass('between');
			})
		}
		else {
			$('#search-date .air-datepicker-cell').removeClass('between fe le');
		}
	});
	
	
	
	
	$('.check_in_field, .check_out_field').on('click', function() {
		$(this).parent('.search__areas').find('.date-input').focus();
	});
	
	$('.guests_list .li').on('click', function() {
		$('#guests').html('<span>'+$(this).text()+'</span>').css('opacity', '1');
	});
	
	$('.availability__form_btn').on('click', function() {
		
		var availability_form = $('#availability_form'),
			request_form = $('#request-villa'),
			$check_in_date = availability_form.find('#date_in').val(),
			$check_out_date = availability_form.find('#date_out').val(),
			$guests = availability_form.find('#guests span').text();
		
		request_form.find('#guests').val($guests);
		request_form.find('#date_in').val($check_in_date);
		request_form.find('#date_out').val($check_out_date);
		
		$('.request_villa_open_popup').trigger('click');
	})
})