<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>DOM-Based XSS Demo</title>
</head>
<body>
<a href="../index.html">
    <button>
        zur Übersicht
    </button>
</a>
<h1>DOM-Based XSS</h1>
<p>Gib ein Bild ein, das du anzeigen willst: </p>

<input type="text" id="imageUrl" placeholder="Bild-URL eingeben">
<button id="displayImageButton">Bild anzeigen</button>

<h2>Bild:</h2>
<div id="imageContainer"></div>

<script>
    function getParameterByName(name) {
        const url = window.location.href;
        const nameRegex = name.replace(/[\[\]]/g, '\\$&');
        const regex = new RegExp('[?&]' + nameRegex + '(=([^&#]*)|&|#|$)');
        const results = regex.exec(url);
        return results ? decodeURIComponent(results[2].replace(/\+/g, ' ')) : null;
    }

    window.onload = function() {
        const imageUrl = getParameterByName('image');
        if (imageUrl) {
            document.getElementById('imageContainer').innerHTML = '<img src="' + imageUrl + '" alt="Gesuchtes Bild" />';
        }
    };

    document.getElementById('displayImageButton').addEventListener('click', function() {
        const imageUrl = document.getElementById('imageUrl').value;

        const newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?image=' + encodeURIComponent(imageUrl);
        window.history.pushState({ path: newUrl }, '', newUrl);

        document.getElementById('imageContainer').innerHTML = '<img src="' + imageUrl + '" alt="Gesuchtes Bild" />';
    });
</script>
</body>
</html>
