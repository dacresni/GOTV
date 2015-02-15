
<?php
  $entryData;
  foreach ($json as $entry)
{
  $entryData = $entry;
}

  ?>

  <h2><?= $entryData["GOTVID"] ?></h2>
  <div class="data">
  <?= $entryData["fullName"] ?><br>
  <?= $entryData["address"] ?><br>
  <?= $entryData["city"] ?> <?= $entryData["state"] ?>, <?= $entryData["zipCode"] ?> <br>
  <?= $entryData["phone"] ?><br>
  <?= $entryData["email"] ?><br>
  </div>
  <p>
      <dl class="dl-horizontal list-group" >
    <dt class="list-group-item" >Details:</dt>     <dd class="list-group-item"></dd> <br/>
    <dt class="list-group-item"> Age: </dt>       <dd class="list-group-item"><?= $entryData["age"] ?>,</dd> 
    <dt class="list-group-item"> Voter ID</dt>    <dd class="list-group-item"><?= $entryData["voterID"] ?>,</dd>
    <dt class="list-group-item"> First Name:</dt>  <dd class="list-group-item"><?= $entryData["firstName"] ?>,</dd>
    <dt class="list-group-item"> Middle Name:</dt><dd class="list-group-item"><?= $entryData["middleName"] ?>,</dd>
    <dt class="list-group-item"> Last Name:</dt>  <dd class="list-group-item"><?= $entryData["lastName"] ?>,</dd>
    <dt class="list-group-item"> Suffix:</dt>     <dd class="list-group-item"><?= $entryData["suffix"] ?>, </dd>
    <dt class="list-group-item"> Birthdate:</dt>  <dd class="list-group-item"><?= $entryData["birthdate"] ?> </dd>
      </dl> 	    
         <br/>
        <dl class="dl-horizontal list-groupl"> 	    
    <dt class="list-group-item">Adress Details:</dt> <dd class="list-group-item"></dd> <br/>
    <dt class="list-group-item"> suffix:<dd class="list-group-item"></dt><?= $entryData["suffix"] ?>,</dd>
    <dt class="list-group-item"> houseNumber:</dt><dd class="list-group-item"><?= $entryData["houseNumber"] ?>,</dd>
    <dt class="list-group-item"> houseSuffix:</dt><dd class="list-group-item"><?= $entryData["houseSuffix"] ?>,</dd>
    <dt class="list-group-item"> streetName:</dt><dd class="list-group-item"><?= $entryData["streetName"] ?>,</dd>
    <dt class="list-group-item"> streetType:</dt><dd class="list-group-item"><?= $entryData["streetType"] ?>,</dd>
    <dt class="list-group-item">unitType:</dt><dd class="list-group-item"><?= $entryData["unitType"] ?>,</dd>
    <dt class="list-group-item">unitNumber:</dt><dd class="list-group-item"><?= $entryData["unitNumber"] ?></dd>
        </dl> 	    

  </p>
  </div>


