<?php include 'app/views/templates/base.php'?>
				
<?php startblock('content') ?>

<div class="contents">
  <form id="signup" class="signup form-horizontal content rounded" data-toggle="validator" method="POST" enctype="multipart/form-data">
    <h1>Newsletter</h1>
    <div class="form-group">
      <label for="iFName" class="col-sm-3 control-label">First Name</label>
      <div class="col-sm-9">
        <input id="iFName" name="iFName" type="text" class="form-control" placeholder="First Name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="iLName" class="col-sm-3 control-label">Last Name</label>
      <div class="col-sm-9">
        <input id="iLName" name="iLName" type="text" class="form-control" placeholder="Last Name">
      </div>
    </div>
    <div id="email-group" class="form-group">
      <label for="iEmail" class="col-sm-3 control-label">Email</label>
      <div class="col-sm-9">
        <input id="iEmail" name="iEmail" type="email" class="form-control" placeholder="Email" required>
      </div>
      <div id="email-warning" class="col-sm-offset-3 col-sm-9 help-block"></div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-default">Sign in</button>
      </div>
    </div>
    <p class="form-disclaimer">
      By submitting this form, you are granting St.Marys Nursery &amp; Garden Centre LTD., 2901 StMarys Road, Winnipeg, Manitoba, R2N 4A6, Canada permission to contact you by email. 
      You can revoke your permission to mail to your email address at any time using the unsubscribe link found at the bottom of each email.
      For more information, please view our <a href="/privacystatement">Privacy Policy</a>
    </p>
  </form>
</div>

<?php endblock() ?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script src="/static/js/newsletter.js" ></script>
<?php endblock () ?>