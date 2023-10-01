<?php

get_header();

// homepage post ID
$postID = 155;

// featured image URL
$featured_image_url = get_the_post_thumbnail_url($postID, 'full');

// join us intro - sage
$joinSubtitle = get_field('join_-_subtitle', $postID);
$joinTitle = get_field('join_-_title', $postID);

// community - sage
$communitySubtitle = get_field('community_-_subtitle', $postID);
$communityTitle = get_field('community_-_title', $postID);
$communityContent = get_field('community_-_content', $postID);
$communityImage = get_field('community_-_image', $postID);

// community
$boxOneTitle = get_field('box_one_-_title', $postID);
$boxTwoTitle = get_field('box_two_-_title', $postID);
$boxThreeTitle = get_field('box_three_-_title', $postID);
$boxFourTitle = get_field('box_four_-_title', $postID);

// benefits - sage
$benefitsSubtitle = get_field('benefits_-_subtitle', $postID);
$benefitsTitle = get_field('benefits_-_title', $postID);
$benefitsImage = get_field('benefits_-_image', $postID);
$benefitsInfoOneTitle = get_field('benefits_-_info_one_title', $postID);
$benefitsInfoOneContent = get_field('benefits_-_info_one_content', $postID);
$benefitsInfoTwoTitle = get_field('benefits_-_info_two_title', $postID);
$benefitsInfoTwoContent = get_field('benefits_-_info_two_content', $postID);
$benefitsInfoThreeTitle = get_field('benefits_-_info_three_title', $postID);
$benefitsInfoThreeContent = get_field('benefits_-_info_three_content', $postID);

// join us
$nurseSubtitle = get_field('nurse_-_subtitle', $postID);
$nurseTitle = get_field('nurse_-_title', $postID);
$nurseContent = get_field('nurse_-_content', $postID);
$careerSubtitle = get_field('career_-_subtitle', $postID);
$careerTitle = get_field('career_-_title', $postID);
$careerTitleJobs = get_field('career_-_title_jobs', $postID);
$careerContent = get_field('career_-_content', $postID);

// contact
$contactSubtitle = get_field('contact_-_subtitle', $postID);
$contactTitle = get_field('contact_-_title', $postID);
$contactContent = get_field('contact_-_content', $postID);
$contactForm = get_field('contact_-_form', $postID);



?>

<section class="wj__banner">
    <div class="wj__banner-overlay"></div>
    <img src="<?php echo $featured_image_url ?>" alt="Background Image - A nurse holding a womans hand"
        class="wj__banner-bgimg" />
    <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-12.svg"
        alt="Sage Nursing Agency - Watermark" class="wj__banner-watermarkone" />
    <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-3.svg"
        alt="Sage Nursing Agency - Watermark" class="wj__banner-watermarktwo" />
    <div class="container">
        <div class="wj__banner-outer">
            <span class="alternate-text">
                <?php echo $joinSubtitle ?>
            </span>
            <h2>
                <?php echo $joinTitle ?>
            </h2>
        </div>
    </div>
</section>

<section class="wb__community">
    <div class="container">
        <?php get_template_part('template-parts/alt-box-right', null, array('btnText' => 'FIND OUT MORE', 'btnLink' => '', 'btnVariant' => 'sage', 'isFull' => '', 'extraPadding' => 'expad', 'flexDirection' => '', 'img' => $communityImage, 'imgMask' => 'arch', 'subtitle' => $communitySubtitle, 'title' => $communityTitle, 'content' => $communityContent, 'infoTitleOne' => '', 'infoContentOne' => '', 'infoTitleTwo' => '', 'infoContentTwo' => '', 'infoTitleThree' => '', 'infoContentThree' => '')); ?>
    </div>
</section>

