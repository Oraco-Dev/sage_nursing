<?php

// content
$img = $args['img'];

$subtitle = $args['subtitle'];
$title = $args['title'];
$content = $args['content'];
$btnText = $args['btnText'];
$btnLink = $args['btnLink'];


// styling
$imgMask = $args['imgMask'];
$btnVariant = $args['btnVariant'];
$isFullWidth = $args['isFull'];
$blueBg = $args['blueBg'];

?>

<section class="abl">
    <div class="abl__left">
        <img src="<?php echo $img ?>" alt="Image that is paired with content on the right hand side"
            class="abl__left-img <?php echo $imgMask ?>" />
    </div>
    <div class="abl__right <?php echo $imgMask ?> <?php echo $isFullWidth ?> <?php echo $blueBg ?>">
        <span class="alternate-text">
            <?php echo $subtitle ?>
        </span>
        <h2>
            <?php echo $title ?>
        </h2>
        <p>
            <?php echo $content ?>
        </p>
        <?php if ($btnText): ?>
            <?php get_template_part('template-parts/button', null, array('buttonText' => 'LEARN MORE', 'buttonLink' => '', 'variant' => 'sage')); ?>
        <?php endif; ?>
    </div>
</section>