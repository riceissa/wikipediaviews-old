<?php

##Dropdown box to select the appropriate display format for a multiple month display

##Included in advancedoptions.inc

##Default value handcoded in HTML printing, not stored as a separate variable ##BAD PROGRAMMING

##Associated retrieval file: retrieval/advancedoptionretrieval.inc

##Relevant execution code in backend/displayfunctions.inc

print '<tr><td>Enter the format in which you want statistics to be displayed: </td><td>';
print '<select name="displayformat">';
print '<option value="htmltableautomatic"';
if ($formdata == true and $displayformat=="htmltableautomatic") 
  {
    print ' selected="selected"';
  }
print '>';
print 'HTML table with larger in number of pages and months used as rows and smaller used as columns</option>';
print '<option value="htmltable"';
if ($formdata == true and $displayformat=="htmltable") 
  {
    print ' selected="selected"';
  }
print '>';
print 'HTML table with rows corresponding to pages and columns corresponding to months</option>';
print '<option value="htmltabletransposed"';
if ($formdata == true and $displayformat=="htmltabletransposed") 
  {
    print ' selected="selected"';
  }
print '>';
print 'HTML table with rows corresponding to months and columns corresponding to pages (best if few pages, many months)</option>';
print '</select></td></tr>';
?>