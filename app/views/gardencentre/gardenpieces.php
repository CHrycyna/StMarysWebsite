<?php include 'app/views/templates/template_garden.php' ?>

<?php startblock('garden') ?>			
<div class="jumbotron">
  <h1 class="Outlined">Garden Pieces</h1>
</div>
<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script>
$(document).ready(function() {
  $('#nav-garden').addClass('active');
  $('#subnav-gardenpieces').addClass('active');
});
</script>
<?php endblock () ?>
