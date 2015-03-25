<?php include 'app/views/templates/template_landscaping.php' ?>
		
<?php startblock('landscaping')?>
<div id="design" class="jumbotron">
  <h1>Landscape Design</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading"></h2>
      <p class="lead">
        Our dedication to each project begins with the client continuing from design to completion of project in partnership with each client&#39;s individual needs and budgets.
      </p>
      <h4>For more more detail on our design process, <a href="landscaping_designprocess.php">click here</a></h4>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/landscaping/500x500-design1.jpg" data-holder-rendered="true">
        </div>
  </div>
  <div class="row unstyled featurette">
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/landscaping/500x500-design2.jpg" data-holder-rendered="true">
        </div>
    <div class="col-md-7">
      <h2 class="featurette-heading">Ownership</h2>
      <p class="lead">  
        We respect client&#39;s options to perform their own installation so we similarly design with the same degree plan for homeowner to our own installers.
      </p>   
    </div>
  </div>
  <div class="row unstyled featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Customization</h2>
      <p class="lead">
         Our design team customizes plans to fit the specific  needs and requirements of our client.  Specializing both in new yard design and landscape renovations, our services have been utilized within the City of Winnipeg, as well as the bedroom communities of LaSalle, Oakbank, Oakbluff, Headlingley, Pritchard Farms , and into cottage country areas Lake Winnipeg. 
      </p>  
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive rounded" data-src="holder.js/500x500/auto" alt="500x500" src="/static/img/landscaping/500x500-design3.jpg" data-holder-rendered="true">
        </div>
  </div>
</div>


<?php endblock('landscaping')?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-landscaping').addClass('active');
  $('#subnav-design').addClass('active');
});
</script>
<?php endblock () ?>

