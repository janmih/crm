<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
	if (empty($_SESSION['log'])) {
		header('location: public/index.php?p=login');
		/* test 1 */
	}
}
