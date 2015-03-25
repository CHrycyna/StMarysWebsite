<?php include 'app/views/templates/template_landscaping.php' ?>
		
<?php startblock('landscaping')?>
<div id="landscaping" class="jumbotron">
  <h1>Landscaping</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Proudly beautifying Winnipeg for 30 years</h2>
      <p class="lead">
        St. Mary&#39;s dedication to landscaping industry continues by developing, enhancing, improving, and enriching.
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/landscaping/500x500-landscaping1.jpg" data-holder-rendered="true">
    </div>
  </div>
  <div class="row unstyled featurette">
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/landscaping/500x500-landscaping2.jpg" data-holder-rendered="true">
        </div>
    <div class="col-md-7">
      <p class="lead">
        A beautiful home combined with beautifully designed and maintained landscaping will increase the enjoyment and value of your living space for years to come.
      </p> 
    </div>
  </div>
</div>
<?php endblock('landscaping')?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-landscaping').addClass('active');
  $('#subnav-landscaping').addClass('active');
});
</script>
<?php endblock () ?>
