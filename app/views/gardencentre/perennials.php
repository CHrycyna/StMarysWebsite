<?php include 'app/views/templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div id="perennial" class="jumbotron">
  <h1>Perennials</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Of our 65,000 sq ft of greenhouses, we dedicate 12,000 sq ft  to perennial selections and displays.</h2>
      <p class="lead">
        We stock a broad diversity of perennials, from the hardiest of zone 2 to micro-climate  zone 5 varieties for the perennial challenger.  Our experts are available to assist you in selections optimally suited to your gardening requirements.
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" alt="500x500" src="/static/img/gardencentre/500x500-perennials.jpg" data-holder-rendered="true">
    </div>
  </div>
  <div class="row unstyled featurette">
    <div class="col-md-12">
      <p class="lead">
        The perennial department covers a wide range of perennials in various sizing for our customers needs.  From 4&quot; starter plants to mature 2 gal choices, homeowners to commercial contractors will find the perfect size for their project.
      </p>
    </div>
  </div>
</div>
<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-garden').addClass('active');
  $('#subnav-perennials').addClass('active');
});
</script>
<?php endblock () ?>
