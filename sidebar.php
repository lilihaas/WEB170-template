<!-- Begin Sidebar -->
<div id="sidebar">
    <h2><?php
      if (is_page()) {
        echo get_the_title( $post->post_parent );
      } else { //if not be on a page list title as "Blog"
        echo 'Blog';

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
<!-- End Sidebar -->
