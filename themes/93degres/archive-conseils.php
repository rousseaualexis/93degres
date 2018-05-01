<?php
/*
Template Name: Conseils
*/
?>
<?php include'head.php';?>
<body class="archive">
<?php get_header(); ?>


<div class="cover-archive cover-archive--conseils col-xs-48"><h5>Nos petites adresses</h5></div>
    <div id="sous-cat" class="col-xs-40 col-xs-offset-4">
        <div id="list-sous-cat">
            <?php
                $post_type = 'conseils';
                $taxonomy = 'category';
                $args = array(
                    'taxonomy' => $taxonomy,
                    'post_type' => $post_type
                );
                $categories = get_categories($args);
                foreach( $categories as $category ) {
                    $category_link = sprintf( 
                        '<a href="%1$s?type=conseils" alt="%2$s">%3$s<span>(%4$s)</span></a>',
                        esc_url( get_category_link( $category->term_id ) ),
                        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                        esc_html( $category->name ),
                        esc_html( $category->category_count )
                    );
                    echo sprintf( esc_html__( '%s', 'textdomain' ), $category_link );
                } 
            ?>   
        </div>
    </div>
</div>

    <div class="grid scroll-reveal col-md-push-3 col-xs-48">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array( 'post_type' => array('conseils'), 'posts_per_page' => 6, 'paged' => $paged );
$wp_query = new WP_Query($args);
while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'assets/views/content-grid' );?>

            <?php
            // End the loop.
            endwhile;?>
        
</div>



<?php get_template_part('assets/views/content-pagination'); ?>
<?php get_footer(); ?>
<?php include'end.php' ?>