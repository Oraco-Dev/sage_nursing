<?php get_header();

// homepage post ID
$postID = 257;

// contact
$contactSubtitle = get_field('contact_-_subtitle', $postID);
$contactTitle = get_field('contact_-_title', $postID);
$contactContent = get_field('contact_-_content', $postID);
$contactForm = get_field('contact_-_form', $postID);

?>

<main class="contact-page">

    <section class="co__contact">
        <div class="container">
            <?php get_template_part('template-parts/contact', null, array('subtitle' => $contactSubtitle, 'title' => $contactTitle, 'content' => $contactContent, 'formShortcode' => $contactForm, 'isSocial' => true)); ?>
        </div>
    </section>

    <?php get_template_part('template-parts/call-to-action', null, array('socials' => false, 'title' => 'Need shifts covered?', 'btnText' => 'CALL US: (03) 5910 4343', 'btnLink' => 'tel:0359104343')) ?>
</main>



<?php get_footer(); ?>