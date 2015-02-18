<?php include 'base.php' ?>
		
<?php startblock('content') ?>			
<div class="row contents unstyled row-offcanvas row-offcanvas-right">
  <div class="col-xs-12 col-sm-9">
    <p class="pull-right visible-xs">
      <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
    </p>
    <?php startblock('landscaping')?> 
    <?php endblock('landscaping')?>

  </div><!--/.col-xs-12.col-sm-9-->

  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
    <div class="list-group">
      <a href="landscaping.php" class="list-group-item active">Landscaping</a>
      <a href="landscaping_design.php" class="list-group-item">Landscape Design</a>
      <a href="landscaping_installation.php" class="list-group-item">Landscape Intallation</a>
      <a href="landscaping_residential.php" class="list-group-item">Residential</a>
      <a href="landscaping_commercial.php" class="list-group-item">Commercial</a>
      <a href="landscaping_affiliates.php" class="list-group-item">Affiliates</a>
      <a href="landscaping_gallery.php" class="list-group-item">Gallery</a>  
    </div>
  </div><!--/.sidebar-offcanvas-->
</div><!--/row-->

<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-landscaping').addClass('active');
});
</script>
<?php endblock () ?>
