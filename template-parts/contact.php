<?php

// content
$subtitle = $args['subtitle'];
$title = $args['title'];
$content = $args['content'];
$formShortcode = $args['formShortcode'];

// styling
$isSocial = $args['isSocial'];

?>

<div class="contact">
    <div class="contact__left">
        <h2>
            <?php echo $title ?>
        </h2>
        <h4>
            <?php echo $subtitle ?>
        </h4>
        <p>
            <?php echo $content ?>
        </p>
        <div class="contact__left-icons">
            <div class="contact__left-icons-icon">
                <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector-2.svg" alt="" />
                <a href="tel:0359104343">
                    <p>(03) 5910 4343</p>
                </a>
            </div>
            <div class="contact__left-icons-icon">
                <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector-1-1.svg" alt="" />
                <a href="mailto:hello@sagenursing.com.au">
                    <p>hello@sagenursing.com.au</p>
                </a>
            </div>
        </div>
        <?php if ($isSocial): ?>
            <span class="footer-heading">CONNECT WITH US</span>
            <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=61550727405978" target="_blank"><img
                        src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Facebook-Negative-1.svg"
                        class="social-icons-icon fb" alt="Facebook social icon" /></a>
                <a href="https://www.instagram.com/sagenursingagency/" target="_blank"> <img
                        src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Instagram-Negative-1.svg"
                        class="social-icons-icon ig" alt="Instagram social icon" /></a>
                <a href="https://www.linkedin.com/company/sage-nursing-agency" target="_blank"> <img
                        src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector-4.svg"
                        class="social-icons-icon li" alt="LinkedIn social icon" /></a>
            </div>
        <?php endif; ?>
    </div>
    <div class="contact__right">
        <div class="contact__right-form">
            <?php echo do_shortcode($formShortcode); ?>
        </div>
    </div>

</div>