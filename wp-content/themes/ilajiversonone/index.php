<?php get_header(); ?>
<?php 
function myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}
?>

 <div class="grow">
 <div class="container">
            <div class="col-sm-12 col-sm-offset-2">

<div style="padding: 10px 20px 10px 20px;">

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="post-header">

        <div class="date" align="left"><?php the_time( 'j M, y' ); ?></div>
<?php //the_permalink(); 
$title_url=preg_replace(array('/\'/', '/\s/'), '-', the_title_attribute('echo=0'), -1, $count); ?>

        <h2><a href="http://ilajy.com/blog/<?php echo $title_url; ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

        <div class="author"><?php the_author(); ?></div>

    </div><!--end post header-->

    <div class="entry clear">

        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>

        <?php the_content(); ?>

        <?php edit_post_link(); ?>

        <?php wp_link_pages(); ?>

    </div><!--end entry-->

    <div class="post-footer">

        <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>

    </div><!--end post footer-->

  </div><!--end post-->

<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

  <div class="navigation index">

    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>

    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>

  </div><!--end navigation-->

<?php else : ?>

<?php endif; ?>

</div>
</div>
</div>
</div>

<?php get_footer(); ?>
