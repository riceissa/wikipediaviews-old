<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<title>Experimental pageview count fetcher: results</title></head>

<?php
	include("corecode.inc");
	$pagelistasstring = $_POST['pagelistasstring'];
	$month = $_POST['month'];
	$displayformat = $_POST['displayformat'];
	if (strlen($pagelistasstring)==0) {
	  echo 'no input';
  	  exit;
	  }

	$pagelistasinput = isset($pagelistasstring)?$pagelistasstring:"";
        $pagelistasarray = explode("\n", str_replace("\r", "", $pagelistasinput));
	if ($displayformat=='csv') { printpageviewsascsv($pagelistasarray,$month);}
	elseif ($displayformat=='htmltable') { printpageviewsashtmltable($pagelistasarray,$month);}
?>
