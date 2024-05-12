<?php
namespace Pages;

class AboutUsView {
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
                <section class="about-us">
                    <div class="about-container">
                    
                        <h2 class="header">About Our Company</h2>
                        <p>Construction Web has been a pioneer in the construction industry since 1998, specializing in both residential and commercial projects. Our commitment to innovation and excellence has established us as a leader in the field, delivering projects that not only meet but exceed our clients' expectations.</p>
                        
                        <div class="history">
                            <h3>Our History </h3>
                            <p>Founded by a group of ambitious engineers, Construction Web started as a small firm focused on small to medium-sized construction projects. Over the years, we have expanded our expertise to include large-scale commercial developments, gaining recognition for our sustainable practices and cutting-edge architectural designs.</p>
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
                            <p>To lead the construction industry by creating unparalleled value for our clients through innovation, foresight, and reliability, ensuring that our projects are completed on time, on budget, and to the highest standards of quality.</p>
                        </div>

                        <div class="value">
                            <h3>Our Valued Clients</h3>
                            <p>Our team has always embraced our clients and partners as part of Our Team. Every project is performed with open communication. The Partnering methodology is implemented and a mutual respect with our clients provides the groundwork for our success</p>
                        </div>

                        <div class="why-us">
                            <h3>Why us?</h3>
                            <p>Choose our construction company for unparalleled expertise, meticulous attention to detail, and a commitment to exceeding expectations. With a proven track record of delivering exceptional results, we ensure your project is completed on time, within budget, and to the highest standards.</p>
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
