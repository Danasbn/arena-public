<?php get_header() ?>
<?php
// adress : http://localhost/arena-candidate-wordpress/arena_product/
$loop = query_products(); // Query is defined in theme-queries.php
if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();

?>
        <section class="arena_product-content">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="arena_product__item">
                    <div class="arena_product__item__pic">
                        <img src="<?php the_post_thumbnail_url('mini') ?> " alt="">
                    </div>
                    <div class="arena_product__item__text">
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