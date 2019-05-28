<?php 

include 'include_database.php';

$sql = 'SELECT * FROM categories';

$result = mysqli_query($link, $sql);

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>Kunden hinzufügen - Admin-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1>Kunden hinzufügen</h1>
                <form class="mt-4 mb-4" method="POST" action="news_add_thanks.php">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="Name" name="Name">
                    </div>
                    <div class="form-group">
                        <label for="Rechtsform">Rechtsform</label>
                        <input type="text" class="form-control" id="Rechtsform" name="Rechtsform">
                    </div>
                    <div class="form-group">
                        <label for="Unterzeile">Unterzeile</label>
                        <input type="text" class="form-control" id="Unterzeile" name="Unterzeile">
                    </div>
                    <div class="form-group">
                        <label for="Kurztext">Kurztext</label>
                        <input type="text" class="form-control" id="Kurztext" name="Kurztext">
                    </div>
                    <div class="form-group">
                        <label for="Profil">Profil</label>
                        <textarea class="form-control" id="Profil" rows="6" name="Profil"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Kategorie_Auswahl">Kategorie</label>
                        <select class="form-control" name="Kategorie_Auswahl">
                            <option>Bitte wählen</option>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['Kategoriename']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Status" name="Status" value="1">
                        <label class="form-check-label" for="Status">Aktiviert</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Kunden hinzufügen</button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>