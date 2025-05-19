<footer class="site-footer">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
</footer>

</div> <!-- chiusura .site -->

<!-- Pulsanti in alto a destra -->
<div class="floating-buttons top-buttons">
    <a href="https://wa.me/393804291043" class="float-btn whatsapp" target="_blank" rel="noopener" aria-label="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="mailto:cerillimarco15@gmail.com" class="float-btn email" aria-label="Email">
        <i class="fas fa-envelope"></i>
    </a>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.menu');
        if (toggleButton && menu) {
            toggleButton.addEventListener('click', function() {
                const expanded = toggleButton.getAttribute('aria-expanded') === 'true' || false;
                toggleButton.setAttribute('aria-expanded', !expanded);
                menu.classList.toggle('active');
            });
        }
    });
</script>





<?php wp_footer(); ?>

</body>

</html>