<form action="editVoter.php" method="post">
    <fieldset>
    <table>
        <div class="form-group">
            <tr>
              <td>Support us (Currently "<?= $entryData["callResult"] ?>"): </td>
              <td><input autofocus class="form-control" name="callResult" value="" type="radio" checked/>No Change </td>
              <td><input class="form-control" name="callResult" value="1" type="radio" />1- NH (Not Home) </td>
              <td><input class="form-control" name="callResult" value="2" type="radio" />2- BN (Bad Number)</td>
              <td><input class="form-control" name="callResult" value="3" type="radio" />3- H (Home)</td>
              <td><input class="form-control" name="callResult" value="4" type="radio" />4- WN (Wrong Number)</td>
              <td></td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
              <td>Result from "knock" visit (Currently "<?= $entryData["knock1Result"] ?>"): </td>
              <td><input class="form-control" name="knock1Result" value="" type="radio" checked/>No Change </td>
              <td><input class="form-control" name="knock1Result" value="1" type="radio" />1- NH (Not Home)</td>
              <td><input class="form-control" name="knock1Result" value="2" type="radio" />2- NA (Not Accessible)</td>
              <td><input class="form-control" name="knock1Result" value="3" type="radio" />3- H (Home)</td>
              <td><input class="form-control" name="knock1Result" value="4" type="radio" />4- M (Moved)</td>
              <td><input class="form-control" name="knock1Result" value="5" type="radio" />5- CF (Couldn't Find)</td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
              <td>Result from "knock" visit (Currently "<?= $entryData["supportUs"] ?>"): </td>
              <td><input class="form-control" name="supportUs" value="" type="radio" checked/>No Change </td>
              <td><input class="form-control" name="supportUs" value="1" type="radio" />1- NH (Not Home)</td>
              <td><input class="form-control" name="supportUs" value="2" type="radio" />2- NA (Not Accessible)</td>
              <td><input class="form-control" name="supportUs" value="3" type="radio" />3- H (Home)</td>
              <td><input class="form-control" name="supportUs" value="4" type="radio" />4- M (Moved)</td>
              <td><input class="form-control" name="supportUs" value="5" type="radio" />5- CF (Couldn't Find)</td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
              <td>Interested in Kickoff? (Currently "<?= $entryData["kickoff"] ?>"): </td>
              <td><input class="form-control" name="kickoff" value="" type="radio" checked/>No Change </td>
              <td><input class="form-control" name="kickoff" value="yes" type="radio" />Yes </td>
              <td><input class="form-control" name="kickoff" value="no" type="radio" />No</td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
            <td>Interested in a sign? (Currently "<?= $entryData["sign"] ?>"): </td>
            <td><input class="form-control" name="sign" value="" type="radio" checked/>No Change </td>
            <td><input class="form-control" name="sign" value="yes" type="radio" />Yes </td>
            <td><input class="form-control" name="sign" value="no" type="radio" />No</td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
            <td>Interested in an Economic Development kit? (Currently "<?= $entryData["econDev"] ?>"): </td>
            <td><input class="form-control" name="econDev" value="" type="radio" checked/>No Change </td>
            <td><input class="form-control" name="econDev" value="yes" type="radio" />Yes </td>
            <td><input class="form-control" name="econDev" value="no" type="radio" />No</td>
            </tr>
        </div>
    </table>
        <div class="form-group">
            <!-- <input class="form-control" name="notes" placeholder="<?= $entryData["notes"] ?>" type="text" size="512"/> -->
              <textarea name="notes" rows="4" cols="128" maxlength="512"><?= $entryData["notes"] ?></textarea>
        </div>
        <div class="form-group">
              <input type="number" name="GOTVID" value="<?=$entryData["GOTVID"]?>" readonly>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Update Data</button>
        </div>
    </fieldset>
</form>

  <h3>Other Details</h3>
  <div class="data">
    precinctName:<?= $entryData["precinctName"] ?> <br />
    VoterHistoryLastN-1:<?= $entryData["VoterHistoryLastN-1"] ?> <br />
    VoterHistoryLastN-2:<?= $entryData["VoterHistoryLastN-2"] ?> <br />
    VoterHistoryLastN-3:<?= $entryData["VoterHistoryLastN-3"] ?> <br />
    VoterHistoryLastN-4:<?= $entryData["VoterHistoryLastN-4"] ?> <br />
    VoterHistoryLastN-5:<?= $entryData["VoterHistoryLastN-5"] ?> <br />
    VoterHistoryLastN-6:<?= $entryData["VoterHistoryLastN-6"] ?> <br />
    VoterHistoryLastN-7:<?= $entryData["VoterHistoryLastN-7"] ?> <br />
    VoterHistoryLastN-8:<?= $entryData["VoterHistoryLastN-8"] ?> <br />
    VoterHistoryLastN-9:<?= $entryData["VoterHistoryLastN-9"] ?> <br />
    VoterHistoryLastN-10:<?= $entryData["VoterHistoryLastN-10"] ?> <br />
    VoterHistoryLastN-11:<?= $entryData["VoterHistoryLastN-11"] ?> <br />
    VoterHistoryLastN-12:<?= $entryData["VoterHistoryLastN-12"] ?> <br />
    VoterHistoryLastN-13:<?= $entryData["VoterHistoryLastN-13"] ?> <br />
    VoterHistoryLastN-14:<?= $entryData["VoterHistoryLastN-14"] ?> <br />
    VoterHistoryLastN-15:<?= $entryData["VoterHistoryLastN-15"] ?> <br />
    VoterHistoryLastN-16:<?= $entryData["VoterHistoryLastN-16"] ?> <br />
    VoterHistoryLastN-17:<?= $entryData["VoterHistoryLastN-17"] ?> <br />
    VoterHistoryLastN-18:<?= $entryData["VoterHistoryLastN-18"] ?> <br />
    VoterHistoryLastN-19:<?= $entryData["VoterHistoryLastN-19"] ?> <br />

  </div>
</div>
