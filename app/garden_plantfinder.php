<?php include 'templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div id="plantfinder" class="jumbotron">
  <h1>Plant Finder</h1>
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
