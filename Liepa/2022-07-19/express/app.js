const express = require("express");
const app = express();
const os = require("node:os");

// TASK

app.get("/os", function (req, res) {
  res.send({
    Type: os.type(),
    Release: os.release(),
    Platform: os.platform(),
    Version: os.version(),
  });
});

app.get("/cpu", function (req, res) {
  res.send({ CPU: os.cpus()[0], Cores: os.cpus().length });
});

app.get("/ram", function (req, res) {
  res.send({ RAM: `${Math.floor(os.totalmem() / (1024 * 1024))} MB` });
});

app.listen(8080);
