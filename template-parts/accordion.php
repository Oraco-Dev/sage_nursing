<?php

$postId = $args['post_id'];

?>

<?php
$accordionItemCount = 0; // Initialize the accordion item count

// Loop to check for existence of custom fields
while (get_post_meta($args['post_id'], 'accordiontitle' . ($accordionItemCount + 1), true)) {
    $accordionItemCount++;
}

for ($i = 1; $i <= $accordionItemCount; $i++) {
    $titleField = 'accordiontitle' . $i;
    $contentField = 'accordioncontent' . $i;

    $accordionTitle = get_post_meta($args['post_id'], $titleField, true);
    $accordionContent = get_post_meta($args['post_id'], $contentField, true);
    ?>
    <div class="accordion-item">
        <div class="accordion-item__head">
            <h3>
                <?php echo $accordionTitle; ?>
                </h4>
                <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/shape.svg"
                    class="accordion-item__head-img" />
        </div>
        <div class="accordion-item__content">
            <p>
                <?php echo $accordionContent; ?>
            </p>
        </div>
    </div>
    <?php
}
?>