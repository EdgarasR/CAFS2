const fs = require("node:fs");
const _path = require("node:path");

function readFilesRecursive(path) {
  fs.readdir(path, { withFileTypes: true }, (err, files) => {
    files.forEach((file) => {
      const currentPath = _path.join(path, file.name);
      if (file.isFile()) {
        console.log(currentPath);
      } else {
        readFilesRecursive(currentPath);
      }
    });
  });
}

readFilesRecursive("./");
