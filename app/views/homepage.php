<?php include 'app/views/templates/base.php'?>
				
<?php startblock('content') ?>

<div class="contents">
  <!-- Carousel ================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">    
    <div class="carousel-inner" role="listbox">
    </div>
    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  
  </div><!-- /.carousel -->
    
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row unstyled">
      <div class="col-sm-9">
        <div class="row">
          <div class="col-sm-4 animNav animNav-left">
            <a class="grow" href="/gardencentre">
              <div class="background gardencentre"></div>
              <div class="inner">
                <h1>Garden Centre</h1>
                <h3>Through our doors, the garden centre welcomes you.</h3>
              </div>             
            </a>
          </div>
          <div class="col-sm-4 animNav">
            <a class="grow" href="/giftstore">
              <div class="background giftstore"></div>
              <div class="inner">
                <h1 class="outlined">Gift Store</h1>
                <h3 class="outlined">St. Mary&#39;s Nursery radiates displays of unique home d&eacute;cor and gift items for your selection.</h3>
              </div> 
            </a>
          </div>
          <div class="col-sm-4 animNav">
            <a class="grow" href="/landscaping">
              <div class="background landscaping"></div>
               <div class="inner">
                 <h1 class="outlined" >Landscaping</h1>
                 <h3 class="outlined" >Proudly beautifying Winnipeg for 30 Years!</h3>
              </div> 
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 unstyled">
        <div class="content twitter-content">
        </div>
      </div>
    </div>
  </div>
</div>

<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script src="/static/js/homepage.js" ></script>
<script>
$(document).ready(function() {
  $('#nav-home').addClass('active');
});
</script>
<?php endblock () ?>