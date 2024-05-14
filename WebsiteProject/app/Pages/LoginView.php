<?php
namespace Pages;

class LoginView {
    private $partials;

    public function __construct($title, $cssFile) {
        $this->partials = new Header($title, $cssFile);
    }

    public function render($errors = []) {
        ?>
            <?php $this->partials->render() ?>
            <?php $this->renderContent($errors); ?>
            <?php $this->renderFooter(); ?>
        </body>
        </html>
        <?php
    }

    private function renderContent($errors = []) {
        ?>
        <div class="content">
        <h1 class="titleH1">Customer Login </h1>

        <div class="login-container">
            <form class="login-form" action="/login" method="POST">
                <p class="heading">Registered Customers </p>

                <div class="input-field">
                    <label for="email" class="labels">Email address</label>
                    <input type="text" name="email">
                    <?php if (isset($errors['email'])) : ?>
                        <p style="color: red; font-size:1rem; margin-top:0.4;"><?= $errors['email'] ?></p>
                    <?php endif ?>
                </div>


                <div class="input-field">
                    <label for="pass" class="labels">Password</label>
                    <input type="password" name="pass">
                    <?php if (isset($errors['password'])) : ?>
                        <p style="color: red; font-size:1rem; margin-top:0.4;"><?= $errors['password'] ?></p>
                    <?php endif ?>
                </div>

                <button type="submit" class="button">Login </button>
            </form>
            <div class="signup-part">
                <p class="heading">New Customers</p>
                <p class="info-signup">Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
                <a href="/signup" class="button create-acc-btn-login">Create An Account</a>
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