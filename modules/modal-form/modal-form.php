<div id="<?php the_sub_field('id') ?>" class="modal-cotizacion">
    <div id="boton-footer" class="overlay overlayCoti"></div>

    <div class="modal-cotizacion__content">
        <div class="modal-cotizacion__close">
            <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.5 0C8.29927 0 0 8.29927 0 18.5C0 28.7007 8.29927 37 18.5 37C28.7007 37 37 28.7007 37 18.5C37 8.29927 28.7007 0 18.5 0ZM18.5 35.4584C9.14912 35.4584 1.54164 27.8509 1.54164 18.5C1.54164 9.14912 9.14912 1.54164 18.5 1.54164C27.8509 1.54164 35.4584 9.14912 35.4584 18.5C35.4584 27.8509 27.8509 35.4584 18.5 35.4584Z"
                    fill="#FF2D4F" />
                <path
                    d="M25.9826 11.0175C25.6815 10.7163 25.1937 10.7163 24.8926 11.0175L18.5001 17.41L12.1076 11.0175C11.8064 10.7164 11.3187 10.7164 11.0176 11.0175C10.7165 11.3187 10.7165 11.8065 11.0176 12.1075L17.4101 18.5L11.0176 24.8925C10.7165 25.1936 10.7165 25.6814 11.0176 25.9824C11.1681 26.133 11.3654 26.2083 11.5626 26.2083C11.7598 26.2083 11.957 26.133 12.1077 25.9824L18.5001 19.59L24.8925 25.9824C25.0431 26.133 25.2403 26.2083 25.4376 26.2083C25.6348 26.2083 25.832 26.133 25.9826 25.9824C26.2837 25.6813 26.2837 25.1935 25.9826 24.8925L19.59 18.5L25.9825 12.1075C26.2836 11.8064 26.2836 11.3186 25.9826 11.0175Z"
                    fill="#FF2D4F" />
            </svg>

        </div>
        <div class="modal-cotizacion__content__img" style="background:url(<?php the_sub_field('imgModal') ?>)"></div>
        <div class="modal-cotizacion__content__form">
            <h3><?php the_sub_field('title') ?></h3>
            <div class="modal-cotizacion__content__form__content">
                <?php echo do_shortcode('[contact-form-7 id="' . get_sub_field('form') . '" title="' . get_sub_field('form') . '"]'); ?>
            </div>
        </div>



    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    $('.btnModalInfo').click(function() {
        $('#contactForm').addClass('active')
    })
    $('.modal-cotizacion__close').click(function() {
        $('.modal-cotizacion').removeClass('active')
    })
    $('.btnCotiza').click(function() {
        $('#contactForm').addClass('active')
    })

})
</script>