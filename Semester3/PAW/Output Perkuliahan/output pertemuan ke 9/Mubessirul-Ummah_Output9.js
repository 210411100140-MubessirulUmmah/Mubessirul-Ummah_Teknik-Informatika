var http = require("http");

http
  .createServer(function (req, res) {
    res.writeHead(200, { "Content-Type": "text/html" });
    res.end("Nama : Mubessirul Ummah<br>Nim  : 210411100140");
  })
  .listen(8080);