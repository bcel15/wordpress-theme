<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class( 'entry' ); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-meta"><?php echo esc_html( get_the_date() ); ?></div>
        <div class="entry-content"><?php the_content(); ?></div>
    </article>
    <?php comments_template(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
