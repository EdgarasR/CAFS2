async function getPost() {
    try {
        let response = await fetch('https://jsonplaceholder.typicode.com/posts')
        if (!response.ok)
            throw new Error(`Error! ${response.status}`);
        let data = await response.json();
        return data;
    } catch (err) {
        console.warn(err);
    };
};

document.querySelector('button')?.addEventListener('click', async function() {
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
});