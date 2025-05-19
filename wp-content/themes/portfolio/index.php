<?php get_header(); ?>

<main>
    <h1>Benvenuto nel mio portfolio</h1>
    <p>Qui puoi vedere alcuni dei miei lavori recenti:</p>

    <?php
    // Query personalizzata per gli ultimi 3 progetti
    $args = [
        'post_type' => 'progetto',
        'posts_per_page' => 3,
    ];
    $progetti = new WP_Query($args);
    ?>

    <section class="progetti-home">
        <?php if ($progetti->have_posts()) : ?>
            <?php while ($progetti->have_posts()) : $progetti->the_post(); ?>
                <article>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php if (has_post_thumbnail()) the_post_thumbnail('medium'); ?>
                    <div><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>Nessun progetto disponibile al momento.</p>
        <?php endif; ?>
    </section>
    <p><a href="<?php echo site_url('/progetti'); ?>">Visualizza tutti i progetti &raquo;</a></p>

</main>

<?php get_footer(); ?>