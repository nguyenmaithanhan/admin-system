<?php 

include 'include_database.php';

$sql = 'SELECT
    customers.id,
    customers.Name,
    customers.Rechtsform,
    customers.Unterzeile
FROM 
    customers, categories
WHERE 
customers.Kategorie_Auswahl = categories.id';

$result = mysqli_query($link, $sql);

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>Customers - Admin-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm">
                <h1>Kunden</h1>
            </div>
            <div class="col-sm mt-3">
                <a href="news_add.php" class="btn btn-primary float-right">Kunden hinzufügen</a>
            </div>
        </div>
        <table class="table table-striped table-light mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Rechtsform</th>
                    <th scope="col">Unterzeile</th>
                    <th scope="col"><div class="float-right">Aktionen</div></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td scope="row"><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Rechtsform']; ?></td>
                    <td><?php echo $row['Unterzeile']; ?></td>
                    <td>
                        <div class="float-right">
                            <a class="btn btn-secondary btn-sm" href="news_edit.php?id=<?php echo $row['id']; ?>" role="button">Bearbeiten</a>
                            <a class="btn btn-danger btn-sm" href="news_delete.php?id=<?php echo $row['id']; ?>" role="button">Löschen</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>