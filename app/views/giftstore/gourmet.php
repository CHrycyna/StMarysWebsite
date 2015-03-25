<?php include 'app/views/templates/template_giftstore.php' ?>
		
<?php startblock('giftstore') ?>			
<div id="gourmet" class="jumbotron">
  <h1>Gourmet</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">A venture through our gift shop will find you within our gourmet galley.</h2>
      <p class="lead">
        Unique blends of foods and seasonings from select regions of North America and Europe will whet your 
        appetite. Our yards and decks become outdoor kitchens where friends and family gather.  
        Food is part of that recipe.  
     </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/giftstore/500x500-gourmet.jpg" data-holder-rendered="true">
    </div>
  </div>
  <div class="row unstyled">
    <div class="col-md-12">
      <p class="lead">Enjoy selecting from our assortment of spices, soups, 
        gourmet crackers, bbq and hot sauces.   You may also find a few kitchen accessories 
        perfect for gift for someone; maybe for you. Sit back; relax and enjoy one of the delectable 
        herbal teas or flavored coffees from our medleys.
      </p>
    </div>
  </div>
</div>
<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-giftstore').addClass('active');
  $('#subnav-gourmet').addClass('active');
});
</script>
<?php endblock () ?>