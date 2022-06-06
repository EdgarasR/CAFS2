let userInfoOutput = document.getElementById('main');

const user = {
    name: "Edgaras",
    lastname: "Račiūnas"
};

userInfoOutput.innerHTML = `<h2>User information</h2>
                  <p>Vartotojo vardas yra ${user.name}, o pavardė ${user.lastname}.</p>`;