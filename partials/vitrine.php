<?php
                // SELECT ID, post_title, (SELECT wp_users.user_nicename FROM wp_users WHERE wp_users.ID = wp_posts.post_author) as Nome FROM `wp_posts` WHERE post_title = 'harry Pother e a coisa do coiso'
                $querystr = "SELECT * from wp_posts WHERE post_type = 'product' and post_status = 'publish' GROUP BY post_title LIMIT 2";

                $pageposts = $wpdb->get_results($querystr, OBJECT);

                $args = array(
                    'post_per_page' => 5,
                    'post_type' => 'product'
                );
                //$product_list = new WP_Query($args);
                ?>
                    <?php
                    var_dump($pageposts.length);
                    foreach($pageposts as $pagepost){
                        echo '<pre>';
                        //echo $pagepost->post_title;
                        echo '++++++++++++++++++++++++++++++++++++++++++++++++++++++++';
                        echo the_post( $pagepost->ID);
                        echo '++++++++++++++++++++++++++++++++++++++++++++++++++++++++';
                        var_dump($pagepost);
                       echo '</pre>';  
                    }?>
                        <?php
                // $product_obj = wc_get_product(intval( get_the_ID()));
                // $stock_quantity = $product_obj->get_stock_quantity();
                // $price_regurla = $product_obj->get_regular_price();
                // $price_sale = $product_obj->get_sale_price();
                // $price_price = $product_obj->get_price();
                ?>


<section class="vitrine" aria-label="Novos Produtos">
    <div class="container">
        <div class="row">
            <h2 class="section-title">Recomendados para você</h2>
        </div>
        <div class="row">
            <ul class="products">
            <?php foreach($pageposts as $pagepost){ 
                  $product_obj = wc_get_product(intval( get_the_ID()));
                  echo '%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%';
                   var_dump($product_obj);
                  die();
                ?>
                <li>
                    <article>
                        <div class="img-display">
                            <img class="img" src=" " class="" alt="">
                        </div>
                        <div class="details">
                            <h3 class="titulo-livro">
                             <?= $pagepost->post_title ?>
                            </h3>
                            <span class="qtd">()</span>
                            <div class="price">
                                <div class="amount">A partir de
                                    <span class="woocommerce-Price-currencySymbol">R$</span>
                                    <span class="price-value"></span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <a rel="nofollow" href="" "data-quantity data-product_id data-product_sku" class="bt-detalhes">Ver Detalhes</a>
                </li>
            <?php } ?>
            </ul>
        </div>
    </div>
</section>