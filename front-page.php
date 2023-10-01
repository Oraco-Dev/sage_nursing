<?php get_header();

// homepage post ID
$postID = 51;

// featured image URL
$featured_image_url = get_the_post_thumbnail_url($postID, 'full');

// welcome to sage
$welcomeSubtitle = get_field('welcome_-_subtitle', $postID);
$welcomeTitle = get_field('welcome_-_title', $postID);
$welcomeContent = get_field('welcome_-_content', $postID);
$welcomeImage = get_field('welcome_-_image', $postID);

// what we do
$boxOneTitle = get_field('box_one_-_title', $postID);
$boxOneContent = get_field('box_one_-_content', $postID);
$boxTwoTitle = get_field('box_two_-_title', $postID);
$boxTwoContent = get_field('box_two_-_content', $postID);
$boxThreeTitle = get_field('box_three_-_title', $postID);
$boxThreeContent = get_field('box_three_-_content', $postID);
$boxFourTitle = get_field('box_four_-_title', $postID);
$boxFourContent = get_field('box_four_-_content', $postID);

// why us
$workSubtitle = get_field('work_-_subtitle', $postID);
$workTitle = get_field('work_-_title', $postID);
$workContent = get_field('work_-_content', $postID);
$workImage = get_field('work_-_image', $postID);
$workInfoOneTitle = get_field('work_-_info_one_title', $postID);
$workInfoOneContent = get_field('work_-_info_one_content', $postID);
$workInfoTwoTitle = get_field('work_-_info_two_title', $postID);
$workInfoTwoContent = get_field('work_-_info_two_content', $postID);
$workInfoThreeTitle = get_field('work_-_info_three_title', $postID);
$workInfoThreeContent = get_field('work_-_info_three_content', $postID);

// with us
$withSubtitle = get_field('with_us_-_subtitle', $postID);
$withTitle = get_field('with_us_-_title', $postID);
$withContent = get_field('with_us_-_content', $postID);
$withImage = get_field('with_us_-_image', $postID);
?>

