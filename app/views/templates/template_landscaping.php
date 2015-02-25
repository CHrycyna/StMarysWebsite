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
      <a id="subnav-landscaping" href="landscaping.php" class="list-group-item">Landscaping</a>
      <a id="subnav-design" href="landscaping_design.php" class="list-group-item">Landscape Design</a>
      <a id="subnav-installation" href="landscaping_installation.php" class="list-group-item">Landscape Installation</a>
      <a id="subnav-residential" href="landscaping_residential.php" class="list-group-item">Residential</a>
      <a id="subnav-commercial" href="landscaping_commercial.php" class="list-group-item">Commercial</a>
      <a id="subnav-affiliates" href="landscaping_affiliates.php" class="list-group-item">Affiliates</a>
      <a id="subnav-gallery" href="landscaping_gallery.php" class="list-group-item">Gallery</a>  
    </div>
  </div><!--/.sidebar-offcanvas-->
</div><!--/row-->
<?php endblock() ?>