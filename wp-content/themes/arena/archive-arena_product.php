<?php get_header() ?>
<?php
// http://localhost/arena-candidate-wordpress/arena_product/
$loop = query_products() ;
if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();

?>
        <section class="entry-content">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="<?php the_post_thumbnail_url('mini') ?> " alt="">
                    </div>
                    <div class="blog__item__text">
                        <h5><a href="<?= get_the_permalink() ?>"><?php the_title() ?></a></h5>
                        <p><?php the_excerpt() ?></p>
                    </div>
                </div>
            </div>
        </section>
    <?php
    endwhile; ?>
<?php
endif;  ?>