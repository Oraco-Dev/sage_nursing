<?php

get_header();

// homepage post ID
$postID = 219;

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
$schoolTitle = get_field('school_-_title', $postID);
$schoolContent = get_field('school_-_content', $postID);
$schoolImage = get_field('school_-_image', $postID);

// practice
$practiceTitle = get_field('practice_-_title', $postID);
$practiceContent = get_field('practice_-_content', $postID);
$practiceImage = get_field('practice_-_image', $postID);

// escort
$escortTitle = get_field('escort_-_title', $postID);
$escortContent = get_field('escort_-_content', $postID);
$escortImage = get_field('escort_-_image', $postID);

// contact
$contactSubtitle = get_field('contact_-_subtitle', $postID);
$contactTitle = get_field('contact_-_title', $postID);
$contactContent = get_field('contact_-_content', $postID);
$contactForm = get_field('contact_-_form', $postID);



?>

<main class="why-join-us">

    <section class="oc__banner">
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-14.svg"
            alt="Sage Nursing Agency - Watermark" class="oc__banner-watermarkone" />
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-11.svg"
            alt="Sage Nursing Agency - Watermark" class="oc__banner-watermarktwo" />
        <div class="container">
            <div class="oc__banner-outer">
                <div class="oc__banner-outer-head">
                    <span class="alternate-text">
                        <?php echo $pageSubtitle ?>
                    </span>
                    <h2>
                        <?php echo $pageTitle ?>
                    </h2>
                    <div class="oc__banner-outer-head-line"></div>
                </div>
                <?php get_template_part('template-parts/alt-box-left', null, array('btnText' => '', 'btnLink' => '', 'btnVariant' => '', 'isFull' => '', 'extraPadding' => '', 'flexDirection' => '', 'blueBg' => '', 'img' => $introImage, 'imgMask' => 'arch', 'subtitle' => '', 'title' => $introTitle, 'content' => $introContent)); ?>
            </div>
        </div>
    </section>

    <section class="oc__school">
        <div class="container">
            <?php get_template_part('template-parts/alt-box-right', null, array('btnText' => '', 'btnLink' => '', 'btnVariant' => '', 'extraPadding' => 'expad', 'isFull' => '', 'flexDirection' => '', 'img' => $schoolImage, 'imgMask' => 'arch', 'subtitle' => '', 'title' => $schoolTitle, 'content' => $schoolContent, 'infoTitleOne' => '', 'infoContentOne' => '', 'infoTitleTwo' => '', 'infoContentTwo' => '', 'infoTitleThree' => '', 'infoContentThree' => '')); ?>
        </div>
    </section>

    <section class="oc__practice">
        <div class="container">
            <?php get_template_part('template-parts/alt-box-left', null, array('btnText' => '', 'btnLink' => '', 'btnVariant' => '', 'isFull' => '', 'extraPadding' => '', 'flexDirection' => '', 'blueBg' => '', 'img' => $practiceImage, 'imgMask' => 'arch', 'subtitle' => '', 'title' => $practiceTitle, 'content' => $practiceContent)); ?>
        </div>
    </section>

    <section class="oc__escort">
        <div class="container">
            <?php get_template_part('template-parts/alt-box-right', null, array('btnText' => '', 'btnLink' => '', 'btnVariant' => '', 'extraPadding' => 'expad', 'isFull' => '', 'flexDirection' => '', 'img' => $escortImage, 'imgMask' => 'arch', 'subtitle' => '', 'title' => $escortTitle, 'content' => $escortContent, 'infoTitleOne' => '', 'infoContentOne' => '', 'infoTitleTwo' => '', 'infoContentTwo' => '', 'infoTitleThree' => '', 'infoContentThree' => '')); ?>
        </div>
    </section>

    <section class="oc__contact">
        <div class="container">
            <?php get_template_part('template-parts/contact', null, array('subtitle' => $contactSubtitle, 'title' => $contactTitle, 'content' => $contactContent, 'formShortcode' => $contactForm, 'isSocial' => false)); ?>
        </div>
    </section>


    <?php get_template_part('template-parts/call-to-action', null, array('socials' => false, 'title' => 'Need shifts covered?', 'btnText' => 'CALL US: (03) 5910 4343', 'btnLink' => 'tel:0359104343')) ?>
</main>

<?php

get_footer();

?>