<?php include 'app/views/templates/template_giftstore.php' ?>
		
<?php startblock('giftstore') ?>			
<div id="fashion" class="jumbotron">
  <h1>Fashion</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">
        A new realm of shopping happens at St. Mary&#39;s fashion boutique.
      </h2>
      <p class="lead">
        Our collections of apparel in tops, dresses, and skirts will have you dressed in style not found in regular malls.  
      </p>
      <p class="lead">
        Fashion trends from Canada and abroad; stylish from comfortable to classy styles are always arriving.
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/giftstore/500x500-fashion1.jpg" data-holder-rendered="true">
    </div>
  </div>
  
  <div class="row unstyled featurette">
   <div class="col-md-5">
      <img class=" left featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/giftstore/500x500-jewelery.jpg" data-holder-rendered="true">
    </div>
    <div class="col-md-7">
      <h2 class="featurette-heading">
        Jewelry
      </h2>
      <p class="lead">
        Finish off your outfit with the addition of the trendy to classy jewelry.  Accessories with fabulous prices will enhance your look.
      </p>
    </div>
  </div>
  <div class="row unstyled featurette">
    <div class="col-md-12">
      <h2 class="featurette-heading">
        Handbags &amp; Scarves
      </h2>
      <p class="lead">
        The blossoming popularity of fashionable scarves enhances daily attires as much as jewelry.  Our assortments of scarves are will complement any outfit.   Stylish handbags in complimentary colors to our fashion lines complete your look.
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
  $('#subnav-fashion').addClass('active');
});
</script>
<?php endblock () ?>