<section class="wj__services">
    <div class="wj__services-intro">
        <span class="alternate-text">
            STAFFING SOLUTIONS
        </span>
        <h2>What we do best</h2>
    </div>
    <div class="wj__services-cards">
        <div class="wj__services-cards-card one">
            <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector.svg"
                alt="Sage Nursing Agency - Watermark" class="wj__services-cards-card-img" />
            <h3>
                <?php echo $boxOneTitle ?>
            </h3>
            <?php get_template_part('template-parts/button', null, array('buttonText' => 'APPLY NOW', 'buttonLink' => '', 'variant' => 'sage')); ?>
        </div>
        <div class="wj__services-cards-card two">
            <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector-1.svg"
                alt="Sage Nursing Agency - Watermark" class="wj__services-cards-card-img" />
            <h3>
                <?php echo $boxTwoTitle ?>
            </h3>
            <?php get_template_part('template-parts/button', null, array('buttonText' => 'APPLY NOW', 'buttonLink' => '', 'variant' => 'blue')); ?>
        </div>
        <div class="wj__services-cards-card three">
            <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector-1.svg"
                alt="Sage Nursing Agency - Watermark" class="wj__services-cards-card-img" />
            <h3>
                <?php echo $boxThreeTitle ?>
            </h3>
            <?php get_template_part('template-parts/button', null, array('buttonText' => 'APPLY NOW', 'buttonLink' => '', 'variant' => 'white')); ?>
        </div>
        <div class="wj__services-cards-card four">
            <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector-1.svg"
                alt="Sage Nursing Agency - Watermark" class="wj__services-cards-card-img" />
            <h3>
                <?php echo $boxFourTitle ?>
            </h3>
            <?php get_template_part('template-parts/button', null, array('buttonText' => 'APPLY NOW', 'buttonLink' => '', 'variant' => 'blue')); ?>
        </div>
    </div>
</section>

<section class="wj__work">
    <div class="container">
        <?php get_template_part('template-parts/alt-box-right', null, array('btnText' => 'LEARN MORE', 'btnLink' => '', 'btnVariant' => 'sage', 'extraPadding' => '', 'isFull' => 'full', 'flexDirection' => 'col-reverse', 'img' => $benefitsImage, 'imgMask' => '', 'subtitle' => $benefitsSubtitle, 'title' => $benefitsTitle, 'content' => '', 'infoTitleOne' => $benefitsInfoOneTitle, 'infoContentOne' => $benefitsInfoOneContent, 'infoTitleTwo' => $benefitsInfoTwoTitle, 'infoContentTwo' => $benefitsInfoTwoContent, 'infoTitleThree' => $benefitsInfoThreeTitle, 'infoContentThree' => $benefitsInfoThreeContent)); ?>
    </div>
</section>

<section class="wj__accordion" id="faq">
    <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-5.svg"
        alt="Sage Nursing Agency - Watermark" class="wj__accordion-img" />
    <div class="container">
        <h2 class="wj__accordion-head">FAQ's</h2>
        <div class="accordion">
            <?php get_template_part('template-parts/accordion', null, array('post_id' => $postID)); ?>
        </div>
    </div>
</section>

<section class="wj__join">
    <div class="wj__join-left">
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-6.svg"
            alt="Sage Nursing Agency - Watermark" class="wj__join-left-img" />
        <span class="alternate-text">
            <?php echo $nurseSubtitle ?>
        </span>
        <h2>
            <?php echo $nurseTitle ?>
        </h2>
        <p>
            <?php echo $nurseContent ?>
            </h3>
        </p>
        <?php get_template_part('template-parts/button', null, array('buttonText' => 'APPLY NOW', 'buttonLink' => '', 'variant' => 'sage')); ?>
    </div>
    <div class="wj__join-right">
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-7.svg"
            alt="Sage Nursing Agency - Watermark" class="wj__join-right-img" />
        <span class="alternate-text">
            <?php echo $careerSubtitle ?>
        </span>
        <div>
            <h2>
                <?php echo $careerTitle ?>
            </h2>
            <span class="alternate-text">
                <?php echo $careerTitleJobs ?>
            </span>
        </div>
        <p>
            <?php echo $careerContent ?>
            </h3>
        </p>
        <?php get_template_part('template-parts/button', null, array('buttonText' => 'APPLY NOW', 'buttonLink' => '', 'variant' => 'blue')); ?>
    </div>
</section>

<section class="wj__contact">
    <div class="container">
        <?php get_template_part('template-parts/contact', null, array('subtitle' => $contactSubtitle, 'title' => $contactTitle, 'content' => $contactContent, 'formShortcode' => $contactForm, 'isSocial' => false)); ?>
    </div>
</section>

<?php get_template_part('template-parts/call-to-action', null, array('socials' => true, 'title' => 'Connect with us', 'btnText' => '', 'btnLink' => '')) ?>

<?php

get_footer();

?>