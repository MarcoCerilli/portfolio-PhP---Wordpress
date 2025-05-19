<?php
get_header();
?>

<main class="pagina-progetti">
    <h1 class="titolo-pagina"><?php single_term_title(); ?></h1>

    <div class="lista-progetti">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <article class="progetto">
                    <a href="<?php the_permalink(); ?>" class="link-progetto">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="thumb-progetto">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <h2 class="titolo-progetto"><?php the_title(); ?></h2>
                    </a>

                    <div class="competenza-list">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'competenza');
                        if ($terms && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a> ';
                            }
                        }
                        ?>
                    </div>

                    <div class="estratto-progetto">
                        <?php
                        $desc_breve = get_field('descrizione_breve');
                        if ($desc_breve) {
                            echo wpautop(esc_html($desc_breve));
                        } else {
                            the_excerpt();
                        }
                        ?>
                    </div>
                </article>
            <?php endwhile;
        else : ?>
            <p>Nessun progetto trovato per questa competenza.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>