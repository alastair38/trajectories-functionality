<?php

/**
 * Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blockhaus-select-page-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockhaus-select-page';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$links = get_field('external_links');

// var_dump($links);

if($links): 

$count = count($links);
if($count === 1) {
  $cols = 'md:grid-cols-2';
  $img_size = 'thumbnail';
} else {
  $cols = 'md:grid-cols-2';
  $img_size = 'thumbnail';
}

endif;
?>

<aside id="<?php echo $id;?>" class="grid <?php echo $cols;?> gap-6 py-6">
  
<?php 

if( have_rows('external_links') ):

  // Loop through rows.
  while( have_rows('external_links') ) : the_row();

      // Load sub field value.
      $title = get_sub_field('link_text');
      $img = get_sub_field('link_image');
      
      ?>
      
      <a class="flex flex-col border md:flex-row group items-center bg-gray-100 md:bg-white rounded-md overflow-hidden hover:ring-4 hover:ring-highlight focus:ring-4 focus:ring-highlight" href="<?php the_sub_field('link');?>" rel="external" aria-label="Read <?php echo $title;?>">
      <?php if($img) {
        echo wp_get_attachment_image( $img, $img_size, "", array( 'class' => 'w-full object-cover aspect-video md:aspect-auto md:w-auto bg-accent' ));
      } ?>
      <div class="flex flex-col gap-2 p-6">
        <span class="font-bold"><?php echo $title;?></span>
      </div>
    </a>
     
  <?php endwhile;

// No value.
else :
  // Do something...
endif;?>



</aside>
