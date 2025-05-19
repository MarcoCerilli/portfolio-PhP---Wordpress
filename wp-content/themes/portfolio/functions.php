<?php


// Custom Post Type: Progetti
function crea_cpt_progetti()
{
    register_post_type('progetto', [
        'labels' => [
            'name' => 'Progetti',
            'singular_name' => 'Progetto',
            'add_new' => 'Aggiungi nuovo',
            'add_new_item' => 'Aggiungi nuovo progetto',
            'edit_item' => 'Modifica progetto',
            'new_item' => 'Nuovo progetto',
            'view_item' => 'Vedi progetto',
            'search_items' => 'Cerca progetti',
            'not_found' => 'Nessun progetto trovato',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'portfolio-sviluppatore-web'],
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true, // abilita editor a blocchi
    ]);
}
add_action('init', 'crea_cpt_progetti');




function tema_portfolio_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());

    // Includi Particles.js da CDN
    wp_enqueue_script('particles-js', 'https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js', [], null, true);

    // Il nostro script personalizzato per configurare particelle
    wp_enqueue_script('custom-particles', get_template_directory_uri() . '/js/custom-particles.js', ['particles-js'], null, true);
}
add_action('wp_enqueue_scripts', 'tema_portfolio_scripts');


//  function menu 
function tema_portfolio_setup()
{
    register_nav_menus([
        'primary' => __('Menu Principale'),
    ]);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'tema_portfolio_setup');



/* funzione gestisci invio form */
function gestisci_invio_contatti()
{
    if (
        ! isset($_POST['invia_contatto_nonce_field']) ||
        ! wp_verify_nonce($_POST['invia_contatto_nonce_field'], 'invia_contatto_nonce')
    ) {
        wp_die('Nonce non valido.');
    }

    // Sanificazione e fallback valori
    $nome = isset($_POST['nome']) ? sanitize_text_field($_POST['nome']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $oggetto = isset($_POST['oggetto']) ? sanitize_text_field($_POST['oggetto']) : '';
    $messaggio = isset($_POST['messaggio']) ? sanitize_textarea_field($_POST['messaggio']) : '';

    // Controlli base
    if (empty($nome) || empty($email) || empty($messaggio) || !is_email($email)) {
        wp_die('Compila tutti i campi obbligatori correttamente.');
    }

    $to = get_option('admin_email'); // oppure indirizzo personalizzato
    $subject = $oggetto ?: 'Messaggio dal sito di ' . $nome;
    $body = "Nome: $nome\nEmail: $email\n\nMessaggio:\n$messaggio";

    $headers = [
        'From: ' . $nome . ' <' . $email . '>',
        'Reply-To: ' . $nome . ' <' . $email . '>',
        'Content-Type: text/plain; charset=UTF-8',
    ];

    $inviato = wp_mail($to, $subject, $body, $headers);

    if ($inviato) {
        wp_safe_redirect(site_url('/grazie-per-avermi-contattato'));
    } else {
        wp_die('Errore durante l\'invio del messaggio. Riprova più tardi.');
    }
    exit;
}

add_action('admin_post_nopriv_invia_contatto', 'gestisci_invio_contatti');
add_action('admin_post_invia_contatto', 'gestisci_invio_contatti');


/* TAXONOMY COMPETENZA */

function crea_tassonomia_competenza()
{
    $labels = [
        'name' => 'Competenze',
        'singular_name' => 'Competenza',
        'search_items' => 'Cerca competenze',
        'all_items' => 'Tutte le competenze',
        'edit_item' => 'Modifica competenza',
        'update_item' => 'Aggiorna competenza',
        'add_new_item' => 'Aggiungi nuova competenza',
        'new_item_name' => 'Nome nuova competenza',
        'menu_name' => 'Competenze',
    ];

    register_taxonomy('competenza', ['progetto'], [
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'competenza'],
    ]);
}
add_action('init', 'crea_tassonomia_competenza');



/*   META BOX  */

function aggiungi_metabox_competenze()
{
    add_meta_box(
        'competenza_div',
        'Competenze',
        'post_categories_meta_box',  // metabox per tassonomia gerarchica
        'progetto',
        'side',
        'default',
        ['taxonomy' => 'competenza']
    );
}
add_action('add_meta_boxes', 'aggiungi_metabox_competenze');


/*  POPOLAMENTO COMPETENZE  */
function inserisci_competenze_predefinite()
{
    $competenze = [
        'Tecnologie Backend' => [
            'Java',
            'Spring Boot',
            'Spring MVC',
            'Spring Data',
            'MySQL',
            'application.properties'
        ],
        'Tecnologie Frontend' => [
            'HTML',
            'CSS',
            'JavaScript',
            'Vanilla JavaScript', // JavaScript puro, senza l’uso di framework o librerie esterne come React o jQuery
            'Thymeleaf',
            'Bootstrap'
        ],
        'Framework / CMS' => [
            'Spring Boot',
            'WordPress'
        ],
        'Strumenti' => [
            'Gradle',
            'Git',
            'GitHub',
            'Eclipse',
            'VS Code',
            'MAMP',
            'MySQL Workbench'
        ],
        'Competenze Trasversali' => [
            'MVC Pattern',
            'REST',
            'Template Engine',
            'Routing Spring',
            'Gestione Form',
            'Validazione Dati',
            'Responsive Design',
            'Integrazione API',
            'SEO'
        ]
    ];


    foreach ($competenze as $categoria => $termini) {
        // Crea o recupera il termine padre
        $parent_term = term_exists($categoria, 'competenza');
        if (!$parent_term) {
            $parent_term = wp_insert_term($categoria, 'competenza');
        }

        $parent_id = is_array($parent_term) ? $parent_term['term_id'] : $parent_term;

        // Aggiunge i sotto-termini
        foreach ($termini as $termine) {
            if (!term_exists($termine, 'competenza')) {
                wp_insert_term($termine, 'competenza', ['parent' => $parent_id]);
            }
        }
    }
}
add_action('init', 'inserisci_competenze_predefinite');



function aggiungi_meta_competenze()
{
    if (is_page(14)) {
        echo '<title>Competenze sviluppatore PHP WordPress - Portfolio di Marco Cerilli</title>' . "\n";
        echo '<meta name="description" content="Scopri le mie competenze in PHP, WordPress, Java Spring Boot, SEO tecnico e integrazione API. Sviluppo web moderno e ottimizzazione.">' . "\n";
    }
}
add_action('wp_head', 'aggiungi_meta_competenze');




/* FUNZIONI PARTICELLE */

function portfolio_enqueue_scripts()
{
    // Carica la libreria particles.js (puoi usare CDN o file locale)
    wp_enqueue_script(
        'particles-js',
        'https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js',
        array(),
        null,
        true
    );

    // Carica il tuo file custom con la configurazione di particles
    wp_enqueue_script(
        'custom-particles',
        get_template_directory_uri() . '/js/custom-particles.js',
        array('particles-js'), // dipende da particles-js
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_scripts');
