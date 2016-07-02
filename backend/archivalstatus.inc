<?php

function getpagelistbyarchivalstatus($archivalstatus,$language)
{
  global $mysqli;
  global $pagedisplaylimit;
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  $select_query = "select distinct pagename from queriedpages where archivalstatus='".$archivalstatus."' and language='".$language."' limit ".$pagedisplaylimit.";";
  #print $select_query;
  $result = $mysqli->query($select_query);
  $pagelist = array();
  for ($i = 0; $i < $result->num_rows;$i++)
    {
      $row = $result->fetch_assoc();
      $pagename = $row['pagename'];
      array_push($pagelist,$pagename);
    }
  return $pagelist;
}

?>