<?php include 'app/views/templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div id="annual" class="jumbotron">
  <h1>Annuals</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">A Spark of Color</h2>
      <p class="lead">
        Annuals have a tenacious strength in producing blooms after bloom resulting in high impact color in the garden, as well for container gardening.
      </p>
      <p class="lead">
        A full array of plants from the traditional geraniums to the latest introductions in the greenhouse industry; our greenhouses radiate a broad spectrum color.   Choices are endless when looking for individual sized varieties or if you seek a readymade designed hanging basket or floor container.
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" alt="500x500" src="/static/img/gardencentre/500x500-annuals.jpg" data-holder-rendered="true">
    </div>
  </div>
</div>

<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-garden').addClass('active');
  $('#subnav-annuals').addClass('active');
});
</script>
<?php endblock () ?>
