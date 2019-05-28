<?php 

include 'include_database.php';

$sql = 'SELECT * FROM customers WHERE id = ' . mysqli_real_escape_string($link, $_GET['id']);

$result = mysqli_query($link, $sql);

$row = mysqli_fetch_assoc($result);

$sql = 'SELECT * FROM categories';

$result = mysqli_query($link, $sql);

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>Kundendaten bearbeiten - Admin-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1>Kundendaten bearbeiten</h1>
                <form class="mt-4 mb-4" method="POST" action="news_edit_thanks.php?id=<?php echo $row['id'] ?>">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="Name" name="Name" value="<?php echo $row['Name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Rechtsform">Rechtsform</label>
                        <input type="text" class="form-control" id="Rechtsform" name="Rechtsform" value="<?php echo $row['Rechtsform'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Unterzeile">Unterzeile</label>
                        <input type="text" class="form-control" id="Unterzeile" name="Unterzeile" value="<?php echo $row['Unterzeile'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Kurztext">Kurztext</label>
                        <input type="text" class="form-control" id="Kurztext" name="Kurztext" value="<?php echo $row['Kurztext'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Profil">Profil</label>
                        <textarea class="form-control" id="Profil" rows="3" name="Profil"><?php echo $row['Profil'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Kategorie_Auswahl">Kategorie</label>
                        <select class="form-control" name="Kategorie_Auswahl">
                            <option>Bitte wählen</option>
                            <?php while ($rowCat = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $rowCat['id']; ?>"<?php if ($rowCat['id'] == $row['Kategorie_Auswahl']) { ?> selected<?php } ?>><?php echo $rowCat['Kategoriename']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Status" name="Status" value="1"<?php if ($row['Status'] == 1) { ?> checked<?php } ?>>
                        <label class="form-check-label" for="Status">Aktiviert</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Kundendaten aktualisieren</button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>