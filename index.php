<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'entry' ); ?>>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-meta"><?php echo esc_html( get_the_date() ); ?></div>
            <div class="entry-content"><?php the_excerpt(); ?></div>
        </article>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
<?php else : ?>
    <p><?php esc_html_e( 'Aucun contenu trouvé.', 'minimal-starter' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
