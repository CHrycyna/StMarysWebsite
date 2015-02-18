<?php include 'base.php' ?>
		
<?php startblock('content') ?>			
<div class="row contents unstyled row-offcanvas row-offcanvas-right">
  <div class="col-xs-12 col-sm-9">
    <p class="pull-right visible-xs">
      <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
    </p>
    <?php startblock('giftstore')?> 
    <?php endblock('giftstore')?>
  </div><!--/.col-xs-12.col-sm-9-->

  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
    <div class="list-group">
      <a id="subnav-giftstore" href="giftstore.php" class="list-group-item">Giftstore</a>
      <a id="subnav-fashion" href="giftstore_fashion.php" class="list-group-item">Fashion</a>
      <a id="subnav-gourmet" href="giftstore_gourmet.php" class="list-group-item">Gourmet</a>
      <a id="subnav-homedecor" href="giftstore_homedecor.php" class="list-group-item">Home Decor</a>
      <a id="subnav-christmas" href="giftstore_christmas.php" class="list-group-item">Christmas</a>
    </div>
  </div><!--/.sidebar-offcanvas-->
</div><!--/row-->

<?php endblock() ?>
