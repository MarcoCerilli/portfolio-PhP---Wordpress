<?php

get_header();
?>

<main class="pagina-progetti">

    <h1 class="titolo-pagina"><?php post_type_archive_title(); ?></h1>

    <div class="lista-progetti">
        <?php
        $args = [
            'post_type'      => 'progetto',
            'posts_per_page' => 10,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ];
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <article class="progetto">
                    <div class="thumb-progetto">
                        <a href="<?php the_permalink(); ?>" class="link-progetto">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>

                    <h2 class="titolo-progetto">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                <!--     <div class="competenza-list">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'competenza');
                        if ($terms && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a> ';
                            }
                        }
                        ?>
                    </div> -->

                    <div class="estratto-progetto">
                        <?php the_excerpt(); ?>
                    </div>
                </article>

            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p class="nessun-progetto">Nessun progetto trovato.</p>
        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>