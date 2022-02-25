<?php


if(!function_exists('query_products')) {
    function query_products()
    {
        $query = new WP_Query(
            array(
                'post_type' => 'arena_product',
                'orderby' => 'name',
                'order' => 'ASC',
                'posts_per_page' => -1,
                
            )
        );
        return $query;
    }
}


?>

