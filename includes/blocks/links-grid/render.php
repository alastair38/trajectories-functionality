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

$links = get_field('content_links');
$external_links = get_field('external_links');
$archive_links = get_field('archive_links');

?>

<aside id="<?php echo $id;?>" class="grid relative grid-cols-1 md:grid-cols-2 gap-6 py-6">
<?php if(empty($external_links) && empty($links) && empty($archive_links)):?>
  <div class="border rounded-md -my-6 py-12 px-6 col-span-full">Select and click pencil icon to add links</div>
<?php endif;?>
 
<?php 

if( have_rows('external_links') ):

  // Loop through rows.
  while( have_rows('external_links') ) : the_row();

      // Load sub field value.
      $title = get_sub_field('link_text');
      $img = get_sub_field('link_image');
      
      ?>
      
      <a class="flex flex-col border md:flex-row group items-center bg-gray-100 md:bg-white rounded-md overflow-hidden hover:ring-4 hover:ring-highlight focus:ring-4 focus:ring-highlight" 
      <?php if(!is_admin()):?>
      href="<?php the_sub_field('link');?>" rel="external" 
      <?php endif;?>
      aria-label="Read <?php echo $title;?>">
      <?php if($img) {
        echo wp_get_attachment_image( $img, 'thumbnail', "", array( 'class' => 'w-full object-cover aspect-video md:aspect-auto md:w-auto bg-accent' ));
      } ?>
      <div class="flex flex-col gap-2 p-6">
        <span class="font-bold"><?php echo $title;?></span>
      </div>
    </a>
     
  <?php endwhile;

// No value.
else :?>
  
<?php endif;?>

<?php if($links) {
  
  foreach($links as $link) {
  
  $img = get_the_post_thumbnail($link->ID, 'thumbnail', array( 'class' => 'w-full object-cover aspect-video md:aspect-auto md:w-auto bg-accent' ));

  
  // var_dump($link);
  ?>
 
    <a class="flex flex-col border md:flex-row group items-center bg-gray-100 md:bg-white rounded-md overflow-hidden hover:ring-4 hover:ring-highlight focus:ring-4 focus:ring-highlight" 
    
    <?php if(!is_admin()):?>
    href="<?php echo get_the_permalink($link->ID);?>" rel="bookmark" 
    <?php endif;?>
    
    aria-label="Read <?php echo get_the_title($link->ID);?>">
    
      <?php if($img) {
        echo $img;
      } else {
        $img_atts = wp_get_attachment_image_src(578, 'thumbnail');
        echo '<img class="w-full md:w-auto" src="' . $img_atts[0] . '" width="' . $img_atts[1] . '" height="' . $img_atts[2] . '">';

      }?>
      <div class="flex flex-col gap-2 p-6">
        <span class="font-bold"><?php echo get_the_title($link->ID);?></span>
      
      </div>
    </a>
 <?php 
}} else {?>
  
  
 
<?php } ?>

<?php 

if( have_rows('archive_links') ):

  // Loop through rows.
  while( have_rows('archive_links') ) : the_row();

      // Load sub field value.
      $title = get_sub_field('link_text');
      $img = get_sub_field('link_image');
      
      ?>
      
      <a class="flex flex-col border md:flex-row group items-center bg-gray-100 md:bg-white rounded-md overflow-hidden hover:ring-4 hover:ring-highlight focus:ring-4 focus:ring-highlight" 
      
      <?php if(!is_admin()):?>
    href="<?php the_sub_field('link');?>" rel="bookmark" 
    <?php endif;?>
    
      aria-label="Read <?php echo $title;?>">
      
      <?php if($img) {
        echo wp_get_attachment_image( $img, 'thumbnail', "", array( 'class' => 'w-full object-cover aspect-video md:aspect-auto md:w-auto bg-accent' ));
      } ?>
      <div class="flex flex-col gap-2 p-6">
        <span class="font-bold"><?php echo $title;?></span>
      </div>
    </a>
     
  <?php endwhile;

// No value.
else :?>
  
<?php endif;?>



</aside>
