<?php include 'app/views/templates/template_giftstore.php' ?>
		
<?php startblock('giftstore') ?>			
<div id="christmas" class="jumbotron">
  <h1>Christmas</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">A place to feel a child again</h2>
      <p class="lead">
        Just as our gardens are setting to rest for the winter, St. Mary&#39;s Nursery gears up 
        for its Christmas holiday display.  The entire building transforms into a winter wonderland 
        of festive light and displays.  Indoors; over 30 theme trees and coordinated vignettes are 
        displayed while outdoors the gardens take on a life of light displays.
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/giftstore/500x500-christmas.jpg" data-holder-rendered="true">
    </div>
  </div>
  <div class="row unstyled">
    <div class="col-md-12">
      <p class="lead">
        Each decorated tree takes life with themed ornaments, ribbons, silks and trimmings. 
        We Mark the calendar for our special events - visit with Santa and Mrs. Claus, and our 
        re-known family days with sleigh rides and hot apple cider. We are a growing Christmas 
        tradition.
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
  $('#subnav-christmas').addClass('active');
});
</script>
<?php endblock () ?>