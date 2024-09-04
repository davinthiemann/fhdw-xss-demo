<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment'];

    // Speichere den Kommentar in einer Datei
    file_put_contents("comments.txt", "<p>" . $comment . "</p>\n", FILE_APPEND);

    // Weiterleitung zurück zur Kommentar-Seite
    header("Location: ../pages/persistent.php");
    exit();
}
?>
