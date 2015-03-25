<?php include 'app/views/templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div id="tropicals" class="jumbotron">
  <h1>Tropicals</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading"> Tropical plants bring life to a room with their bright green foliage and textures.</h2>
      <p class="lead">
        Our tropical house is open year round with a collection of tropical plants for home or office.  We stay on top of tropical trends with selections.  Tabletop plants, hanging baskets or larger floor specimens are sourced from reliable southern growers.    Our staff will recommend tropical plants for your requirements.  
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/gardencentre/500x500-tropicals.jpg" data-holder-rendered="true">
    </div>
  </div>
</div>
<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-garden').addClass('active');
  $('#subnav-tropicals').addClass('active');
});
</script>
<?php endblock () ?>
