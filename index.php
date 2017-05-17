<?php get_header(); ?>



<!--START CONTENT -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // replaced the ({) for (:)?>

    <article id="post-excerpt- <?php the_ID(); ?>" class="post-excerpt">
         <h1><a href="<?php the_permalink(); // it will link to the posting ?>"><?php the_title(); // it will get the posting title ?></a></h1>
          <small>Posted on <?php the_time('F j, Y');?> by <?php the_author();?> in <?php the_category(',');?></small>
          <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('thumbnail');?></a>
          <?php the_excerpt();?>
          <?php the_content(''); // it will get posting content ?>
    </article>

<?php endwhile; endif; ?>
<?php if(is_404()) {echo 'Nothing was found.';}?>
<small>index.php</small>
<!--END CONTENT-->


<?php get_sidebar(); ?>


<?php get_footer(); ?>



