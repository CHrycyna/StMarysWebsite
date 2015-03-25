<?php include 'app/views/templates/template_giftstore.php' ?>
		
<?php startblock('giftstore') ?>			
<div id="homedecor" class="jumbotron">
  <h1>Home Decor</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Unique styles of home d&eacute;cor and gifts for traditional, modern to cottage style d&eacute;cor</h2>
      <p class="lead">
        
        Wall accents from pictures to artisan metal work will dress your walls.  Candle 
        holders, vases and d&eacute;cor plates in a collage of colors will accent many living spaces.  
        Set the ambience with our collections of Yankee candles. Our gift shop offers you a 
        relaxed shopping experience perfect for browsing for that perfect hostess gift, or 
        for sourcing a undeniable d&eacute;cor piece for your home.
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/giftstore/500x500-homedecor.jpg" data-holder-rendered="true">
    </div>
  </div>
</div>
<?php endblock('giftstore') ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-giftstore').addClass('active');
  $('#subnav-homedecor').addClass('active');
});
</script>
<?php endblock () ?>