<?php

require("../includes/config.php");
$voterSql;
$voterJson;
// ward       7000000
$ward = 7000000;

// Turf         10000
$turf = 10000;

// precinct    100000
$precinct = 100000;

/* ?GOTVID=____&turf=
 *
 *
 *
*/
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
   //Get data from DB
 //$datasets = query("SELECT entry, deviceId, timestamp, raw, comment FROM data WHERE id = 6 AND deviceId = 0 ORDER BY entry DESC LIMIT ?", $maxRecords);
  if (!empty($_GET["GOTVID"]))
  {
     // Return all information for just that entry
    $stringGOTVID = $_GET["GOTVID"];
    $voterSql = query("SELECT * FROM Voters WHERE GOTVID = ?", $stringGOTVID);
    if ($voterSql === false)
    {
      //report error
      echo "Database Error, could not find";
      echo $_GET["GOTVID"];
    }
    else
    {
     // Return entry data as Json data
      print json_encode($voterSql);
    }
  }
  else if (!empty($_GET["precinct"]))
  {
    $pInt = (int)$_GET["precinct"];
    $pInt = $pInt * 100000;
     // Get list
    if (!empty($_GET["turf"]))
    {
      // Return Turf Spefcific entries
      // ID Example:7110001
      //            7230000
      // ward       7000000
      // Turf         10000
      // precinct    100000
      $turfInt = (int)$_GET["turf"];
      $turfInt = $turfInt * $turf;
      $idRangeLow = $pInt + $turfInt + $ward;
      $idRangeHigh = $idRangeLow + $turf;

      $voterSql = query("SELECT GOTVID, fullName, phone, knock1Result, address, callResult, sign, notes FROM Voters WHERE GOTVID BETWEEN ? AND ?", $idRangeLow, $idRangeHigh);
      if ($voterSql === false)
      {
        //report error
        echo "Database Error, could not find records";

      }
      else
      {
       // Return entry data as Json data
        print json_encode($voterSql);
      }


    }
    else
    {
      // No turf Specified
      $idRangeLow = $pInt + $ward;
      $idRangeHigh = $idRangeLow + $precinct;

      $voterSql = query("SELECT GOTVID, fullName, phone, knock1Result, callAttempt, callResult FROM Voters WHERE GOTVID BETWEEN ? AND ?", $idRangeLow, $idRangeHigh);
      if ($voterSql === false)
      {
        //report error
        echo "Database Error, could not find records";

      }
      else
      {
       // Return entry data as Json data
        print json_encode($voterSql);
      }

    }
  }

  else
  {
    print "Missing Request";
  }
}
else
{
   // return error
   print "Must be method \"GET\"";
}


?>
