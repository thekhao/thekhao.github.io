const fs = require('fs');
const http = require('http');

// Définissez le chemin du répertoire à lire ici
const path = 'C:\\';

http.createServer((req, res) => {
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.write('<h1>Contenu du répertoire</h1>');

  // Lisez le contenu du répertoire
  fs.promises.readdir(path)
    .then(files => {
      // Affichez le contenu du répertoire dans la page Web
      res.write('<ul>');
      files.forEach(file => {
        res.write(`<li>${file}</li>`);
      });
      res.write('</ul>');
      res.end();
    })
    .catch(err => {
      // Gérez les erreurs ici
      console.error(err);
      res.end();
    });
}).listen(8080);
