<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Reflected XSS Demo</title>
</head>
<body>
<a href="http://localhost:63342/xss-demo/index.html?_ijt=r5n7pshl6hp644afd7vf2uaki9&_ij_reload=RELOAD_ON_SAVE">
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
