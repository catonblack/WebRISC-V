<?php
session_start();
if(!isset($_SESSION['version'])) { header('Location: ../index.php'); exit; }
require_once 'functions.php';
do {
  require 'engine.php';
} while( !$_SESSION['data'][$_SESSION['index']]['finito'] && !$_SESSION['data'][0]['sysHold'] && !empty($_SESSION['memIstrUse']));
require_once 'schema.php';
?>
