<?php include 'app/views/templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div id="largestock" class="jumbotron">
  <h1>Large Stock</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <p class="lead">
        Caliper size trees of 2.5" or more are available in burlap and basket. 
      </p>
      <div class="well well-sm">
        <p>
          Ask for quotes on installtion. Skid Steer access of 7 feet or more is required.
        </p>
      </div>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="http://holtindustrial.com/treebaskets/images/Trees-in-burlap-baskets-tall.jpg" data-holder-rendered="true">
    </div>
  </div>
</div>
<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-garden').addClass('active');
  $('#subnav-largestock').addClass('active');
});
</script>
<?php endblock () ?>
