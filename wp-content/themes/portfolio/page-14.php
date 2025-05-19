<?php get_header(); ?>


<main>
    <h1>Le mie competenze</h1>

    <p style="text-align:center; font-weight:bold; margin-bottom: 2rem;">
        Qui trovi tutte le competenze di uno sviluppatore PHP e WordPress, con approfondimenti su Java, SEO tecnico e integrazione API.
    </p>
    <section class="competenze-home" style="padding: 2rem 0;">
        <h2 style="text-align: center; margin-bottom: 2rem;"></h2>

        <div class="griglia-competenze" style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center;">

            <!-- WordPress Avanzato -->
            <div class="card-competenze" style="flex: 1 1 250px; background: #fff; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
                <div class="competenza-icon" style="background-color: #21759b10; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fab fa-wordpress" style="font-size: 2rem; color: #21759b;"></i>
                </div>
                <h3>WordPress Avanzato</h3>
                <p>Temi personalizzati, ACF, CPT, shortcode, template gerarchici e loop personalizzati.</p>
            </div>

            <!-- PHP Backend -->
            <div class="card-competenze" style="flex: 1 1 250px; background: #fff; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
                <div class="competenza-icon" style="background-color: #6c63ff10; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fab fa-php" style="font-size: 2rem; color: #6c63ff;"></i>
                </div>
                <h3>PHP Backend</h3>
                <p>Logica, sicurezza, ottimizzazione e integrazione con database.</p>
            </div>

            <!-- Java & Spring Boot -->
            <div class="card-competenze" style="flex: 1 1 250px; background: #fff; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
                <div class="competenza-icon" style="background-color: #e76f5110; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fab fa-java" style="font-size: 2rem; color: #e76f51;"></i>
                </div>
                <h3>Java & Spring Boot</h3>
                <p>REST API, backend strutturato, Maven, Hibernate, applicazioni scalabili.</p>
            </div>

            <!-- Laravel Mix & Tooling -->
            <div class="card-competenze" style="flex: 1 1 250px; background: #fff; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
                <div class="competenza-icon" style="background-color: #38b2ac10; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fas fa-cogs" style="font-size: 2rem; color: #38b2ac;"></i>
                </div>
                <h3>Laravel Mix & Tooling</h3>
                <p>Compilazione asset moderna, npm, Babel, Webpack per WordPress.</p>
            </div>

            <!-- Frontend Responsive -->
            <div class="card-competenze" style="flex: 1 1 250px; background: #fff; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
                <div class="competenza-icon" style="background-color: #ff6b6b10; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fab fa-html5" style="font-size: 2rem; color: #ff6b6b;"></i>
                </div>
                <h3>Frontend Responsive</h3>
                <p>HTML5, CSS3, JavaScript base, UI accessibili e mobile-friendly.</p>
            </div>

            <!-- Database -->
            <div class="card-competenze" style="flex: 1 1 250px; background: #fff; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
                <div class="competenza-icon" style="background-color: #2a9d8f10; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fas fa-database" style="font-size: 2rem; color: #2a9d8f;"></i>
                </div>
                <h3>Database</h3>
                <p>MySQL, query ottimizzate, progettazione logica e sicurezza dei dati.</p>
            </div>

            <!-- Integrazione API -->
            <div class="card-competenze" style="flex: 1 1 250px; background: #fff; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
                <div class="competenza-icon" style="background-color: #17a2b810; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fas fa-plug" style="font-size: 2rem; color: #17a2b8;"></i>
                </div>
                <h3>Integrazione API</h3>
                <p>Connessione REST, servizi esterni (meteo, mappe), gestione dati e sicurezza.</p>
            </div>

            <!-- SEO Tecnico -->
            <div class="card-competenze" style="flex: 1 1 250px; background: #fff; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
                <div class="competenza-icon" style="background-color: #f39c1210; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fas fa-search" style="font-size: 2rem; color: #f39c12;"></i>
                </div>
                <h3>SEO Tecnico</h3>
                <p>Yoast SEO, struttura URL, performance, sitemap, accessibilità e schema.org.</p>
            </div>

            <!-- Controllo Versioni Git -->
            <div class="card-competenze" style="flex: 1 1 250px; background: #fff; border-radius: 15px; padding: 20px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
                <div class="competenza-icon" style="background-color: #f0503010; width: 60px; height: 60px; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                    <i class="fab fa-git-alt" style="font-size: 2rem; color: #f05030;"></i>
                </div>
                <h3>Git & Controllo Versioni</h3>
                <p>Gestione codice, branch, merge e collaborazione su progetti complessi.</p>
            </div>

        </div>

        <p style="text-align: center; margin-top: 2rem;">
            <a href="<?php echo esc_url(site_url('/progetti')); ?>" style="text-decoration: none; color: #f39c12; font-weight: bold;">
                Guarda i miei progetti &raquo;
            </a>
        </p>

    </section>

</main>

<?php get_footer(); ?>