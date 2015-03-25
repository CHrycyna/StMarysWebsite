<?php include 'app/views/templates/template_landscaping.php' ?>
		
<?php startblock('landscaping')?>
<div id="commercial" class="jumbotron">
  <h1>Commercial Landscaping</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Large Projects</h2>
      <p class="lead">
        We have provided commercial landscape services for over 30 years. We have the knowledge and expertise to install or renew any green space, boulevards to parks.
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/landscaping/500x500-commercial.jpg" data-holder-rendered="true">
    </div>
  </div>
</div>
<?php endblock('landscaping')?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-landscaping').addClass('active');
  $('#subnav-commercial').addClass('active');
});
</script>
<?php endblock () ?>
