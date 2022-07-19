const fs = require("node:fs");
const http = require("node:http");

function showContent(file, contentType, req, res) {
  fs.readFile(file, function (error, content) {
    if (error) {
      if (error.code == "ENOENT") {
        res.writeHead(404);
        res.end(error.code);
      } else {
        res.writeHead(500);
        res.end(error.code);
      }
    } else {
      res.writeHead(200, { "Content-Type": contentType });
      res.write(content);
      res.end();
    }
  });
}

http
  .createServer(function (req, res) {
    if (req.url == "/") {
      showContent("public/index.html", "text/html", req, res);
    } else if (req.url == "/script.js") {
      showContent("public/script.js", "text/javascript", req, res);
    } else if (req.url == "/sample.txt") {
      showContent("sample.txt", "text/plain", req, res);
    } else if (req.url == "/user.json") {
      showContent("user.json", "application/json", req, res);
    } else if (req.url == "/users.json") {
      showContent("users.json", "application/json", req, res);
    } else {
      res.writeHead(404);
      res.write("ERROR, PAGE NOT FOUND");
      res.end();
    }
  })
  .listen(8080, () => console.log("Server online"));
