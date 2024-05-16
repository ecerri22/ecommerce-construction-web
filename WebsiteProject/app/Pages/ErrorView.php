<?php
namespace Pages;

class ErrorView {
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

    private function renderContent() {
        ?>
            <div class="content">
                <div class="container">
                    <h2>Oops! Page not found.</h2>
                    <h1>404</h1>
                    <p>We can't find the page you're looking for</p>
                    <a href="#">Go back home</a>
                </div>
            </div>
        <?php
    }
           
    private function renderFooter() {
        $footer = new Footer();
        $footer->render();
    }    
}
