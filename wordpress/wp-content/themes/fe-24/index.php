<?php get_header(); ?>
<div class="row">
<div class="col-sm-8 blog-main">
<?php while ( have_posts() ) {
the_post();
get_template_part( 'content-single', get_post_format() );
} ?>
</div><!-- /.blog-main -->
<?php get_sidebar(); ?>
</div><!-- /.row —>
<?php get_footer(); ?>