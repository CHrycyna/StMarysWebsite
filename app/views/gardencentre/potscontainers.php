<?php include 'app/views/templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div id="potterycontainers" class="jumbotron">
  <h1 class="outlined">Pottery &amp; Containers</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Containers for any occasion or for any location</h2>
      <p class="lead">
        Containers dress up any location of a yard or interior of the home. They serve to accent plants as well as create a mood to the d&eacute;cor.
        St. Mary&#39;s has a diverse collection of pottery &amp; containers for planting indoor tropical to outdoor arrangements.
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/gardencentre/500x500-potterycontainers.jpg" data-holder-rendered="true">
    </div>
  </div>
    <div class="row unstyled">
    <div class="col-md-12">
      <p class="lead">
        We carry a range of Concrete, fiber glass, metal, ceramic to poly. Styles come in a full 
        spectrum of color choices when seeking traditional or trendy - brown, bronze, blue, rust, 
        red to ivory. Whimsical, to classy elegant. Container sizes span the tiniest pots for 
        tillandsia, to specialty orchid pots, to dramatic pieces for large colorful plantings of 
        tropical plants.  
      </p>
    </div>
  </div>
  <div class="row unstyled featurette">
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/gardencentre/500x500-custompotting.jpg" data-holder-rendered="true">
    </div>
    <div class="col-md-7">
      <h2 class="featurette-heading">Custom Potting</h2>
      <p class="lead">
        Upon request, St.Mary&#39;s custom designs and plants containers for clients who desire to 
        have an instant garden with ease.  In conversation with clients, color selections and style 
        are readily achieved. We accept custom potting requests from residential to commercial property.
      </p>
    </div>
  </div>
    <div class="row unstyled">
    <div class="col-md-12">
      <p class="lead">
        From single to multiple units we design and plant selections best suited to the plants chosen. 
        If you have multiple pots and cannot bring them in, we can make arrangements with you to pick up and 
        deliver back your containers - Planted and ready to go!
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
  $('#subnav-potscontainers').addClass('active');
});
</script>
<?php endblock () ?>