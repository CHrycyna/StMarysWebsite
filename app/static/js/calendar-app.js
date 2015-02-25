(function($) {

	"use strict";

	var options = {
		events_source: 'DataController.php?function=getEvents',
		view: 'month',
		tmpl_path: 'templates/calendar/',
		tmpl_cache: false,
		day: 'now',
		onAfterEventsLoad: function(events) {
			if(!events) {
				return;
			}
			var list = $('#eventlist');
			list.html('');
					
			function compare(a,b)
			{
				if(a.start > b.start)
					return 1;
				else
					return 0;
			}
			events.sort(compare);
			var date = new Date();
			var currTime = date.getTime();
			var currEvent = 0;
			var MAX_EVENTS = 6;

			
			$.each(events, function(key, val) {
				if(currTime < val.start && currEvent < MAX_EVENTS && val.class != 'event-important') 
				{
					var link = document.createElement('a');
					link.setAttribute("href","javascript:void(0)");
					link.setAttribute("data-event-id-upcoming",val.id);
					link.setAttribute("data-event-class",val.class);
					link.setAttribute("class","list-group-item event-item");
					link.setAttribute("data-toggle","tooltip");
					link.innerHTML = val.title;

					list.append(link);
					currEvent++;
				}
			});
			
			
			
		},
		onAfterViewLoad: function(view) {
			$('.page-header h1').text(this.getTitle());
			$('.btn-group button').removeClass('active');
			$('button[data-calendar-view="' + view + '"]').addClass('active');
		},
		classes: {
			months: {
				general: 'label'
			}
		}
	};

	var calendar = $('#calendar').calendar(options);

	$('.btn-group button[data-calendar-nav]').each(function() {
		var $this = $(this);
		$this.click(function() {
			calendar.navigate($this.data('calendar-nav'));
		});
	});

	$('.btn-group button[data-calendar-view]').each(function() {
		var $this = $(this);
		$this.click(function() {
			calendar.view($this.data('calendar-view'));
		});
	});

	$('#first_day').change(function(){
		var value = $(this).val();
		value = value.length ? parseInt(value) : null;
		calendar.setOptions({first_day: value});
		calendar.view();
	});

	$('#language').change(function(){
		calendar.setLanguage($(this).val());
		calendar.view();
	});

	$('#events-in-modal').change(function(){
		var val = $(this).is(':checked') ? $(this).val() : null;
		calendar.setOptions({modal: val});
	});
	$('#events-modal .modal-header, #events-modal .modal-footer').click(function(e){
		//e.preventDefault();
		//e.stopPropagation();
	});
}(jQuery));