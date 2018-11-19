<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}


define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT', dirname(str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME'])));
define('VIEW', dirname(__DIR__));
define('PRODUIT', 'index.php?p=produit');
define('ADHERANT', 'index.php?p=adherant');

require ROOT . "/core/function.php";
require ROOT . "/class/Database.php";

$db = new Database('root', '', 'cnss' );









if (isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'home';
}

$page_name = $_GET['p'];

$title = $page_name;
ob_start();

if ($p === 'home') {
	if (empty($_SESSION['log'])) {
		session_start();
		header('location: index.php?p=login');
	}
	require VIEW . '/view/pages/home.php';
} elseif ($p === 'produit') {
	if (empty($_SESSION['log'])) {
		header('location: index.php?p=login');
	}
	require VIEW . '/view/pages/produit.php';
} elseif ($p === 'adherant') {
	if (empty($_SESSION['log'])) {
		header('location: index.php?p=login');
	}
	require VIEW . '/view/pages/adherant.php';
} elseif ($p === 'produit.csb') {
	if (empty($_SESSION['log'])) {
		header('location: index.php?p=login');
	}
	require VIEW . '/view/pages/csb/csb.php';
} elseif ($p === 'pathologies.csb') {
	if (empty($_SESSION['log'])) {
		header('location: index.php?p=login');
	}
	require VIEW . '/view/pages/csb/csb.pathologies.php';
} elseif ($p === 'login') {

	require VIEW . '/view/pages/auth/login.php';
} elseif ($p === 'logout') {

	require VIEW . '/view/pages/auth/logout.php';
}
$content_for_layout = ob_get_clean();
require VIEW . '/view/template/default.php';