<main class="front-page">

    <section class="fp__banner">
        <div class="fp__banner-overlay"></div>
        <img src="<?php echo $featured_image_url ?>" alt="Background Image - A nurse holding a womans hand"
            class="fp__banner-bgimg" />
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/sage-nursing-agency-files-wordmark-navy-full-color-rgbSAGE_.svg"
            alt="Sage Nursing Agency - Logo" class="fp__banner-logoimg" />
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-12.svg"
            alt="Sage Nursing Agency - Watermark" class="fp__banner-watermarkone" />
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-3.svg"
            alt="Sage Nursing Agency - Watermark" class="fp__banner-watermarktwo" />
    </section>

    <section class="fp__boxes">
        <div class="fp__boxes-box one">
            <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector.svg"
                alt="Sage Nursing Agency - Watermark" class="fp__boxes-box-img" />
            <h3>Looking for a nursing job?</h3>

            <a href="" class="alternate-text">LEARN MORE <img
                    src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Arrow.svg"
                    alt="Right Arrow - Indicating this is clickable" class="fp__boxes-box-arrow" /></a>
        </div>
        <div class="fp__boxes-box two">
            <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector-1.svg"
                alt="Sage Nursing Agency - Watermark" class="fp__boxes-box-img" />
            <h3>Book Sage <br /> Staff</h3>
            <a href="" class="alternate-text">LEARN MORE <img
                    src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Arrow-1.svg"
                    alt="Right Arrow - Indicating this is clickable" class="fp__boxes-box-arrow" /></a>
        </div>
    </section>

    <section class="fp__welcome">
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-17.svg"
            alt="Sage Nursing Agency - Watermark" class="fp__welcome-watermark" />
        <div class="container">
            <?php get_template_part('template-parts/alt-box-left', null, array('btnText' => '', 'btnLink' => '', 'btnVariant' => '', 'isFull' => '', 'blueBg' => '', 'img' => $welcomeImage, 'imgMask' => 'arch', 'subtitle' => $welcomeSubtitle, 'title' => $welcomeTitle, 'content' => $welcomeContent)); ?>
        </div>
    </section>

    <section class="fp__services">
        <div class="fp__services-intro">
            <span class="alternate-text">
                STAFFING SOLUTIONS
            </span>
            <h2>What we do best</h2>
        </div>
        <div class="fp__services-cards">
            <div class="fp__services-cards-card one">
                <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector.svg"
                    alt="Sage Nursing Agency - Watermark" class="fp__services-cards-card-img" />
                <h3>
                    <?php echo $boxOneTitle ?>
                </h3>
                <p>
                    <?php echo $boxOneContent ?>
                </p>
                <?php get_template_part('template-parts/button', null, array('buttonText' => 'LEARN MORE', 'buttonLink' => '', 'variant' => 'sage')); ?>
            </div>
            <div class="fp__services-cards-card two">
                <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector-1.svg"
                    alt="Sage Nursing Agency - Watermark" class="fp__services-cards-card-img" />
                <h3>
                    <?php echo $boxTwoTitle ?>
                </h3>
                <p>
                    <?php echo $boxTwoContent ?>
                </p>
                <?php get_template_part('template-parts/button', null, array('buttonText' => 'LEARN MORE', 'buttonLink' => '', 'variant' => 'blue')); ?>
            </div>
            <div class="fp__services-cards-card three">
                <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector-1.svg"
                    alt="Sage Nursing Agency - Watermark" class="fp__services-cards-card-img" />
                <h3>
                    <?php echo $boxThreeTitle ?>
                </h3>
                <p>
                    <?php echo $boxThreeContent ?>
                </p>
                <?php get_template_part('template-parts/button', null, array('buttonText' => 'LEARN MORE', 'buttonLink' => '', 'variant' => 'white')); ?>
            </div>
            <div class="fp__services-cards-card four">
                <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector-1.svg"
                    alt="Sage Nursing Agency - Watermark" class="fp__services-cards-card-img" />
                <h3>
                    <?php echo $boxFourTitle ?>
                </h3>
                <p>
                    <?php echo $boxFourContent ?>
                </p>
                <?php get_template_part('template-parts/button', null, array('buttonText' => 'LEARN MORE', 'buttonLink' => '', 'variant' => 'blue')); ?>
            </div>
        </div>
    </section>

    <section class="fp__work">
        <div class="container">
            <?php get_template_part('template-parts/alt-box-right', null, array('btnText' => 'LEARN MORE', 'btnLink' => '', 'btnVariant' => 'sage', 'extraPadding' => '', 'isFull' => 'full', 'flexDirection' => 'col-reverse', 'img' => $workImage, 'imgMask' => '', 'subtitle' => $workSubtitle, 'title' => $workSubtitle, 'content' => $workContent, 'infoTitleOne' => $workInfoOneTitle, 'infoContentOne' => $workInfoOneContent, 'infoTitleTwo' => $workInfoTwoTitle, 'infoContentTwo' => $workInfoTwoContent, 'infoTitleThree' => $workInfoThreeTitle, 'infoContentThree' => $workInfoThreeContent)); ?>
        </div>
    </section>

    <section class="fp__community">
        <?php get_template_part('template-parts/alt-box-left', null, array('btnText' => 'LEARN MORE', 'btnLink' => '', 'btnVariant' => 'sage', 'isFull' => 'full', 'imgMask' => '', 'blueBg' => 'blue-bg', 'img' => $withImage, 'subtitle' => $withSubtitle, 'title' => $withTitle, 'content' => $withContent)); ?>
    </section>

    <?php get_template_part('template-parts/call-to-action', null, array('socials' => false, 'title' => 'Become a Sage member!', 'btnText' => 'JOIN THE TEAM', 'btnLink' => '')) ?>

</main>



<?php get_footer(); ?>