<!DOCTYPE html>
<html lang="pt-br">
<?php $home_uri = get_template_directory_uri() ?>

<head>
    <?php wp_head() ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=$home_uri?>/style.css">
    <title>book4book</title>
</head>

<body>
    <div id="page">
        <header class="goheader" id="masthead" role="banner">
            <div class="container">
                <div class="row">
                    <div class="h-flex">
                        <div class="h-logo">
                            <a href="<?= get_home_url()?>">
                                <img src="<?=$home_uri?>/assets/img/logo-book4book.png" alt="Book4book livros">
                            </a>
                            <p>
                                Livros de leitor para leitors
                            </p>
                        </div>
                        <div class="h-search">
                            <div>
                                <form action="#">
                                    <div>
                                        <select>
                                            <option value="titulo">Título</option>
                                            <option value="autor">Autor</option>
                                            <option value="valor">Valor</option>
                                            <option value="editora">Editora</option>
                                        </select>
                                        <input type="search">
                                        <input type="image" src="<?=$home_uri?>/assets/img/search_lopa.png" alt="pesquisa">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="h-user">
                            <?php get_template_part('partials/header/user/user') ?>
                        </div>
                        <div class="h-join">
                            <a href="#" class="h-butom">Quero vender</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="h-store-nav">
                        <nav>
                            <?php 
                                if( has_nav_menu('primary' )){
                                    wp_nav_menu(array(
                                      'theme_location'=>'primary',
                                      'container' =>  false,
                                      'fallback_cb' => false,
                                      'depth' => 2
                                    ));
                                }
                            ?>
                            <?php 
                                if( has_nav_menu('second' )){
                                  wp_nav_menu(array(
                                      'theme_location'=>'second',
                                      'container' =>  false,
                                      'fallback_cb' => false,
                                      'depth' => 2
                                    ));
                                }
                            ?>


                            <!--
                            <ul>
                                <li class="h-dropdown">
                                    <a href="#">
                                        Categoria
                                    </a>
                                    <ul class="h-menu-droped">
                                        <li>
                                            <a href="#">
                                                categoria
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                categoria
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                categoria de algo
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                categoria
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        Recomendados
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Mais vendidos
                                    </a>
                                </li>
                            </ul>
-->
                            <!--   <ul>
             
                                <li>
                                    <a href="#">
                                        Como Comprar
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Como Vender
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Atendimento
                                    </a>
                                </li>
                                <li class="h-dropdown">
                                    <a href="#">
                                        Ajuda
                                    </a>
                                    <ul class="h-menu-droped">
                                        <li>
                                            <a href="">Como Comprar</a>
                                        </li>
                                        <li>
                                            <a href="">Como Vender</a>
                                        </li>
                                        <li>
                                            <a href="">Cancelamento ou devolução</a>
                                        </li>
                                        <li>
                                            <a href="">Segurança e privacidade</a>
                                        </li>
                                        <li>
                                            <a href="">Termos e condições de uso</a>
                                        </li>
                                        <li>
                                            <a href="">Atendimento</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>