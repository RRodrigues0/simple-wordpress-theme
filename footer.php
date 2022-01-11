<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p><?php echo get_bloginfo("title"); ?> ©<?php echo date("Y"); ?> </p>
            </div>
            <div class="col-md-6">
                <?php
                    echo wp_nav_menu();
                   // echo wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => false));
                ?>

            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>