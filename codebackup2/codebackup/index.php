<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<title>Experimental pageview count fetcher</title></head>

<body><p>List the pages for which you want statistics displayed, one
for each line. Listing more than 50 pages will probably cause the
program to time out. If you have a longer list, separate into batches
of size 50.</p>

<p>If you want to see statistics for different months together, go
to <a href="multiplemonths.php">this page</a>.</p>

<p>Statistics are obtained
from <a href="http://stats.grok.se">stats.grok.se</a>. Visit the
website directly for daily statistics and graphical displays.</p>

<form method="post" name="pagecountinfo" action="displayviewsforonemonth.php">
<textarea name="pagelistasstring" rows="10" cols="100"></textarea>
<br>
Enter the month for which you want to view statistics: <select name="month">
  <option value="201405">201405 (May 2014) -- current month</option>
  <option value="201404">201404 (April 2014) -- most recent completed month</option>
  <option value="201403">201403 (March 2014)</option>
  <option value="201402">201402 (February 2014)</option>
  <option value="201401">201401 (January 2014)</option>
  <option value="201312">201312 (December 2013)</option>
  <option value="201311">201311 (November 2013)</option>
  <option value="201310">201310 (October 2013)</option>
  <option value="201309">201309 (September 2013)</option>
  <option value="201308">201308 (August 2013)</option>
  <option value="201307">201307 (July 2013)</option>
  <option value="201306">201306 (June 2013)</option>
  <option value="201305">201305 (May 2013)</option>
  <option value="201304">201304 (April 2013)</option>
  <option value="201303">201303 (March 2013)</option>
  <option value="201302">201302 (February 2013)</option>
  <option value="201301">201301 (January 2013)</option>
  <option value="201212">201212 (December 2012)</option>
  <option value="201211">201211 (November 2012)</option>
  <option value="201210">201210 (October 2012)</option>
  <option value="201209">201209 (September 2012)</option>
  <option value="201208">201208 (August 2012)</option>
  <option value="201207">201207 (July 2012)</option>
  <option value="201206">201206 (June 2012)</option>
  <option value="201205">201205 (May 2012)</option>
  <option value="201204">201204 (April 2012)</option>
  <option value="201203">201203 (March 2012)</option>
  <option value="201202">201202 (February 2012)</option>
  <option value="201201">201201 (January 2012)</option>
  <option value="201112">201112 (December 2011)</option>
  <option value="201111">201111 (November 2011)</option>
  <option value="201110">201110 (October 2011)</option>
  <option value="201109">201109 (September 2011)</option>
  <option value="201108">201108 (August 2011)</option>
  <option value="201107">201107 (July 2011)</option>
  <option value="201106">201106 (June 2011)</option>
  <option value="201105">201105 (May 2011)</option>
  <option value="201104">201104 (April 2011)</option>
  <option value="201103">201103 (March 2011)</option>
  <option value="201102">201102 (February 2011)</option>
  <option value="201101">201101 (January 2011)</option>
  <option value="201012">201012 (December 2010)</option>
  <option value="201011">201011 (November 2010)</option>
  <option value="201010">201010 (October 2010)</option>
  <option value="201009">201009 (September 2010)</option>
  <option value="201008">201008 (August 2010)</option>
  <option value="201007">201007 (July 2010)</option>
  <option value="201006">201006 (June 2010)</option>
  <option value="201005">201005 (May 2010)</option>
  <option value="201004">201004 (April 2010)</option>
  <option value="201003">201003 (March 2010)</option>
  <option value="201002">201002 (February 2010)</option>
  <option value="201001">201001 (January 2010)</option>
  <option value="200912">200912 (December 2009)</option>
  <option value="200911">200911 (November 2009)</option>
  <option value="200910">200910 (October 2009)</option>
  <option value="200909">200909 (September 2009)</option>
  <option value="200908">200908 (August 2009)</option>
  <option value="200907">200907 (July 2009)</option>
  <option value="200906">200906 (June 2009)</option>
  <option value="200905">200905 (May 2009)</option>
  <option value="200904">200904 (April 2009)</option>
  <option value="200903">200903 (March 2009)</option>
  <option value="200902">200902 (February 2009)</option>
  <option value="200901">200901 (January 2009)</option>
  <option value="200812">200812 (December 2008)</option>
  <option value="200811">200811 (November 2008)</option>
  <option value="200810">200810 (October 2008)</option>
  <option value="200809">200809 (September 2008)</option>
  <option value="200808">200808 (August 2008)</option>
  <option value="200807">200807 (July 2008)</option>
  <option value="200806">200806 (June 2008)</option>
  <option value="200805">200805 (May 2008)</option>
  <option value="200804">200804 (April 2008)</option>
  <option value="200803">200803 (March 2008)</option>
  <option value="200802">200802 (February 2008)</option>
  <option value="200801">200801 (January 2008)</option>
  <option value="200712">200712 (December 2007)</option>
</select>
<br>
Enter the language Wikipedia that you are interested in: <select name="language">
  <option value="en">English (en)</option>
  <option value="de">German (Deutsch) (de)</option>
  <option value="fr">French (Francais) (fr)</option>
  <option value="es">Espanol (Spanish) (es)</option>
  <option value="it">Italian (Italiano) (it)</option>
  <option value="nl">Dutch (Nederlands) (nl)</option>
  <option value="pl">Polish (Polski) (pl)</option>
</select><br>
Enter the format in which you want statistics to be displayed: 
<select name="displayformat">
  <option value="htmltable">HTML table (best for online viewing)</option>
  <option value="csv">CSV: Page name and number of views separated by comma; different pages in different lines (easiest to export to Excel)</option>
  <option value="countsonlycsv">Number of views only, separated by commas</option>
  <option value="countsonlyseparatelines">Number of views only, one in each line</option>
</select><br>
<input type="checkbox" name="explanatoryheader" value="noheader">Check this if you do <em>not</em> want to see an explanatory header row</input><br>
<input type="checkbox" name="includetotal" value="includetotal">Check this if you want to display the total number of views across all pages</input><br>
<input type="submit" value="Submit">
</form>

</body>
</html>
