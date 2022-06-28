class Shop {
    constructor() {
        this.products = [];
    };
    add(product) {
        this.products.push(product)
    };
    filterBetweenPrices(from,to) {
        return this.products.filter(p => p.getPrice() >= from && p.getPrice() <= to);
    };
    orderByPrice(price,orderType) {
        if (orderType !== Shop.ORDER_BY_PRICE_ASCENDING && orderType !== Shop.ORDER_BY_PRICE_DESCENDING) {
            throw new Error('Order type not recognised');
        }
        return this.products.filter(p => orderType == Shop.ORDER_BY_PRICE_ASCENDING ? p.getPrice() >= price : p.getPrice() <= price).sort((f,s) => orderType == Shop.ORDER_BY_PRICE_DESCENDING ? f.getPrice() - s.getPrice() : s.getPrice() - f.getPrice());
    };
    filterByCategory(categoryName) {
        return this.products.filter(p => p.getCategory().toLowerCase() === categoryName.toLowerCase());
    };
    filterBySale() {
        return this.products.filter(p => p.isOnSale());
    };
}
Object.defineProperty(Shop,'ORDER_BY_PRICE_ASCENDING', {
    value:1,
    writable: false,
    enumerable: true,
    configurable: false
});
Object.defineProperty(Shop,'ORDER_BY_PRICE_DESCENDING', {
    value:2,
    writable: false,
    enumerable: true,
    configurable: false
});
