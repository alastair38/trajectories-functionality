<?php

register_block_pattern_category(
  'callouts-and-quotes',
  array( 'label' => __( 'Callouts and quotes', 'blockhaus' ) )
);

register_block_pattern_category(
  'social-media',
  array( 'label' => __( 'Social media', 'blockhaus' ) )
);

register_block_pattern_category(
  'users',
  array( 'label' => __( 'Users and profiles', 'blockhaus' ) )
);

register_block_pattern_category(
  'related-content',
  array( 'label' => __( 'Showing related content', 'blockhaus' ) )
);

function blockhaus_register_patterns() {


  register_block_pattern(
     'blockhaus/profile-block',
     array(
         'title'       => __( 'Profile Block - Image Left', 'blockhaus' ),
         'categories'    => [
          'users',
        ],
         'content'     => '<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"blockhaus-profile flex-col md:flex-row flex gap-0 md:gap-12"} -->
         <div class="wp-block-group blockhaus-profile flex-col md:flex-row flex gap-0 md:gap-12" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":1472,"sizeSlug":"profile","linkDestination":"none","className":"aspect-square w-80 h-80"} -->
         <figure class="wp-block-image size-profile aspect-square w-80 h-80"><img src="http://alastairc2.sg-host.com/wp-content/uploads/2022/11/michelle-pentecost.x95a012c0-300x300.webp" alt="" class="wp-image-1472"/></figure>
         <!-- /wp:image -->
         
         <!-- wp:group {"className":"self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"} -->
         <div class="wp-block-group self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"><!-- wp:heading {"className":"font-bold"} -->
         <h2 class="wp-block-heading font-bold">NAME - POSITION</h2>
         <!-- /wp:heading -->
         
         <!-- wp:paragraph -->
         <p>NAME is a Senior Lecturer in Anthropology and Global Health in the Department of Global Health and Social Medicine, King’s College London. She is an honorary researcher in the School of Clinical Medicine at the University of the Witwatersrand ...</p>
         <!-- /wp:paragraph -->
         
         <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
         <div class="wp-block-group"><!-- wp:paragraph -->
         <p>Follow NAME on:</p>
         <!-- /wp:paragraph -->
         
         <!-- wp:social-links {"iconColor":"secondary","iconColorValue":"rgba(41 44 44 / 1)","openInNewTab":true,"showLabels":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"is-style-logos-only"} -->
         <ul class="wp-block-social-links has-visible-labels has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://twitter.com/medanthdoc","service":"twitter"} /--></ul>
         <!-- /wp:social-links --></div>
         <!-- /wp:group --></div>
         <!-- /wp:group --></div>
         <!-- /wp:group -->',
     )
 ); 

 register_block_pattern(
  'blockhaus/profile-block-alternate',
  array(
      'title'       => __( 'Profile Block - Image Right', 'blockhaus' ),
      'categories'    => [
        'users',
      ],
      'content'     => '<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"blockhaus-profile-alt flex-col-reverse justify-between md:flex-row flex gap-0 md:gap-12"} -->
      <div class="wp-block-group blockhaus-profile-alt flex-col-reverse justify-between md:flex-row flex gap-0 md:gap-12"><!-- wp:group {"className":"self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"} -->
      <div class="wp-block-group self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"><!-- wp:heading {"className":"font-bold"} -->
      <h2 class="wp-block-heading font-bold">NAME - POSITION</h2>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph -->
      <p>NAME is the project coordinator for the Trajectories project at the Developmental Pathways to Health Research Unit at the University of the Witwatersrand. She has previous experience as a research assistant In the HeLTI trial. She is currently a project coordinator for Trajectories study and she is responsible for managing the day to day running of the study, logistics, administrative work, and some HR components.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group"><!-- wp:paragraph -->
      <p>Follow NAME on:</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:social-links {"iconColor":"secondary","iconColorValue":"rgba(41 44 44 / 1)","openInNewTab":true,"showLabels":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"is-style-logos-only"} -->
      <ul class="wp-block-social-links has-visible-labels has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://twitter.com/Tsakani_PC","service":"twitter"} /--></ul>
      <!-- /wp:social-links --></div>
      <!-- /wp:group --></div>
      <!-- /wp:group -->
      
      <!-- wp:image {"id":1472,"sizeSlug":"profile","linkDestination":"none","className":"aspect-square w-80 h-80"} -->
      <figure class="wp-block-image size-profile aspect-square w-80 h-80"><img src="http://alastairc2.sg-host.com/wp-content/uploads/2022/11/michelle-pentecost.x95a012c0-300x300.webp" alt="" class="wp-image-1472"/></figure>
      <!-- /wp:image --></div>
      <!-- /wp:group -->',
  )
); 

