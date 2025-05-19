<?php get_header(); ?>


<main>


    <!-- Contenuto SEO nascosto ma non penalizzante -->
    <?php
    echo '<div class="seo-hidden-text">';
    echo 'Marco Cerilli, sviluppatore PHP, WordPress e Java Spring Boot. Portfolio con progetti professionali e competenze tecniche.';
    echo '</div>';
    ?>


    <section class="intro-chi-sono" style="max-width: 700px; margin: 2rem auto; font-size: 1.1rem; text-align: center;">
        <p>
            Ciao, sono <strong>Marco Cerilli</strong>, sviluppatore PHP, WordPress e Java Spring.
            <br>
            <a href="<?php echo esc_url(site_url('/chi-sono')); ?>" style="color: #f39c12; font-weight: bold; text-decoration: underline;">
                Scopri di più su di me &raquo;
            </a>
        </p>
    </section>





    <section class="progetti-home">
        <h2>I miei ultimi progetti</h2>
        <?php
        $args = [
            'post_type' => 'progetto',
            'posts_per_page' => 3,
        ];
        $progetti = new WP_Query($args);
        ?>

        <?php if ($progetti->have_posts()) : ?>
            <div class="lista-progetti">
                <?php while ($progetti->have_posts()) : $progetti->the_post(); ?>
                    <article class="progetto">
                        <a href="<?php the_permalink(); ?>" class="link-progetto">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="thumb-progetto">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <h3 class="titolo-progetto"><?php echo esc_html(get_the_title()); ?></h3>
                        </a>
                        <div class="estratto-progetto">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>Non ci sono ancora progetti da mostrare.</p>
        <?php endif; ?>
        <p><a href="<?php echo esc_url(site_url('/progetti')); ?>">Visualizza tutti i progetti &raquo;</a></p>
    </section>

    <section class="competenze-home" style="padding: 2rem 0;">
        <h2 style="text-align: center; margin-bottom: 2rem;">Le mie competenze</h2>

        <div class="griglia-competenze" style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center;">

            <!-- WordPress Personalizzato -->
            <div style="flex: 1 1 250px; background: #fffaf5; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                <div style="background: #f39c1210; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fab fa-wordpress" style="font-size: 2rem; color: #21759b;"></i>
                </div>
                <h3>WordPress Personalizzato</h3>
                <p>ACF, CPT, shortcode, template dinamici e loop personalizzati con WP_Query.</p>
            </div>

            <!-- Sviluppo PHP -->
            <div style="flex: 1 1 250px; background: #f5faff; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                <div style="background: #6c63ff10; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fab fa-php" style="font-size: 2rem; color: #6c63ff;"></i>
                </div>
                <h3>PHP</h3>
                <p>Logica backend, integrazione con database, sicurezza e prestazioni per WordPress.</p>
            </div>

            <!-- Spring Boot / Java -->
            <div style="flex: 1 1 250px; background: #fff7f5; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                <div style="background: #e76f5110; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fab fa-java" style="font-size: 2rem; color: #e76f51;"></i>
                </div>
                <h3>Java & Spring Boot</h3>
                <p>REST API, backend strutturato e applicazioni scalabili con Spring, Maven e Hibernate.</p>
            </div>

            <!-- Frontend Development -->
            <div style="flex: 1 1 250px; background: #f0f9ff; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                <div style="background: #007bff10; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fab fa-html5" style="font-size: 2rem; color: #ff6b6b;"></i>
                </div>
                <h3>Frontend</h3>
                <p>HTML5, CSS3, JavaScript base, responsive design e interfacce accessibili.</p>
            </div>

            <!-- Database -->
            <div style="flex: 1 1 250px; background: #f5fff8; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                <div style="background: #2a9d8f10; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fas fa-database" style="font-size: 2rem; color: #2a9d8f;"></i>
                </div>
                <h3>Database</h3>
                <p>MySQL, query ottimizzate, progettazione logica e sicurezza dei dati.</p>
            </div>

            <!-- Integrazione API -->
            <div style="flex: 1 1 250px; background: #f5f5ff; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                <div style="background: #17a2b810; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fas fa-plug" style="font-size: 2rem; color: #17a2b8;"></i>
                </div>
                <h3>Integrazione API</h3>
                <p>Connessioni API REST (es. meteo, mappe), gestione dati esterni e sicurezza.</p>
            </div>

            <!-- Ottimizzazione SEO -->
            <div style="flex: 1 1 250px; background: #fffbe8; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                <div style="background: #ffc10710; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fas fa-search" style="font-size: 2rem; color: #f39c12;"></i>
                </div>
                <h3>SEO Tecnico</h3>
                <p>Yoast SEO, struttura URL, performance, sitemap, accessibilità e schema.org.</p>
            </div>

        </div>

        <p style="text-align: center; margin-top: 2rem;">
            <a href="<?php echo esc_url(site_url('/competenze')); ?>" style="text-decoration: none; color: #f39c12; font-weight: bold;">
                Scopri di più &raquo;
            </a>
        </p>
    </section>



</main>

<?php get_footer(); ?>