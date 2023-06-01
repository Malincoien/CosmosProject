//en Array representerer en liste
//her lager jeg en Array som skal inneholde produkter
//vi skal også bruke 'Object {}', 'Object* gruperer flere verdier sammen
//her lagrer vi første produkt bilde inni javascripten
const products = [{
  id: "0001",
  image: 'Bilder/athletic-cotton-socks-6-pairs.jpg',
  name: 'Black and Gray Athletic Cotton Socks - 6 Pairs',
  priceCents: 1099
}, {
  id: "0002",
  image: 'Bilder/intermediate-composite-basketball.jpg',
  name: 'Intermediate Size Basketball',
  priceCents: 2095
}, {
  id: "0003",
  image: 'Bilder/adults-plain-cotton-tshirt-2-pack-teal.jpg',
  name: 'Adults Plain Cotton T-Shirt - 2 Pack',
  priceCents: 799
}, {
  id: "0004",
  image: 'Bilder/black-2-slot-toaster.jpg',
  name: '2 Slot Toaster - Black',
  priceCents: 1899
}, {
  id: "0005",
  image: 'Bilder/athletic-cotton-socks-6-pairs.jpg',
  name: 'Black and Gray Athletic Cotton Socks - 6 Pairs',
  priceCents: 1099
}, {
  id: "0006",
  image: 'Bilder/intermediate-composite-basketball.jpg',
  name: 'Intermediate Size Basketball',
  priceCents: 2095
}, {
  id: "0007",
  image: 'Bilder/adults-plain-cotton-tshirt-2-pack-teal.jpg',
  name: 'Adults Plain Cotton T-Shirt - 2 Pack',
  priceCents: 799
}, {
  id: "0008",
  image: 'Bilder/black-2-slot-toaster.jpg',
  name: '2 Slot Toaster - Black',
  priceCents: 1899
}, {
  id: "0009",
  image: 'Bilder/athletic-cotton-socks-6-pairs.jpg',
  name: 'Black and Gray Athletic Cotton Socks - 6 Pairs',
  priceCents: 1099
}, {
  id: "0010",
  image: 'Bilder/intermediate-composite-basketball.jpg',
  name: 'Intermediate Size Basketball',
  priceCents: 2095
}, {
  id: "0011",
  image: 'Bilder/adults-plain-cotton-tshirt-2-pack-teal.jpg',
  name: 'Adults Plain Cotton T-Shirt - 2 Pack',
  priceCents: 799
}, {
  id: "0012",
  image: 'Bilder/black-2-slot-toaster.jpg',
  name: '2 Slot Toaster - Black',
  priceCents: 1899
}, {
  id: "0013",
  image: 'Bilder/athletic-cotton-socks-6-pairs.jpg',
  name: 'Black and Gray Athletic Cotton Socks - 6 Pairs',
  priceCents: 1099
}, {
  id: "0014",
  image: 'Bilder/intermediate-composite-basketball.jpg',
  name: 'Intermediate Size Basketball',
  priceCents: 2095
}, {
  id: "0015",
  image: 'Bilder/adults-plain-cotton-tshirt-2-pack-teal.jpg',
  name: 'Adults Plain Cotton T-Shirt - 2 Pack',
  priceCents: 799
}, {
  id: "0016",
  image: 'Bilder/black-2-slot-toaster.jpg',
  name: '2 Slot Toaster - Black',
  priceCents: 1899
}, {
  id: "0017",
  image: 'Bilder/athletic-cotton-socks-6-pairs.jpg',
  name: 'Black and Gray Athletic Cotton Socks - 6 Pairs',
  priceCents: 1099
}, {
  id: "0018",
  image: 'Bilder/intermediate-composite-basketball.jpg',
  name: 'Intermediate Size Basketball',
  priceCents: 2095
}, {
  id: "0019",
  image: 'Bilder/adults-plain-cotton-tshirt-2-pack-teal.jpg',
  name: 'Adults Plain Cotton T-Shirt - 2 Pack',
  priceCents: 799
}, {
  id: "0020",
  image: 'Bilder/black-2-slot-toaster.jpg',
  name: '2 Slot Toaster - Black',
  priceCents: 1899
}];
//dette heter datastruktur

let productsHTML = '';

//nå skal vi bruke denne dataen til å generere html koden
//for å generere html koden så kan vi 'loope' igjennom arrayen
products.forEach((product) => {
  productsHTML += `
      <div class="product-container">
          <div class="product-image-container">
            <img class="product-image"
              src="${product.image}">
          </div>

          <div class="product-name limit-text-to-2-lines">
            ${product.name}
          </div>

          <div class="product-price">
            $${product.priceCents / 100}
          </div>

          <div class="product-quantity-container">
            <select>
              <option selected value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>

          <div class="product-spacer"></div>

          <div class="added-to-cart">
            <img src="Bilder/circle-check-regular.svg" width="20px" height="20px">
            Added
          </div>

          <button class="add-to-cart-button button-primary js-add-to-cart"
          data-product-id="${product.id}">
            Add to Cart
          </button>
        </div>
  `;
});

//vi skal nå kombinere all htmlen sammen og putte det på web siden med DOM

document.querySelector('.js-products-grid').innerHTML = productsHTML;

document.querySelectorAll('.js-add-to-cart')
  .forEach((button) => {
    button.addEventListener('click', () => {
      const productId = button.dataset.productId;

      let matchingItem;

      cart.forEach((item) => {
        if (productId === item.productId){
          matchingItem = item;
        }
      });

      if (matchingItem){
        matchingItem.quantity += 1;
      } else {
        cart.push({
          productId: productId,
          quantity: 1
        });
      }

      let cartQuantity = 0;

      cart.forEach((item) => {
        cartQuantity += item.quantity;
      });

      document.querySelector('.js-cart-quantity').innerHTML = cartQuantity;
  });
});