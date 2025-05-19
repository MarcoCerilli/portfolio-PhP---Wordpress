<?php
// Se vuoi usarlo come template pagina:
// /* Template Name: Dettagli Progetto */

get_header();
?>

<main>
    <section class="dettaglio-progetto">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h2><?php the_title(); ?></h2>
                <?php
                $terms = get_the_terms(get_the_ID(), 'competenza');
                if ($terms && !is_wp_error($terms)) {
                    echo '<div class="competenza-list"><strong>Competenze:</strong> ';
                    foreach ($terms as $term) {
                        echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a> ';
                    }
                    echo '</div>';
                }
                ?>
                <div class="immagine-extra">
                    <?php
                    $img = get_field('immagine_extra');
                    if ($img) {
                        echo '<img src="' . esc_url($img['url']) . '" alt="' . esc_attr($img['alt']) . '" />';
                    }
                    ?>
                </div>

                <div class="descrizione-completa">
                    <?php
                    $desc_completa = get_field('descrizione_completa'); // campo ACF con testo completo
                    if ($desc_completa) {
                        echo wpautop($desc_completa);
                    } else {
                        the_content(); // fallback se non c'è il campo personalizzato
                    }
                    ?>
                </div>


                <div class="tecnologie-usate">
                    <strong>Tecnologie usate:</strong>
                    <?php
                    $tecnologie = get_field('tecnologie_usate');
                    if ($tecnologie) {
                        echo wpautop($tecnologie);
                    } else {
                        echo '<p>Nessuna tecnologia indicata.</p>';
                    }
                    ?>
                </div>

                <div class="link-progetti">
                    <?php
                    $github = get_field('github_link');
                    if ($github) {
                        echo '<p><a href="' . esc_url($github) . '" target="_blank" rel="noopener noreferrer">GitHub</a></p>';
                    }

                    $online = get_field('link_online');
                    if ($online) {
                        echo '<p><a href="' . esc_url($online) . '" target="_blank" rel="noopener noreferrer">Sito Online</a></p>';
                    }
                    ?>
                </div>


            <?php endwhile;
        else : ?>
            <p>Progetto non trovato.</p>
        <?php endif; ?>

    </section>
</main>

<?php get_footer(); ?>