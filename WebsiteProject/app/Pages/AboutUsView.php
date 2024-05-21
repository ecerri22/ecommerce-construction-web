<?php
namespace Pages;

class AboutUsView {
    private $partials;

    public function __construct($title, $cssFile) {
        $this->partials = new Header($title, $cssFile);
    }

    public function render($data = []) {
        ?>
            <?php $this->partials->render() ?>
            <?php $this->renderContent($data); ?>
            <?php $this->renderFooter(); ?>
        </body>
        </html>
        <?php
    }

    private function renderContent($data = []) {
        ?>
            <div class="content">
                <section class="about-us">
                    <div class="about-container">
                    
                        <h2 class="header">About Our Company</h2>
                        <p><?= $data[0]['content']; ?></p>
                        
                        <div class="history">
                            <h3>Our History </h3>
                            <p><?= $data[1]['content']; ?></p>
                        </div>

                        <div class="team">
                            <h3>Meet Our Team</h3>
                            <div class="team-members">
                                <div class="team-member">
                                    <img src="/image/customer-4.jpg" alt="Person 1" class="team-photo">
                                    <div class="member-info">
                                        <h4>John Doe </h4>
                                        <p>CEO & Founder</p>
                                    </div>
                                </div>
                                <div class="team-member">
                                    <img src="/image/customer-1.jpg" alt="Person 2" class="team-photo">
                                    <div class="member-info">
                                        <h4>Jane Doe</h4>
                                        <p>Chief Engineer</p>
                                    </div>
                                </div>
                                <div class="team-member">
                                    <img src="/image/person-9.jpg" alt="Person 3" class="team-photo">
                                    <div class="member-info">
                                        <h4>James Smith</h4>
                                        <p>Project Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mission">
                            <h3>Our Mission</h3>
                            <p><?= $data[2]['content']; ?>.</p>
                        </div>

                        <div class="value">
                            <h3>Our Valued Clients</h3>
                            <p><?= $data[3]['content']; ?></p>
                        </div>

                        <div class="why-us">
                            <h3>Why us?</h3>
                            <p><?= $data[4]['content']; ?></p>
                        </div> 
                    </div>
                </section>
            </div>
        <?php
    }
           
    private function renderFooter() {
        $footer = new Footer();
        $footer->render();
    }      
}
