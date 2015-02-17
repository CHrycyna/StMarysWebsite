<?php include 'base.php' ?>
		
<?php startblock('content') ?>			
<div class="row contents unstyled row-offcanvas row-offcanvas-right">
  <div class="col-xs-12 col-sm-9">
    <p class="pull-right visible-xs">
      <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
    </p>
    <div class="jumbotron landscape">
      <h1>Landscaping Affiliates</h1>
    </div>
    <div class="row content rounded unstyled">
      <div class="col-xs-6 col-lg-4">
        <a href="http://www.barkmanconcrete.com/">
          <img style="background-color: #2f404e;" src="/static/imgs/landscape/logo-barkman.png">
        </a>
      </div><!--/.col-xs-6.col-lg-4-->
      <div class="col-xs-6 col-lg-4">
        <a href="http://www.hardscapes.ca/">
          <img src="/static/imgs/landscape/logo-hardscapes.png">
        </a>
      </div><!--/.col-xs-6.col-lg-4-->
      <div class="col-xs-6 col-lg-4">
        <a href="http://www.superbsprinkler.com">
          <img src="/static/imgs/landscape/logo-superb.png">
        </a>
      </div><!--/.col-xs-6.col-lg-4-->
      <div class="col-xs-6 col-lg-4">
        <a href="http://silverfoxenterprises.ca/">
          <img src="/static/imgs/landscape/logo-silverfox.png">
        </a>
      </div><!--/.col-xs-6.col-lg-4-->
    </div><!--/row-->
  </div><!--/.col-xs-12.col-sm-9-->

  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
    <div class="list-group">
      <?php getSubHeader("landscaping", "landscaping_affiliates.php")?>
    </div>
  </div><!--/.sidebar-offcanvas-->
</div><!--/row-->

<?php endblock() ?>