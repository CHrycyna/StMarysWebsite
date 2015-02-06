<?php include 'base.php' ?>

<?php startblock('css')?>
<?php superblock()?>
<link rel="stylesheet" href="/static/StyleSheets/calender.css">
<?php endblock()?>
		
<?php startblock('content') ?>

<div class="contents">
	<div class="content rounded">
		<div class="row calender">
	  	<h1 class="tri-h2">Events Calendar</h1>
		<div class="page-header">
	
			<div class="pull-right form-inline">
				<div class="btn-group">
					<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
					<button class="btn btn-default" data-calendar-nav="today">Today</button>
					<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-warning" data-calendar-view="year">Year</button>
					<button class="btn btn-warning active" data-calendar-view="month">Month</button>
					<button class="btn btn-warning" data-calendar-view="week">Week</button>
					<button class="btn btn-warning" data-calendar-view="day">Day</button>
				</div>
			</div>
	
			<h3></h3>
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
<?php endblock() ?>