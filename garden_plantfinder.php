<?php include 'base.php' ?>
		
<?php startblock('content') ?>			
<div class="row contents unstyled row-offcanvas row-offcanvas-right">
  <div class="col-xs-12 col-sm-9">
    <p class="pull-right visible-xs">
      <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
    </p>
    <div class="jumbotron">
      <h1>Plant Finder</h1>
      <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
    </div>
  </div><!--/.col-xs-12.col-sm-9-->

  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
    <div class="list-group">
      <?php getSubHeader("garden", "garden_plantfinder.php"); ?>    </div>
  </div><!--/.sidebar-offcanvas-->
</div><!--/row-->

<?php endblock() ?>