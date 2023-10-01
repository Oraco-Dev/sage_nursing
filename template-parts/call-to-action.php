<?php

$isSocialCTA = $args['socials'];
$title = $args['title'];
$btnText = $args['btnText'];
$btnLink = $args['btnLink'];

?>

<section class="cta">
    <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_.svg"
        alt="Sage Nursing Agency - Watermark" class="cta-img" />
    <?php if ($isSocialCTA): ?>
        <h2>
            <?php echo $title ?>
        </h2>
        <div class="cta__socials">
            <a href="https://www.facebook.com/profile.php?id=61550727405978" target="_blank"><img
                    src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Facebook-Negative.svg"
                    class="cta__socials-icon fb" alt="Facebook social icon" /></a>
            <a href="https://www.instagram.com/sagenursingagency/" target="_blank"> <img
                    src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Instagram-Negative.svg"
                    class="cta__socials-icon ig" alt="Instagram social icon" /></a>
            <a href="https://www.linkedin.com/company/sage-nursing-agency" target="_blank"> <img
                    src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector-2-1.svg"
                    class="cta__socials-icon li" alt="LinkedIn social icon" /></a>
        </div>
    <?php else: ?>
        <h2>
            <?php echo $title ?>
        </h2>
        <?php get_template_part('template-parts/button', null, array('buttonText' => $btnText, 'buttonLink' => $btnLink, 'variant' => 'white')); ?>
    <?php endif; ?>
</section>