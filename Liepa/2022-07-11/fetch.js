function loadPosts() {
    fetch('https://jsonplaceholder.typicode.com/posts')
        .then((response) => response.json())
        .then((json) => console.log(json));

};

document.querySelector('button')?.addEventListener('click', loadPosts);