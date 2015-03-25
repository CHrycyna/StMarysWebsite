<?php include 'app/views/templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div id="fruitsvegetables" class="jumbotron">
  <h1>Fruits &amp; Vegetables</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Home Grown</h2>
      <p class="lead">
        With increasing popularity with the public&#39;s craving to grow their own food St. Mary&#39;s has devoted further space to edibles. Edibles from apples to small berry fruit; vegetables to herbs, we have an entire pallet of starter plants to choose from.  
        Potted herbs are available from early spring to fall.  
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" alt="herbs" src="/static/img/gardencentre/500x500-herbs.jpg" data-holder-rendered="true">
    </div>
  </div>
  <div class="row unstyled featurette">
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" alt="500x500" src="/static/img/gardencentre/500x500-tomatoes.jpg" data-holder-rendered="true">
    </div>
    <div class="col-md-7">
      <h2 class="featurette-heading">Getting a Jump Start</h2>
      <p class="lead">
        In spring our selection of starter vegetables will have you pondering which will make it into your vegetable garden.   With over 45 tomato choices; cabbage, kale to numerous pepper choices including a full selection of other veggie plants for picking.  Our every popular jumbo tomato in 7 gallon pots complete with its own tomato cage are always ready early May for the gardener wishing for the advanced growth.
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
  $('#subnav-fruitveg').addClass('active');
});
</script>
<?php endblock () ?>