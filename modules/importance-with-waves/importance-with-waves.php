<div class="importance importance--waves">
    <svg class="wave wave--top" viewBox="0 0 1440 708" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M620.5 60C758.655 24.8908 881.271 7.0887 988.067 2.00043H1114.69C1264.51 9.72522 1373.33 45.1761 1440 89.399V2.00043H1114.69C1075.31 -0.0301534 1033.1 -0.144911 988.067 2.00043H720H0V24.0228C37.0625 46.4259 305.835 139.965 620.5 60Z"
            fill="white" />
    </svg>
    <svg class="wave wave--bottom" viewBox="0 0 1440 92" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M819.5 31.7613C681.345 66.8705 558.729 84.6725 451.933 89.7608H325.306C175.485 82.036 66.6656 46.5851 0 2.36219V89.7608H325.306C364.689 91.7914 406.905 91.9061 451.933 89.7608H720H1440V67.7384C1402.94 45.3354 1134.17 -48.2039 819.5 31.7613Z"
            fill="white" />
    </svg>

    <div class="right">
        <img class="importance__img" src="<?php the_sub_field('img') ?>" alt="">
    </div>
    <div class="left">
        <div class="importance__text">
            <h1 style="color:<?php the_sub_field('color') ?>;"><?php the_sub_field('title') ?></h1>
            <?php the_sub_field('text') ?>
        </div>
    </div>
</div>