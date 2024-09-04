<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Reflected XSS Demo</title>
</head>
<body>
<a href="../index.html">
    <button>
        zur Übersicht
    </button>
</a>
<h1>Suche auf der Website</h1>
<form method="get" action="">
    <label for="search">Suchbegriff:</label>
    <input type="text" id="search" name="q">
    <input type="submit" value="Suchen">
</form>

<?php
if (isset($_GET['q'])) {
    $searchTerm = $_GET['q'];
    echo "<h2>Suchergebnisse für: " . $searchTerm . "</h2>";
}
?>

</body>
</html>
