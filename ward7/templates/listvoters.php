<html>

    <body>
	<h1>Listing of Precinct <?= $precinct?>, Turf <?= $turf ?></h1>
	<table class="table table-hover">
	<tr>
	     <td>VoterID</td>
	     <td>Voter</td>
	     <td>Call Result</td>
	     <td>Knock Result</td>
	     <td>Phone</td>
	     <td>Sign</td>
	     <td>Address</td>
	     <td>Notes</td>
	</tr>
	<?php

	$json = json_decode($output, true);
	foreach ($json as $entry)
	{
	    print "<tr>";
	    print "<td><a class=\"button\" href=\"editVoter.php?id=" . $entry["GOTVID"] . "\" target=\"_blank\">" . $entry["GOTVID"] . "</a></td>";
	    print "<td>" . $entry["fullName"] . "</td>";
	    print "<td>" . $entry["callResult"] . "</td>";
	    print "<td>" . $entry["knock1Result"] . "</td>";
	    print "<td>" . $entry["phone"] . "</td>";
	    print "<td>" . $entry["sign"] . "</td>";
	    print "<td>" . $entry["address"] . "</td>";
	    print "<td>" . $entry["notes"] . "</td>";
	    print "</tr>";
	}
	?>
	</table>


