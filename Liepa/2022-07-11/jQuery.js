document.querySelector('button')?.addEventListener('click', function () {
    // jQuery.ajax({
    //     url: "https://jsonplaceholder.typicode.com/posts"
    // }).done(function(data) {
    //     console.log(data);
    // });

    jQuery.getJSON('https://jsonplaceholder.typicode.com/posts', function(response) {
        console.log(response);
    })
});

