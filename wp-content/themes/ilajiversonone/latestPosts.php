<?php 
require('wp-blog-header.php');
$args = array( 'numberposts' => 6, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
$postslist = get_posts( $args );
echo '<div class="media">';
 foreach ($postslist as $post) :  setup_postdata($post); ?> 
 <div class="body"><strong><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"> <?php the_title(); ?></a>
 <p><?php the_description();?></p>
</div>
<?php endforeach; ?>
 </div>
               