let express = require("express");
let router = express.Router();
let https = require("node:https");

router.get("/", function (req, res, next) {
  res.send();
  https.get(
    "https://api.meteo.lt/v1/places/kaunas/forecasts/long-term",
    function (res) {
      if (res.statusCode == 200) {
        console.log(res);
      }
      res.setEncoding('utf-8');
    }
  );
});

module.exports = router;
