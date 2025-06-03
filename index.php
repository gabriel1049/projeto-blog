<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./css/global.css">
    <title>Blog GOAT</title>
</head>

<body>

    <?php
    include "components/header.php";
    ?>


    <!-- Hero/banner introdutório -->
    <section class="hero_banner wrapper_padding" role="banner">
        <div class="hero_banner_text">
            <p class="title_hero_post">Categoria do Post</p>
            <h1>Título do artigo do blog da GOAT</h1>
            <div class="info_text_banner">
                <p><i class="fa-solid fa-calendar"></i> 26 de maio, 2025</p>
                <p><i class="fa-solid fa-clock"></i> 20 minutos</p>
            </div>
        </div>
    </section>

    <!-- Destaques com cards principais -->
    <section class="main_container_homepage wrapper_margin">
        <section class="sessao_principais_post" aria-label="Postagens em destaque">

            <article class="card_unico_post_section_hero_principal">
                <div class="info_card_principais_post">
                    <h3 class="titulo_post_card">A Comprehensive Checklist For Running</h3>
                    <time datetime="2024-08-27" class="data_post">
                        <i class="fa-regular fa-calendar"></i> 27 AUGUST, 2024
                    </time>
                </div>

                <figure class="img_card_section_hero_principal">
                    <img src="./img/post1.png" alt="Imagem do post">
                </figure>
            </article>

            <article class="card_unico_post_section_hero_principal">
                <div class="info_card_principais_post">
                    <h3 class="titulo_post_card">A Comprehensive Checklist For Running</h3>
                    <time datetime="2024-08-27" class="data_post">
                        <i class="fa-regular fa-calendar"></i> 27 AUGUST, 2024
                    </time>
                </div>

                <figure class="img_card_section_hero_principal">
                    <img src="./img/frame-banner.png" alt="Imagem do post">
                </figure>
            </article>

            <article class="card_unico_post_section_hero_principal">
                <div class="info_card_principais_post">
                    <h3 class="titulo_post_card">A Comprehensive Checklist For Running</h3>
                    <time datetime="2024-08-27" class="data_post">
                        <i class="fa-regular fa-calendar"></i> 27 AUGUST, 2024
                    </time>
                </div>

                <figure class="img_card_section_hero_principal">
                    <img src="./img/post2.png" alt="Imagem do post">
                </figure>
            </article>


        </section>

        <section class="banner_servico1" aria-label="Banner promocional">
            <figure>
                <img src="./img/banner_servico1.png" alt="Banner com serviço 1">
            </figure>
        </section>
    </section>

    <!-- Conteúdo principal do blog -->
    <main class="container_hero wrapper_margin">
        <section class="container_posts" aria-labelledby="titulo-ultimas-postagens">
            <div class="ultimos_posts_container">
                <h2 id="titulo-ultimas-postagens">Últimas Postagens</h2>
                <a href="#" class="ver-todos">VER TODOS <i class="fa-regular fa-share-from-square"></i></a>
            </div>

            <section class="ultimos_posts">
                <!-- Cada post é um article -->
                <article class="post">
                    <figure class="img_post">
                        <span class="categoria">Destination</span>
                        <img src="./img/post2.png" alt="Imagem da postagem 1">
                    </figure>
                    <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                    <div class="tempo_post">
                        <time datetime="2025-05-26"><i class="fa-solid fa-calendar"></i> 26 de maio, 2025</time>
                        <span><i class="fa-solid fa-clock"></i> 20 minutos</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit optio...</p>
                </article>

                <!-- Repetição dos outros posts -->
                <article class="post">
                    <figure class="img_post">
                        <span class="categoria">Destination</span>
                        <img src="./img/post1.png" alt="Imagem da postagem 2">
                    </figure>
                    <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                    <div class="tempo_post">
                        <time datetime="2025-05-26"><i class="fa-solid fa-calendar"></i> 26 de maio, 2025</time>
                        <span><i class="fa-solid fa-clock"></i> 20 minutos</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit optio...</p>
                </article>

                <article class="post">
                    <figure class="img_post">
                        <span class="categoria">Destination</span>
                        <img src="./img/post1.png" alt="Imagem da postagem 3">
                    </figure>
                    <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                    <div class="tempo_post">
                        <time datetime="2025-05-26"><i class="fa-solid fa-calendar"></i> 26 de maio, 2025</time>
                        <span><i class="fa-solid fa-clock"></i> 20 minutos</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit optio...</p>
                </article>

                <article class="post">
                    <figure class="img_post">
                        <span class="categoria">Destination</span>
                        <img src="./img/post2.png" alt="Imagem da postagem 4">
                    </figure>
                    <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                    <div class="tempo_post">
                        <time datetime="2025-05-26"><i class="fa-solid fa-calendar"></i> 26 de maio, 2025</time>
                        <span><i class="fa-solid fa-clock"></i> 20 minutos</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit optio...</p>
                </article>

                <article class="post">
                    <figure class="img_post">
                        <span class="categoria">Destination</span>
                        <img src="./img/post2.png" alt="Imagem da postagem 4">
                    </figure>
                    <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                    <div class="tempo_post">
                        <time datetime="2025-05-26"><i class="fa-solid fa-calendar"></i> 26 de maio, 2025</time>
                        <span><i class="fa-solid fa-clock"></i> 20 minutos</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit optio...</p>
                </article>

                <article class="post">
                    <figure class="img_post">
                        <span class="categoria">Destination</span>
                        <img src="./img/post2.png" alt="Imagem da postagem 4">
                    </figure>
                    <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                    <div class="tempo_post">
                        <time datetime="2025-05-26"><i class="fa-solid fa-calendar"></i> 26 de maio, 2025</time>
                        <span><i class="fa-solid fa-clock"></i> 20 minutos</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit optio...</p>
                </article>
            </section>
        </section>

        <?php
        include "components/aside.php";
        ?>

    </main>

    <section class="banner_servico1 wrapper_margin" aria-label="Banner promocional">
        <figure>
            <img src="./img/banner_servico1.png" alt="Banner com serviço 1">
        </figure>
    </section>

    <section class="carousel-wrapper wrapper_margin">
        <div class="carousel-fade left"></div> <!-- NOVO -->
        <div class="carousel-fade right"></div> <!-- Já existia -->
        <div class="carousel-container" id="carousel-container"></div>
    </section>

    <?php
    include "components/footer.php";
    ?>
    <script src="produtos.js"></script>
    <script src="nav.js"></script>

</body>

</html>