const shop = new Shop();

shop.add(new Product(
    'Champion',
    39.95,
    'Shoes'
));
shop.add(new Product(
    'Helly Hansen Bluza Logo Hoodie',
    79.95,
    'Sweaters'
));
shop.add(new Product(
    'Helly Hansen Crew',
    44.95,
    'T-shirts'
));
shop.add(new Product(
    'Texpak',
    29.95,
    'Pants'
));

console.log(shop);
// console.log(shop.filterBetweenPrices(30,80));
// console.log(shop.orderByPrice(30, Shop.ORDER_BY_PRICE_ASCENDING));
// console.log(shop.orderByPrice(40, Shop.ORDER_BY_PRICE_DESCENDING));
// console.log(shop.orderByPrice(30, 1));
console.log(shop.filterBySale());
console.log(shop.filterByCategory('T-Shirts'));
