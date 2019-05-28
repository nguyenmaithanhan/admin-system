<?php

include 'include_database.php';

if (empty($_POST['Status'])) {
  $status = 0;
} else {
  $status = 1;
}

$sql = 'UPDATE customers 
SET 
Name = "' .  mysqli_real_escape_string($link, $_POST['Name']) . '",
Rechtsform = "' .  mysqli_real_escape_string($link, $_POST['Rechtsform']) . '",
Unterzeile = "' .  mysqli_real_escape_string($link, $_POST['Unterzeile']) . '",
Kurztext = "' .  mysqli_real_escape_string($link, $_POST['Kurztext']) . '",
Profil = "' .  mysqli_real_escape_string($link, $_POST['Profil']) . '",
Kategorie_Auswahl = "' .  mysqli_real_escape_string($link, $_POST['Kategorie_Auswahl']) . '",
status = "' .  mysqli_real_escape_string($link, $status) . '"
WHERE id = "' . mysqli_real_escape_string($link, $_GET['id']) . '"';

$result = mysqli_query($link, $sql) or die(mysqli_error($link));

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>Kunde aktualisiert - Admin-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <h1>Kunde aktualisiert</h1>
        <p>Der Kunde wurde erfolgreich aktualisiert.</p>
        <a href="index.php" class="btn btn-primary">Zurück zur Übersicht</a>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>