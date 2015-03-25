<?php include 'app/views/templates/base.php'?>
				
<?php startblock('content') ?>
<div class="contents">
  <div class="signup content rounded">
      <h1>Congradulations!</h1>
      <p class="lead">
        You have been successfully subscribed to the St.Mary&#39;s Nursery and Garden Centre Newsletter.
      </p>
  </div>
</div>

<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script src="/static/js/newsletter.js" ></script>
<?php endblock () ?>