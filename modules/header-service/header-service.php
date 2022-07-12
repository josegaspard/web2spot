<div class="header-service" style="background-image: url(<?php the_sub_field("img-bg") ?>)">
    <div class="filter" style="background-color:<?php the_sub_field("color") ?>;opacity:0.55;">
    </div>
    <div class="container">
        <div class="header-service__text">
            <?php the_sub_field('content') ?>
            <br>
            <a href="<?php the_sub_field('link') ?>">
                <div id="<?php the_sub_field('id') ?>" class="btn btn--red boton-servicios">
                    <p><?php the_sub_field('btnText') ?></p>
                </div>
            </a>
        </div>
    </div>
    <?php include('wave.php'); ?>
</div>