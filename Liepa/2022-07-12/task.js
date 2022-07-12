// "https://jsonplaceholder.typicode.com/posts"
// "https://jsonplaceholder.typicode.com/users"

function getPost() {
  return axios
    .get("https://jsonplaceholder.typicode.com/posts")
    .then((response) => response.data);
}
function getName() {
  return axios
    .get("https://jsonplaceholder.typicode.com/users")
    .then((response) => response.data);
}

document.querySelector("button")?.addEventListener("click", async function () {
  let posts = await getPost();
  let users = await getName();
  let table = document.querySelector("#data");

  for (let post of posts) {
    let createTr = document.createElement("tr");
    let createUserID = document.createElement("td");
    let createID = document.createElement("td");
    let createTitle = document.createElement("td");

    createID.textContent = post.id;
    createUserID.textContent = post.userId;
    createTitle.textContent = post.title;

    createTr.appendChild(createID);
    createTr.appendChild(createUserID);
    createTr.appendChild(createTitle);
    table.appendChild(createTr);
  }
});
