<link rel="stylesheet" href="normalize.css">
<h2>Stap 1:</h2> Maak database schoon <form action="delete.php" method="post">
  <input type="submit" value="Database schoonmaken" /> </form>
<h2>Stap 2:</h2> Draai <strong> php artisan migrate</strong> in GIT
<h2>Stap 3:</h2> Importeer oude data in de database <form action="import.php" method="post">
  <input type="submit" value="Database importeren" /> </form>
