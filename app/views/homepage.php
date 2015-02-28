<?php include 'app/views/templates/base.php'?>
				
<?php startblock('content') ?>

<div class="contents">
  <!-- Carousel ================================================== -->
  <div id="myCarousel" class="carousel slide rounded" data-ride="carousel">
  
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner rounded" role="listbox">
      <div class="item active">
        <img class="rounded" src="static/img/carousel1.jpg" alt="First slide">
      </div>
      <div class="item">
        <img class="rounded" src="static/img/carousel2.jpg" alt="Second slide">
      </div>
      <div class="item">
        <img class="rounded" src="static/img/carousel3.jpg" alt="Third slide">
      </div>
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
      <div class="left col-sm-4">
        <div class="content rounded">
          <img class="img-circle" src="static/img/circle1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Landscape Design</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
      
      <div class="middle col-sm-4">
        <div class="content rounded">
          <img class="img-circle" src="static/img/circle2.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Something Else</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
       
      <div class="right col-sm-4">
        <div class="content rounded">
          <img class="img-circle" src="static/img/circle3.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Next Upcoming Event</h2>
          <p>Year round we offer a wide ranges of classes and events.</p>
          <p> Our next upcoming event is</p>
          <p><a class="btn btn-default" href="events.php" role="button">View Events &raquo;</a></p>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>
</div>

<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-home').addClass('active');
});
</script>
<?php endblock () ?>