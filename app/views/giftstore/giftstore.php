<?php include 'app/views/templates/template_giftstore.php' ?>
		
<?php startblock('giftstore') ?>			

<div id="giftstore" class="jumbotron">
  <h1>Gift Store</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">
        Comfortably charming; our gift shop is first revealed when walking through the doors of our unassuming entrance.  
        <span class="text-muted">
          Known for our &quot;Shop within a shop&quot;.
        </span>  
      </h2>
      <p class="lead">
        Each setting radiates color, style and trend. From home d&eacute;cor, to fashion, to garden accents and gourmet you will enjoy your shopping experience.  Finding that unique gift for someone or for yourself will be relaxed.
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/giftstore/500x500-giftstore.jpg" data-holder-rendered="true">
    </div>
  </div>
</div>
<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-giftstore').addClass('active');
  $('#subnav-giftstore').addClass('active');
});
</script>
<?php endblock () ?>