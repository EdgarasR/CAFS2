function loadPosts() {
    let xhr = new XMLHttpRequest();

    xhr.addEventListener('load', function() {
        if (this.status == 200) {
            let data = JSON.parse(this.responseText);
            console.log(data);
        };
    });

    xhr.open('GET', 'https://jsonplaceholder.typicode.com/posts');

    xhr.send();
};

document.querySelector('button')?.addEventListener('click', loadPosts);