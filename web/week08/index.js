const fs = require('fs');
const http = require('http');
const json = require('./name.json');

function onRequest(req, res) {
    console.log(`Request recieved for: ${req.url}`);
    if (req.url === '/home'){
        res.writeHead(200, {"Content-Type": "text/html"}); 
        res.write("<h1>Welcome to the Home Page</h1>");
        res.end();
        return;
    }
    
    if (req.url === '/getData'){
        res.writeHead(200, {"Content-Type": "application/json"});
        res.write(JSON.stringify(json));
        res.end();
        return;
    }
    
    else {
          res.writeHead(404, {"Content-Type": "text/html"}); 
          res.write("<h1>Page Not Found</h1>");
          res.end();
        }
}



const server = http.createServer(onRequest);
server.listen(8888);
console.log('The server is now listening on port 8888');
