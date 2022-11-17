<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/Produtos.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/swiper.css" />
    <title>Document</title>
</head>

<body>
    <?php
    require_once('header.php');
    ?>

    <section style="height:82px;">
        <div class="swiper mySwiper" style="margin-top: 150px;">
            <div class="swiper-button-prev"></div>
            <div class="swiper-wrapper content meio">
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image" style="margin-left:50px;width:120px;height:120px;border:2px solid black;border-radius:10px">
                            <img src="../img/patinhaadocao.svg" alt="" style="width:100%;height:100%;">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image" style="margin-left:50px;width:120px;height:120px;border:2px solid black;border-radius:10px">
                            <img src="../img/patinhaadocao.svg" alt="" style="width:100%;height:100%;">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image" style="margin-left:50px;width:120px;height:120px;border:2px solid black;border-radius:10px">
                            <img src="../img/patinhaadocao.svg" alt="" style="width:100%;height:100%;">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image" style="margin-left:50px;width:120px;height:120px;border:2px solid black;border-radius:10px">
                            <img src="../img/patinhaadocao.svg" alt="" style="width:100%;height:100%;">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image" style="margin-left:50px;width:120px;height:120px;border:2px solid black;border-radius:10px">
                            <img src="../img/patinhaadocao.svg" alt="" style="width:100%;height:100%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
        </div>

        <!-- <div class="swiper-pagination" style="position:relative"></div> -->

        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 9,
                // spaceBetween: 30,
                slidesPerGroup: 9,
                loop: true,
                loopFillGroupWithBlank: true,
                // pagination: {
                //     el: ".swiper-pagination",
                //     clickable: true,
                // },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }

            })
        </script>
    </section>


    <section class="cards" style="margin-top:232px">
        <article>
            <img class="article-img" src="http://placekitten.com/305/205" alt=" " />
            <h1 class="article-title">
                Title of article
            </h1>
        </article>
        <article>
            <img class="article-img" src="http://placekitten.com/320/220" alt=" " />
            <h1 class="article-title">
                Title of article
            </h1>
        </article>
        <article>
            <img class="article-img" src="http://placekitten.com/330/240" alt=" " />
            <h1 class="article-title">
                Title of article
            </h1>
        </article>
        <article>
            <img class="article-img" src="http://placekitten.com/280/250" alt=" " />
            <h1 class="article-title">
                Title of article
            </h1>
        </article>
        <article>
            <img class="article-img" src="http://placekitten.com/310/210" alt=" " />
            <h1 class="article-title">
                Title of article
            </h1>
        </article>
        <article>
            <img class="article-img" src="http://placekitten.com/430/240" alt=" " />
            <h1 class="article-title">
                Title of article
            </h1>
        </article>
    </section>


    <?php
    require_once('footer.php')
    ?>
</body>

</html>