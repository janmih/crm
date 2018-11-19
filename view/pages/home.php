<?php if (isset($_SESSION['flash']['success'])): ?>
	<div class="alert alert-success">
	  <?php echo $_SESSION['flash']['success']; ?>
	</div>
<?php elseif (isset($_SESSION['flash']['message'])): ?>
	<div class="alert alert-info">
	  <?php echo $_SESSION['flash']['message']; ?>
	</div>
<?php endif;?>
<h1>Home page</h1>

