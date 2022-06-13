let dimensions = function() {
    let width = window.innerWidth;
    let height = window.innerHeight;
    let header = document.querySelector('h1');
    let dims = document.createTextNode(`Plotis: ${width}, Aukštis: ${height}`);
    header.replaceChildren(dims);
}
window.addEventListener("resize", dimensions);

