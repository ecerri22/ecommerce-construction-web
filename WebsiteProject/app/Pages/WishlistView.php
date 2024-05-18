<?php
namespace Pages;

class WishlistView{
    private $partials;

    public function __construct($title, $cssFile) {
        $this->partials = new Header($title, $cssFile);
    }

    public function render($allWishlistProducts=[]) {
        ?>
            <?php $this->partials->render() ?>
            <?php $this->renderContent($allWishlistProducts); ?>
            <?php $this->renderFooter(); ?>
        </body>
        </html>
        <?php
    }

    public function renderContent($allWishlistProducts){
        echo <<<End
                <div class="content">
                    <div class="wishlist-products-container">
                        <h2 class="wishlist-title">Wishlist products</h2>
                        <div class="wishlist-products">
        End;
                foreach($allWishlistProducts as $wishlistProduct) {
                    echo <<<End
                                    <form action="/wishlist" method="post">
                                        <input type="hidden" name="product_id" value="{$wishlistProduct['product_id']}">
                                        
                                        <div class="product-card">
                                            <button type="submit" class="remove-from-cart">
                                                <i class="fas fa-trash"></i> 
                                            </button>    
                                            <img class="product-img" src="{$wishlistProduct['product_image']}" alt="Front of men's Basic Tee in black.">    
                                            <div class="product-description-container">       
                                                <div class="description-box">        
                                                    <h3 style="display: inline-block; margin-bottom: .4rem;">      
                                                        <a href="/#" class="product-name">{$wishlistProduct['name']}</a>        
                                                    </h3>               
                                                    <p class="product-code">SKU: {$wishlistProduct['product_id']}</p>     
                                                    <p class="product-price">$ {$wishlistProduct['price']}</p>      
                                                </div>
                                                <div class="wishlist-btn">     
                                                    <button type="submit" class="add-to-cart">Add to cart</button>    
                                                </div>     
                                            </div> 
                                        </div>
                                    </form>
        End;
                }
                echo <<<End
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
