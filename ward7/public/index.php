
<?php

  require("../includes/config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (!empty($_POST["precinct"]))
  {
      if (!empty($_POST["turf"]))
      {
        $precinct = htmlspecialchars($_POST["precinct"]);
        $turf = htmlspecialchars($_POST["turf"]);
        $request = "localhost/back-end/public/voterInfo.php?precinct=" . $precinct . "&turf=" . $turf;
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
        curl_setopt($ch, CURLOPT_URL, $request);


        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);

        // Parse json
        //$json = json_decode($output, true);

        // Show List

        render("listvoters.php", ["turf" => $turf, "precinct" => $precinct, "output" => $output, "title" => "List"]);






      }
    else
    {
      print "Bad Request -index.php Error 51";
    }

	// print $output;
  }
  else
  {
   print "Bad Request -index.php Error 58";
  }

}

else
{

render("listvoters_form.php", ["title" => "What Turf?"]);
}
?>




