<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title"><?php the_title(); ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) );?>"><i class="fa fa-home"></i> <?php echo get_the_title( get_option('page_on_front') ); ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/core-img/curve-5.png'; ?>" alt="">
    </div>
</div>
