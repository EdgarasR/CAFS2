const http = require("http");
const fs = require("fs");

//kas yra request?? (req)
//gauti atitinkama faila pagal GET'o inputa
//su switch arba IF

http
  .createServer(async function (req, res) {
    const content = fs.readFileSync("users.json");

    res.writeHead(200, { "Content-type": "application/json" });
    res.write(content);

    res.end();
  })
  .listen(8080);
