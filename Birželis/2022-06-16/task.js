const div = document.querySelector('#main');
const h2 = document.createElement('h2');
const p1 = document.createElement('p');
const ul = document.createElement('ul');
const li = document.createElement('li');
const p2 = document.createElement('p');
const textNode1 = document.createTextNode('Some text 1');
const textNode2 = document.createTextNode('Some text 2');
const textNode3 = document.createTextNode('Some text 3');

h2.appendChild(textNode1);
p1.appendChild(textNode2);
p2.appendChild(textNode3);
ul.appendChild(li);
div.appendChild(h2);
div.appendChild(p1);
div.appendChild(ul);
div.appendChild(p2);