//  register_block_pattern(
//   'blockhaus/cta-with-video',
//   array(
//       'title'       => __( 'Call to Action', 'blockhaus' ),
//       'categories'    => [
//         'callouts-and-quotes',
//       ],
//       'content'     => '
//       <!-- wp:group {"tagName":"section","align":"full","className":"blockhaus-cta bg-accent slanted z-0 relative overflow-hidden"} -->
//       <section class="wp-block-group alignfull blockhaus-cta bg-accent slanted z-0 relative overflow-hidden"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"gigantic"} -->
//       <h2 class="has-text-align-center has-gigantic-font-size" style="font-style:normal;font-weight:900">What is YPAG?</h2>
//       <!-- /wp:heading -->
      
//       <!-- wp:paragraph {"align":"center","className":"w-3/4 mx-auto"} -->
//       <p class="has-text-align-center w-3/4 mx-auto">The NeurOX Young People’s Advisory Group (YPAG) are young co-researchers currently aged 16-19 years involved in mental health and ethics research.</p>
//       <!-- /wp:paragraph -->
      
//       <!-- wp:image {"id":1108,"width":711,"height":711,"sizeSlug":"full","linkDestination":"none","className":"mx-auto flex justify-center flex-col items-center w-3/4"} -->
//       <figure class="wp-block-image size-full is-resized mx-auto flex justify-center flex-col items-center w-3/4"><img src="http://ypag.local/wp-content/uploads/2022/06/infographic_normalized-1.svg" alt="" class="wp-image-1108" width="711" height="711"/></figure>
//       <!-- /wp:image -->
      
//       <!-- wp:buttons -->
//       <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary-default","align":"center","className":"is-style-button-retro"} -->
//       <div class="wp-block-button aligncenter is-style-button-retro"><a class="wp-block-button__link has-primary-default-background-color has-background" href="http://ypag.local/about/">Find out more</a></div>
//       <!-- /wp:button --></div>
//       <!-- /wp:buttons --></section>
//       <!-- /wp:group -->
//       ',
//   )
// ); 

//     register_block_pattern(
//       'blockhaus/front-page-contact-form',
//       array(
//           'title'       => __( 'Contact Form - Front Page', 'blockhaus' ),
//           'categories'    => [
//             'callouts-and-quotes',
//           ],
//           'content'     => '
//           <!-- wp:group {"tagName":"section","align":"full","className":"py-56 lg:py-32 w-3/4 mx-auto","layout":{"inherit":false}} -->
//           <section class="wp-block-group alignfull py-[20%] w-3/4 mx-auto"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"gigantic"} -->
//           <h2 class="has-gigantic-font-size" style="font-style:normal;font-weight:900">Contact us</h2>
//           <!-- /wp:heading -->

//           <!-- wp:paragraph -->
//           <p>Use the form below to get in touch with NeurOx YPAG. Your details will only be used to contact you regarding the message you send.</p>
//           <!-- /wp:paragraph -->

