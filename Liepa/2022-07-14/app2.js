const fs = require("node:fs");

const fileName = String(process.argv[2]);
const fileContents = String(process.argv[3]);

if (!fileName && !fileContents) {
  console.log("Missing arguments. please specify file name and file contents.");
}

fs.writeFile(`./${fileName}`, fileContents, (err) => {
  if (err) {
    console.error(err);
  }
  console.log("file written successfully");
});
