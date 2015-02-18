<?php include 'base.php' ?>

<?php startblock('content') ?>			
<div class="row contents unstyled row-offcanvas row-offcanvas-right">
  <div class="col-xs-12 col-sm-9">
    <p class="pull-right visible-xs">
      <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
    </p>
    <?php startblock('garden')?>
    <?php endblock('garden')?>
  </div><!--/.col-xs-12.col-sm-9-->

  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
    <div class="list-group">
      <a id="subnav-garden" href="garden.php" class="list-group-item">Garden Center</a>
      <a id="subnav-perennials" href="garden_perennials.php" class="list-group-item">Perennials</a>
      <a id="subnav-annuals" href="garden_annuals.php" class="list-group-item">Annuals</a>
      <a id="subnav-tropicals" href="garden_tropicals.php" class="list-group-item">Tropicals</a>
      <a id="subnav-nursery" href="garden_nursery.php" class="list-group-item">Nursery</a>
      <a id="subnav-largestock" href="garden_largestock.php" class="list-group-item">Large Stock</a>
      <a id="subnav-plantfinder" href="garden_plantfinder.php" class="list-group-item">Plant Finder</a>  
    </div>
  </div><!--/.sidebar-offcanvas-->
</div><!--/row-->

<?php endblock() ?>
