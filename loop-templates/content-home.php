<div class="bg-light-blue p-5 home-banner d-flex align-items-center" style="background: url('<?php the_field( 'home_banner_background_image' ); ?>') no-repeat center center; -webkit-background-size: contain; -moz-background-size: contain; -o-background-size: contain; background-size: contain;">
    <div class="container" >
    

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
                <p class="lead">
                    <?php the_field( 'home_page_banner_sub_title' ); ?>
                </p>
                <h1>
                    <?php the_field( 'home_page_banner_title' ); ?>
                </h1>
                <?php the_field( 'home_page_banner_content' ); ?>

                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary" type="button">Button</button>
                    <button class="btn btn-primary" type="button">Button</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-7 text-center">
                <?php $home_page_banner_image = get_field( 'home_page_banner_image' ); ?>
                <?php if ( $home_page_banner_image ) : ?>
                    <img class="" src="<?php echo esc_url( $home_page_banner_image['url'] ); ?>" alt="<?php echo esc_attr( $home_page_banner_image['alt'] ); ?>" width="900" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>