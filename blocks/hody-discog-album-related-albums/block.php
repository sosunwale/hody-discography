<?php
//Variables
$album_title_transform = block_value('hody-discog-track--albumTitle-fontcase');
$album_title_color = block_value('hody-discog-track--related-albumTitle-color');
$number_of_posts = block_value( 'hody-discog-number-of-related-albumsToShow' );
$columns_count = block_value( 'hody-discog-track--albumCountColumn' );
$listenNowText = block_value('hody-discog-album--listen-now-text-value') ;
$currentID = get_the_ID();
$final_query = array( 
    'post_type' => 'album',
    'posts_per_page' => $number_of_posts,
    'post__not_in' => array(
        $currentID),
    );
// The Query
$the_query = new WP_Query($final_query);
//  The Loop
if ($the_query->have_posts()) { ?>

    <div class="wp-block-query alignwide">
    <ul class="relatedAlbumGrid is-flex-container alignwide columns-<?php echo $columns_count ?><?php block_field('className'); ?> wp-block-post-template">
<?php
while ($the_query->have_posts()) {
    $the_query->the_post();
?>
<li <?php post_class(); ?> class="wp-block-post album type-album status-publish has-post-thumbnail hentry">
<figure class="album-image wp-block-post-featured-image">
    <a href="<?php the_permalink(); ?>">
    <?php echo get_the_post_thumbnail();?>
    </a>
</figure>

<h3 style="text-transform:<?php echo $album_title_transform ?>;color: <?php echo $album_title_color ?>" class="wp-block-post-title"><?php the_title(); ?></h3>

<?php if ( block_value( 'hody-discog-album--display-listen-now-text' ) ) { ?>
<p class="hody-animation-float wp-block-read-more"><a style="color:" href="<?php the_permalink(); ?>" role="document" aria-label="Block: Read More"  data-title="Read More" style="background-color: initial;min-width: 1px" data-type="core/read-more" target="_self"><?php echo $listenNowText ?></a></p>
<?php } else {
 }  ?>
</li>

<?php
}
echo '</ul> </div>';

} else {
    // no posts found
    ?> <p>Non Found </p><?php
}
