const fs = require("node:fs");
const url = require("node:url");
const path = require("node:path");
const http = require("node:http");

const MIME_TYPES = {
  ".ico": "image/x-icon",
  ".html": "text/html",
  ".js": "text/javascript",
  ".json": "application/json",
  ".css": "text/css",
  ".png": "image/png",
  ".jpg": "image/jpg",
  ".jpeg": "image/jpeg",
  ".wav": "audio/wav",
  ".mp3": "audio/mpeg",
  ".svg": "image/svg+xml",
  ".pdf": "application/pdf",
  ".doc": "application/msword",
  ".eot": "application/vnd.ms-fontobject",
  ".ttf": "font/ttf",
};

const PUBLIC_PATH = "./public";

http
  .createServer(function (request, response) {
    let filePath = request.url.slice(1);
    filePath = filePath !== "" ? filePath : "index.html";
    filePath = url.parse(filePath).pathname;
    filePath = path.join(PUBLIC_PATH, path.normalize(filePath));

    fs.lstat(filePath, function (err, stats) {
      if (err) {
        response.statusCode = 404;

        return response.end(`File "${request.url}" not found!`);
      }
      if (stats.isDirectory()) {
        response.statusCode = 403;

        return response.end(`"${request.url}" is forbiden!`);
      }

      let ext = path.parse(filePath).ext;

      response.setHeader(
        "Content-Type",
        MIME_TYPES[ext] || "application/octet-stram"
      );

      let stream = fs.createReadStream(filePath);

      return stream.pipe(response);
    });
  })
  .on("listenin", function () {
    console.log(`Started at ${this.address().port} port`);
  })
  .listen(8080);
