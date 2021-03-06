<?php include 'app/views/templates/base.php' ?>
		
<?php startblock('content') ?>			
<div class="row contents unstyled row-offcanvas row-offcanvas-right">
  <div class="col-xs-12 col-sm-9">
    <p class="pull-right visible-xs">
      <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
    </p>
    <?php startblock('aboutus')?> 
    <?php endblock('aboutus')?>

  </div><!--/.col-xs-12.col-sm-9-->

  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
    <div class="list-group">
      <a id="subnav-aboutus" href="/aboutus" class="list-group-item">About Us</a>
      <!-- <a id="subnav-aboutus" href="/employment" class="list-group-item">Employment Opportunities</a> -->
    </div>
  </div><!--/.sidebar-offcanvas-->
</div><!--/row-->
<?php endblock() ?>