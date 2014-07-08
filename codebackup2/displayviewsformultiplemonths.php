<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<title>Wikipedia Views: results</title></head>

<?php
	include("corecode.inc");
	$pagelistasstring = $_POST['pagelistasstring'];
	$monthlist = $_POST['monthlist'];
        $language = $_POST['language'];
	$displayformat = $_POST['displayformat'];
        $includetotal = $_POST['includetotal'];
        $pagelistasarray = convertpagelisttoarray($pagelistasstring);
        if (sizeof($pagelistasarray) == 0)
        {
              print "You didn't list any pages.<br>Return to <a href=\"/multiplemonths.php\">the input page</a>.";
              exit;
        }

        if (sizeof($monthlist) == 0)
        {
              print "You didn't select any months.<br>Return to <a href=\"/multiplemonths.php\">the input page</a>.";
              exit;
        }
	if ($displayformat=='csv') { printpageviewsformonthlistascsv($pagelistasarray,$monthlist,$language,$includetotal);}
	elseif ($displayformat=='htmltable') { 
            include("head.inc"); 
            printpageviewsformonthlistashtmltable($pagelistasarray,$monthlist,$language,$includetotal);}
        elseif ($displayformat=='csvtransposed') {printpageviewsformonthlistascsvtransposed($pagelistasarray,$monthlist,$language,$includetotal);}
        elseif ($displayformat=='htmltabletransposed') {
            include("head.inc");
            printpageviewsformonthlistashtmltabletransposed($pagelistasarray,$monthlist,$language,$includetotal);}
?>
