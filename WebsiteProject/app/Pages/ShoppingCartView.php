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
      echo<<<End
      <div class="cart-content">
      
      <h2 class="wishlist-title">Shopping Cart</h2>
      <div class="cart-container">

        <div class="cart-products-container">
              <div class="cart-product-card">
                <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                <div class="description-box-cart">
                <h4>
                    <a href="#">Basic Tee</a>
                </h4>
                <p>Black</p>
                <p >$35</p>
                </div>

                  <input name="quantity" type="number" value="1"/>
                  <button class="remove-from-cart">
                    <i class="fas fa-times"></i> 
                </button>
              </div>

              <div class="cart-product-card">
                <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                <div class="description-box-cart">
                <h4>
                    <a href="#">Basic Tee</a>
                </h4>
                <p>Black</p>
                <p >$35</p>
                </div>

                  <input name="quantity" type="number" value="1"/>
                  <button class="remove-from-cart">
                    <i class="fas fa-times"></i> 
                </button>
              </div>


              <div class="cart-product-card">
                <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                <div class="description-box-cart">
                <h4>
                    <a href="#">Basic Tee</a>
                </h4>
                <p>Black</p>
                <p >$35</p>
                </div>

                  <input name="quantity" type="number" value="1"/>
                  <button class="remove-from-cart">
                    <i class="fas fa-times"></i> 
                </button>
              </div>

              <div class="cart-product-card">
                <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                <div class="description-box-cart">
                <h4>
                    <a href="#">Basic Tee</a>
                </h4>
                <p>Black</p>
                <p >$35</p>
                </div>

                  <input name="quantity" type="number" value="1"/>
                  <button class="remove-from-cart">
                    <i class="fas fa-times"></i> 
                </button>
              </div>



            </div>

            <div class="price-container">
              <h2>Order summary</h2>
              <div class="subtotal">
                <h3>Subtotal:</h3>
                <p>$35</p>
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
          
      </div>
      End;
    }
  
    private function renderFooter() {
      $footer = new Footer();
      $footer->render();
    }  
}
?>