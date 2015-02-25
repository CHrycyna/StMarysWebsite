<?php include 'templates/base.php' ?>

<?php startblock('css')?>
<?php superblock()?>
<link rel="stylesheet" href="/static/StyleSheets/calender.css">
<?php endblock()?>
		
<?php startblock('content') ?>

<div class="contents">
	<div class="content rounded">
		<div class="row calendar">
		<div class="page-header">
	
			<h1></h1>
			<div class="row calendar">
			
				<div class="col-sm btn-group btn-group-sm">
					<button class="btn btn-primary" data-calendar-nav="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Prev</button>
					<button class="btn btn-default" data-calendar-nav="today">Today</button>
					<button class="btn btn-primary" data-calendar-nav="next">Next <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
				</div>
				<div class="col-sm btn-group btn-group-sm btn-toggle pull-right">
					<button class="btn btn-primary" data-calendar-view="year">Year</button>
					<button class="btn btn-primary active" data-calendar-view="month">Month</button>
					<button class="btn btn-primary" data-calendar-view="week">Week</button>
					<button class="btn btn-primary" data-calendar-view="day">Day</button>
				</div>
			</div>
		</div>
	
		<div class="row calender">
			<div class="col-md-9">
				<div id="calendar"></div>
			</div>
			<div class="col-md-3">
				<div class="pabel panel-info">
					<div class="panel-heading"><h4 class="panel-title">Upcoming Events</h4></div>
					<div id="eventlist" class="list-group"></div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="events-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title">Event</h3>
					</div>
					<div class="modal-body">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="panel-title">Times</h5>
								</div>
								<div id="modal-times" class="panel-body">
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="panel-title">Comments</h5>
								</div>
								<div id="modal-description" class="panel-body"></div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
  		
	</div>
	</div>
</div>

<?php endblock() ?>		

<?php startblock('scripts') ?>
<?php superblock() ?>
<script type="text/javascript" src="static/Scripts/jstz.js"></script>
<script type="text/javascript" src="static/Scripts/calendar.js"></script>
<script type="text/javascript" src="static/Scripts/calendar-app.js"></script>
<script>
$(document).ready(function() {
  $('#nav-events').addClass('active');
});
</script>
<?php endblock() ?>