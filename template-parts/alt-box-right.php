<?php

// content
$img = $args['img'];

$subtitle = $args['subtitle'];
$title = $args['title'];
$content = $args['content'];
$btnText = $args['btnText'];
$btnLink = $args['btnLink'];
$infoTitleOne = $args['infoTitleOne'];
$infoContentOne = $args['infoContentOne'];
$infoTitleTwo = $args['infoTitleTwo'];
$infoContentTwo = $args['infoContentTwo'];
$infoTitleThree = $args['infoTitleThree'];
$infoContentThree = $args['infoContentThree'];

// styling
$imgMask = $args['imgMask'];
$btnVariant = $args['btnVariant'];
$isFullWidth = $args['isFull'];
$extraPadding = $args['extraPadding'];
$flexDirection = $args['flexDirection'];

?>

<section class="abr <?php echo $flexDirection ?> ">
    <div class="abr__left <?php echo $extraPadding ?> ">
        <span class="alternate-text">
            <?php echo $subtitle ?>
        </span>
        <h2>
            <?php echo $title ?>
        </h2>
        <p>
            <?php echo $content ?>
        </p>
        <?php if ($infoTitleOne): ?>
            <div class="abr__left-iconbox">
                <div class="abr__left-iconbox-left">
                    <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/checkmark-circle-01-1.png"
                        alt="Tick icon" class="abr__left-iconbox-left-img" />
                </div>
                <div class="abr__left-iconbox-right">
                    <h4>
                        <?php echo $infoTitleOne ?>
                    </h4>
                    <p>
                        <?php echo $infoContentOne ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($infoTitleTwo): ?>
            <div class="abr__left-iconbox">
                <div class="abr__left-iconbox-left">
                    <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/checkmark-circle-01-1.png"
                        alt="Tick icon" class="abr__left-iconbox-left-img" />
                </div>
                <div class="abr__left-iconbox-right">
                    <h4>
                        <?php echo $infoTitleTwo ?>
                    </h4>
                    <p>
                        <?php echo $infoContentTwo ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($infoTitleThree): ?>
            <div class="abr__left-iconbox">
                <div class="abr__left-iconbox-left">
                    <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/checkmark-circle-01-1.png"
                        alt="Tick icon" class="abr__left-iconbox-left-img" />
                </div>
                <div class="abr__left-iconbox-right">
                    <h4>
                        <?php echo $infoTitleThree ?>
                    </h4>
                    <p>
                        <?php echo $infoContentThree ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($btnText): ?>
            <?php get_template_part('template-parts/button', null, array('buttonText' => 'LEARN MORE', 'buttonLink' => '', 'variant' => 'sage')); ?>
        <?php endif; ?>
    </div>
    <div class="abr__right  <?php echo $imgMask ?> <?php echo $isFullWidth ?>">
        <img src="<?php echo $img ?>" alt="Image that is paired with content on the right hand side"
            class="abr__right-img <?php echo $imgMask ?>" />
    </div>
</section>