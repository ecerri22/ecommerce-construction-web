<?php
namespace Pages;

class shoppingCartView{
  private $partials;

    public function __construct($title, $cssFile) {
        $this->partials = new Header($title, $cssFile);
    }

    public function render() {
        ?>
            <?php $this->partials->render() ?>
            <?php $this->renderContent(); ?>
            <?php $this->renderFooter(); ?>
        </body>
        </html>
        <?php
    }

    public function renderContent(){
      ?>
      <div class="cart-content">
          <h2 class="wishlist-title">Shopping Cart</h2>
          <div class="cart-container">
              <div class="cart-products-container">
                <!-- foreach ketu -->
                  <div class="cart-product-card">
                      <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                      <div class="description-box-cart">
                          <h4><a href="#">Basic Tee</a></h4>
                          <input type="hidden" value="" name="price">
                          <p>456</p>
                          <p class="cart-prod-price">$35</p>
                      </div> 
                      <input name="quantity" type="number" value="1" class="quantity"/>
                      <button class="remove-from-cart">
                          <i class="fas fa-times"></i> 
                      </button>
                  </div>
                <!-- end foreach -->
              </div>
              <div class="price-container">
                  <h2>Order summary</h2>
                  <div class="subtotal">
                      <h3>Subtotal:</h3>
                      <p id="subtotal-value">$35</p> 
                  </div>
                  <hr/>
                  <div class="shipping">
                      <h3>Shipping:</h3>
                      <p>$5</p>
                  </div>
                  <hr/>
                  <div class="total">
                      <h3>Total:</h3>
                      <p>$40</p>
                  </div>
                  <button class="add-to-cart">Checkout</button>
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

                if (priceElement && quantityInput && /^\$\d+(\.\d+)?$/.test(priceElement.textContent.trim())) {
                    const price = parseFloat(priceElement.textContent.replace('$', '').trim());
                    let quantity = parseInt(quantityInput.value);

                    // Ensure quantity is non-negative
                    if (quantity < 0) {
                        quantity = 0;
                        quantityInput.value = 0; // Reset input value if negative
                    }

                    if (!isNaN(price) && !isNaN(quantity)) {
                        subtotal += price * quantity;
                    }
                }
            });

            document.getElementById('subtotal-value').textContent = '$' + subtotal.toFixed(2);
        }

        // Initial update
        updateSubtotal();

        // Listen for changes in quantity
        const quantityInputs = document.querySelectorAll('.quantity');
        quantityInputs.forEach(input => {
            input.addEventListener('change', updateSubtotal);
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