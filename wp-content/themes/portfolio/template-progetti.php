
<?php
/*
Template Name: Progetti Personalizzato
*/
get_header();
echo '<!-- Template Progetti Personalizzato caricato -->';
?>

<main class="pagina-progetti">

    <h1 class="titolo-pagina">I miei progetti</h1>
    
    <!-- Sezione PHP e WordPress -->
    <section class="progetti-php-wordpress">
        <h2>Progetti PHP e WordPress</h2>
        <div class="lista-progetti">
            <?php
            $args_php_wp = [
                'post_type'      => 'progetto',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'meta_query'     => [
                    [
                        'key'     => 'competenza',
                        'value'   => 'php_wordpress',
                        'compare' => '='
                    ]
                ]
            ];
            $query = new WP_Query($args_php_wp);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <article class="progetto">
                        <a href="<?php the_permalink(); ?>" class="link-progetto">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="thumb-progetto">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <p class="competenza-progetto">Competenza: PHP e WordPress</p>
                        <div class="estratto-progetto">
                            <?php
                            $desc_breve = get_field('descrizione_breve');
                            if ($desc_breve) {
                                echo wpautop($desc_breve);
                            } else {
                                the_excerpt();
                            }
                            ?>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>Nessun progetto PHP e WordPress trovato.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Sezione Java -->
    <section class="progetti-java">
        <h2>Progetti Java</h2>
        <div class="lista-progetti">
            <?php
            $args_java = [
                'post_type'      => 'progetto',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'meta_query'     => [
                    [
                        'key'     => 'competenza',
                        'value'   => 'java',
                        'compare' => '='
                    ]
                ]
            ];
            $query = new WP_Query($args_java);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <article class="progetto">
                        <a href="<?php the_permalink(); ?>" class="link-progetto">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="thumb-progetto">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <p class="competenza-progetto">Competenza: Java</p>

                        <div class="estratto-progetto">
                            <?php
                            $desc_breve = get_field('descrizione_breve');
                            if ($desc_breve) {
                                echo wpautop($desc_breve);
                            } else {
                                the_excerpt();
                            }
                            ?>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>Nessun progetto Java trovato.</p>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
