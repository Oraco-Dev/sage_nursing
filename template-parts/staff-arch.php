<?php

$title = $args['title'];
$link = $args['link'];
$imageUrl = $args['imageUrl'];
$jobTitle = $args['role'];
$postID = $args['post_id'];

// GETTING BUTTON TEXT
$words = explode(' ', $title);

// Get the first word (index 0)
$firstWord = $words[0];

// Create the final string by concatenating "About" with the first word
$aboutTitle = 'About ' . $firstWord;


?>

<div class="staff-arch">
    <img src="<?php echo $imageUrl ?>" alt="Staff Member - Image" class="staff-arch__img" />
    <div class="staff-arch__meta">
        <div class="staff-arch__meta-title">
            <h3>
                <?php echo $title ?>
            </h3>
            <p>
                <?php echo $jobTitle ?>
            </p>
        </div>
        <a class="alternate-text button sage staff-modal-button" data-post-id="<?php echo $postID ?>">
            <?php echo $aboutTitle ?>
        </a>
    </div>
</div>