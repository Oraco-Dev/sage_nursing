<?php


$footerWorkMenu = array(
    'menu' => 'Work With Us - Footer',
    // Specify the menu name here
    'menu_class' => 'footer__inner-menu-item',
    'menu_id' => 'footer__inner-menu',

);

$footerBookMenu = array(
    'menu' => 'Book Sage - Footer',
    // Specify the menu name here
    'menu_class' => 'footer__inner-menu-item',
    'menu_id' => 'footer__inner-menu',
);

?>

<footer class="footer">
    <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-9.svg"
        alt="Sage Nursing Agency - Watermark" class="footer-img" />
    <div class="container">
        <div class="footer__inner">
            <div class="footer__inner-row one">
                <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/sage-nursing-agency-files-main-logo-navy-full-color-rgb-1SAGE_.svg"
                    alt="" class="footer__inner-col-img" />
            </div>
            <div class="footer__inner-row two">
                <div class="footer__inner-col one">
                    <h4>Do you need shifts covered? <br /> Call us: (03) 59
                        104
                        343
                    </h4>
                </div>
                <div class="footer__inner-col two">
                    <span class="footer-heading">CONTACT</span>
                    <span class="footer-text"><b>Email:</b> <a
                            href="mailto:hello@sagenursing.com.au">hello@sagenursing.com.au</a></span>
                    <span class="footer-text"><b>Phone:</b> <a href="tel:0359104343">(03) 5910 4343</a></span>
                    <span class="footer-text"><b>Mail:</b> <a href="mailto:hello@sagenursing.com.au">P.O Box 283 Baxter,
                            Victoria 3911</a></span>
                    <span class="footer-heading connect">CONNECT WITH US</span>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=61550727405978" target="_blank"><img
                                src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Facebook-Negative.png"
                                class="social-icons-icon fb" alt="Facebook social icon" /></a>
                        <a href="https://www.instagram.com/sagenursingagency/" target="_blank"> <img
                                src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Instagram-Negative.png"
                                class="social-icons-icon ig" alt="Instagram social icon" /></a>
                        <a href="https://www.linkedin.com/company/sage-nursing-agency" target="_blank"> <img
                                src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector.png"
                                class="social-icons-icon li" alt="LinkedIn social icon" /></a>
                    </div>
                </div>
                <div class="footer__inner-col three">
                    <div>
                        <span class="footer-heading">WORK WITH US</span>
                        <?php
                        wp_nav_menu($footerWorkMenu);
                        ?>
                    </div>
                    <div>
                        <span class="footer-heading">BOOK SAGE STAFF</span>
                        <?php
                        wp_nav_menu($footerBookMenu);
                        ?>
                    </div>
                </div>
                <div class="footer__inner-col four">
                    <span class="footer-heading">ACKNOWLEDGMENT OF COUNTRY</span>
                    <span class="footer-text">
                        We acknowledge the Bunurong/Boon Wurrung People, the traditional custodians of the land on which
                        we live and work. We pay our respect to their Elders past, present and emerging, and extend that
                        respect to all Aboriginal and Torres Strait Islander peoples.
                    </span>
                </div>
            </div>

            <div class="footer__inner-row three">
                <div class="hr"></div>
                <div class="footer__inner-row-links">
                    <span class="footer-text">Copyright 2023 © Sage Nursing Agency</span>
                    <span class="footer-text">Privacy Policy | Terms & Conditions</span>
                </div>
            </div>
        </div>
    </div>
    <footer>


        </body>

        </html>

        <?php wp_footer(); ?>