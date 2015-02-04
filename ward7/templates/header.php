<!DOCTYPE html>

<html>

  <head>

    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="css/styles.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>

    <?php if (isset($title)): ?>
     <title>GOTV: <?= htmlspecialchars($title) ?></title>
    <?php else: ?>
    <title>GOTV</title>
    <?php endif ?>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>


  </head>

  <body>


    <div id="middle">