//           <!-- wp:wpforms/form-selector {"formId":"142","className":"mx-auto"} /--></section>
//           <!-- /wp:group -->
//           ',
//       )
//     ); 

  register_block_pattern(
    'blockhaus/latest-blogposts',
    array(
      'title'   => __('Latest blog posts', 'blockhaus'),
      'categories'    => [
        'related-content',
      ],
      'content' => '
      <!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"blockGap":"0px"}},"className":"blockhaus-blog-posts has-accent-background-color has-background slanted z-0 relative overflow-hidden","layout":{"inherit":false}} -->
      <section class="wp-block-group alignfull blockhaus-blog-posts has-accent-background-color has-background slanted z-0 relative overflow-hidden" id="latest-posts"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"grid gap-6 md:w-4/5 md:mx-auto"} -->
      <div class="wp-block-group grid gap-6 md:w-4/5 md:mx-auto"><!-- wp:group {"backgroundColor":"secondary","textColor":"primary-default","className":"rounded-md col-span-full md:col-span-1 md:col-start-1 p-6 flex flex-col justify-between"} -->
      <div class="wp-block-group rounded-md col-span-full md:col-span-1 md:col-start-1 p-6 flex flex-col justify-between has-primary-default-color has-secondary-background-color has-text-color has-background"><!-- wp:heading {"textColor":"primary-default","className":"font-black","fontSize":"gigantic"} -->
      <h2 class="font-black has-primary-default-color has-text-color has-gigantic-font-size">Blog</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>The latest from the YPAG blog.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-retro"} -->
      <div class="wp-block-button is-style-button-retro"><a class="wp-block-button__link">Visit the blog</a></div>
      <!-- /wp:button --></div>
      <!-- /wp:buttons --></div>
      <!-- /wp:group -->

      <!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"className":"col-span-full md:col-span-3 md:col-start-2","layout":{"inherit":false}} -->
      <div class="wp-block-query col-span-full md:col-span-3 md:col-start-2"><!-- wp:post-template {"className":"grid grid-cols-1 md:grid-cols-3 gap-6 post-template-grid"} -->
      <!-- wp:post-featured-image {"width":"","height":"","sizeSlug":"blog"} /-->

      <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"h-full p-6 flex flex-col","layout":{"type":"default"}} -->
      <div class="wp-block-group h-full p-6 flex flex-col"><!-- wp:post-title {"level":3} /-->

      <!-- wp:post-date {"className":"pb-6","fontSize":"small"} /-->

      <!-- wp:read-more {"content":"View article","className":"bg-yellow-300 border border-current px-2 py-1 shadow-retro mt-auto"} /--></div>
      <!-- /wp:group -->
      <!-- /wp:post-template --></div>
      <!-- /wp:query --></div>
      <!-- /wp:group --></section>
      <!-- /wp:group -->
      ',
    )
    );

      register_block_pattern(
        'blockhaus/blockhaus-quote-with-image',
        array(
          'title'   => __('Blockhaus Quote with Image', 'blockhaus'),
          'categories'    => [
            'callouts-and-quotes',
          ],
          'content' => '
          <!-- wp:group {"className":"blockhaus-quote-image bg-gray-100 rounded-md flex flex-col items-center p-6 justify-center"} -->
          <div class="wp-block-group blockhaus-quote-image bg-gray-100 rounded-md flex flex-col items-center p-6 justify-center"><!-- wp:image {"id":458,"width":150,"height":150,"sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-default rounded-full aspect-square"} -->
          <figure class="wp-block-image size-thumbnail is-resized is-style-default rounded-full aspect-square"><img src="/wp-content/themes/blockhaus/assets/images/block-patterns/quote-with-image.jpg" alt="Dorothy Parker as a young woman" class="wp-image-458" width="150" height="150"/></figure>
          <!-- /wp:image -->

          <!-- wp:quote {"className":"flex flex-col items-center gap-2 is-style-plain"} -->
          <blockquote class="wp-block-quote flex flex-col items-center gap-2 is-style-plain"><p>The cure for boredom is curiosity. There is no cure for curiosity.</p><cite>Dorothy Parker</cite></blockquote>
          <!-- /wp:quote --></div>
          <!-- /wp:group -->
          ',
        )
        );

     

        $facebook = get_field('facebook_url', 'options');

        if($facebook) {
          $facebook_profile = '<!-- wp:social-link {"url":"' . $facebook . '","service":"facebook"} /-->';
        }

        $instagram = get_field('instagram_url', 'options');

        if($instagram) {
          $instagram_profile = '<!-- wp:social-link {"url":"' . $instagram . '","service":"instagram"} /-->';
        }

        $linkedin = get_field('linkedin_url', 'options');

        if($linkedin) {
          $linkedin_profile = '<!-- wp:social-link {"url":"' . $linkedin . '","service":"linkedin"} /-->';
        }


        $tiktok = get_field('tiktok_url', 'options');

        if($tiktok) {
          $tiktok_profile = '<!-- wp:social-link {"url":"' . $tiktok . '","service":"tiktok"} /-->';
        }

        $twitter = get_field('twitter_url', 'options');

        if($twitter) {
          $twitter_profile = '<!-- wp:social-link {"url":"' . $twitter . '","service":"twitter"} /-->';
        }

        $youtube = get_field('youtube_url', 'options');

        if($youtube) {
          $youtube_profile = '<!-- wp:social-link {"url":"' . $youtube . '","service":"youtube"} /-->';
        }

        if($facebook || $instagram || $linkedin || $tiktok || $twitter || $youtube):

          register_block_pattern(
            'blockhaus/social-media-profiles',
            array(
              'title'   => __('Social Media Profiles', 'blockhaus'),
              'categories'    => [
                'social-media',
              ],
              'content' => '
              <!-- wp:social-links {"iconColor":"secondary","iconColorValue":"rgba(50 64 64 / 1)","size":"has-normal-icon-size","className":"is-style-logos-only"} -->
              <ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">' .

              $facebook_profile . $instagram_profile . $linkedin_profile . $tiktok_profile . $twitter_profile . $youtube_profile

              . '</ul>
              <!-- /wp:social-links -->
              ',
            )
            );

        endif;
      
}
add_action( 'init', 'blockhaus_register_patterns' );