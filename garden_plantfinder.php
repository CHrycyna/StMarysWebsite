<?php include 'templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div class="jumbotron">
  <h1>Plant Finder</h1>
  <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
</div>
<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-garden').addClass('active');
  $('#subnav-plantfinder').addClass('active');
});
</script>
<?php endblock () ?>
