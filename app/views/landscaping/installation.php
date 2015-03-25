<?php include 'app/views/templates/template_landscaping.php' ?>
		
<?php startblock('landscaping')?>
<div id="installation" class="jumbotron">
  <h1>Landscape Installation</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">The proper tools, to get every job done.</h2>
      <p class="lead">
         St Mary&#39;s Nursery has the manpower, expertise, and equipment needed to make your dream yard a reality.
      </p>  
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/landscaping/500x500-installation1.jpg" data-holder-rendered="true">
    </div>
  </div>
  <div class="row unstyled featurette">
    <div class="col-md-5">
      <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/landscaping/500x500-installation2.jpg" data-holder-rendered="true">
    </div>
    <div class="col-md-7">
      <h2 class="featurette-heading">With you every step of the way.</h2>
      <p class="lead">
        Collaboration from designer to site foreman enables proper measures for work to step forward bringing your plan from paper to actuality.  Keeping on schedule with projects, we always provide an efficient flow of information to our clients.
      </p>  
    </div>
  </div>
</div>

<?php endblock('landscaping')?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-landscaping').addClass('active');
  $('#subnav-installation').addClass('active');
});
</script>
<?php endblock () ?>
