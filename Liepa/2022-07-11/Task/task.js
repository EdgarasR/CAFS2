function getPost() {
    return new Promise((resolve, reject) => {
      $.ajax({
        url: 'https://jsonplaceholder.typicode.com/posts',
        type: 'GET',
        data: {
          key: 'value',
        },
        success: function (data) {
          resolve(data)
        },
        error: function (error) {
          reject(error)
        },
      });
    });
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
