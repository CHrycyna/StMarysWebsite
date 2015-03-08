<?php include 'app/views/templates/template_landscaping.php' ?>
		
<?php startblock('landscaping')?>
<div class="jumbotron">
  <h1>Landscaping Affiliates</h1>
</div>
<div class="content affiliates rounded">
  <div class="media">
    <div class="media-left media-middle">
      <img id="barkman-logo" class="media-object landscape-affiliate" src="/static/img/landscaping/affiliates/logo-barkman.png">    
    </div>
    <div class="media-body">
      <h4 class="media-heading">
        <a href="http://www.barkmanconcrete.com/">Barkman Concrete</a>
      </h4>
      <p>
        Barkman is committed to product quality and customer satisfaction. All barkman products are guaranteed to meet or exceed the Canadian Standards Association (CSA) standards. They use only superior grade materials and employ stringent quality control measures throughout the manufacturing process to ensure a quality product every time. All barkman products are guaranteed against manufacturing defects.
      </p>
    </div>
  </div>
  <div class="media">
    <div class="media-left media-middle">
      <img class="media-object landscape-affiliate" src="/static/img/landscaping/affiliates/logo-silverfox.png">    
    </div>
    <div class="media-body">
      <h4 class="media-heading">
        <a href="http://silverfoxenterprises.ca/">Silver Fox Enterprises</a>
      </h4>
      <p>
        Silverfox Enterprises is a deck and fence building company that caters to mainly Winnipeg and Steinbach, Manitoba. The team consists of a Certified Red Seal carpenter, a couple of good hands and a great office staff.
      </p>
    </div>
  </div>
  <div class="media">
    <div class="media-left media-middle">
      <img class="media-object landscape-affiliate" src="/static/img/landscaping/affiliates/logo-hardscapes.png">    
    </div>
    <div class="media-body">
      <h4 class="media-heading">
        <a href="http://www.hardscapes.ca/">Hardscapes</a>
      </h4>
      <p>
        Hardscapes is at the forefront of the paving stone and retaining wall industry. They enjoy what they do and are constantly striving for excellence in every project. Hardscapes understands common budget and planning concerns. Both will be of the utmost importance when they work together with you to complete your project.
      </p>
    </div>
  </div>
  <div class="media">
    <div class="media-left media-middle">
      <img class="media-object landscape-affiliate" src="/static/img/landscaping/affiliates/logo-crown_spa_and_pool.jpg">    
    </div>
    <div class="media-body">
      <h4 class="media-heading">
        <a href="http://www.crownspas.com/">Crown Pool &amp; Spas</a>
      </h4>
      <p>
        Crown Spas &amp; Pools is a family-owned and-operated business run with family values. Originally founded in 1989, Crown Spas is one of Manitoba's most experienced pool and spa companies. They have grown and expanded over time due to our unparalleled quality products and service. With an extensive product line, their expert staff works with you to find the exact product to meet your needs and desires.
      </p>
    </div>
  </div>
  <div class="media">
    <div class="media-left media-middle">
      <img class="media-object landscape-affiliate" src="/static/img/landscaping/affiliates/logo-superb.png">    
    </div>
    <div class="media-body">
      <h4 class="media-heading">
        <a href="http://www.superbsprinkler.com/">Superb Sprinklers</a>
      </h4>
      <p>
        At Superb Sprinkler Service, irrigation is their specialty.  As one of the largest irrigation companies in Manitoba, Superb takes pride in our increasing clientele as proof that our customers come first.  They are dedicated to providing you with a quality irrigation system with excellent customer service.
      </p>
    </div>
  </div>
</div>
<?php endblock('landscaping')?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-landscaping').addClass('active');
  $('#subnav-affiliates').addClass('active');
});
</script>
<?php endblock () ?>

