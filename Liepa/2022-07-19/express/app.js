const express = require("express");
const app = express();
const os = require("node:os");

// TASK

app.get("/os", function (req, res) {
  res.send({
    Type: os.type(),
    Release: os.release(),
    Platform: os.platform(),
  });
});
app.get("/cpu", function (req, res) {
  res.send(os.cpus());
});
app.get("/ram", function (req, res) {
  res.send({ RAM: `${os.totalmem() / (1024 * 1024)} GB` });
});

app.listen(8080);
