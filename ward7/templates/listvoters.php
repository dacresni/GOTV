<html>

    <body>
	<h1>Listing of Precinct <?= $precinct?>, Turf <?= $turf ?></h1>
	<table style="width:80%">
	<tr>
	     <td><u>Voter</u></td>

	     <td><u>Call Result</u></td>

	     <td><u>Knock Result</u></td>
      <td><u>Sign</u></td>
      <td><u>Notes</u></td>
	</tr>
	<?php

	$json = json_decode($output, true);
	foreach ($json as $entry)
	{
	    print "<tr>";
	    print "<td><a href=\"editVoter.php?id=" . $entry["GOTVID"] . "\" target=\"_blank\">" . $entry["GOTVID"] . "</a></td>";
	    // print "<td>" . $entry["fullName"] . "</td>";
	    // print "<td>" . $entry["phone"] . "</td>";
	    //print "<td>" . $entry["callResult"] . "</td>";
	    // print "<td>" . $entry["address"] . "</td>";
	    //print "<td>" . $entry["knock1Result"] . "</td>";

	    print "</tr><tr>";
      print "<td>" . $entry["fullName"] . "</td>";
    print "<td>" . $entry["callResult"] . "</td>";
    print "<td>" . $entry["knock1Result"] . "</td>";
    print "<td>" . $entry["sign"] . "</td>";
    print "<td>" . $entry["notes"] . "</td>";
      print "</tr>";

	    print "<tr><td>" . $entry["phone"] . "</td></tr>";
      print "<tr><td>" . $entry["address"] . "</td></tr>";
      print "<tr><td>...</td><td><u>Call Result</u></td><td><u>Knock Result</u></td><td><u>Sign</u></td><td><u>Notes</u></td></tr>";
	}


	?>
	</table>

    </body>

</html>
