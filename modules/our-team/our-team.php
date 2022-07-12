<div class="our-team">
    <?php include("top-wave.php"); ?>
    <div class="before">
        <div class="circle">
            <div class="circle sub-circle"></div>
        </div>
    </div>
    <div class="container">
        <div class="our-team__title">
            <?php the_sub_field('title') ?>
        </div>
        <div class="our-team__slider owl-carousel owl-theme">
            <?php if (have_rows('team')) {
                while (have_rows('team')) {
                    the_row(); ?>
            <div class="our-team__member " style="background-image:url(<?php the_sub_field('img') ?>)">
                <!-- <div class="our-team__member__img"></div> -->
                <div class="filter" style="background:linear-gradient(180deg, rgba(54, 52, 133, 0) -2.41%, rgba(54, 52, 133, 0.9) 56.81%);
border-radius: 8px;">
                </div>
                <div class="our-team__member__text">
                    <a href="<?php the_sub_field('link') ?>" class="btnLinked">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.9998 0.799927C9.39581 0.799927 0.799805 9.39593 0.799805 19.9999C0.799805 30.6039 9.39581 39.1999 19.9998 39.1999C30.6038 39.1999 39.1998 30.6039 39.1998 19.9999C39.1998 9.39593 30.6038 0.799927 19.9998 0.799927ZM15.2998 27.9579H11.4118V15.4459H15.2998V27.9579ZM13.3318 13.9099C12.1038 13.9099 11.3098 13.0399 11.3098 11.9639C11.3098 10.8659 12.1278 10.0219 13.3818 10.0219C14.6358 10.0219 15.4038 10.8659 15.4278 11.9639C15.4278 13.0399 14.6358 13.9099 13.3318 13.9099ZM29.4998 27.9579H25.6118V21.0239C25.6118 19.4099 25.0478 18.3139 23.6418 18.3139C22.5678 18.3139 21.9298 19.0559 21.6478 19.7699C21.5438 20.0239 21.5178 20.3839 21.5178 20.7419V27.9559H17.6278V19.4359C17.6278 17.8739 17.5778 16.5679 17.5258 15.4439H20.9038L21.0818 17.1819H21.1598C21.6718 16.3659 22.9258 15.1619 25.0238 15.1619C27.5818 15.1619 29.4998 16.8759 29.4998 20.5599V27.9579Z"
                                fill="white" />
                        </svg>
                    </a>
                    <h3><?php the_sub_field('member') ?></h3>
                    <p><?php the_sub_field('work') ?></p>
                    <p class="description"><?php the_sub_field('description') ?></p>
                </div>

            </div>
            <?php }
            } ?>
        </div>
    </div>
    <div class="after">
        <div class="circle">
            <div class="circle sub-circle"></div>
        </div>
    </div>
    <?php include("bottom-wave.php"); ?>

</div>