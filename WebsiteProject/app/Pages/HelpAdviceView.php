<?php
namespace Pages;

class HelpAdviceView {
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
        <h1 class="titleH1">Help and Advice</h1>
        <ol class="listO">
            <li>
                <p class="question">How can I pay for online purchase?</p>
                <p class="answer">You can purchase online via our site by choosing one of these payment methods: using a debit or credit card (Visa Card/Mastercard), through Paypal using your account, Bank deposit and Payment on delivery.</p>
            </li>
            <li>
                <p class="question">How much does transportation of orders cost?</p>
                <p class="answer">The cost of transport is calculated automatically when you go to Checkout. Product prices do not include the cost of transport, it is the Client's responsability to choose a mode of tranport for each online order. The cost of transport is calculated at the end depending on the weight and volume of your order and the selected mode of transportation. For more information on this topic please click here</p>
            </li>
            <li>
                <p class="question">Where do you deliver?</p>
                <p class="answer">Our company delivers on majority of cities in Albania. If you wish to get notified when we will be shipping to other countries or to your country, please register to receive our Newsletter.</p>
            </li>
            <li>
                <p class="question">How long does an order need to be delivered?</p>
                <p class="answer">When your order is sent we notify with an email. If you order within 18:00 hour the order will be proccessed and delivered within 90 minutes in Tirana, Durrës, Kruja, Fushë-Kruja. It will be delivered the next day for the other cities.</p>
            </li>
            <li>
                <p class="question">How can you make sure that my personal information will not be missused?</p>
                <p class="answer">(name, address, email address, password) our company is fully compliant with all requirements of the Law on Protection of Personal Data and has filed with the Commissioner on the Protection of Personal Data as required. The only way we use your personal data is to make certain that we deliver orders to the right address, improve our services to clients and to notify you know on our companies offers and news. We are always striving to better serve our clients.</p>
            </li>
            <li>
                <p class="question">If I wish to return a product, what should I do?</p>
                <p class="answer">Our company accepts returned products within a period of 14 days from the date of purchase only if it has the original intact packaging, the product should not be damadged and must have all its components, instruction of use, and the receipt to prove the purchase or online confirmation.</p>
            </li>
        </ol>
    </div>
        <?php
    }
           
    private function renderFooter() {
        $footer = new Footer();
        $footer->render();
    }   
}
