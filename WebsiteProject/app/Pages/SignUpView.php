<?php

namespace Pages;

class SignUpView {
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
        <link rel="stylesheet" href="Daniela/styleSignup.css">
        <div class="content">
                <h1 class="titleH1"> Create your Account</h1>
                <form class="formSignUp" method="post" action="/signup">
                    <div class="first-last-name">
                        <div class="input-field">
                            <label for="fname" class="labels">first name</label>
                            <input type="text" name="fname" class="input-form" placeholder="Enter your first name" />
                        </div>
                        <div class="input-field">
                            <label for="lname"class="labels">last name</label>
                            <input type="text" name="lname" class="input-form" placeholder="Enter your last name"/>
                        </div>
                    </div>
                    <div class="input-field">
                        <label for="email"class="labels">email</label>
                        <input type="text" name="email"class="input-form" placeholder="Enter your email">
                    </div>
                    <div class="input-field">
                        <label for="pass"class="labels">password</label>
                        <input type="password" name="pass" class="input-form" placeholder="Enter the password">
                    </div>
                    <input class="create-account-btn" type="submit" name="create-account" value="Sign up"/>
                </form>     
            </div>
        <?php
    }
           
    private function renderFooter() {
        $footer = new Footer();
        $footer->render();
    }      
}

