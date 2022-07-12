<div class="importance">
    <div class="left">
        <div class="importance__text">
            <h1 style="color:<?php the_sub_field('color') ?>;"><?php the_sub_field('title') ?></h1>
            <?php the_sub_field('text') ?>
        </div>
    </div>
    <div class="right">
        <img class="importance__img" src="<?php the_sub_field('img') ?>" alt="">
    </div>
    <script type="text/javascript">
    let titles = document.querySelector("h1");
    console.log(titles)
    </script>
</div>