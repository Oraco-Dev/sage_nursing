<?php

$text = $args['buttonText'];
$link = $args['buttonLink'];
$variant = $args['variant'];

?>

<a href="<?php echo $link ?>" class="alternate-text button <?php echo $variant ?>">

    <?php echo $text ?>

</a>