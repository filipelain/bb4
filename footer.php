<footer>
    <?php $home_uri = get_template_directory_uri() ?>
    <div class="voltar-topo">
        <a href="#">Ir para o Topo</a>
    </div>
    <nav class="menu-footer">
        <div class="container">
            <div>
                <h2>Sobre Nós</h2>
                <ul>
                    <li>
                        <a href="#">Quem Somos</a>
                    </li>
                    <li>
                        <a href="#">Programa de Incentivo à Leitura</a>
                    </li>
                </ul>
                <a href="#">
                    <img class="logo-footer" src="<?=$home_uri?>/assets/img/logo-b4b.png" alt="logo book4book">
                </a>
            </div>
            <div>
                <h2>Ajuda</h2>
                <ul>
                    <li>
                        <a href="#">Como Comprar</a>
                    </li>
                    <li>
                        <a href="#">Como Vender</a>
                    </li>
                    <li>
                        <a href="#">Trocas e Devoluções</a>
                    </li>
                    <li>
                        <a href="#">Segurança e Privacidade</a>
                    </li>
                    <li>
                        <a href="#">Termos e Condições de Uso Atendimento</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2>Compre por Categoria</h2>
                <ul>
                    <li>
                        <a href="#">Arquitetura</a>
                    </li>
                    <li>
                        <a href="#">Biologia</a>
                    </li>
                    <li>
                        <a href="#">Cinema</a>
                    </li>
                    <li>
                        <a href="#">Design</a>
                    </li>
                    <li>
                        <a href="#">Direito</a>
                    </li>
                    <li>
                        <a href="#">Jornalismo</a>
                    </li>
                    <li>
                        <a href="#">Medicina</a>
                    </li>
                    <li>
                        <a href="#">Biologia</a>
                    </li>
                    <li>
                        <a href="#">Design</a>
                    </li>
                    <li>
                        <a href="#">Direito</a>
                    </li>
                    <li>
                        <a href="#">Jornalismo</a>
                    </li>
                    <li>
                        <a href="#">Medicina</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2>Siga nossas redes</h2>
                <ul class="footer-sosical">
                    <li>
                        <a href="https://www.facebook.com/livroparalivro/">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                <h2>Forma de Pagamento</h2>
                <img src="<?=$home_uri?>/assets/img/pagueseguro-logo-lg.png" alt="page seguro">
            </div>

        </div>
    </nav>
    <div class="copy-rigth">
        <p>Book4Book © 2017 - todos os direitos reservados</p>
        <p>GIG Livros Atividade de Internet Ltda-me, cnpj: 26.263.929/0001-05, Ed. The Union - SMAS, trecho 3, torre A, sala
            406, Brasília/DF</p>
    </div>
</footer>
</div>
<script src="<?=$home_uri?>/assets/js/jquery.min.js"></script>
<script src="<?=$home_uri?>/assets/js/owl.carousel.min.js"></script>
<script src="<?=$home_uri?>/assets/js/bootstrap.min.js"></script>

<!-- custon script -->
<script src="<?=$home_uri?>/assets/js/simpleEfects.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ['<img src="<?=$home_uri?>/assets/img/seta-esquerda.png">',
            '<img src="<?=$home_uri?>/assets/img/seta-direita.png">'
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
</script>
<?php wp_footer() ?>
</body>

</html>