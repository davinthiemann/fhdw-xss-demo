<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>DOM-Based XSS Demo</title>
</head>
<body>
<h1>DOM-Based XSS Test</h1>
<p>Gib etwas in das Textfeld ein und klicke auf "Eingabe anzeigen".</p>

<input type="text" id="userInput" placeholder="Gib hier etwas ein">
<button id="displayButton">Eingabe anzeigen</button>

<h2>Deine Eingabe:</h2>
<div id="result"></div>

<script>
    document.getElementById('displayButton').addEventListener('click', function() {
        // Holen des Benutzereingabewerts
        var userInput = document.getElementById('userInput').value;

        // Unsichere Art der Anzeige der Benutzereingabe
        document.getElementById('result').innerHTML = userInput;
    });
</script>
</body>
</html>
