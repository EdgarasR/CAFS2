const networkRequest = (name, email, callback) => {
    console.log('Network request STARTED');

    return new Promise(function(resolve,reject) {
        setTimeout(() => {
            console.log('Network request ENDED');
                const status = Math.random() < 0.5;
                const response =  {
                    status: status ? 201 : 500,
                    message: status ? 'User created' : 'Error',
                    timestamp: (new Date).toISOString().replace('T', ' ')
                };
                if (status) {
                    resolve(response);
                } else {
                    reject(response);
                }
            }, 2000);
    });
};

document.querySelector('button').addEventListener('click', async function() {
    try {
        let response = await networkRequest('Edgaras', 'edgaras@gmail.com');
            console.log('success', response)
            } catch(err) {;
                console.warn(err);
            };
});