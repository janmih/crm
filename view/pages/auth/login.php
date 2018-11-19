<?php
if (isset($_SESSION['log'])) {
	$_SESSION['flash']['message'] = "vous êtes deja connecter";
	header('location: ?p=home');
	exit();
}
$level = "root";
if (!empty($_POST)) {
	if ($_POST['username'] == 'test' && $_POST['password'] == 'test' && $level === "root") {
		$_SESSION['log'] = 'test';
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['flash']['success'] = "Bienvenue " . $_SESSION['username'];
		header('location: index.php?p=home');
	}
}
?>
<div class="container">
<form method="post">
  <div class="form-group">
    <label for="username">Email address</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
