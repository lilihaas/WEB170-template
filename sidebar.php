<!-- Begin Sidebar -->
<div id="sidebar">
    <!--Begin Sub Navigation -->
    <div id="sub-navigation" class="widget">
    <h2><?php
      if (is_page()) {
        echo get_the_title( $post->post_parent );
      } else { //if not be on a page list title as "Blog"
        echo 'BLOG';

      }
      ?>
        <ul class="sub-navigation-items">
          <?php
          if (is_page()) {

            if ( $post->post_parent ) { //if the page has a parent//checking the location where you are in the site
              //list the children of portfolio, for example
              echo "<!-- A -->";
              wp_list_pages( array( 'child_of' => $post->post_parent, 'title_li' => __( '' ), ) );

            } else {
              echo "<!-- B -->";
              wp_list_pages( array( 'child_of' => $post->ID, 'title_li' => '', ) );
            }

          } else {
            echo "<!-- C -->";
            wp_list_categories( array( 'title_li' => '' ) );
          }
          ?>
        </ul>
    </div>
    <!--End Sub Navigation-->
    <!--Begin Quote-->
    <div id="pull-quote" class="widget">
        <?php if(get_post_meta($post ->ID, "Quote", true)): ?>
        <blockquote><?php echo get_post_meta($post -> ID, "Quote", true); ?></blockquote>
        <?php endif; ?>
    </div>
    <!--End Quote-->

    <!--Begin Widgets-->
    <?php dynamic_sidebar(1); ?>
  <?php dynamic_sidebar(2); ?>
  <?php dynamic_sidebar(''); ?>

    <!--Enf Widgets-->
</div>
<!-- End Sidebar -->
