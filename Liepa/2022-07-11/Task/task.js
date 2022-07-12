function getPost() {
    return new Promise(function(resolve,reject) {
        let response = fetch('https://jsonplaceholder.typicode.com/posts').then((response) => {
            response.json();
        });
    });
};

async function showData() {
    let posts = await getPost();
    let table = document.querySelector('#data');

    for (let post of posts) {
        let createTr = document.createElement('tr');
        let createTdID = document.createElement('td');
        let createTdUserID = document.createElement('td');
        let createTdTitle = document.createElement('td');

        createTdID.textContent = post.id;
        createTdUserID.textContent = post.userId;
        createTdTitle.textContent = post.title;

        createTr.appendChild(createTdID);
        createTr.appendChild(createTdUserID);
        createTr.appendChild(createTdTitle);
        table.appendChild(createTr);
    };
};

showData();