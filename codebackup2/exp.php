<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<title>Tag pageviews</title></head>

<?php
	include("corecode.inc");
        $pagelist = getpagelistbytag("Effective altruism","en");
        $monthlist = Array("201404","201403","201402","201401","201312","201311","201310","201309","201308","201307");
        printpageviewsformonthlistashtmltable($pagelist,$monthlist,"en","includetotal");
?>
