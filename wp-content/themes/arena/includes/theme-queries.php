<?php
// Php file where I'll wrote every custom query, and call it where needed. Allow easier modifications, as it will be effective everywhere the associated function is called. 

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

