<?php include 'app/views/templates/template_aboutus.php' ?>
		
<?php startblock('aboutus') ?>			
<div class="jumbotron">
  <h1>About Us</h1>
</div>
<div class="content rounded">
  <h1>Celebrating 30 years, our business was built on landscape design, service and greenhouse production.</h1> 
  <p>Today we continue the basis of our historical roots while changing with the times. Our gift shop is a &quot;realm of shops within  shops&quot; , comprised of the latest in home d&eacute;cor and gift extending into local &amp; world gourmet&#59; while featuring unique and latest fashions from Canada and abroad.</p>
  <p>We welcome you to our shopping experience. Feel at home venturing through our boutiques before wandering through 65,000 sq ft of display gardens of perennials, annuals, trees, shrubs and tropical houses.</p>
  <p>St. Mary&#39;s brings you complete selections from home to garden.</p>
  <p>Ken and I welcome you to St. Mary&#39;s Nursery &#38; Garden Centre.</p>
</div>


<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-aboutus').addClass('active');
});
</script>
<?php endblock () ?>