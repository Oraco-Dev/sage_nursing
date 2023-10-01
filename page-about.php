<?php get_header();

// homepage post ID
$postID = 67;

// featured image URL
$featured_image_url = get_the_post_thumbnail_url($postID, 'full');

// welcome to sage
$introSubtitle = get_field('intro_-_subtitle', $postID);
$introTitle = get_field('intro_-_title', $postID);
$introContent = get_field('intro_-_content', $postID);
$introImage = get_field('intro_-_image', $postID);

// about
$aboutSubtitle = get_field('about_-_subtitle', $postID);
$aboutTitle = get_field('about_-_title', $postID);
$aboutContent = get_field('about_-_content', $postID);
$aboutImage = get_field('about_-_image', $postID);

// core values
$boxOneTitle = get_field('box_one_-_title', $postID);
$boxOneContent = get_field('box_one_-_content', $postID);
$boxTwoTitle = get_field('box_two_-_title', $postID);
$boxTwoContent = get_field('box_two_-_content', $postID);
$boxThreeTitle = get_field('box_three_-_title', $postID);
$boxThreeContent = get_field('box_three_-_content', $postID);
$boxFourTitle = get_field('box_four_-_title', $postID);
$boxFourContent = get_field('box_four_-_content', $postID);

// meaning of life
$meaningTitle = get_field('meaning_-_title', $postID);
$meaningContent = get_field('meaning_-_content', $postID);
$meaningQuote = get_field('meaning_-_quote', $postID);

// Query for Personal Services
$staff_members_query = new WP_Query(
    array(
        'post_type' => 'staff_members',
        'posts_per_page' => -1,
        // -1 to retrieve all posts
    )
);

?>

<main class="about-page">

    <section class="ab__banner">
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-14.svg"
            alt="Sage Nursing Agency - Watermark" class="ab__banner-watermarkone" />
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-9.svg"
            alt="Sage Nursing Agency - Watermark" class="ab__banner-watermarktwo" />
        <div class="container">
            <?php get_template_part('template-parts/alt-box-right', null, array('btnText' => '', 'btnLink' => '', 'btnVariant' => '', 'isFull' => '', 'extraPadding' => 'expad', 'flexDirection' => '', 'img' => $introImage, 'imgMask' => 'arch', 'subtitle' => $introSubtitle, 'title' => $introTitle, 'content' => $introContent, 'infoTitleOne' => '', 'infoContentOne' => '', 'infoTitleTwo' => '', 'infoContentTwo' => '', 'infoTitleThree' => '', 'infoContentThree' => '')); ?>
        </div>
    </section>

    <section class="ab__mission">
        <!-- <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-14.svg"
            alt="Sage Nursing Agency - Watermark" class="ab__mission-img" /> -->
        <div class="container">
            <?php get_template_part('template-parts/alt-box-left', null, array('btnText' => '', 'btnLink' => '', 'btnVariant' => '', 'isFull' => '', 'blueBg' => '', 'img' => $aboutImage, 'imgMask' => '', 'subtitle' => $aboutSubtitle, 'title' => $aboutTitle, 'content' => $aboutContent)); ?>
        </div>
    </section>

    <section class="fp__services">
        <div class="fp__services-intro">
            <h2>Core Values</h2>
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
            </div>
        </div>
    </section>

    <section class="ab__life">
        <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/VectorSAGE_-11.svg"
            alt="Sage Nursing Agency - Watermark" class="ab__life-img" />
        <div class="container">
            <div class="ab__life-outer">
                <span class="alternate-text">
                    <?php echo $meaningTitle ?>
                </span>
                <h2>
                    <?php echo $meaningContent ?>
                </h2>
                <span class="alternate-text">
                    <?php echo $meaningQuote ?>
                </span>
            </div>
        </div>
    </section>

    <section class="ab__team">
        <div class="container">
            <div class="ab__team-outer">
                <div class="ab__team-intro" id="meet-the-team">
                    <span class="alternate-text">
                        OUR PEOPLE
                    </span>
                    <h2>Meet the Team</h2>
                </div>
                <div class="ab__team-grid">
                    <?php
                    if ($staff_members_query->have_posts()) {

                        while ($staff_members_query->have_posts()) {
                            $staff_members_query->the_post();

                            $title = get_the_title();
                            $link = get_permalink();
                            $imageUrl = get_the_post_thumbnail_url(get_the_ID());
                            $role = get_field('role_title');
                            $post_id = get_the_ID();

                            get_template_part('template-parts/staff-arch', null, array('title' => $title, 'link' => $link, 'imageUrl' => $imageUrl, 'role' => $role, 'post_id' => $post_id));
                        }
                        wp_reset_postdata(); // Reset the query
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/call-to-action', null, array('socials' => false, 'title' => 'Become a Sage member!', 'btnText' => 'JOIN THE TEAM', 'btnLink' => '')) ?>

</main>



<?php get_footer(); ?>