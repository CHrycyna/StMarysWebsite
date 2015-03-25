<?php include 'app/views/templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div id="fountainsponds" class="jumbotron">
  <h1>Fountain &amp; Miniature Ponds</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Visit our water gallery for all your water gardening needs</h2>
      <p class="lead">
        Our supply of pond equipment includes pond liners in multiple widths, pumps and fittings required for creating a water feature for your yard.   Fountains and birdbaths may be the water feature choice that you may find amongst our selections.   Pond plants are available from late April to September.  
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/gardencentre/500x500-pondsfountains.jpg" data-holder-rendered="true">
    </div>
  </div>
</div>
<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-garden').addClass('active');
  $('#subnav-fountainsponds').addClass('active');
});
</script>
<?php endblock () ?>