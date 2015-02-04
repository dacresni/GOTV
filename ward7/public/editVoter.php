<?php

require("../includes/config.php");

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
  if (!empty($_GET["id"]))
  {
    // collect data from endpoint
    // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "example.com");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);

	// create curl resource
        $ch = curl_init();

        // set url
        $voterID = $_GET["id"];
        $url = "localhost/back-end/public/voterInfo.php?GOTVID=" . $voterID;
        curl_setopt($ch, CURLOPT_URL, $url);


        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);
        //print $output;
        $json = json_decode($output, true);

        render("editVoter_form.php", ["json" => $json, "title" => "Edit Voter"]);
        // Form to update information.
  }
  else
  {
    print "Missing Request";
  }

}

else if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   // Update info into database

  if (!empty($_POST["GOTVID"]))
      {
        $GOTVID = htmlspecialchars($_POST["GOTVID"]);
        $updated = "";

        if (!empty($_POST["callResult"]))
        {
          $callResult = htmlspecialchars($_POST["callResult"]);
          $update = query("UPDATE Voters SET callResult = ? WHERE GOTVID = ?", $callResult, $GOTVID);
          if ($update === false)
          {
            print "callResult update query failed";
          }
          else
          {
             $updated = $updated . "callResult, ";
          }
        }

        if (!empty($_POST["knock1Result"]))
        {
          $knock1Result = htmlspecialchars($_POST["knock1Result"]);
          $update = query("UPDATE Voters SET knock1Result = ? WHERE GOTVID = ?", $knock1Result, $GOTVID);
          if ($update === false)
          {
            print "knock1Result update query failed";
          }
          else
          {
             $updated = $updated . "knock1Result, ";
          }
        }

        if (!empty($_POST["supportUs"]))
        {
          $supportUs = htmlspecialchars($_POST["supportUs"]);
          $update = query("UPDATE Voters SET supportUs = ? WHERE GOTVID = ?", $supportUs, $GOTVID);
          if ($update === false)
          {
            print "supportUs update query failed";
          }
          else
          {
             $updated = $updated . "supportUs, ";
          }
        }

        if (!empty($_POST["kickoff"]))
        {
          $kickoff = htmlspecialchars($_POST["kickoff"]);
          $update = query("UPDATE Voters SET kickoff = ? WHERE GOTVID = ?", $kickoff, $GOTVID);
          if ($update === false)
          {
            print "kickoff update query failed";
          }
          else
          {
             $updated = $updated . "kickoff, ";
          }
        }

        if (!empty($_POST["sign"]))
        {
          $sign = htmlspecialchars($_POST["sign"]);
          $update = query("UPDATE Voters SET sign = ? WHERE GOTVID = ?", $sign, $GOTVID);
          if ($update === false)
          {
            print "sign update query failed";
          }
          else
          {
             $updated = $updated . "sign, ";
          }
        }

        if (!empty($_POST["econDev"]))
        {
          $econDev = htmlspecialchars($_POST["econDev"]);
          $update = query("UPDATE Voters SET econDev = ? WHERE GOTVID = ?", $econDev, $GOTVID);
          if ($update === false)
          {
            print "econDev update query failed";
          }
          else
          {
             $updated = $updated . "econDev, ";
          }
        }

        if (!empty($_POST["notes"]))
        {
          $notes = htmlspecialchars($_POST["notes"]);

          $update = query("UPDATE Voters SET notes = ? WHERE GOTVID = ?", $notes, $GOTVID);
          if ($update === false)
          {
            print "notes update query failed";
          }
          else
          {
             $updated = $updated . "notes, ";
          }

        }
    print "Updated: " . $updated;
  }
  else
  {
    print "failed";
  }

}

else
{
   // return error
   print "Unknown REQUEST_METHOD";
}



?>
