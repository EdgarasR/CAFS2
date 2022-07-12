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
    let createUserID = document.createElement("td");
    let createID = document.createElement("td");
    let createTitle = document.createElement("td");

    createID.textContent = post.id;
    createUserID.textContent = post.userid;
    createTitle.textContent = post.title;

    createTr.appendChild(createID);
    createTr.appendChild(createUserID);
    createTr.appendChild(createTitle);
    table.appendChild(createTr);
  }
});
