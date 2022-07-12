function getPost() {
  return new Promise((resolve, reject) => {
    $.ajax({
      url: "https://jsonplaceholder.typicode.com/posts",
      type: "GET",
      data: {
        key: "value",
      },
      success: function (data) {
        resolve(data);
      },
      error: function (error) {
        reject(error);
      },
    });
  });
}
function getNames() {
  return new Promise((resolve, reject) => {
    $.ajax({
      url: "https://jsonplaceholder.typicode.com/users",
      type: "GET",
      data: {
        key: "value",
      },
      success: function (data) {
        resolve(data);
      },
      error: function (error) {
        reject(error);
      },
    });
  });
}

document.querySelector("button")?.addEventListener("click", async function () {
  // Fuck this shit
});
