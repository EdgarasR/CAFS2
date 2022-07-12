function getPost() {
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
  let posts = await getPost();
  let table = document.querySelector("#data");

  for (let post of posts) {
    let createTr = document.createElement("tr");
    let createName = document.createElement("td");
    let createID = document.createElement("td");
    let createUsername = document.createElement("td");
    let createEmail = document.createElement("td");

    createID.textContent = post.id;
    createUsername.textContent = post.username;
    createName.textContent = post.name;
    createEmail.textContent = post.email;

    createTr.appendChild(createID);
    createTr.appendChild(createName);
    createTr.appendChild(createUsername);
    createTr.appendChild(createEmail);
    table.appendChild(createTr);
  }
});
