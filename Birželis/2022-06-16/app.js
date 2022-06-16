const companies = [
    [  
        'Alfreds Futterkiste', 
        'Maria Anders',
        'Germany',
    ],
    [
        'Centro comercial Moctezuma',
        'Francisco Chang',
        'Mexico',
    ],
    [
        'Ernst Handel',
        'Roland Mendel',
        'Austria',
    ],
    [
        'Island Trading',
        'Helen Bennett',
        'UK',
    ],
    [
        'Laughing Bacchus Winecellars',
        'Yoshi Tannamuri',
        'Canada',
    ],
    [
        'Magazzini Alimentari Riuniti',
        'Giovanni Rovelli',
        'Italy',
    ],
];

function createTdWithText(text) {
    const td = document.createElement('td');
    const textNode = document.createTextNode(text);

    td.appendChild(textNode);

    return td;
}

function getBootstrapDeleteIcon() {
    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.setAttribute('xlmns', 'http://www.w3.org/2000/svg');
    svg.setAttribute('width', '16');
    svg.setAttribute('height', '16');
    svg.setAttribute('fill', 'currentColor');
    svg.setAttribute('viewBox', '0 0 16 16');

    const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');

    path.setAttribute('d', 'M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z');
    path.setAttribute('fill-rule', 'evenodd');
    path.setAttribute('d', 'M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z')
    svg.appendChild(path);

    return svg;
}

function addAction(tr) {
    const tdRemove = document.createElement('td');
    const buttonRemove = document.createElement('button');
    buttonRemove.addEventListener('click', function(event) {
        // console.log(event.target.parentElement.parentElement.parentElement);
        if (confirm('Are you sure?')) {
            event.target.closest('tr').remove();
        }
    })
    buttonRemove.appendChild(getBootstrapDeleteIcon());
    tdRemove.appendChild(buttonRemove);
    tr.appendChild(tdRemove);
}

function appendCompany(company, contact, country) {
    const tr = document.createElement('tr');

    tbody.appendChild(tr);
    
    tr.appendChild(createTdWithText(company));
    tr.appendChild(createTdWithText(contact));
    tr.appendChild(createTdWithText(country));

    addAction(tr);
};

const tbody = document.querySelector('#companies > tbody');
const createCompanyInput = document.querySelectorAll('#company-create-container > input');

window.addEventListener('DOMContentLoaded', (e) => {

    for (let company of companies) {
        appendCompany(company[0], company[1], company[2]);
    }

    document?.querySelector('#company-create').addEventListener('click', () => { 
        const tr = document.createElement('tr');
        tbody.appendChild(tr);
        for (let el of createCompanyInput) {
            tr.appendChild(createTdWithText(el.value));

        }
        addAction(tr);
    })
});

