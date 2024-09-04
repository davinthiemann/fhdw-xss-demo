<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Stored XSS Demo</title>
    <style>
        .comment-box {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            background-color: #f9f9f9;
            max-width: 500px;
        }
        .comment-box strong {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<a href="../index.html">
    <button>
        zur Übersicht
    </button>
</a>
<h1>Hinterlasse einen Kommentar</h1>
<form method="post" action="../persistent-data/store_comment.php">
    <label for="comment">Kommentar:</label><br>
    <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Absenden">
</form>

<h2>Kommentare:</h2>
<div id="comments">
    <?php
    if (file_exists("../persistent-data/comments.txt")) {
        $comments = file("../persistent-data/comments.txt", FILE_IGNORE_NEW_LINES);
        foreach ($comments as $index => $comment) {
            $comment_num = $index + 1;
            echo "<div class='comment-box'><strong>Kommentar $comment_num:</strong> $comment</div>";
        }
    }
    ?>
</div>
<form method="post" action="../persistent-data/delete_comments.php">
    <input type="submit" value="Kommentare löschen">
</form>
</body>
</html>
