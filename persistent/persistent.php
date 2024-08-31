<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Stored XSS Demo</title>
</head>
<body>
<a href="http://localhost:63342/xss-demo/index.html?_ijt=r5n7pshl6hp644afd7vf2uaki9&_ij_reload=RELOAD_ON_SAVE">
    <button>
        zur Übersicht
    </button>
</a>
<h1>Hinterlasse einen Kommentar</h1>
<form method="post" action="store_comment.php">
    <label for="comment">Kommentar:</label><br>
    <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Absenden">
</form>

<h2>Kommentare:</h2>
<div id="comments">
    <!-- Hier werden Kommentare angezeigt -->
    <?php
    if (file_exists("comments.txt")) {
        echo file_get_contents("comments.txt");
    }
    ?>
</div>
</body>
</html>
