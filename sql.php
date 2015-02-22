<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="index.css"/>
</head>
<body>
  <?php

    $date = $_POST["date"];
    $meal = $_POST["meal"];
    $description = $_POST["description"];
    $ratio = $_POST["ratio"];
    $full = $_POST["full"];
    $sweet_cravings = $_POST["sweet-cravings"];
    $hungry = $_POST["hungry"];
    $snacking = $_POST["snacking"];
    $recharged = $_POST["recharged"];
    $even_energy = $_POST["even-energy"];
    $crash = $_POST["crash"];
    $uplifted = $_POST["uplifted"];
    $clear_mind = $_POST["clear-mind"];
    $feel_good = $_POST["feel-good"];

    $connection = mysql_connect('localhost', 'jasperan_root', '03t~g&,D%$5qhU3su') or die(mysql_error());
    mysql_select_db("jasperan_health");

    $query = "INSERT INTO foodLog
    VALUES ('$date', '$meal', '$description', '$ratio', $full, $sweet_cravings, $hungry, $snacking, $recharged, $even_energy, $crash, $uplifted, $clear_mind, $feel_good)
    ";

    mysql_query($query, $connection);

  ?>
  <h1>Entry successfully logged! Keep it up, breh.</h1>
</body>
</html>
