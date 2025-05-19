<?php
/* Template Name: Chi Sono */
get_header();


$foto = get_field('foto_profilo');
$titolo = get_field('titolo_chi_sono') ?: get_the_title();
$descrizione = get_field('testo_descrizione') ?: 'Descrizione in arrivo.';
$esperienza = get_field('esperienza_professionale');
$formazione = get_field('formazione_accademica');
$valori = get_field('valori_personali');
?>

<main class="chi-sono-page">

    <section class="sezione-intro" aria-label="Introduzione chi sono">
        <?php if ($foto && isset($foto['url'])): ?>
            <div class="foto-profilo">
                <img src="<?php echo esc_url($foto['url']); ?>"
                    alt="<?php echo esc_attr(!empty($foto['alt']) ? $foto['alt'] : 'Foto profilo di Marco Cerilli'); ?>" />
            </div>
        <?php endif; ?>

        <div class="descrizione-chi-sono">
            <h1><?php echo esc_html($titolo); ?></h1>
            <p><?php echo esc_html($descrizione); ?></p>
        </div>
    </section>

    <section class="box-competenze" aria-label="Competenze e valori personali">
        <?php if ($esperienza): ?>
            <article class="box">
                <h2><i class="fas fa-briefcase" style="color: #2a9d8f;"></i> Esperienza Professionale</h2>
                <p><?php echo nl2br(esc_html($esperienza)); ?></p>
            </article>
        <?php endif; ?>

        <?php if ($formazione): ?>
            <article class="box">
                <h2><i class="fas fa-graduation-cap" style="color: #264653;"></i> Formazione Accademica</h2>
                <p><?php echo nl2br(esc_html($formazione)); ?></p>
            </article>
        <?php endif; ?>

        <?php if ($valori): ?>
            <article class="box">
                <h2><i class="fas fa-heart" style="color: #e76f51;"></i> Valori Personali</h2>
                <p><?php echo nl2br(esc_html($valori)); ?></p>
            </article>
        <?php endif; ?>
    </section>

    <section class="contattami" style="text-align: center; padding: 2rem 0;">
        <h2>Contattami</h2>
        <p>Hai un progetto in mente o vuoi collaborare con me?</p>
        <a href="<?php echo esc_url(site_url('/contatti')); ?>"
            style="display: inline-block; margin-top: 1rem; padding: 0.75rem 1.5rem; background-color: #f39c12; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; transition: background-color 0.3s ease;">
            Visita la sezione Contatti
        </a>
    </section>

</main>

<?php get_footer(); ?>