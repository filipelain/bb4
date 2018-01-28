<?php 
$home_uri = get_template_directory_uri();
$logado = is_user_logged_in();

if($logado){ $current_user = wp_get_current_user();}
?>
<a 
 <?php if(!$logado){ ?> 
            href="#" data-toggle="modal" data-target="#login-Form-Modal"<?php 
          }else{ ?> 
             href="<?= get_permalink( get_option('woocommerce_myaccount_page_id') )?>"
        <?php }?> 
>
    <?php 
        if(!$logado){ ?>
            <img  src="<?=$home_uri?>/assets/img/user_avatar.png"alt="#">
            <span  class="name" >Entrar/Cadastrar</span>
        <?php } else{ ?>
            <img  src="<?= get_avatar_url($current_user->ID) ?>"class="avatar" alt="#">
            <span class="name">Olá,<?= $current_user->display_name?></span>
        <?php } ?> 
    
</a>

<?php  if(!$logado){ ?>
<div class="modal fade" id="login-Form-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php echo do_shortcode("[woocommerce_my_account]"); ?>
        </div>
    </div>
</div>
<?php } ?>
