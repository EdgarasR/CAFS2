const ALLOWED_CATEGORIES = [
    'Pants',
    'Shoes',
    'T-shirts',
    'Sweaters'
];
try {

let shoes = new Product(

);

let sweater = new Product();
sweater.setName('Helly Hansen Bluza Logo Hoodie');
sweater.setPrice(79.95);
sweater.setCategory('Sweaters');

let products = [
    new Product(
        'Helly Hansen Crew',
        44.95,
        'T-shirts' 
        ),
    (new Product).setName('Texpak').setPrice(29.95).setCategory('Pants'),
    sweater,
    shoes,
    (new Product('Nike Tee Just Do It Swoosh',19.59)).setCategory('T-shirts')
];

console.log(products);

for (let p of products) {
    console.log(p.getName(),p.getPrice(),p.getSalePrice());
}

} catch(err) {
    console.warn(err.message);
}