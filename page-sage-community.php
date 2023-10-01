<?php

get_header();

// homepage post ID
$postID = 269;

// featured image URL
$featured_image_url = get_the_post_thumbnail_url($postID, 'full');

// page intro - sage
$pageSubtitle = get_field('page_-_subtitle', $postID);
$pageTitle = get_field('page_-_title', $postID);

// intro
$introTitle = get_field('intro_-_title', $postID);
$introContent = get_field('intro_-_content', $postID);
$introImage = get_field('intro_-_image', $postID);

// intro
$offerTitle = get_field('offer_-_title', $postID);
$offerContent = get_field('offer_-_content', $postID);
$offerImage = get_field('offer_-_image', $postID);

// practice
$whoTitle = get_field('who_-_title', $postID);
$whoContent = get_field('who_-_content', $postID);
$whoImage = get_field('who_-_image', $postID);

// escort
$howTitle = get_field('how_-_title', $postID);
$howContent = get_field('how_-_content', $postID);
$howImage = get_field('how_-_image', $postID);

// contact
$contactSubtitle = get_field('contact_-_subtitle', $postID);
$contactTitle = get_field('contact_-_title', $postID);
$contactContent = get_field('contact_-_content', $postID);
$contactForm = get_field('contact_-_form', $postID);



?>

<main class="sage-community">

    <section class="sc__banner">
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-14.svg"
            alt="Sage Nursing Agency - Watermark" class="sc__banner-watermarkone" />
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-11.svg"
            alt="Sage Nursing Agency - Watermark" class="sc__banner-watermarktwo" />
        <div class="container">
            <div class="sc__banner-outer">
                <div class="sc__banner-outer-head">
                    <span class="alternate-text">
                        <?php echo $pageSubtitle ?>
                    </span>
                    <h2>
                        <?php echo $pageTitle ?>
                    </h2>
                    <div class="sc__banner-outer-head-line"></div>
                </div>
                <?php get_template_part('template-parts/alt-box-left', null, array('btnText' => '', 'btnLink' => '', 'btnVariant' => '', 'isFull' => '', 'extraPadding' => '', 'flexDirection' => '', 'blueBg' => '', 'img' => $introImage, 'imgMask' => 'arch', 'subtitle' => '', 'title' => $introTitle, 'content' => $introContent)); ?>
            </div>
        </div>
    </section>

    <section class="sc__offer">
        <div class="container">
            <?php get_template_part('template-parts/alt-box-right', null, array('btnText' => '', 'btnLink' => '', 'btnVariant' => '', 'extraPadding' => 'expad', 'isFull' => '', 'flexDirection' => '', 'img' => $offerImage, 'imgMask' => 'arch', 'subtitle' => '', 'title' => $offerTitle, 'content' => $offerContent, 'infoTitleOne' => '', 'infoContentOne' => '', 'infoTitleTwo' => '', 'infoContentTwo' => '', 'infoTitleThree' => '', 'infoContentThree' => '')); ?>
        </div>
    </section>

    <section class="sc__join">
        <div class="container">
            <?php get_template_part('template-parts/alt-box-left', null, array('btnText' => '', 'btnLink' => '', 'btnVariant' => '', 'isFull' => '', 'extraPadding' => '', 'flexDirection' => '', 'blueBg' => '', 'img' => $whoImage, 'imgMask' => 'arch', 'subtitle' => '', 'title' => $whoTitle, 'content' => $whoContent)); ?>
        </div>
    </section>

    <section class="sc__how">
        <div class="container">
            <?php get_template_part('template-parts/alt-box-right', null, array('btnText' => '', 'btnLink' => '', 'btnVariant' => '', 'extraPadding' => 'expad', 'isFull' => '', 'flexDirection' => '', 'img' => $howImage, 'imgMask' => 'arch', 'subtitle' => '', 'title' => $howTitle, 'content' => $howContent, 'infoTitleOne' => '', 'infoContentOne' => '', 'infoTitleTwo' => '', 'infoContentTwo' => '', 'infoTitleThree' => '', 'infoContentThree' => '')); ?>
        </div>
    </section>

    <!-- <section class="sc__contact">
        <div class="container">
            <?php get_template_part('template-parts/contact', null, array('subtitle' => $contactSubtitle, 'title' => $contactTitle, 'content' => $contactContent, 'formShortcode' => $contactForm, 'isSocial' => false)); ?>
        </div>
    </section> -->


    <?php get_template_part('template-parts/call-to-action', null, array('socials' => false, 'title' => 'Become a Sage member?', 'btnText' => 'JOIN THE TEAM', 'btnLink' => '')) ?>
</main>

<?php

get_footer();

?>