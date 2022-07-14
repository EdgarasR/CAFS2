const fs = require("fs");
const args = require("yargs").argv;

fs.writeFile(args.filename, args.content, function (err) {
  if (err) {
    throw err;
  }
  console.log("File is created successfully.");
});
