<?php
/* Template Name: Contatti Personalizzata */
get_header();

// Avvia la sessione se non attiva (serve per messaggi flash)
if (! session_id()) {
    session_start();
}

// Prendi eventuali messaggi flash
$success_message = $_SESSION['success_message'] ?? '';
$error_message = $_SESSION['error_message'] ?? '';

// Pulisci i messaggi dopo averli letti
unset($_SESSION['success_message'], $_SESSION['error_message']);
?>

<main style="max-width: 800px; margin: 40px auto; padding: 0 20px; font-family: Arial, sans-serif; color: #333;">

    <h1>Contattami</h1>

    <p>
        Se vuoi metterti in contatto con Marco Cerilli, sviluppatore PHP, WordPress e Java Spring, sei nel posto giusto.
        Qui puoi scrivermi per collaborazioni, consulenze o qualsiasi progetto legato al mondo dello sviluppo web.
    </p>

    <p>
        Per conoscere meglio il mio lavoro, visita la pagina
        <a href="<?php echo esc_url(site_url('/sviluppatore-wordpress')); ?>">Chi sono</a>
        o scopri i miei
        <a href="<?php echo esc_url(site_url('/portfolio-sviluppatore-web')); ?>">progetti</a>.
    </p>

    <img src="https://ui-avatars.com/api/?name=Marco+Cerilli&background=0D8ABC&color=fff&size=250"
        alt="Avatar di Marco Cerilli"
        style="max-width: 250px; border-radius: 50%; margin: 2rem auto; display: block;">


    <?php if ($success_message): ?>
        <div style="padding: 15px; background-color: #d4edda; color: #155724; border-radius: 8px; margin-bottom: 20px; text-align:center;">
            <?php echo esc_html($success_message); ?>
        </div>
    <?php elseif ($error_message): ?>
        <div style="padding: 15px; background-color: #f8d7da; color: #721c24; border-radius: 8px; margin-bottom: 20px; text-align:center;">
            <?php echo esc_html($error_message); ?>
        </div>
    <?php endif; ?>

    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" style="margin-top: 2rem; display: flex; flex-direction: column; gap: 1rem;">
        <input type="hidden" name="action" value="invia_contatto">
        <?php wp_nonce_field('invia_contatto_nonce', 'invia_contatto_nonce_field'); ?>

        <label for="nome" style="font-weight: bold;">Nome <span style="color: red;">*</span></label>
        <input type="text" id="nome" name="nome" required placeholder="Il tuo nome" style="padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1rem;">

        <label for="email" style="font-weight: bold;">Email <span style="color: red;">*</span></label>
        <input type="email" id="email" name="email" required placeholder="La tua email" style="padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1rem;">

        <label for="oggetto" style="font-weight: bold;">Oggetto</label>
        <input type="text" id="oggetto" name="oggetto" placeholder="Motivo del contatto" style="padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1rem;">

        <label for="messaggio" style="font-weight: bold;">Messaggio <span style="color: red;">*</span></label>
        <textarea id="messaggio" name="messaggio" required rows="6" placeholder="Scrivi qui il tuo messaggio..." style="padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 1rem; resize: vertical;"></textarea>

        <button type="submit" style="background-color: #f39c12; color: white; border: none; padding: 12px 20px; border-radius: 8px; font-weight: bold; font-size: 1rem; cursor: pointer; transition: background-color 0.3s ease;">
            Invia Messaggio
        </button>
    </form>

    <div style="display: flex; flex-wrap: wrap; gap: 1rem; margin-top: 3rem; justify-content: center;">

        <!-- Pulsante LinkedIn -->
        <a href="https://www.linkedin.com/in/marco-cerilli" target="_blank" rel="noopener" style="flex: 1 1 200px; background: #0A66C2; color: white; padding: 12px 20px; border-radius: 8px; text-align: center; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 8px;">
            <i class="fab fa-linkedin-in"></i> Seguimi su LinkedIn
        </a>

        <!-- Pulsante GitHub -->
        <a href="https://https://github.com/MarcoCerilli" target="_blank" rel="noopener" style="flex: 1 1 200px; background: #333; color: white; padding: 12px 20px; border-radius: 8px; text-align: center; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 8px;">
            <i class="fab fa-github"></i> Seguimi su GitHub
        </a>

        <!-- Pulsante Scarica CV -->
        <a href="<?php echo esc_url(get_template_directory_uri() . '/pdf/CV_Marco_Cerilli.pdf'); ?>" download style="flex: 1 1 200px; background: rgb(10, 102, 194); color: white; padding: 12px 20px; border-radius: 8px; text-align: center; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 8px;">
            <i class="fas fa-file-pdf"></i> Scarica il mio CV
        </a>

    </div>

    <p style="margin-top: 3rem; font-size: 1rem; line-height: 1.5;">
        Sono uno sviluppatore junior specializzato in PHP, WordPress e Java Spring, appassionato di creare soluzioni web su misura.
        Contattami per discutere del tuo progetto o per una consulenza: sarò felice di collaborare con te e crescere insieme.
    </p>

</main>

<?php get_footer(); ?>