<?php
require_once("header.php");

$array_page = array('polar_clock', );
foreach ($array_page as $key => $value) {
	echo '<div class="col-md-2">';
	echo '<a href="index.php?page='.$value.'">'.$value.'</a>';
	echo '</div>';
}

$page=isset($_GET['page'])?$_GET['page']:'';
echo '<div class="col-md-10">';
echo '<iframe src="'.$page.'.php" class="col-md-12"></iframe>';
echo '</div>';
