<?php include 'base.php' ?>

<?php startblock('css')?>
<?php superblock()?>
<link rel="stylesheet" href="/static/css/giftstore.css">
<?php endblock()?>

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
      <a id="subnav-giftstore" href="/giftstore" class="list-group-item">Giftstore</a>
      <a id="subnav-fashion" href="/giftstore/fashion" class="list-group-item">Fashion</a>
      <a id="subnav-gourmet" href="/giftstore/gourmet" class="list-group-item">Gourmet</a>
      <a id="subnav-homedecor" href="/giftstore/homedecor" class="list-group-item">Home Decor</a>
      <a id="subnav-christmas" href="/giftstore/christmas" class="list-group-item">Christmas</a>
    </div>
  </div><!--/.sidebar-offcanvas-->
</div><!--/row-->

<?php endblock() ?>
