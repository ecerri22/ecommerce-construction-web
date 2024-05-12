<?php
namespace Pages;

class LoginView {
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
        <h1 class="titleH1">Customer Login </h1>

        <div class="login-container">
            <form class="login-form">
                <p class="heading">Registered Customers </p>

                <div class="input-field">
                    <label for="email" class="labels">email address</label>
                    <input type="text" name="email"/>
                </div>

                <div class="input-field">
                    <label for="pass"class="labels">password</label>
                    <input type="password" name="pass"/>
                </div>

                <button type="submit" class="button">Login </button>
            </form>
            <div class="signup-part">
                <p class="heading">New Customers</p>
                <p class="info-signup">Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
                <a href="signupForm.html" class="button create-acc-btn-login">Create An Account</a>
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