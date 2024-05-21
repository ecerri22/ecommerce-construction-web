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
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <div class="content">
            <div class="wishlist-products-container">
                <h2 class="wishlist-title">Wishlist products</h2>
                <?php

                if (count($allWishlistProducts) != 0) {
                        ?>
                            <div class="wishlist-products">
                                <script>
                                    function removeproduct(product_id){
                                        $.ajax({
                                            type: "POST",
                                            url: "Rosela/removeproductfromwishlist.php",
                                            data: {product_id: product_id,user_id: <?php echo $_SESSION['user']['user_id']; ?>},
                                            success: function(data){
                                                location.reload();
                                            }
                                        });
                                        
                                    }
                                </script>
                        <?php
                        foreach ($allWishlistProducts as $wishlistProduct) {
                            ?>
                            <form action="/wishlist" method="post" class="prod-card-form">
                                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($wishlistProduct['product_id']); ?>">
                                <div class="product-card">
                                    <button onclick = 'removeproduct(<?php echo htmlspecialchars($wishlistProduct["product_id"]) ?>)' type="button" class="remove-from-cart">
                                        <i class="fas fa-trash"></i> 
                                    </button>
                                    <img class="product-img" src="<?php echo htmlspecialchars($wishlistProduct['product_image']); ?>" alt="Product image">    
                                    <div class="product-description-container">       
                                        <div class="description-box">        
                                            <h3 style="display: inline-block; margin-bottom: .4rem;">      
                                                <a href="/#" class="product-name"><?php echo htmlspecialchars($wishlistProduct['name']); ?></a>        
                                            </h3>               
                                            <p class="product-code">SKU: <?php echo htmlspecialchars($wishlistProduct['product_id']); ?></p>     
                                            <p class="product-price">$ <?php echo htmlspecialchars($wishlistProduct['price']); ?></p>      
                                        </div>
                                        <div class="wishlist-btn">     
                                            <button type="submit" class="add-to-cart">Add to cart</button>    
                                        </div>     
                                    </div> 
                                </div>
                            </form>
                            <?php
                        }
                    } else {
                        ?>
                            <div class="nothing-to-show">
                                <div class="container-nothing-to-show">
                                    <h2 class="nothing-to-show-h2">Nothing to show here</h2>
                                    <p class="no-prod-p-expl">You haven't added anything yet</p>
                                    <a class="go-allprod-btn" href="/allProducts">Go back to All Products</a>
                                </div>
                            </div>
                            <style>
                                .nothing-to-show {
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    justify-content: center;
                                    height: 50vh;
                                }
                                .container-nothing-to-show{
                                    text-align: center;
                                    color: #fd7e14;
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    justify-content: center;
                                    gap: 2.1rem;
                                }

                                .go-allprod-btn {
                                    text-decoration: none;
                                    background: #061538; 
                                    color: #fff; 
                                    padding: 0.75rem 1.5rem; 
                                    font-size: 0.9rem;
                                    text-transform: uppercase;
                                    transition: background-color 0.4s, color 0.4s;
                                    cursor: pointer;
                                    max-width: max-content;
                                }

                                .go-allprod-btn:hover {
                                    background: #081f54;
                                }

                                .nothing-to-show-h2 {
                                    font-size: 2.2rem;
                                }

                                .no-prod-p-expl {
                                    font-size: 1rem;
                                    color: #888;
                                }
                            </style>
                        <?php
                    }
                    ?>
                </div>
            </div>         
        </div>
        <?php
    }

    private function renderFooter() {
        $footer = new Footer();
        $footer->render();
    }  
}
?>
