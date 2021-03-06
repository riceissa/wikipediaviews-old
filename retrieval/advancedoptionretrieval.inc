<?php

## Retrieval file for advanced options

## Corresponding data entry file (in inputdisplay directory):
## advancedoptions.inc

## Included in all the display views files:
## displayviewsforonemonth.php, displayviewsformultiplemonths.php,
## displayviewsformultipleyears.php

##Display format
if ($pagetypeadvice == 'multiplemonths' or $pagetypeadvice == 'multipleyears')
  {
    $displayformat = 'htmltableautomatic';
  }

if ($pagetypeadvice == 'onemonth')
  {
    $displayformat = 'htmltable';
  }

if (!empty($_REQUEST['displayformat']))
  {
    $displayformat = $_REQUEST['displayformat'];
  }

##Query limit
$userspecifiedquerylimit = $weightedexternalquerylimit;
if (!empty($_REQUEST['userspecifiedquerylimit']))
  {
    $userspecifiedquerylimit = $_REQUEST['userspecifiedquerylimit'];
    $weightedexternalquerylimit = intval($userspecifiedquerylimit);
  }

$explanatoryheader="explanatoryheader"; ##Not currently user-updatable
$includetotal = "includetotal"; ##Not currently user-updatable

##Purge period
$userspecifiedpurgeperiod = $purgeperiod;
if (!empty($_REQUEST['userspecifiedpurgeperiod']))
  {
    $userspecifiedpurgeperiod = $_REQUEST['userspecifiedpurgeperiod'];
    $purgeperiod = intval($userspecifiedpurgeperiod);
  }

##Normalization
$normalization = 'none';
if (!empty($_REQUEST['normalization']))
  {
    $normalization = $_REQUEST['normalization'];
  }

##Numeric display format
$numericdisplayformat = 'kmb';
if (!empty($_REQUEST['numericdisplayformat']))
  {
    $numericdisplayformat = $_REQUEST['numericdisplayformat'];
  }

?>
