<?php include 'app/views/templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div id="nursery" class="jumbotron">
  <h1>Nursery</h1>
</div>
<div class="content rounded">
  <div class="row unstyled featurette">
    <div class="col-md-12">
      <h2 class="featurette-heading"></h2>
      <p class="lead">
        For homeowner or contractor, the nursery is comprised of both deciduous and evergreen trees, and shrubs of multiple varieties and sizing.  Ornamental, shade loving or trees favorable to attracting birds and nature to your yard, our nursery staff can assist you in your selection and provide you with the proper variety and the technique for planting.  Visit our <a href="http://plants.stmarysnurseryandgardencentre.ca/11050007">Plant Finder</a> page to source the best variety.
      </p>
      <p class="lead">
        Selections range in sizing from 2 galon shrubs to 2" caliper trees. Homeowners may wish to do the planting, or may opt to request a quote to have the planting done for them.
      </p>   
    </div>
  </div>
  
  <div class="row unstyled">
    <div class="col-md-12">
      <div class="well">
        <h4>Tall Plants Installation Tip</h4>
        <p>
          With the installation of taller plants or trees, making sure that the plant will stay in a 
          vertical position in important for the growth of the plant. To ensure this it is recomended to
          stake and tie when it is newly planted.
        </p>
        <p>
          For larger tree or plants that easily catch the wind or are planted in a windy locaiton, it is recommended to add a second stake.
          This should be placed on the opposite side of the plant to ensure proper support.
        </p>
      </div>
    </div>
  </div>

</div>


<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-garden').addClass('active');
  $('#subnav-nursery').addClass('active');
});
</script>
<?php endblock () ?>
