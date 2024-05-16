<?php
namespace Pages;

class shoppingCartView{
  private $partials;

    public function __construct($title, $cssFile) {
        $this->partials = new Header($title, $cssFile);
    }

    public function render($allShoppingCartProducts=[]) {
        ?>
            <?php $this->partials->render() ?>
            <?php $this->renderContent($allShoppingCartProducts); ?>
            <?php $this->renderFooter(); ?>
        </body>
        </html>
        <?php
    }

    public function renderContent($allShoppingCartProducts){
      ?>
      <div class="cart-content">
      
      <h2 class="wishlist-title">Shopping Cart</h2>
      <div class="cart-container">
      <div class="cart-products-container">

      <?php foreach($allShoppingCartProducts as $shoppingCartProduct) : ?>

        <?php
        echo '<div class="cart-product-card" data-product-id="'.$shoppingCartProduct['product_id'].'">'
        ?>
                <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                <div class="description-box-cart">
                <h4>
                    <a href="#">
                      <?= $shoppingCartProduct['name'] ?>
                    </a>
                </h4>
                <p productid>SKU: 
                <?= $shoppingCartProduct['product_id'] ?>

                </p>
                <p class="cart-prod-price">$ <?= $shoppingCartProduct['price'] ?></p>
                </div>

                  <input class="quantity" name="quantity" type="number" value="1" min="1"/>
                  <button class="remove-from-cart">
                    <i class="fas fa-times"></i> 
                </button>
              </div>
        <?php endforeach ; ?>

            </div>

            <div class="price-container">
              <h2>Order summary</h2>
              <div class="subtotal">
                <h3>Subtotal:</h3>
                <p id="subtotal-value">$0</p>
              </div>
              <hr/>
              <div class="shipping">
                <h3>Shipping:</h3>
                <p>$5</p>
              </div>
              <hr/>
              <div class="total">
                <h3>Total:</h3>
                <p id="total-value">$5</p>
              </div>
              <a><button class="add-to-cart" >Checkout</button></a>
            </div>
          </div>

          

          </div>
          
      </div>
      <script>
   function updateSubtotal() {
                const productCards = document.querySelectorAll('.cart-product-card');
                let subtotal = 0;

                productCards.forEach(card => {
                    const priceElement = card.querySelector('.cart-prod-price');
                    const quantityInput = card.querySelector('.quantity');
                    const price = parseFloat(priceElement.textContent.replace('$', ''));
                    const quantity = parseInt(quantityInput.value);
                    subtotal += price * quantity;
                });

                const shipping = 5; // Example shipping cost
                const total = subtotal + shipping;

                document.getElementById('subtotal-value').textContent = '$' + subtotal.toFixed(2);
                document.getElementById('total-value').textContent = '$' + total.toFixed(2);
            }

            // Initial update
            updateSubtotal();

            // Listen for changes in quantity
            const quantityInputs = document.querySelectorAll('.quantity');
            quantityInputs.forEach(input => {
                input.addEventListener('change', updateSubtotal);
            });

            document.addEventListener('DOMContentLoaded', function() {
                const checkoutButton = document.querySelector('.add-to-cart');

                checkoutButton.addEventListener('click', function() {
                    const productCards = document.querySelectorAll('.cart-product-card');
                    let products = {}; // Object to store product IDs and quantities

                    productCards.forEach(card => {
                        const productId = card.dataset.productId;
                        const quantityInput = card.querySelector('.quantity');
                        const quantity = parseInt(quantityInput.value);

                        if (!isNaN(quantity) && quantity > 0) {
                            products[productId] = quantity; // Save product ID and quantity
                        }
                    });

                   // Convert products object to JSON string
                    const productsJSON = JSON.stringify(products);

                    // Create a form dynamically
                    const form = document.createElement('form');
                    form.setAttribute('method', 'POST');
                    form.setAttribute('action', '/checkout');

                    // Create a hidden input field for products data
                    const productsInput = document.createElement('input');
                    productsInput.setAttribute('type', 'hidden');
                    productsInput.setAttribute('name', 'products');
                    productsInput.setAttribute('value', productsJSON);

                    // Append the input field to the form
                    form.appendChild(productsInput);

                    // Append the form to the document body and submit it
                    document.body.appendChild(form);
                    form.submit();

                });
            });
</script>

      <?php
    }
  
    private function renderFooter() {
      $footer = new Footer();
      $footer->render();
    }  
}
?>