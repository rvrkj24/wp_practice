<?php

get_header();

while(have_posts()) {
    the_post();
    pageBanner(
      // array(
      //    'title' => 'Hello, this is a title',
      //   'subtitle' => 'Hello, this is a subtitle',
      //    'photo' => 'https://images.unsplash.com/photo-1579377322679-b982d9cb8ae4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80'
      //  )
    );
    ?>
    

  <div class="container container--narrow page-section">

<?php

$theParent = wp_get_post_parent_id(get_the_ID());

  if ($theParent) { ?>
  <div class="metabox metabox--position-up metabox--with-home-link">
      <p>
      <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a>
      <span class="metabox__main"><?php the_title(); ?></span>
      </p>
    </div>

    <!--
    the_title() = will output the current title of page or post.
    get_the_title() = will allow to pass the id number in the parenthesis,
    and will give you the title for that id instead of just post that you are currently loop through
     -->

  <?php }

  ?>



    <?php

    $testArray = get_pages(array(
      'child_of' => get_the_ID()
    ));
    if($theParent or $testArray) { ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
      <ul class="min-list">

        <?php
          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }

            wp_list_pages(array(

              'title_li' => NULL,
              'child_of' => $findChildrenOf,
              'sort_column' => 'menu_order'
            ));
        ?>

      </ul>
    </div>
    <?php } ?>

    <div class="generic-content">
      <?php the_content(); ?>
    </div>

  </div>

<?php
}

get_footer();

?>
