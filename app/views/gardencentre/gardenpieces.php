<?php include 'app/views/templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div id="gardenpieces" class="jumbotron">
  <h1 class="Outlined">Garden Pieces</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Focus pieces in the garden reveal character and personality</h2>
      <p class="lead">
        Traditional, playful to old world, we seek garden accents and statuary from across the continent and beyond.  Birdbaths, lanterns, cherubs to life size angels are just a few of the collections.  Iron works of pergola, trellising and arbors add another element to the yard.  Our creative displays of garden accents flow throughout our garden center.
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/gardencentre/500x500-gardenaccents.jpg" data-holder-rendered="true">
    </div>
  </div>
</div>

<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-garden').addClass('active');
  $('#subnav-gardenpieces').addClass('active');
});
</script>
<?php endblock () ?>
