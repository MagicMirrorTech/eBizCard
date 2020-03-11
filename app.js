
const http = require('http');
const app = express();

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});


//NOt sure if this is relevant or not
http.createServer(app).listen(1337, () => {
	console.log('Express server listenting on port 1337');
})
