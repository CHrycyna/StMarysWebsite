<?php include 'templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div id="garden" class="jumbotron">
  <h1 class="outlined">Garden Centre</h1>
</div>
<div class="row unstyled content rounded featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Through our front doors, <span class="text-muted">our garden centre welcomes you.</span></h2>
    <p class="lead">
      Feel at home venturing through a delightful setting of boutiques and garden accessories before wandering through 65,000 sq ft of display gardens of perennials, annuals, trees, shrubs and tropical houses. 
    </p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="/static/imgs/500x500-Sample.jpg" data-holder-rendered="true">
  </div>
</div>
<div class="row unstyled content rounded featurette">
  <div class="col-md-5">
    <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="/static/imgs/500x500-Sample.jpg" data-holder-rendered="true">
  </div>
  <div class="col-md-7">
    <h2 class="featurette-heading">Families enjoy the relaxed atmosphere St.Mary&#39;s Nursery radiates.</h2>
    <h2><span class="text-muted">We welcome you to our shopping experience.</span></h2>
  </div>
</div>
<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-garden').addClass('active');
  $('#subnav-garden').addClass('active');
});
</script>
<?php endblock () ?>